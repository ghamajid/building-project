<?php

namespace App\Http\Controllers\roles;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class RolesManagement extends Controller
{
  /**
   * Redirect to user-management view.
   *
   */
  public function RoleManagement()
  {
    $permissions = Permission::all();
    return view('management.roles',['permissions'=> $permissions]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $columns = [
      1 => 'id',
      2 => 'name',
    ];

    $search = [];

    $totalData = Role::count();

    $totalFiltered = $totalData;

    $limit = $request->input('length');
    $start = $request->input('start');
    $order = $columns[$request->input('order.0.column')];
    $dir = $request->input('order.0.dir');

    if (empty($request->input('search.value'))) {
      $roles = Role::offset($start)
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();
    } else {
      $search = $request->input('search.value');

      $roles = Role::where('id', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->offset($start)
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();

      $totalFiltered = Role::where('id', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->count();
    }

    $data = [];

    if (!empty($roles)) {
      // providing a dummy id instead of database ids
      $ids = $start;

      foreach ($roles as $role) {
        $nestedData['id'] = $role->id;
        $nestedData['fake_id'] = ++$ids;
        $nestedData['name'] = $role->name;

        $data[] = $nestedData;
      }
    }
    return response()->json([
      'draw' => intval($request->input('draw')),
      'recordsTotal' => intval($totalData),
      'recordsFiltered' => intval($totalFiltered),
      'code' => 200,
      'data' => $data,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $roleID = $request->id;
    $roleName = Role::where('name', $request->name)->first();
    if (empty($roleName) || $roleID) {
      $role = Role::updateOrCreate(
        ['id' => $roleID],
        ['name' => $request->name, 'guard_name'=>config('auth.defaults.guard')]
      );

      //Remove permission assign to role
      $permissions=$role->permissions()->pluck('name')->toArray();
      if($permissions){
        foreach($permissions as $item){
          $role->revokePermissionTo($item);
        }
      }

      //Add permission assign to role
      $permissions = Permission::whereIn('id',$request->get('permissions'))->pluck('name');
      $role->syncPermissions($permissions);
    }else {
      // user already exist
      return response()->json(['message' => "already exits"], 422);
    }

    if($role)
      return response()->json(($roleID)?'Updated':'Created');
    else
      return response()->json(['message' => "server error"], 500);
  }

  /**
   * Display the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $where = ['id' => $id];

    $role = Role::where($where)->with('permissions')->first();
    return response()->json($role);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $roles=Role::find($id);
    if(!$roles->users->count()){
      $permissions=$roles->permissions()->pluck('name')->toArray();
      if(count($permissions) > 0){
        foreach($permissions as $item){
          $roles->revokePermissionTo($item);
        }
      }
      $roles->delete();
      return response()->json(['message' => "deleted"], 200);
    }else{
      return response()->json(['message' => "assign_user"], 500);
    }

   /* if($roles){

    }*/
  }
}
