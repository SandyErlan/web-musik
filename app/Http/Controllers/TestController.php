<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    function helooo ($nama, $gender, $nim) {
        echo view("hello")
        ->with("nama", $nama)
        ->with("dia", $gender)
        ->with("nim", $nim);
    }
}
