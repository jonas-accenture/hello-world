<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PageController extends Controller
{
    public function home()
    {
        $products = ["Apple", "Pear", "Orange"];
        return view('welcome', compact("products"));
    }
}
