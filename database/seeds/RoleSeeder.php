<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);
        $role = Role::create(['name' => 'Enseignant']);
        $role = Role::create(['name' => 'eleve']);
        $role = Role::create(['name' => 'Delegue']);
        $role = Role::create(['name' => 'Membre_du_club']);
    }
}
