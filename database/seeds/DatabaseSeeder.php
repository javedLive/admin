<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
         $this->call(RolesTableSeeder::class);
         $this->call(PermissionTableSeeder::class);
         $this->call(AdminPermissionTableSeeder::class);
         $this->call(ModeratorPermissionTableSeeder::class);
         $this->call(AdminUserDataSeeder::class);
    }
}
