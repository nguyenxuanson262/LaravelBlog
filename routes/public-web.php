<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index');
});

Route::get('/catagory', function () {
    return view('public.catagory');
});

Route::get('/single-blog', function () {
    return view('public.single-blog');
});

Route::get('/regular-page', function () {
    return view('public.regular-page');
});

Route::get('/contact', function () {
    return view('public.contact');
});
