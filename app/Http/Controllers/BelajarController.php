<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers;

class BelajarController extends Controller
{
    public function index()
    {
        return view('belajar');
    }
}