<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return " NIM : 2041723010 </br> 
        Nama : aji ardiansyah";
    }
    public function articles($id)
    {
        return "Halaman Artikel ".$id;
    }
   
}
