<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [                //variabel data untuk mendeklarasikan array, yang didalam array tersebut ada beberapa macam variabel 
            'title' => 'Home',  //variabel title berisi string Home yang akan ditampilkan di title pada header.php
            'home' => 'active', //variabel home berisi string active yang akan ditampilkan di class element home pada header.php
            'about' => '',       //variabel about berisi string kosong karena saat home dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel about.
            'contact' => '', //variabel contact berisi string kosong karena saat home dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel contact.
            'games' => '' //variabel games berisi string kosong karena saat home dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel games.
        ];
        // echo view("pages/header", $data); //baris ini berfungsi untuk menjalankan header pada folder pages, dan saya menambahkan variabel data karena variabel data digunakan pada header.
        return view("pages/home", $data); //baris ini berfungsi untuk menjalankan home pada folder pages.
        // echo view("pages/footer"); //baris ini berfungsi untuk menjalankan footer pada folder pages.
    }
    public function about()
    {
        $data = [ //variabel data untuk mendeklarasikan array, yang didalam array tersebut ada beberapa macam variabel
            'title' => 'about', //variabel title berisi string about yang akan ditampilkan di title pada header.
            'about' => 'active', //variabel about berisi string active yang akan ditampilkan di class element about pada header.php
            'home' => '', //variabel home berisi string kosong karena saat about dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel home.
            'contact' => '', //variabel contact berisi string kosong karena saat about dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel contact.
            'games' => '' //variabel games berisi string kosong karena saat about dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel games.
        ];
        //echo view("pages/header", $data); //baris ini berfungsi untuk menjalankan header pada folder pages, dan saya menambahkan variabel data karena variabel data digunakan pada header.
        return view("pages/about", $data); //baris ini berfungsi untuk menjalankan home pada folder pages.
        //echo view("pages/footer"); //baris ini berfungsi untuk menjalankan footer pada folder pages.
    }
    public function contact()
    {
        $data = [ //variabel data untuk mendeklarasikan array, yang didalam array tersebut ada beberapa macam variabel
            'title' => 'Contact', //variabel title berisi string about yang akan ditampilkan di title pada header.
            'about' => '', //variabel about berisi string kosong karena saat contact dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel about.
            'home' => '', //variabel home berisi string kosong karena saat contact dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel home.
            'contact' => 'active', //variabel contact berisi string active yang akan ditampilkan di class element about pada template.php
            'games' => '', //variabel games berisi string kosong karena saat contact dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel games.
            'alamat' => [ //variabel alamat berisi array yang akan ditampilkan di contact.php
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'JL.Veteran No.12344',
                    'kota' => 'Nganjuk'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'JL.Diponegoro No.666',
                    'kota' => 'Nganjuk'
                ]
            ]
        ];
        //echo view("pages/header", $data); //baris ini berfungsi untuk menjalankan header pada folder pages, dan saya menambahkan variabel data karena variabel data digunakan pada header.
        return view("pages/contact", $data); //baris ini berfungsi untuk menjalankan contact pada folder pages.
        //echo view("pages/footer"); //baris ini berfungsi untuk menjalankan footer pada folder pages.
    }
}
