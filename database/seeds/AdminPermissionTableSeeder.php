<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\PermissionRole;
use App\Permission;

class AdminPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleId=Role::where('role','admin')->pluck('id');

        $permissions = Permission::get(['id']);
        foreach ($permissions as $permission){
            PermissionRole::create(['permission_id'=>$permission->id,
            'role_id'=>$roleId[0]]);
        }
    }
}
