<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function homeDefault() {
        return view('home');
    }

    public function home()
    {
        $name = session('name', 'YOU');
        $lastname = session('lastname', '');
        return view('home', compact('name', 'lastname'));
    }

    public function form()
    {
        return view('form');
    }

    public function info()
    {
        return view('info');
    }


}
