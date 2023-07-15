<?php

namespace App\Controllers;

class Faq extends BaseController
{
    public function index()
    {
        return view('pages/faq/index');
    }
}