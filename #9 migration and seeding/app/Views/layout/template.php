<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="/css/style.css">

    <title><?= $title; ?></title> <!-- di title saya tambahkan variabel php agar saat kita berpindah halaman maka titlenya akan sesuai dengan halaman tersebut. variabel ini disetting di controller pages.php -->
</head>

<body>
    <?= $this->include('layout/navbar.php'); ?>
    <!-- Untuk mengambil navbar.php -->

    <?= $this->renderSection('content'); ?>
    <!-- untuk mengambil section content pada folder pages -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- javascript untuk preview image pada halaman create -->
    <script>
        function previewImg() { //kita wajib memasukkan scriptnya kedalam function agar dapat dipanggil di halaman create

            const sampul = document.querySelector('#sampul'); //ini untuk menangkap/mengambil id sampul
            const imgPreview = document.querySelector('.img-preview'); //ini untuk menangkap/mengambil class img-preview

            const fileSampul = new FileReader(); //ini digunakan untuk mengabil file yang diupload
            fileSampul.readAsDataURL(sampul.files[0]); //ini digunakan untuk mengambil alamat penyimpanannya terus ambil nama filenya

            fileSampul.onload = function(e) { //jika fileSampul onload maka jalankan event, image preview kita scr nya kita ganti dengan gambar yang baru
                imgPreview.src = e.target.result;
            }
        }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
   -->
</body>

</html>