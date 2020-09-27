<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    //
    public function index(){

         $page = Page::get();
        return  view('layouts.about', compact('page'));
    }
}
