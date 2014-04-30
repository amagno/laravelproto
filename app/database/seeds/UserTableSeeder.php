<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 29/04/2014
 * Time: 21:46
 */

class UserTableSeeder extends Seeder {


    public function run()
    {
        User::create(array(
            'nome' => 'Alexandre',
            'sobrenome' => 'Magno Monteiro',
            'email' => 'teste@teste.com',
            'nivelid' => 1,
            'status' => 1,
            'username' => 'alexandre.monteiro',
            'password' => Hash::make('123')

        ));
        User::create(array(
            'nome' => 'Other',
            'sobrenome' => 'Magno Monteiro',
            'email' => 'teste1@teste.com',
            'nivelid' => 1,
            'status' => 1,
            'username' => 'other.monteiro',
            'password' => Hash::make('123')

        ));
    }

}