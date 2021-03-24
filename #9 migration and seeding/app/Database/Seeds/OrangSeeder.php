<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class OrangSeeder extends Seeder //nama class harus sama dengan nama file
{
    public function run()
    {
        $data = [ //variabel ini berisi array yang didalamnya adalah data" yang akan kita insert ke table yang kita buat tadi menggunakan migration
            [
                'nama'          => 'Alifian',  //ini untuk mengisi kolom nama  
                'alamat'        => 'Jl.asiufhnuas', //ini untuk mengisi kolom alamat
                'created_at'    => Time::now(), //dan ini untuk mengisi kolom created_at yang nanti berisi waktu ketika ketika kita menambahakn data
                'updated_at'    => Time::now() //dan ini untuk mengisi kolom updated_at yang nanti berisi waktu ketika ketika kita menambahakn data
            ], //begitu pun array dibawahnya
            [
                'nama'          => 'kilua',
                'alamat'        => 'Jl.asiasdufhnuas',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Gon',
                'alamat'        => 'Jl.asiufdfsghnuas',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data); //simple quaries ini digunakan untuk menginsert data kita itu secara manual

        // Using Query Builder
        $this->db->table('orang')->insertBatch($data); //kalau kita memakai code ini kita bisa langsung menginsert data secara bersamaan
    }
}
