<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainsLeaving extends Controller
{
    public function index() {
        return view('trains_leaving');
    }
}
