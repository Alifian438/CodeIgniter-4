<?= $this->extend('layout/template.php'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class='my-3'>Tambah Data Games</h2>
            <form action="/games/save" method="post">
                <!-- agar formm ini dikirim pada method save -->
                <?= csrf_field(); ?>
                <!-- code berfungsi untuk mencegah form kita diisi oleh pihak lain atau menggunakan aplikasi lain (untuk melindungi form kita) -->
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label autofocus">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" autofocus> <!-- auto focus digunakan untuk ketika halaman kita di refresh tabel tulisan kita bisa langsung digunakan jadi tidak perlu di klik lagi -->
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Tambah</button> <!-- tombol untuk submit data  -->
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>