<?php

namespace App\Controllers;

class News extends BaseController
{
    public function index()
    {
        return view('pages/news/index');
    }

}