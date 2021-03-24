<?= $this->extend('layout/template.php'); ?>
<!-- code digunakan untuk menggabungkan file home.php dengan template.php  -->

<?= $this->section('content'); ?>
<!-- code ini digunakan untuk mengetahui section content pada file home.php -->
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Ini adalah file home</h1>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<!-- code ini digunakan untuk mengetahui akhir section content pada file home.php -->