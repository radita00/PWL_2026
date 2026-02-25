<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
   return 'Hello World';
});

Route::get('/world', function () {
   return 'World';
});

Route::get('/selamat', function () {
   return 'Selamat Datang';
});

Route::get('/about', function () {
   return 'Nama: Radita Yoga Anugrah <br> NIM: 244107020099';
});

// Route::get('/user/{name}', function ($name) {
//    return 'Nama saya ' .$name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
   return 'Pos ke-' .$postId. ' Komentar ke-' .$commentId;
});

Route::get('/artikel/{artikel}', function ($artikelId) {
   return 'Halaman Artikel dengan ID ' .$artikelId;
});

Route::get('/user/{name?}', function ($name=null) {
   return 'Nama saya: ' .$name;
});

