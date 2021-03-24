<?php

namespace App\Controllers;

class Coba1 extends BaseController
{
    public function index()
    {
        echo "Ini controller coba";
    }
    public function nama($nama)
    {
        echo "Halo namaku $nama";
    }
    public function namaUmur($nama1 = '', $umur = 0) //di variabel yang berada di dalam function bisa dikasih nilai default yaitu dengan langsung mengasih nilai pada variabel tersebut
    {
        echo "Halo namaku $nama1 dan umur saya $umur";
    }
}
