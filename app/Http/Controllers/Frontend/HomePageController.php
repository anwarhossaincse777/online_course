<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homePage():Renderable
    {
        return view('index');
    }
}
