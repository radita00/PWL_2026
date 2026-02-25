<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
    	return 'Hello World';
	}

    public function index() {
    	return 'Selamat Datang';
	}

    public function about() {
    	return 'Nama: Radita Yoga Anugrah <br> NIM: 244107020099';
	}

    public function artikel($artikelId){
        return "Halaman Artikel dengan ID " . $artikelId;
    }

    public function greeting(){
        return view('blog.hello')
            ->with('name','Andi')
            ->with('occupation','Astronaut');
    }
}
