<?php

namespace App\Controllers;

use App\Models\GamesModel; //untuk menyambungkan dengan file gamemodel

class Games extends BaseController //jangan lupa kalau membuat controller baru kita harus mengubah nama classnya sesuai dengan file yang kita buat
{
    protected $gamesModel; //ini adalah properti supaaya $gamesModel bisa di pakai di kelas ini dan turunannya.
    public function __construct() //construct ini berguna untuk apapun classnya yang berada di dalam construct bisa digunakan di semua method yang berada di file ini.Kalau ini bisa digunakan di controller manapun bisa menambahkan nya di basecontroller.
    {
        $this->gamesModel = new GamesModel(); //ini digunakan untuk mengambil semua data yang berada di GamesModel dan jangan lupa harus pakai $this-> karena kita memanggil di turunannya.
    }
    public function index()
    {
        // $games = $this->gamesModel->findAll(); //ini digunakan untuk mengambil semua data yang berada di database kita
        $data = [
            'title' => 'Games',  //variabel title berisi string Games yang akan ditampilkan di title pada header.php
            'home' => '', //variabel home berisi string kosong karena saat games dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel home.
            'about' => '', //variabel about berisi string kosong karena saat games dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel about.
            'contact' => '', //variabel contact berisi string kosong karena saat games dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel contact.
            'games' => 'active', //variabel games berisi string active yang akan ditampilkan di class element home pada header.php
            'games1' => $this->gamesModel->getGames() //ini berfungsi untuk memanggil data yang berada didalam constructor
        ];



        return view('games/index', $data); //untuk menampilkan view pada url ganes/index
    }

    public function detail($slug) //method detail dengan menerima parameter $slug
    {
        $data = [
            'title' => 'Games',  //variabel title berisi string Games yang akan ditampilkan di title pada header.php
            'home' => '', //variabel home berisi string kosong karena saat games dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel home.
            'about' => '',  //variabel about berisi string kosong karena saat games dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel about.
            'contact' => '', //variabel contact berisi string kosong karena saat games dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel contact.
            'games' => 'active', //variabel games berisi string active yang akan ditampilkan di class element home pada header.php
            'games1' => $this->gamesModel->getGames($slug) //ini untuk memanggil method yang berada di gamesModel.dan ini harus pakai parameter $slug karena agar method yang berada di gamesModel mempunyai parameter $slug atau bernilai true.
        ];

        return view('games/detail', $data); //untuk menampilkan view pada url games/detail.
    }
}
