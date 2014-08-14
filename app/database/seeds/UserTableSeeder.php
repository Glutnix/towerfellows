<?php

class UserTableSeeder extends DatabaseSeeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->truncate();

        User::create([
            'username'  => 'alice',
            'password'  => Hash::make('alice'),
            'email'     => 'alice@example.com',
        ]);
        User::create([
            'username'  => 'bob',
            'password'  => Hash::make('bob'),
            'email'     => 'bob@example.com',
        ]);
        User::create([
            'username'  => 'charles',
            'password'  => Hash::make('charles'),
            'email'     => 'charles@example.com',
        ]);
        User::create([
            'username'  => 'david',
            'password'  => Hash::make('david'),
            'email'     => 'david@example.com',
        ]);
    }

}
