<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index(){

        $trains = Train::where('data_viaggio', '=', '2022-05-26')->get();

        return view('home', compact('trains'));
    }
}
