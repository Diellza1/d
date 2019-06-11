<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $test = request('test');
        $posts = [
            'Postimi 1',
            'Postimi 2',
            'Postimi 3',
            'Postimi 4'
        ];
        // return view('home',[
        // 	'posts'=>$posts,
        // 	'test'=>$test
        // ]);
    
        return view('home',compact('test','posts'));
    }

    public function contact(){
        return view('about');
    }

    public function about(){
        return view('contact');
    }
}
