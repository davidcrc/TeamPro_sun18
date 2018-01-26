<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class hola extends Controller
{
    
    public function mostrar()
    {
        return "Hola desde el controlador";
    }
}