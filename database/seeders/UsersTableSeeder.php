<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Test User',
                'email' => 'test@example.com',
                'email_verified_at' => '2024-04-30 10:20:10',
                'password' => '$2y$12$K2NGXQEjRdHSNqJIShLnMO.RA9UXdPzbNqjdgwNomA8b0xxb4c.a.',
                'remember_token' => 'pXpJuKKFZk',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@netseven.it',
                'email_verified_at' => NULL,
                'password' => '$2y$12$z3npLN15mkU70gx1ddnVzeiDmQQhL5v/1WhIJtqPB9hpaGHHqWVQm',
                'remember_token' => NULL,
            ),
        ));


    }
}
