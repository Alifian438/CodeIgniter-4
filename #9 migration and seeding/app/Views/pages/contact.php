<?= $this->extend('layout/template.php'); ?>
<!-- code digunakan untuk menggabungkan file contact.php dengan template.php  -->

<?= $this->section('content'); ?>
<!-- code ini digunakan untuk mengetahui section content pada file contact.php -->
<div class="container">
    <div class="col">
        <div class="row">
            <h1>Contact</h1>
            <?php foreach ($alamat as $a) : ?>
                <!-- code ini untuk mengambil data satu persatu dari array alamat yang ada pada controller pages.php -->
                <ul>
                    <li><?= $a['tipe']; ?></li> <!-- untuk mengambil isi dari variabel tipe pada array alamat -->
                    <li><?= $a['alamat']; ?></li> <!-- untuk mengambil isi dari variabel alamat pada array alamat -->
                    <li><?= $a['kota']; ?></li> <!-- untuk mengambil isi dari variabel kota pada array alamat -->
                </ul>
            <?php endforeach ?>
            <!-- code ini digunakan untuk mengetahui akhir dari foreach -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<!-- code ini digunakan untuk mengetahui akhir section content pada file contact.php -->