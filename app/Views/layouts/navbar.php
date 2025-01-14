<nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky" id="navbar">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand text-uppercase" href="<?= base_url("/") ?>">
            <img class="logo-light" src="<?= base_url('public/images/LOGO-LD.png') ?>" alt="" height="75">
            <img class="logo-dark" src="<?= base_url('public/images/LOGO-LD.png') ?>" alt="" height="75">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="mdi mdi-menu"></span>
            <!-- toggle button -->
        </button>

        <div class="collapse navbar-collapse customNav" id="navbarCollapse">
            <ul class="navbar-nav" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link <?= (rtrim(current_url(), '/') === rtrim(base_url("/"), '/')) ? 'active' : '' ?>" href="<?= base_url("/") ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (current_url() == base_url("/about-us")) ? 'active' : '' ?>" href="<?= base_url("/about-us") ?>">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("/#service") ?>">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("/#portofolio") ?>">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-3 mb-lg-0" href="<?= base_url("/#contact") ?>">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->