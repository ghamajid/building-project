<?php

namespace App\Http\Controllers\permissions;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class PermissionsManagement extends Controller
{
  /**
   * Redirect to user-management view.
   *
   */
  public function PermissionManagement()
  {
    return view('management.permissions');
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

    $totalData = Permission::count();

    $totalFiltered = $totalData;

    $limit = $request->input('length');
    $start = $request->input('start');
    $order = $columns[$request->input('order.0.column')];
    $dir = $request->input('order.0.dir');

    if (empty($request->input('search.value'))) {
      $permissions = Permission::offset($start)
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();
    } else {
      $search = $request->input('search.value');

      $permissions = Permission::where('id', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->offset($start)
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();

      $totalFiltered = Permission::where('id', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->count();
    }

    $data = [];

    if (!empty($permissions)) {
      // providing a dummy id instead of database ids
      $ids = $start;

      foreach ($permissions as $permission) {
        $nestedData['id'] = $permission->id;
        $nestedData['fake_id'] = ++$ids;
        $nestedData['name'] = $permission->name;

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
    $permissionID = $request->id;
    $permissionName = Permission::where('name', $request->name)->first();
    if (empty($permissionName) || $permissionID) {
      $permissions = Permission::updateOrCreate(
        ['id' => $permissionID],
        ['name' => $request->name, 'guard_name'=>config('auth.defaults.guard')]
      );
    }else {
      // user already exist
      return response()->json(['message' => "already exits"], 422);
    }

    if($permissions)
      return response()->json(($permissionID)?'Updated':'Created');
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

    $permissions = Permission::where($where)->first();

    return response()->json($permissions);
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
    $permission = Permission::with('roles')->where('id', $id)->first();
    if(!$permission->roles->count()){
      $permissions = Permission::where('id', $id)->delete();
      if($permissions)
        return response()->json(['message' => "deleted"], 200);
    }else{
      return response()->json(['message' => "assign_role"], 500);
    }
  }
}
