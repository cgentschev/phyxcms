<?php

namespace App\Http\Controllers;

class StaticController extends Controller
{

    public function index()
    {
      return view(theme('index'));
    }

}
