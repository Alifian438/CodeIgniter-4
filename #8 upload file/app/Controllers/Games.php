<?php

namespace App\Controllers;

use App\Models\GamesModel; //untuk menyambungkan dengan file gamemodel
use Error;

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

        if (empty($data['games1'])) { //ini berfungsi untuk jika data komik tidak ada akan menampilkan halaman 404 yang sudah disediakan oleh CI4
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul game ' . $slug . ' tidak ditemukan'); //dan ini codenya untuk menampilkan halaman 404 dari CI4 dan kita juga bisa menaruh pesan disana.
        }

        return view('games/detail', $data); //untuk menampilkan view pada url games/detail.
    }

    public function create()
    {
        $data = [
            'title' => 'Games',  //variabel title berisi string Games yang akan ditampilkan di title pada header.php
            'home' => '', //variabel home berisi string kosong karena saat games dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel home.
            'about' => '', //variabel about berisi string kosong karena saat games dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel about.
            'contact' => '', //variabel contact berisi string kosong karena saat games dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel contact.
            'games' => 'active', //variabel games berisi string active yang akan ditampilkan di class element home pada header.php
            'validation' => \Config\Services::validation() //mengambil session validation pada method save.

        ];

        return view('games/create', $data); //untuk menampilkan view pada url games/create.
    }

    public function save()
    {

        //validation input
        if (!$this->validate([ //artinya jika tidak tervalidasi makan tampilkan return yang berada di dalam if, dan ketentuan validasi datanya berada didalam array validate.
            // 'judul' => 'required|is_unique[gaems.judul]' //ini cara yang lebih simple //validasi terhadao judul, required artinya data harus di isi, is_unique artinya data yang ditambahkan tidak boleh sama dengan data yang sudah ada, dan didalam arraynya itu artinya nama database.nama table.
            'judul' => [ //ini cara kedua kalau ingin tulisan errornya bisa kita ubah dengan kata kata kita sendiri
                'rules' => 'required|is_unique[gaems.judul]', //ini rules yang digunakan validasi pada judul
                'errors' => [ //dan ini untuk menampilkan errornya
                    'required' => '{field} games harus diisi.', //ini untuk menampilkan error pada validasi required, field itu artinya buat ngambil name dari judul.
                    'is_unique' => '{field} games sudah terdaftar.', //ini untuk menampilkan error pada validasi is_unique, field itu artinya buat ngambil name dari judul.
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    // 'uploaded' => '{field} harus diisi', //ini artinya gambar wajib di isi
                    'max_size' => 'file tidak boleh lebih dari 1mb', //ini artinya kita tidak bisa mengupload file gambar melebih i 1mb
                    'is_image' => 'yang anda masukkan bukan gambar', //ini digunakan untuk mendekteksi bahwa file itu berjenis gambar atau bukan
                    'mime_in' => '{field} harus jpg, jpeg atau png' //ini untuk mendeteksi file harus jpg, jpeg atau png
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation(); //untuk menampilkan pesan kesalahn, pesan kesalahn ini sudah disediakan oleh CI4.
            // return redirect()->to('/games/create')->withInput()->with('validation', '$validation'); //jika kondisi benar maka akan dikembalikan ke halaman create.Dan kita juga membuat session untuk menambil semua inputan dan validation dari variabel validation, yang akan ditampilkan pada method create.
            return redirect()->to('/games/create')->withInput(); //with input sudah mewakili code diatas termasuk validation juga
        }

        //ambil gambar

        $fileGambar = $this->request->getFile('sampul'); //ini digunakan untuk mengambil file atau gambar yang kita upload

        //jika tidak ada gambar yang diupload maka tampilkan gambar default
        if ($fileGambar->getError() == 4) { //arti dari code ini adalah jika $fileGambar mempunyai error 4 atau tidak dimasukan gambar maka tampilkan true
            $namaSampul = 'default.png'; //jika nilai bernilai true maka $namaSampul akan berisi default.png(default.png ini harus di isi dulu di folder image sebagai gambar default)
        } else { //jika nilai bernilai false maka jalankan code dibawah

            //generate nama random sampul
            $namaSampul = $fileGambar->getRandomName(); //ini digunakan untuk merandom nama gambar yang dipindahkan ke folder image
            //pindahkan file ke folder image

            $fileGambar->move('image', $namaSampul); //ini digunakan untuk memindahkan file gambar yang diupload ke folder image

            //ambil nama file sampul

            // $namaSampul = $fileGambar->getName(); //ini digunakan jika kalian ingin nama file yang diupload sama dengan nama gambar kalian
        }



        $slug = url_title($this->request->getVar('judul'), '-', true); //membuat variabel slug yang berisi untuk mengubah judul yang di insert menjadi huruf kecil semua dan spacinya diganti dengan tanda min (-).dan menangkap data tersebut atau save.
        $this->gamesModel->save([ //ini berfungsi untuk menangkap data yang sudah kita insert dari halaman create dan ini menggunakan model
            'judul' => $this->request->getVar('judul'), //untuk menangkap data judul yang kita insert.
            'slug' => $slug, //untuk menangkap slug.
            'penulis' => $this->request->getVar('penulis'), //untuk menangkap data penulis yang kita insert.
            'penerbit' => $this->request->getVar('penerbit'), //untuk menangkap data penerbit yang kita insert.
            'sampul' => $namaSampul //untuk menangkap data sampul yang kita insert.
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.'); //ini berfungsi untuk memberika notifikasi atau alert jika data berhasil ditambahkan.

        return redirect()->to('/games'); //dan jika data yang telah di insert dari create telah ditangkap semua maka langsung dikembalikan ke halaman games.
    }

    public function delete($id) //method delete dengan parameter id
    {
        //cari gambar berdasasrkan id
        $games = $this->gamesModel->find($id);

        //cek jika filegambarnya default
        if ($games['sampul'] != 'default.png') { //jika sampul tidak sama dengan default maka jalankan code dibawah
            //hapus gambar
            unlink('image/' . $games['sampul']);
        }



        //ini code untuk menghapus file

        $this->gamesModel->delete($id); //ini code untuk menghapus sebuah file dengan menggunakan parameter id

        session()->setFlashdata('pesan', 'Data berhasil dihapus.'); //ini berfungsi untuk memberika notifikasi atau alert jika data berhasil dihapus.
        return redirect()->to('/games'); //setelah file berhasil dihapus maka akan dikembalikan ke halaman games
    }

    public function edit($slug) //method edit dengan parameter slug
    {
        $data = [
            'title' => 'edit',  //variabel title berisi string edit yang akan ditampilkan di title pada header.php
            'home' => '', //variabel home berisi string kosong karena saat games dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel home.
            'about' => '', //variabel about berisi string kosong karena saat games dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel about.
            'contact' => '', //variabel contact berisi string kosong karena saat games dijalankan saya tidak ingin teks home, about, contact, dan games yang berada pada navbar kelihatan active maka dari itu saya memasukkan nilai string kosong pada variabel contact.
            'games' => 'active', //variabel games berisi string active yang akan ditampilkan di class element home pada header.php
            'validation' => \Config\Services::validation(), //mengambil session validation pada method save.
            'games2' => $this->gamesModel->getGames($slug) //variabel games2 ini berisi untuk mengambil data dari gamesModel berdasarkan slug

        ];

        return view('games/edit', $data); //untuk menampilkan view pada url games/edit.
    }

    public function update($id) //method update dengan parameter id
    {
        //cek judul
        $gameLama = $this->gamesModel->getGames($this->request->getVar('slug')); //variabel gameLama ini berisi 
        if ($gameLama['judul'] == $this->request->getVar('judul')) {
            $rules_judul = 'required';
        } else {
            $rules_judul = 'required|is_unique[gaems.judul]';
        }


        //validation input
        if (!$this->validate([ //artinya jika tidak tervalidasi makan tampilkan return yang berada di dalam if, dan ketentuan validasi datanya berada didalam array validate.
            // 'judul' => 'required|is_unique[gaems.judul]' //ini cara yang lebih simple //validasi terhadao judul, required artinya data harus di isi, is_unique artinya data yang ditambahkan tidak boleh sama dengan data yang sudah ada, dan didalam arraynya itu artinya nama database.nama table.
            'judul' => [ //ini cara kedua kalau ingin tulisan errornya bisa kita ubah dengan kata kata kita sendiri
                'rules' => $rules_judul, //ini rules yang digunakan validasi pada judul
                'errors' => [ //dan ini untuk menampilkan errornya
                    'required' => '{field} games harus diisi.', //ini untuk menampilkan error pada validasi required, field itu artinya buat ngambil name dari judul.
                    'is_unique' => '{field} games sudah terdaftar.', //ini untuk menampilkan error pada validasi is_unique, field itu artinya buat ngambil name dari judul.
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    // 'uploaded' => '{field} harus diisi', //ini artinya gambar wajib di isi
                    'max_size' => 'file tidak boleh lebih dari 1mb', //ini artinya kita tidak bisa mengupload file gambar melebih i 1mb
                    'is_image' => 'yang anda masukkan bukan gambar', //ini digunakan untuk mendekteksi bahwa file itu berjenis gambar atau bukan
                    'mime_in' => '{field} harus jpg, jpeg atau png' //ini untuk mendeteksi file harus jpg, jpeg atau png
                ]
            ]
        ])) {
            //$validation = \Config\Services::validation(); //untuk menampilkan pesan kesalahn, pesan kesalahn ini sudah disediakan oleh CI4.
            return redirect()->to('/games/edit/' . $this->request->getVar('slug'))->withInput(); //jika kondisi benar maka akan dikembalikan ke halaman create.Dan kita juga membuat session untuk menambil semua inputan dan validation dari variabel validation, yang akan ditampilkan pada method create.
        }

        $fileSampul = $this->request->getFile('sampul'); //ini mengambil file dari id sampul pada halamn edit

        //cek gambar, apakah tetap gambar lama
        if ($fileSampul->getError() == 4) { //arti dari code ini adalah jika $fileSampul mempunyai error 4 atau tidak dimasukan gambar maka tampilkan true
            $namaSampul = $this->request->getVar('sampulLama'); //maka yang ditampilkan gambar lama atau sampul lama
        } else {

            //generate nama file random
            $namaSampul = $fileSampul->getRandomName();
            //pindahkan gambar
            $fileSampul->move('image', $namaSampul);
            //hapus file lama
            if ($this->request->getVar('sampulLama') != 'default.png') { //ini untuk ngecek jika sampul lama namanya tidak sama dengan default maka jalankan code di bawah

                unlink('image/' . $this->request->getVar('sampulLama')); //ini untuk menghapus file sampul lama ketika file sampul yang baru telah ditambahkan
            }
        }


        $slug = url_title($this->request->getVar('judul'), '-', true); //membuat variabel slug yang berisi untuk mengubah judul yang di insert menjadi huruf kecil semua dan spacinya diganti dengan tanda min (-).dan menangkap data tersebut atau save.
        $this->gamesModel->save([ //ini berfungsi untuk menangkap data yang sudah kita insert dari halaman create dan ini menggunakan model
            'id' => $id,
            'judul' => $this->request->getVar('judul'), //untuk menangkap data judul yang kita insert.
            'slug' => $slug, //untuk menangkap slug.
            'penulis' => $this->request->getVar('penulis'), //untuk menangkap data penulis yang kita insert.
            'penerbit' => $this->request->getVar('penerbit'), //untuk menangkap data penerbit yang kita insert.
            'sampul' => $namaSampul //untuk menangkap data sampul yang kita insert.
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.'); //ini berfungsi untuk memberika notifikasi atau alert jika data berhasil ditambahkan.

        return redirect()->to('/games'); //dan jika data yang telah di insert dari create telah ditangkap semua maka langsung dikembalikan ke halaman games.
    }
}
