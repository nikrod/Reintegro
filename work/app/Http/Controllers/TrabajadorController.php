<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    public function nombre($nombre)
    {
        return "hola ".$nombre;
    }//

    public function hola()
    {
        return "hola desde controlador hola";
    }


}
