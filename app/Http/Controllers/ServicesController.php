<?php

namespace App\Http\Controllers;

use App\Solution;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function index(){
        $solutions = Solution::get();
        return view('layouts.services', compact('solutions'));
    }
}
