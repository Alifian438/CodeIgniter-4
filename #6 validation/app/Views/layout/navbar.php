<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand" href="/">Alifian</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= $home; ?>" aria-current="page" href="/">Home</a><!-- dan di element home, about, contact, dan games ini juga saya tambahkan file php agar saat halaman view yang ditampilkan akan membuat teks pada navbar terlihat aktif atau agak tebal. variabel ini di juga di setting di controller pages.php -->
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $about; ?>" href="/pages/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $contact; ?>" href="/pages/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $games; ?>" href="/games">Games</a>
                </li>
            </ul>
        </div>

    </div>
</nav>