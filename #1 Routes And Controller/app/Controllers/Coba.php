<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Ini controller coba";
    }
    public function nama($nama) //dengan memasukan variabel di function maka variabel tersebut bisa digunakan di fumction tersebut
    {
        echo "Halo namaku $nama";
    }
}
