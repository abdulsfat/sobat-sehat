<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     // untuk memanggil atau menampilkan halaman dashboard admin

     public function admin()
     {
         return view('admin.index');
     }
 
     // untuk memanggil atau menampilkan halaman info (tata cara)
     public function kegiatan()
     {
         return view('admin.kegiatan');
     }
 
     // untuk memanggil atau menampilkan halaman kontributor
     public function kontributor()
     {
         return view('admin.kontributor');
     }
 
     // untuk memanggil atau menampilkan halaman berita
     public function berita()
     {
         return view('admin.berita');
     }
}
