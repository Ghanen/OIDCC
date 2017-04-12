<?php

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'slug' => 'admin',
            'name' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'slug' => 'systemUsers',
            'name' => 'SystemUsers',
        ]);
    }
}