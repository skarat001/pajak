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
          DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Admin Website',
            'description' => 'Manage user',
        ],[
            'name' => 'member',
            'display_name' => 'IKPI Member',
            'description' => 'Use website',
        ]);
    }
}
