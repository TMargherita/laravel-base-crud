<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'students' => ['Michele', 'Fabio'],
            'teachers' => ['Roberto', 'Fabio']
         ];
    
    return view("index", compact("data"));
    }
}
