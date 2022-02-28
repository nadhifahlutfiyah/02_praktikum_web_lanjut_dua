<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    public function index () {
        echo "Selamat Datang";
    }

    public function about () {
        echo "Nadhifah Lutfiyah Mahmudah <br>";
        echo "2041720082";
    }

    public function articles ($id = '1') {
        echo "Halaman Artikel dengan id ".$id;
    }
}

