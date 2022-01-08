<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/goods', function () {
    return view('goods');
});

Route::get('/page-product', function () {
    return view('page-product');
});




