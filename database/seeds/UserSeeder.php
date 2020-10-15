<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_id = Role::where('slug', 'admin')->first()->id;
        $user_id = Role::where('slug', 'user')->first()->id; 

        $users = [
            [ 'name' => 'leonardo', 'email' => 'leeosilva0909@gmail.com', 'password' => Hash::make('batata'), 'role_id' => $admin_id,],
            [ 'name' => 'aron', 'email' => 'aron@gmail.com', 'password' => Hash::make('batata'), 'role_id' => $admin_id,],
            [ 'name' => 'milena', 'email' => 'milena@gmail.com', 'password' => Hash::make('batata'), 'role_id' => $admin_id,],
            [ 'name' => 'marvin', 'email' => 'marvin@gmail.com', 'password' => Hash::make('batata'), 'role_id' => $admin_id,],
            [ 'name' => 'joao', 'email' => 'joao@gmail.com', 'password' => Hash::make('batata'), 'role_id' => $admin_id,],
            [ 'name' => 'user', 'email' => 'user@gmail.com', 'password' => Hash::make('user'), 'role_id' => $user_id,],
        ];

        foreach($users as $user) {
            \App\Models\User::create($user); 
        }
    }
}
