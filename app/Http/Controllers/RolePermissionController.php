<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    // Display roles and permissions
    public function index()
    {
        $roles = Role::with('permission')->get();  // Load roles with permissions
        return view('roles.index', compact('roles'));
    }

    // Assign permission to a role
    public function assignPermission(Request $request, $roleId)
    {
        $role = Role::findOrFail($roleId);
        $role->permission()->create(['name' => $request->permission_name]);  // Assign permission to the role

        return redirect()->route('roles.index');
    }
}
