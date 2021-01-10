<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return[];
    }

    public function races(){
        return view('/menu/races');
    }

    public function classes(){
        return view('/menu/classes');
    }

    public function howToStart(){
        return view('/menu/howToStart');
    }

    public function lore(){
        return view('/menu/lore');
    }
}
