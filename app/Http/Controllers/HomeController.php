<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class HomeController extends Controller
{
    public function index() {  
        
        $holidays = Holiday::all();

        $data = [
            'holidays' =>  $holidays
        ];
        
        return view('home', $data);
    }
}
