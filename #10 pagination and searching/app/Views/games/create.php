<?= $this->extend('layout/template.php'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class='my-3'>Tambah Data Games</h2>
            <form action="/games/save" method="post" enctype="multipart/form-data">
                <!-- kalau ada yang typenya file kita karus menambahkan enctype="multipart/form-data" -->
                <!-- agar formm ini dikirim pada method save -->
                <?= csrf_field(); ?>
                <!-- code berfungsi untuk mencegah form kita diisi oleh pihak lain atau menggunakan aplikasi lain (untuk melindungi form kita) -->
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label autofocus">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul') ? 'is-invalid' : ''); ?>" id="judul" name="judul" value="<?= old('judul'); ?>" autofocus> <!-- auto focus digunakan untuk ketika halaman kita di refresh tabel tulisan kita bisa langsung digunakan jadi tidak perlu di klik lagi.Di dalam class itu ada file code phpp itu digunakan untuk jika data yang di input tidak sesuai akan membuat form input menjadi merah atau error.value itu berisikan code phpp yang berfungsi untuk jika kita sudah menuliskan sebuah data maka ketika setelah ditambahkan ada yang error data yang kita tuliskan tadi itu tidak hilang. -->
                        <div id="judulFeedback" class="invalid-feedback">
                            <!-- code ini digunakan untuk jika input dari form id judul error maka akan menampilkan pesan error -->
                            <?= $validation->getError('judul'); ?>
                            <!-- pesan error ini diambil dari variabel validation pada method create pada controller games -->
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('penulis') ? 'is-invalid' : ''); ?>" id="penulis" name="penulis" value="<?= old('penulis'); ?>"><!-- Di dalam class itu ada file code phpp itu digunakan untuk jika data yang di input tidak sesuai akan membuat form input menjadi merah atau error.value itu berisikan code phpp yang berfungsi untuk jika kita sudah menuliskan sebuah data maka ketika setelah ditambahkan ada yang error data yang kita tuliskan tadi itu tidak hilang -->
                        <div id="penulisFeedback" class="invalid-feedback">
                            <!-- code ini digunakan untuk jika input dari form id judul error maka akan menampilkan pesan error -->
                            <?= $validation->getError('penulis'); ?>
                            <!-- pesan error ini diambil dari variabel validation pada method create pada controller games -->
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('penerbit') ? 'is-invalid' : ''); ?>" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>"><!-- Di dalam class itu ada file code phpp itu digunakan untuk jika data yang di input tidak sesuai akan membuat form input menjadi merah atau error.value itu berisikan code phpp yang berfungsi untuk jika kita sudah menuliskan sebuah data maka ketika setelah ditambahkan ada yang error data yang kita tuliskan tadi itu tidak hilang -->
                        <div id="penerbitFeedback" class="invalid-feedback">
                            <!-- code ini digunakan untuk jika input dari form id judul error maka akan menampilkan pesan error -->
                            <?= $validation->getError('penerbit'); ?>
                            <!-- pesan error ini diambil dari variabel validation pada method create pada controller games -->
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label> <!-- ini untuk membuat label diatas inputan gambar -->
                    <div class="col-sm-2">
                        <img src="/image/default.png" class="img-thumbnail img-preview"> <!-- ini digunakan untuk membuat gambar preview disamping inputan gambar -->
                    </div>
                    <div class="col-sm-8">
                        <div class="mb-3">
                            <label for="sampul" class="form-label">Masukkan Gambar Sampul</label> <!-- ini untuk membuat label pada sampul -->
                            <input class="form-control <?= ($validation->hasError('sampul') ? 'is-invalid' : ''); ?>" type="file" id="sampul" name="sampul" onchange="previewImg()"> <!-- ini digunakan untuk menginputkan gambar sampul.Di dalam class itu ada file code phpp itu digunakan untuk jika data yang di input tidak sesuai akan membuat form input menjadi merah atau error.onchange digunakan untuk memanggil javascript pada template yang digunakan untuk merubah preview gambar jikakita memasukkan gambar -->
                            <div id="penerbitFeedback" class="invalid-feedback">
                                <!-- code ini digunakan untuk jika input dari form id sampul error maka akan menampilkan pesan error -->
                                <?= $validation->getError('sampul'); ?>
                                <!-- pesan error ini diambil dari variabel validation pada method create pada controller games -->
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Tambah</button> <!-- tombol untuk submit data  -->
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>