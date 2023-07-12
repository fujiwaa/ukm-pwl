<?php

namespace App\Controllers;

class Bso extends BaseController
{
    public function abbc()
    {
        return view('pages/bso/abbc');
    }
    
    public function onegai()
    {
        return view('pages/bso/onegai');
    }

    public function afc ()
    {
        return view('pages/bso/afc');
    }
}