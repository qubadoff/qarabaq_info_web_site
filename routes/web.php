<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\GeneralController;

Route::get('/', function () { return redirect(app()->getLocale()); });

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('sitelocale')->group(function () {

    Route::get('/', [GeneralController::class, 'index'])->name('index');

    //Pages
    Route::get('/pages/{slug}', [GeneralController::class, 'page'])->name('page');

    //Category
    Route::get('/category/{slug}', [GeneralController::class, 'singleCat'])->name("singleCat");

    //Single Post
    Route::get('/post/{slug}', [GeneralController::class, 'singlePost'])->name('singlePost');

    //Subscribe
    Route::post('/subscribe', [GeneralController::class, 'subscribe'])->name("subscribe");
});
