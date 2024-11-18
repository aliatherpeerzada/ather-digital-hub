<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// front end routes
        Route::get('404', function(){
            return view('front_end.404');
        });
        Route::get('about', function(){
            return view('front_end.about');
        });
        Route::get('/', function(){
            return view('front_end.index');
        });
        Route::get('project', function(){
            return view('front_end.project');
        });
        Route::get('service', function(){
            return view('front_end.service');
        });
        Route::get('team', function(){
            return view('front_end.team');
        });
        Route::get('testimonial', function(){
            return view('front_end.testimonial');
        });