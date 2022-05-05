<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Train;
class TrainsLeaving extends Controller
{
    public function index() {
        $trains = Train::all();
        $data = [
            'trains' => $trains
        ];
        //dd($trains);
        return view('trains_leaving', $data);
    }
}
