<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function index()
    {
        return view('pages/profil/index');
    }

    public function ukm()
    {
        return view('pages/profil/ukm');
    }

    public function himpunan()
    {
        return view('pages/profil/himpunan');
    }

}