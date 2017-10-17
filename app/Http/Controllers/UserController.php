<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\RoleUser;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    public function index()
    {
        if(Gate::allows('user_list'))
          {
            $users = User::all();
            return view('user.index',compact('users'));
          }
      return redirect('/');
    }

    public function create()
    {
        if(Gate::allows('create_user'))
        {
            return view('user.create');
        }
      return redirect('/');
    }

    public function store(Request $request)
    {
        if(Gate::allows('create_user'))
            {
            $user = new User();
            $user->name = $request->Input(['name']);
            $user->email = $request->Input(['email']);
            $user->password = bcrypt($request->Input(['password']));
            $user->save();
            $roleId=Role::where('role','moderator')->pluck('id');
            RoleUser::create(['role_id'=>$roleId[0],'user_id'=>$user->id]);
             return Redirect::to('users');
            }
      return redirect('/');
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
        if(Gate::allows('edit_delete'))
          {
            $user = User::find($id);
            $user->delete();
            return Redirect::to('users');
          }
      return redirect('/');
    }
}
