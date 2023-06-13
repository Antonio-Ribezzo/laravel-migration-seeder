<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;


class TrainController extends Controller
{
    public function getIndex(){
        $trains = Train::All();

        return view('pages.welcome', compact('trains'));
    }
}
