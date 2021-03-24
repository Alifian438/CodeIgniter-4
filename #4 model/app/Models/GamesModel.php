<?php

namespace App\Models;

use CodeIgniter\Model;

class GamesModel extends Model //nama classnya harus sesuai dengan nama filenya
{
    protected $table = 'gaems'; //nama table harus sesuai dengan yang ada di databasenya
    protected $useTimestamps = true; //ini untuk menambahkan fitur created_at dan updated_at secara otomatis

    public function getGames($slug = false) //method ini digunakan untuk ketika parameternya bernilai false maka tampilkan semua data yang berada di data base tapi jika ada slugnya hanya tampilin data sesuai dengan slugnya.
    {
        if ($slug == false) {
            return $this->findAll();
        } //gak perlu pakai else karena kalau return langsung keluar dari functionnya.

        return $this->where(['slug' => $slug])->first(); //ini code untuk menampilkan data sesuai dengan slugnya.
    }
}
