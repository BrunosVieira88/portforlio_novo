<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        return view('oeste.index');
    }

    public function leste(){

        return view('leste.index');
    }
}
