<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function abaut(){
        return "Nim   : 2031710011 <br> Nama  : Ichsani Nikken Rahmawati";
    }

    public function articles($id){
        return "Halaman Artikel dengan ID ".$id;
    }
}
