<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FormController;
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

        Route::post('/contact/store',[FormController::class,'contact_store'])->name('contact.store');
        Route::post('/newsletter/store',[FormController::class,'news_letter_store'])->name('newsletter.store');
Route::group(['middleware' => 'auth'],function (){
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

});
        