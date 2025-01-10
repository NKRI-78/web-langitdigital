<?= view('layouts/header'); ?>
<?= view('layouts/navBar'); ?>

<!--START Hero-->
<section class="section" id="cms-home" style="background-color:#fff !important; padding-bottom: 0;">
    <div class="container">
        <div class="row">
            <div class="col-12 div-sectionCms">
                <div style="margin-top: 14rem;">
                    <h3 class="sectionCms-text">Content Managment System</h3>
                    <h2 class="sectionCms-text2">CMS Development <br> in Indonesia</h2>
                </div>
                <div class="div-sectionCms-img">
                    <img class="img" src="<?= base_url('public/images/pc2.png') ?>" alt="img-pc" style="position: relative; width: 145%; margin-left: -19rem; z-index: 2;">
                </div>
            </div>
        </div>
        <img class="item-bulet-sectionCms" src="<?= base_url('public/images/bulet.svg') ?>" alt="item-bulet">
    </div>
</section>
<!--END HOME-->

<!-- Our service -->
<section class="section" id="section-cms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-sectionAbout text-center">Kelola situs web Anda dengan mudah menggunakan Layanan Jasa CMS (Content <br>
                    Management System). Kami menyediakan solusi CMS untuk membantu Anda dapat <br>
                    memperbarui konten, mengelola halaman, dan mempublikasikan informasi baru tanpa <br>
                    memerlukan keahlian teknis. Dengan pilihan CMS yang fleksibel dan dapat disesuaikan, <br>
                    kami memastikan situs Anda tetap dinamis, relevan dan selalu up-to-date.
                </h2>
            </div>
            <div class="col-12 div-params-section">
                <div>
                    <div>
                        <img src="<?= base_url('public/images/Laptop.svg') ?>" alt="icon-laptop">
                        <h3>Digitalize Your Business</h3>
                        <p class="custom-paragraph">
                            There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by
                            injected humour, or randomised words which don't look even
                            slightly believable. If you are going to use a passage of Lorem
                            Ipsum, you need to be sure there isn't anything embarrassing hidden
                            in the middle of text.
                        </p>
                    </div>
                    <div>
                        <img src="<?= base_url('public/images/Module.svg') ?>" alt="icon-laptop">
                        <h3>Mobile Responsive Design</h3>
                        <p class="custom-paragraph">
                            There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected
                            humour, or randomised words which don't look even slightly believable.
                            If you are going to use a passage of Lorem Ipsum, you need to be sure
                            there isn't anything embarrassing hidden in the middle of text.
                        </p>
                    </div>
                </div>
                <div style="padding-top: 11rem;">
                    <div>
                        <img src="<?= base_url('public/images/Genealogy.svg') ?>" alt="icon-laptop">
                        <h3>Custom Made System</h3>
                        <p class="custom-paragraph">
                            There are many variations of passages of Lorem Ipsum
                            available, but the majority have suffered alteration
                            in some form, by injected humour, or randomised words
                            which don't look even slightly believable. If you are
                            going to use a passage of Lorem Ipsum, you need to be
                            sure there isn't anything embarrassing hidden in the middle of text.
                        </p>
                    </div>
                    <div>
                        <img src="<?= base_url('public/images/Healthy Food.svg') ?>" alt="icon-laptop">
                        <h3>Fast Loading</h3>
                        <p class="custom-paragraph">
                            There are many variations of passages of Lorem Ipsum
                            available, but the majority have suffered alteration
                            in some form, by injected humour, or randomised words which
                            don't look even slightly believable. If you are going to use
                            a passage of Lorem Ipsum, you need to be sure there isn't anything
                            embarrassing hidden in the middle of text.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END HOME-->

<!-- Our works -->
<section class="section" id="portofolio-cms">
    <div class="container">
        <div class="row">
            <div class="col-6" style="margin-left: 3rem;">
                <h2 style="font-family: 'Gilroy-Bold', sans-serif; font-weight: 600;">Our Works on <br> Website Development</h2>
                <div>
                    <div class="image-container" style="margin-top: 2rem; margin-bottom: 1rem; margin-right: 9rem;">
                        <img class="img-mini" src="<?= base_url('public/images/fspmi.png') ?>" alt="bulet">
                        <img class="hover-image" src="<?= base_url('public/images/phone-fspmi.png') ?>" alt="web">
                    </div>
                    <h3>FSPMI Data Base</h3>
                    <a href="#" style="color: #293C93; font-size: 16px; font-weight: 400;">Content Management System</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END HOME-->

<!--start back-to-top-->
<button onclick="topFunction()" id="back-to-top">
    <i class="mdi mdi-arrow-up"></i>
</button>
<!--end back-to-top-->

<?= view('layouts/footer'); ?>



<?= view('layouts/script'); ?>