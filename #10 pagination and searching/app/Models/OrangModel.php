<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model //nama classnya harus sesuai dengan nama filenya
{
    protected $table = 'orang'; //nama table harus sesuai dengan yang ada di databasenya
    protected $useTimestamps = true; //ini untuk menambahkan fitur created_at dan updated_at secara otomatis
    protected $allowedFields = ['nama', 'alamat']; //ini untuk memberi ijin pada CI4 untuk menginsert data dari halaman create 

    public function search($keyword)
    {
        // $builder = $this->table->('orang');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('orang')->like('nama', $keyword)->orLike('alamat', $keywordp);
    }
}
