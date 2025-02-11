<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleController\StoreRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::where('name', '!=', 'admin')->get();
        return view('admin.role.index', compact('roles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        return view('admin.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, string $id)
    {
        $role = Role::findOrFail($id);
        if($role->permissions != null){
            $role->permissions()->update(['permissions' => $request->permissions]);
        }else{
            $role->permissions()->create(['permissions' => $request->permissions]);
        }
        return to_route('admin.role.index')->withSuccess('Роль обновлена');
    }
}
