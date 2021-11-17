<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoApi extends Controller
{
    public function getData()
    {
        return["name"=>"Heyy Buddy!"];
    }
}
