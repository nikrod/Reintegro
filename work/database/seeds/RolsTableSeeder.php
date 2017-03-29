<?php

use Illuminate\Database\Seeder;
use App\rol;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      rol::create(array(
          'nombre'=> 'admin'
      ));

      rol::create(array(
          'nombre'=> 'usuario'
      ));
    }
}
