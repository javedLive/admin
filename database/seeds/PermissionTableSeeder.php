<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=
            [   ['Create School','create_school'],
                ['Edit School','edit_school'],
                ['Product School','list_school'],
                ['Create Restaurant','create_restaurant'],
                ['Edit Restaurant','edit_restaurant'],
                ['Restaurant List','list_restaurant'],
                ['Food Create','create_food'],
                ['Food Edit','edit_food'],
                ['Food List','list_food'],
                ['Create User','create_user'],
                ['Delete User','edit_delete'],
                ['User List','user_list'],
                ['Permission List','permission_list'],
                ['Role List','role_list'],
                ['Assign Permission', 'assign_permission'],
                ['Assign Role','assign_role'],
                ['Administrator','administrator']
            ];
          

        for($i=0;$i<sizeof($permissions);$i++)
        {
            Permission::create([
                'name'=>$permissions[$i][1],
                'label'=>$permissions[$i][0]
            ]);
        }
    }
    
}
