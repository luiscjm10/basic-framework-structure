<?php

namespace App\Http\Controllers;

class HomeController 
{
    public function index()
    {
        //return new \App\Http\Response('home');

        return view('home');
    }
}