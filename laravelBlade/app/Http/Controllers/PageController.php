<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
                'title' => 'Clean Blog',
                'url' => 'images/home-bg.jpg'
            ]
        );
    }

    public function about()
    {
        return view('about', [
            'url' => 'images/about-bg.jpg',
            'title' => 'About Me'
        ]);
    }

    public function post()
    {
        return view('post', [

            'url' => 'images/post-bg.jpg',
            'title' => "Man must explore, and this is exploration at it's greatest"
        ]);
    }

    public function contact()
    {
        return view('contact', [

            'url' => 'images/contact-bg.jpg',
            'title' => "Contact Me"
        ]);
    }
}
