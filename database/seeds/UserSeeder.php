<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [ 'name' => 'leonardo', 'email' => 'leeosilva0909@gmail.com', 'password' => Hash::make('batata'), ],
            [ 'name' => 'aron', 'email' => 'aron@gmail.com', 'password' => Hash::make('batata'), ],
            [ 'name' => 'milena', 'email' => 'milena@gmail.com', 'password' => Hash::make('batata'), ],
            [ 'name' => 'marvin', 'email' => 'marvin@gmail.com', 'password' => Hash::make('batata'), ],
            [ 'name' => 'joao', 'email' => 'joao@gmail.com', 'password' => Hash::make('batata'), ]
        ];

        foreach($users as $user) {
            \App\Entities\User::create($user); 
        }
    }
}
