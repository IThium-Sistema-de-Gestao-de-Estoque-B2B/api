<?php

use Illuminate\Database\Seeder;

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
            [ 'name' => 'leonardo', 'email' => 'leeosilva0909@gmail.com', 'password' => 'batata', ],
            [ 'name' => 'aron', 'email' => 'aron@gmail.com', 'password' => 'batata', ],
            [ 'name' => 'milena', 'email' => 'milena@gmail.com', 'password' => 'batata', ],
            [ 'name' => 'marvin', 'email' => 'marvin@gmail.com', 'password' => 'batata', ],
            [ 'name' => 'joao', 'email' => 'joao@gmail.com', 'password' => 'batata', ]
        ];

        foreach($users as $user) {
            \App\User::create($user); 
        }
    }
}
