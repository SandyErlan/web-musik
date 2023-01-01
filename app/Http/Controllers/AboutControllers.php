<?php

namespace App\Http\Controllers;



class AboutControllers extends Controller
{
    function about () {
        return view('about');
    }

    function about1 () {
        return view('about1');
    }

    function about2 () {
        return view('about2');
    }

    function about_lengkap () {
        return view('about_lengkap');
    }

    function about_lagi () {
        return view('about_lagi');
    }

    function about_habis () {
        return view('about_habis');
    }

    function logiN () {
        return view('logiN');
    }
}
