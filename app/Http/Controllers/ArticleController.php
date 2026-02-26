<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function artikel($artikelId){
        return "Halaman Artikel dengan ID " . $artikelId;
    }
}
