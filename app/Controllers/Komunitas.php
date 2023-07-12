<?php

namespace App\Controllers;

class Komunitas extends BaseController
{
    public function avc()
    {
        return view('pages/komunitas/avc');
    }
    
    public function asbc()
    {
        return view('pages/komunitas/asbc');
    }

    public function avbc()
    {
        return view('pages/komunitas/avbc');
    }
    
    public function hexa()
    {
        return view('pages/komunitas/hexa');
    }
    
    public function pramuka()
    {
        return view('pages/komunitas/pramuka');
    }
}