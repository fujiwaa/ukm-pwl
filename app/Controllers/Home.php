<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome');
    }
    public function home()
    {
        return view('pages/home');
    }
    public function logout()
    {
        session()->remove('id');
        return redirect()->to('/');
    }
}