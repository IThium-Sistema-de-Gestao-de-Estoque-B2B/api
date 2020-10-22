<?php

namespace Database\Seeders;

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
        $roles = [
            ['slug' => 'admin', 'name' => 'Administrador'],
            ['slug' => 'user', 'name' => 'Usuário'],
        ];

        foreach($roles as $role) {
            \App\Models\Role::create($role); 
        }
    }
}
