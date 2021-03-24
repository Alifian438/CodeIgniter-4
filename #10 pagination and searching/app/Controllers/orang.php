<?php

namespace App\Controllers;

use App\Models\OrangModel; //untuk menyambungkan dengan file Orangmodel
use Error;

class Orang extends BaseController //jangan lupa kalau membuat controller baru kita harus mengubah nama classnya sesuai dengan file yang kita buat
{
    protected $orangModel; //ini adalah properti supaaya $orangModel bisa di pakai di kelas ini dan turunannya.
    public function __construct() //construct ini berguna untuk apapun classnya yang berada di dalam construct bisa digunakan di semua method yang berada di file ini.Kalau ini bisa digunakan di controller manapun bisa menambahkan nya di basecontroller.
    {
        $this->orangModel = new OrangModel(); //ini digunakan untuk mengambil semua data yang berada di OrangModel dan jangan lupa harus pakai $this-> karena kita memanggil di turunannya.
    }
    public function index()
    {
        $current_page = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang_search = $this->orangModel->search($keyword);
        } else {
            $orang_search = $this->orangModel;
        }
        $data = [
            'title' => 'Daftar Orang',  //variabel title berisi string Games yang akan ditampilkan di title pada header.php
            'home' => '',
            'about' => '',
            'contact' => '',
            'games' => '',
            'orang' => 'active', //variabel games berisi string active yang akan ditampilkan di class element home pada header.php
            'orang1' => $orang_search->paginate(3, 'orang'), //ini berfungsi untuk memanggil data yang berada didalam constructor
            'pager' => $this->orangModel->pager,
            'currentPage' => $current_page
        ];



        return view('orang/index', $data); //untuk menampilkan view pada url ganes/index
    }
}
