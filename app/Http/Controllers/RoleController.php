<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
class RoleController extends Controller
{

    public function index()
    {
        if(Gate::allows('role_list'))
            {
                $roles = Role::all();
                return view('role.index',compact('roles'));
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

    public function assignRole()
    {
        if(Gate::allows('assign_role'))
        {       
        $roles = Role::all();
        $users = User::all();
        return view('role.assign_role',compact('users','roles'));
      }
        return redirect('/');   
    }

    public function assignedRole(Request $request)
    {   
        if(Gate::allows('assign_role'))
        {               
        $user = User::find($request->Input(['user_id']));
        $user->roles()->detach();
        $user->roles()->attach($request->Input(['role_id']));
        return Redirect::to('assign-role');

        }
        return redirect('/');
    }
}
