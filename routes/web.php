<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
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
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

