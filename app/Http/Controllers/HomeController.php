<?php

namespace App\Http\Controllers;

use App\Section;
use App\Service;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use function HighlightUtilities\splitCodeIntoArray;


class HomeController extends Controller
{
    //

    public function index(){
        try {
            $offers = Service::get();
            $posts  =Post::get();
            $sections =  Section::get();
            $sectionPost = Post::pluck('title');

            return view('layouts.home', compact('posts', 'offers','sections', 'sectionPost'));
        }catch (\Exception $ex){
            return $ex;
        }
    }

    public function blogPost($id){
        try {
            $post =Post::find($id);
            return view('layouts.blogPost', compact('post'));
        }catch(\Exception$ex){
            return $ex;
        }

    }







}
