<?php

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create([
            'role_name'=>'usual_user'
        ]);
        Roles::create([
            'role_name'=>'admin_site'
        ]);
    }
}
