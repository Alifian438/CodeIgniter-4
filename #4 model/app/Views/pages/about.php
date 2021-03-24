<?= $this->extend('layout/template.php'); ?>
<!-- code digunakan untuk menggabungkan file about.php dengan template.php  -->

<?= $this->section('content'); ?>
<!-- code ini digunakan untuk mengetahui section content pada file about.php -->
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Ini adalah file about</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum expedita quibusdam, voluptas officiis, reprehenderit aliquam laborum ducimus reiciendis nam quam nesciunt atque voluptatem delectus? Hic minus asperiores excepturi culpa. Doloribus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam temporibus qui facilis sequi ea consequuntur rerum, amet ullam optio modi libero earum dolorem quo et neque ab quisquam labore sit?</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<!-- code ini digunakan untuk mengetahui section content pada file about.php -->