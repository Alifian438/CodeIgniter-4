<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [                //variabel data untuk mendeklarasikan array, yang didalam array tersebut ada beberapa macam variabel 
            'title' => 'Home',  //variabel title berisi string Home yang akan ditampilkan di title pada header.php
            'home' => 'active', //variabel home berisi string active yang akan ditampilkan di class element home pada header.php
            'about' => ''       //variabel about berisi string kosong karena saat index dijalankan saya tidak ingin teks about yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel about.
        ];
        echo view("pages/header", $data); //baris ini berfungsi untuk menjalankan header pada folder pages, dan saya menambahkan variabel data karena variabel data digunakan pada header.
        echo view("pages/home"); //baris ini berfungsi untuk menjalankan home pada folder pages.
        echo view("pages/footer"); //baris ini berfungsi untuk menjalankan footer pada folder pages.
    }
    public function about()
    {
        $data = [ //variabel data untuk mendeklarasikan array, yang didalam array tersebut ada beberapa macam variabel
            'title' => 'about', //variabel title berisi string about yang akan ditampilkan di title pada header.
            'about' => 'active', //variabel about berisi string active yang akan ditampilkan di class element about pada header.php
            'home' => '' //variabel home berisi string kosong karena saat about dijalankan saya tidak ingin teks home yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel home.
        ];
        echo view("pages/header", $data); //baris ini berfungsi untuk menjalankan header pada folder pages, dan saya menambahkan variabel data karena variabel data digunakan pada header.
        echo view("pages/about"); //baris ini berfungsi untuk menjalankan home pada folder pages.
        echo view("pages/footer"); //baris ini berfungsi untuk menjalankan footer pada folder pages.
    }
}
