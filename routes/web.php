<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/o-colegio', function () {
    return Inertia::render('CollegeStory');
})->name('story');

Route::get('/blog-demo', function () {
    return Inertia::render('BlogDemo');
})->name('blog.demo');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
