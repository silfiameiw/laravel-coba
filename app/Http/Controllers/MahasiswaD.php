<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaD extends Controller
{
    public function index(){
        $a =3;
        $b = 7;
        $c = 7 + 2;
        return "<h3> Hasil Perkalian: ". (string)$c . "</h3>";
    }
    public function showBlog(){
        $nama = "Silfia";
        $alamat = "Mojokerto";
        $umur = 19;
        return view('blog', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);

    }
}

