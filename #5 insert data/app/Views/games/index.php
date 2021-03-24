<?= $this->extend('layout/template.php'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Games</h1>
            <a href="/games/create" class="btn btn-primary">Tambah Data</a> <!-- untuk membuat tombol atau button yang menuju ke create -->

            <?php if (session()->getFlashdata('pesan')) : ?>
                <!-- ini berfungsi untuk jika ada flash data atau alert dari method save maka tampilkan -->
                <div class="alert alert-success my-3" role="alert">
                    <!-- dan ini code untuk membuat alertnya -->
                    <?= session()->getFlashdata('pesan'); ?>
                    <!-- ini code untuk menampilkan pesan yang telah kita tulis di method save tadi -->
                </div>
            <?php endif ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Info</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <!-- membuat variabel i = 1 -->
                    <?php foreach ($games1 as $g) : ?>
                        <!-- untuk melooping data satu persatu pada variabel games1 atau data pada model -->
                        <tr>
                            <th scope="row"><?= $i++; ?></th> <!-- ini untuk menampilkan no pada tabel saya kasih i++ karena agar saat daata ditambahkan nomernya juga akan bertambah -->
                            <td><img src="/image/<?= $g['sampul']; ?>" alt="" class="sampul"></td> <!-- ini untuk menampilkan sampul atau gambar pada tabel -->
                            <td><?= $g['judul']; ?></td> <!-- ini untuk menampilkan judul pada tabel -->
                            <td>
                                <a href="games/<?= $g['slug']; ?>" class="btn btn-success"> Detail</a> <!-- dan ini untuk menampilkan button ketika akan di klik akan menuju ke url games/(sesuai dengan slug suatu data yang di klik) -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>