<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{

    public function index()
    {
        // $trainList = Train::all();
        // dd($trainList);
        $trainList = Train::where('departure_date', '>=', date('Y/m/d'))->get();
        // dd(date('Y/m/d'));
        return view('home', compact('trainList'));
    }
}
