<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $roles=[['Admin','admin'],['User','user'],['Moderator','moderator']];
        for($i=0;$i<sizeof($roles);$i++)
        {
            Role::create([
                'role'=>$roles[$i][1],
                'label'=>$roles[$i][0]
            ]);
        }
    }
}
