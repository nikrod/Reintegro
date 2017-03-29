<?php

use Illuminate\Database\Seeder;
use App\User;
//use Illuminate\Support\Facades\DB;


class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'name'  => 'admin',
            'email'     => 'admin@admin.com',
            'rols_id'=> '1',
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}
