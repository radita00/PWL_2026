<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', [WelcomeController::class, 'greeting']);

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
   return 'World';
});

Route::get('/', [WelcomeController::class,'index']);

Route::get('/about', [WelcomeController::class,'about']);

Route::get('/artikel/{artikel}', [WelcomeController::class,'artikel']);

// Route::get('/user/{name}', function ($name) {
//    return 'Nama saya ' .$name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
   return 'Pos ke-' .$postId. ' Komentar ke-' .$commentId;
});

Route::get('/user/{name?}', function ($name=null) {
   return 'Nama saya: ' .$name;
});

