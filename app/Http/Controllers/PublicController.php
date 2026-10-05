<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class PublicController extends Controller
{
function homepage(){
return view('welcome');
}
function chi_siamo(){
return view('chi-siamo');
}
function profilo(){
return view('profilo');
}
function registrati(){
return view('register');
}
function login(){
return view('login');
}
}
