<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;

class PublicController extends Controller
{
    function homepage(){
        return view('welcome');
    }
        function chi_siamo(){
        return view('chi-siamo');
    }
        function registrati(){
        return view('registrati');
    }
        function login(){
        return view('login');
    }
}
