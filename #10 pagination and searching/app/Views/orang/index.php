<?= $this->extend('layout/template.php'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Orang</h1>
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (3 * ($currentPage - 1)); ?>
                    <!-- membuat variabel i = 1 -->
                    <?php foreach ($orang1 as $o) : ?>
                        <!-- untuk melooping data satu persatu pada variabel games1 atau data pada model -->
                        <tr>
                            <th scope="row"><?= $i++; ?></th> <!-- ini untuk menampilkan no pada tabel saya kasih i++ karena agar saat daata ditambahkan nomernya juga akan bertambah -->
                            <td><?= $o['nama']; ?></td> <!-- ini untuk menampilkan sampul atau gambar pada tabel -->
                            <td><?= $o['alamat']; ?></td> <!-- ini untuk menampilkan judul pada tabel -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('orang', 'orang_pagination'); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>