<?= view('layouts/header'); ?>
<?= view('layouts/navbar'); ?>

<section class="container d-flex justify-content-between align-items-center" id="hero">
<div class="left-side">
<h5 class="hero-subtitle">
Ui / Ux Design Development
</h5>
<h3 class="hero-title fw-bold">
We Create Ui/Ux
Development in
Indonesia
</h3>
</div>

<div class="right-side">
    <div class="d-flex align-items-end back-img-hero">
    <img class="left-img" src="<?= base_url('public/images/bulet.png') ?>" alt="">
    <img class="right-img" src="<?= base_url('public/images/kotak.png') ?>" alt="">
    </div>
    <img class="mobile-img" src="<?= base_url('public/images/ui-ux.png') ?>" alt="">
</div>
</section>

<section class="container" id="slider-process">
    <div class="slider-title">
        <h5 class="fw-bold">Proses Desain Grafis Kami</h5>
    </div>
    <div class="swiper" id="customSwiper">
        <div class="swiper-wrapper container">
            <!-- Slide 1 -->
            <div class="swiper-slide custom-swiper-slide">
                <h2>1</h2>
                <h4>Emphatize</h4>
                <p>Memahami masalah yang ingin di pecahkan dengan empati. Membantu mengesampingkan asumsi dan mengumpulkan wawasan tentang kebutuhan pengguna</p>
            </div>
            <div class="swiper-slide custom-swiper-slide">
                <h2>2</h2>
                <h4>Define</h4>
                <p>Dalam proses Design, define adalah tahap yang penting untuk menetapkan titik awal perancangan dan menentukan arah proses perancangan. Dalam tahap ini, tim perancang akan mengumpulkan data dan informasi untuk memahami masalah dan kebutuhan pengguna.
                </p>
            </div>
            <div class="swiper-slide custom-swiper-slide">
                <h2>3</h2>
                <h4>Ideate</h4>
                <p>Ideate bertujuan untuk mengusulkan sebanyak mungkin ide untuk memecahkan masalah yang ada. Dalam tahap ini, ide-ide yang dihasilkan akan ditampung dan diuji untuk menemukan cara terbaik dalam memecahkan masalah.</p>
            </div>
            <div class="swiper-slide custom-swiper-slide">
                <h2>4</h2>
                <h4>Prototype</h4>
                <p>Model awal atau rancangan suatu produk atau desain yang dibuat untuk menguji dan mengevaluasi konsep sebelum diproduksi secara massal.</p>
            </div>
            <div class="swiper-slide custom-swiper-slide">
                <h2>5</h2>
                <h4>Test</h4>
                <p>Menguji prototype dengan pengguna asli. Tujuannya untuk menemukan masalah, mengidentifikasi peluang peningkatan, dan mempelajari perilaku pengguna.</p>
            </div>
        </div>
        <!-- Pagination -->
    </div>
</section>

<section class="" id="portofolio">
    <h3 class="container">Contoh Hasil Kerja</h3>
    <div class="portofolio-container">
    <div class="portofolio-wrapper light container">
        <div class="content">
            <div class="header">
                <div class="title purple">
                    <h4>PEPABRI Mobile
                    Apps</h4>
                    <p>Aplikasi PEPABRI Mobile Apps untuk para Persatuan Purnawirawan dan Warakawiru Indonesia, yang di mana bertujuan untuk dapat mempermudah bagi para anggotanya untuk melakukan aktifitas Jual dan Beli, penggunaan PPOB dan juga update mengenai keanggotaan PEPABRI.</p>
                </div>
                <div class="photo">
                    <img src="<?= base_url('public/images/pepabri.png') ?>" alt="">
                </div>
            </div>
            <div class="design-system">
                <img src="<?= base_url('public/images/pepabri-ds.png') ?>" alt="">
            </div>
        </div>
    </div>

    <div class="portofolio-wrapper dark">
        <div class="content container">
            <div class="header">
                <div class="title gray">
                    <h4>W205 Indonesia
                    Mobile Apps
                    Apps</h4>
                    <p>Aplikasi Komunitas mobil W205 Indonesia Bertujuan agar memudahkan anggota dalam  melaksanakan kegiatan Jual beli, Melaksanakan Agenda Komunitas dan juga mempermudah member untuk melakukan Top-Up</p>
                </div>
                <div class="photo">
                <img src="<?= base_url('public/images/w205-indo.png') ?>" alt="">
                </div>
            </div>
            <div class="design-system">
            <img src="<?= base_url('public/images/w205-ds.png') ?>" alt="">
            </div>
        </div>
    </div>
</div>
</section>

<?= view('layouts/footer'); ?>

<!--start back-to-top-->
<button onclick="topFunction()" id="back-to-top">
    <i class="mdi mdi-arrow-up"></i>
</button>
<!--end back-to-top-->

<?= view('layouts/script'); ?>
<script>
   var swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 50,
    autoplay: {
        delay: 5000
    },
    breakpoints: {
    480: {
      slidesPerView: 3,
      spaceBetween: 70
    },
}
    });
</script>