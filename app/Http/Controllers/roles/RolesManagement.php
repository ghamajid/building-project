<?php

namespace App\Http\Controllers\roles;

use App\Http\Controllers\Controller;
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
    return view('management.roles');
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
    if (empty($roleName)) {
      $roles = Role::updateOrCreate(
        ['id' => $roleID],
        ['name' => $request->name, 'guard_name'=>config('auth.defaults.guard')]
      );
    }else {
      // user already exist
      return response()->json(['message' => "already exits"], 422);
    }

    if($roles)
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

    $roles = Role::where($where)->first();

    return response()->json($roles);
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
    $roles = Role::where('id', $id)->delete();
  }
}
