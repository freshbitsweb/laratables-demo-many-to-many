<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = new App\Role();
        $roles->name = 'Admin';
        $roles->save();

        $roles = new App\Role();
        $roles->name = 'Viewer';
        $roles->save();
    }
}
