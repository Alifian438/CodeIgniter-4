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

                            <form action="/games/<?= $games1['id']; ?>" method="POST" class="d-inline">
                                <!-- form ini digunakan untuk spofing method post menjadi delete maksud dari code phpp di action itu digunakan untuk mengambil id data yang sedang dilihat di detail, dan d-inline di class itu berguna untuk membuat form ini menjadi inline karena defaultnya kalau form itu block -->
                                <?= csrf_field(); ?>
                                <!-- ini berfungsi untuk menjaga keamanan pada form kita agar tidak bisa diisi menggunakan aplikasi apapun -->
                                <input type="hidden" name="_method" value="delete"> <!-- input dengan type hidden ini berfungsi untuk menipu CI4nya agar method post yang berada di form itu berubah menjadi delete ini dinamakan spofing -->
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button> <!-- button ini digunakan untuk membuat tampilan button dan ada teks javascript onclick itu digunakan ketika tombol di klik akan muncul pemberitahuan dulu sebelum file dihapus. -->
                            </form>

                            <a href="/games/edit/<?= $games1['slug']; ?>" class="btn btn-warning">Edit</a> <!-- untuk membuat tombol atau button Edit dan diarahkan ke hakaman edit/slug dari file tersebut-->
                            <br>
                            <br>
                            <a href="/games" class="btn btn-primary">Kembali</a> <!-- untuk membuat tombol atau button kembali ke url games -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>