<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return view('disc');
        $dAmount = $_REQUEST['b'] * $_REQUEST['c'] * 0.1;
        return $dAmount;
    }
}
