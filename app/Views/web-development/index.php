<?= view('layouts/header'); ?>
<?= view('layouts/navbar'); ?>

<section class="container d-flex justify-content-between align-items-center" id="hero">
<div class="left-side">
<h5 class="hero-subtitle">
Website Design and Development
</h5>
<h3 class="hero-title fw-bold">
Web Design &
Development in 
Indonesia   
</h3>
</div>

<div class="right-side">
    <div class="d-flex align-items-end back-img-hero">
    <img class="left-img" src="<?= base_url('public/images/bulet.png') ?>" alt="">
    <img class="right-img" src="<?= base_url('public/images/kotak.png') ?>" alt="">
    </div>
    <img class="" src="<?= base_url('public/images/web-development-4x.png') ?>" alt="">
</div>

</section>

<section class="container position-relative" id="features">
    <div class="d-flex column-gap-5">
        <div class="left-side">
        <div class="feature-card">
                <div class="header">
                    <img src=<?= base_url('public/images/europe-4x.png') ?> alt="Europe Icon">
                    <h6>Global Quality</h6>
                </div>
                <p class="content">
                Di PT Langit Digital, kualitas adalah prioritas utama kami. Kami berkomitmen untuk menghadirkan solusi IT dengan standar global yang memastikan setiap proyek kami memenuhi ekspektasi tertinggi dari klien. Dengan mengutamakan kualitas, kami membantu bisnis Anda mencapai performa terbaik di industri yang semakin kompetitif.
                </p>
            </div>
            <div class="feature-card">
                <div class="header">
                    <img src=<?= base_url('public/images/mobile-phone-4x.png') ?> alt="Europe Icon">
                    <h6>Mobile Responsive Design</h6>
                </div>
                <p class="content">
                Bawa pengalaman pengguna ke level berikutnya dengan desain yang responsif dan optimal di berbagai perangkat. Kami menghadirkan Mobile Responsive Design yang memastikan situs web Anda tampil menarik dan fungsional, baik di smartphone, tablet, maupun desktop. Dengan desain yang responsive disemua perangkat, tampilan website Anda akan tetap menarik saat diakses melalui PC, Smartphone bahkan tablet agar dapat menarik lebih banyak pelanggan untuk mengunjungi website anda.
                </p>
            </div>
            <div class="feature-card">
                <div class="header">
                    <img src=<?= base_url('public/images/e-learning-4x.png') ?> alt="Europe Icon">
                    <h6>Easy to Manage by CMS</h6>
                </div>
                <p class="content">
                Kelola konten situs Anda dengan mudah dan efisien menggunakan Content Management System (CMS) yang ramah pengguna. Kami menyediakan solusi Easy to Manage by CMS yang memungkinkan Anda mengupdate teks, gambar, dan halaman dengan cepat, tanpa perlu keahlian teknis atau meminta pada tim IT mengeditnya. Dengan sistem CMS, Anda memiliki kendali penuh untuk menjaga situs tetap update.
                </p>
            </div>
        </div>
        <div class="right-side pt-5">
            <div class="feature-card">
                <div class="header">
                    <img src=<?= base_url('public/images/bar-chart-4x.png') ?> alt="Europe Icon">
                    <h6>SEO Friendly</h6>
                </div>
                <p class="content">
                Dalam dunia digital yang kompetitif, memiliki situs web saja tidak cukup. Agar bisnis Anda mudah ditemukan dan tampil di halaman pertama mesin pencari, website Anda harus dirancang dengan pendekatan SEO Friendly. Di PT Langit Digitall, kami menggabungkan desain berkualitas dengan strategi SEO yang kuat, memastikan situs Anda dapat menarik lebih banyak pengunjung dan meningkatkan visibilitas bisnis Anda.
                </p>
            </div>
            <div class="feature-card">
                <div class="header">
                    <img src=<?= base_url('public/images/fast-forward-4x.png') ?> alt="Europe Icon">
                    <h6>Fast Loading</h6>
                </div>
                <p class="content">
                Optimalkan kecepatan akses situs Anda dengan desain Fast Loading yang membuat pengguna tetap terhubung tanpa hambatan. Kami menghadirkan situs yang cepat diakses, baik di desktop maupun perangkat mobile, untuk meningkatkan pengalaman pengguna dan mengurangi bounce rate. Dengan kecepatan yang optimal, website Anda tidak hanya tampil unggul di mata pengunjung, tetapi juga di peringkat mesin pencari.
                </p>
            </div>
        </div>
    </div>
    <h1 class="side-title">Features</h1>
</section>

<section class="container d-flex flex-column row-gap-4 d-flex m-auto text-center my-4">
    <div class="d-flex flex-column">
    <h5 class="fs-3">Asked Questions?</h5>
    <p>Feel free to contact us</p>
    </div>
    <div>
    <button class="btn-contact-us px-4 py-2">CONTACT US</button>
    </div>
</section>

<section class="container" id="ourWorks">
    <div class="d-flex flex-column row-gap-3 content-wrapper">
    <div>
    <h5 class="fs-3">Our Works on
    Website Development</h5>
    </div>
    <div class="d-flex justify-content-between">
            <div>
                <div class="image-container" >
                    <img class="img-mini" src="<?= base_url('public/images/voucher.png') ?>" alt="bulet">
                    <img class="hover-image" src="<?= base_url('public/images/phone-voucher.png') ?>" alt="web">
                </div>
                <div class="mt-3">

                    <h3>TentangVoucher</h3>
                    <a href="#">Web Development</a>
                </div>
            </div>
            <div class="pt-5">
                <div class="image-container" >
                    <img class="img-mini" src="<?= base_url('public/images/fspmi.png') ?>" alt="bulet">
                    <img class="hover-image" src="<?= base_url('public/images/phone-fspmi.png') ?>" alt="web">
                </div>
                <div class="mt-3">
                    <h3>FSPMI Data Base</h3>
                    <a href="#">Content Management System</a>
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