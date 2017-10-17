<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\PermissionRole;
//use App\Permission;

class ModeratorPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleId=Role::where('role','moderator')->pluck('id');
        $permissions = DB::table('permissions')
         				->whereIn('name', ['create_food', 
                            'edit_food', 
                            'list_food',
                            'administrator'])
        				->get(['id']);
        

           foreach ($permissions as $permission){
            PermissionRole::create(['permission_id'=>$permission->id,
            'role_id'=>$roleId[0]]);
        }

    }
}
