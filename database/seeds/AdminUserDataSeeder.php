<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\PermissionRole;
use App\RoleUser;
use App\Permission;

class AdminUserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();
        $user->name='admin';
        $user->email='admin@lunchBox.com';
        $user->password=Hash::make('admin123');
        $user->save();
        $roleId=Role::where('role','admin')->pluck('id');
        RoleUser::create(['role_id'=>$roleId[0],'user_id'=>$user->id]);     
    }
}
