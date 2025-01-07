<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function about(): string
    {
        return view('about');
    }
    public function petunjuk(): string
    {
        return view('petunjuk');
    }
    public function login(): string
    {
        return view('login');
    }
    public function daftar(): string
    {
        return view('daftar');
    }
    public function dashboard(): string
    {
        return view('dashboard');
    }
    public function gejala(): string
    {
        return view('gejala');
    }
    public function jenis(): string
    {
        return view('jenis');
    }
    public function coba(): string
    {
        return view('coba');
    }
}
