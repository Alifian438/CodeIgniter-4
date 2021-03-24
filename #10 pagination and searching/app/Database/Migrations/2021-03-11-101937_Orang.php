<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orang extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [             //ini untuk menambahkan kolom id pada tabel orang
				'type'           => 'INT', //ini untuk menidentifikasi kolom id yang bertype INT artinya integer
				'constraint'     => 11,	   //ini untuk mengatur panjang angka yang bisa dimasukkan
				'unsigned'       => true,  //unsigned itu artinya angka yang ditambahkan tidak boleh bernilai negatif
				'auto_increment' => true,  //auto increment ini artinya angka akan ditambahkna secara otomatis oleh sistem
			],
			'nama'       => [              //ini untuk menambahkan kolom nama pada tabel orang
				'type'       => 'VARCHAR', //ini untuk menidentifikasi kolom nama yang bertype varchar artinya string
				'constraint' => '255',     //ini untuk mengatur panjang string yang bisa dimasukkan
			],
			'alamat' => [                  //ini untuk menambahkan kolom alamat pada tabel orang
				'type' => 'VARCHAR',	   //ini untuk menidentifikasi kolom alamat yang bertype varchar artinya string
				'constraint' => '255',     //ini untuk mengatur panjang string yang bisa dimasukkan
			],
			'created_at' => [              //ini untuk menambahkan kolom created_at pada tabel orang
				'type' => 'DATETIME',      //ini untuk menidentifikasi kolom created_at yang bertype datetime artinya waktu
				'null' => true,            //null ini artinya kita boleh mengisi kosong data ini
			],
			'updated_at' => [              //ini untuk menambahkan kolom updated_at pada tabel orang
				'type' => 'DATETIME',      //ini untuk menidentifikasi kolom created_at yang bertype datetime artinya waktu
				'null' => true,            //null ini artinya kita boleh mengisi kosong data ini
			]
		]);
		$this->forge->addKey('id', true); //ini untuk mengidentifikasi kolom mana yang akan diatur auto increment atau primary key
		$this->forge->createTable('orang'); //ini untuk membuat nama tablenya
	}

	public function down()
	{
		$this->forge->dropTable('orang'); //dan ini kalau tablenya di drop namanya samain aja seperti table diatas
	}
}
