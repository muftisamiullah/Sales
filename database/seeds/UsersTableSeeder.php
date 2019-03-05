<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstName' => 'user',
            'lastName'=>'user',
            'email'=>'user@user.com',
            'password' => '$2y$10$T/NMajaLoZp.IKRzgYNKbujjZkjvJG5FMRufGLPmz/kFtGKOT.d1C',
            'isAdmin'=>0,
        ]);
        DB::table('users')->insert([
            'firstName' => 'user1',
            'lastName'=>'user1',
            'email'=>'user1@user.com',
            'password' => '$2y$10$R8ZvHZUSlLtkoUAtOyqCheVXINUUnT8kDvA0czwYK4DkN4/vDnLbe',
            'isAdmin'=>0,
        ]);
        DB::table('users')->insert([
            'firstName' => 'sami',
            'lastName'=>'user',
            'email'=>'admin@admin.com',
            'password' => '$2y$10$T/NMajaLoZp.IKRzgYNKbujjZkjvJG5FMRufGLPmz/kFtGKOT.d1C',
            'isAdmin'=>1,
        ]);
    }
}