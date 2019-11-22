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
        $role_user = new App\Role();
        $role_user->name = 'Admin';
        $role_user->save();

        $role_user = new App\Role();
        $role_user->name = 'Viewer';
        $role_user->save();

    }
}
