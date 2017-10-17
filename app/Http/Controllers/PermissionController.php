<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Permission;
use App\Role;
use App\RoleUser;
use App\PermissionRole;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Gate::allows('permission_list'))
          {
            $permissions = Permission::all();
            return view('permission.index',compact('permissions'));
           }
        return redirect('/');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function assignPermission()
    {
      if(Gate::allows('assign_permission'))
        {   
        $roles = Role::all();
        $permissions = Permission::all();
        return view('permission.assign_permission',compact('roles','permissions'));
        }
        return redirect('/');
    }

    public function assignedPermission(Request $request)
    {  
        if(Gate::allows('assign_permission'))
        {
        $role = Role::find($request->Input(['role_id']));
        $role->permissions()->detach();
        $role->permissions()->attach($request->Input(['permission_id']));            
        return Redirect::to('assign-permission');   
        }
        return redirect('/');
    }

/*  public function roleWithUser()
    {
        if(Gate::allows('role_list')){
        $users = User::with('roles')->get();        
        $roles = Role::all();
        return view("permission.role_user",compact('users','roles'));
        }

        return redirect('/');
        
    }   

    public function rolewithPermission()
    {
        if(Gate::allows('permission_list')){   
        $roles = Role::with('permissions')->get();
        $permission = Permission::all();
        return view("Permission::role_permission",compact('roles','permission'));
       }
        return redirect('/');
    }       */

}
