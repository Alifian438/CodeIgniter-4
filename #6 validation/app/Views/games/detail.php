<?= $this->extend('layout/template.php'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Games</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="/image/<?= $games1['sampul']; ?>" class="card-img-top" alt="..."> <!-- untuk menampilkan gambar yang berada pada variabel $games1 dengan yang sudah kita tambahkan pada controoler games dengan metod detail -->
                        <div class="card-body">
                            <h5 class="card-title"><?= $games1['judul']; ?></h5> <!-- untuk menampilkan judul yang berada pada variabel $games1 dengan yang sudah kita tambahkan pada controoler games dengan metod detail -->
                            <p class="card-text"><b>Penulis : </b><?= $games1['penulis']; ?></p> <!-- untuk menampilkan nama penulis yang berada pada variabel $games1 dengan yang sudah kita tambahkan pada controoler games dengan metod detail -->
                            <p class="card-text"><b>Penerbit : </b><?= $games1['penerbit']; ?></p> <!-- untuk menampilkan penerbit yang berada pada variabel $games1 dengan yang sudah kita tambahkan pada controoler games dengan metod detail -->
                            <a href="#" class="btn btn-danger">Hapus</a> <!-- untuk membuat tombol atau button Hapus -->
                            <a href="#" class="btn btn-warning">Edit</a> <!-- untuk membuat tombol atau button Edit -->
                            <br>
                            <br>
                            <a href="/games" class="btn btn-primary">Kembali</a> <!-- untuk membuat tombol atau button kembali ke url games -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>