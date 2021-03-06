<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\seeds\RolsTableSeeder;
use Illuminate\Database\seeds\UsersTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RolTableSeeder::class);
         $this->call(UserTableSeeder::class);
    }
}
