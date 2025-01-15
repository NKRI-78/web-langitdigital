<?= view('layouts/header'); ?>
<?= view('layouts/navbar'); ?>

<style>
    .swiper {
        width: 100%;
        padding: 20px 0;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: end;
    }

    .card {
        width: 100%;
        max-width: 500px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: left;
    }

    .stars {
        font-size: 20px;
        color: #ffcc00;
        margin-bottom: 10px;
    }

    .client-info {
        display: flex;
        margin-top: 20px;
    }

    .client-photo {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .card {
        width: 90%;
    }

    .custom-stars {
        /* margin-left: -13rem; */
        text-align: left;
    }

    #customSwiper {
        width: 80%;
    }


    @media (max-width: 426px) {
        .swiper-slide {
            justify-content: normal;
        }

        #customSwiper {
            width: 100%;
        }
    }
</style>

<section class="container py-lg-5">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img class="img-home" src="<?= base_url('public/images/home.png') ?>" alt="home" style="max-width: 100%;">
            <div class="d-flex">
                <div class="div-home mb-3">
                    <h2 class="text-title-home">YOUR PARTNER TO <br> IMPROVE YOUR <br> BUSINESS</h2>
                </div>
                <div class="div-home2">
                    <p class="custom-paragraph-home">Web Developer, Mobile Apps, Ui/Ux Design</p>
                    <div class="d-flex gap-2">
                        <img src="<?= base_url('public/images/mouse.png') ?>" alt="img" width="16" height="22">
                        <a href="#service" class="custom-readmore">Scroll to read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="service" class="container d-lg-flex d-md-flex flex-lg-wrap justify-content-center position-relative custom-div-service">
    <h3 class="custom-text-rotation-right">Our Services</h3>
    <div class="col-lg-6 col-md-12 col-sm-12 pe-lg-4 ps-lg-5 div-custom-col-porto">
        <h3 class="custom-text-service ps-lg-3"> We Create <br> Digital Products <br> as Your Solution</h3>
        <div class="d-flex position-relative pt-lg-4 pt-sm-3 ps-lg-5 custom-div-parent-img">
            <img class="img-fluid" src="<?= base_url('public/images/bulet.png') ?>" alt="">
            <img class="img-fluid" src="<?= base_url('public/images/kotak.png') ?>" alt="">
            <img class="img-fluid custom-item-web" src="<?= base_url('public/images/items-web-4x.png') ?>" alt="img-web">
        </div>
        <div>
            <h3 class="custom-text-title-service-web">Pengembang Situs Web</h3>
            <p class="paragraph-service">Website adalah langkah penting dalam menghadapi era digital yang semakin maju,
                memungkinkan individu dan organisasi untuk menjangkau audiens global dan beradaptasi
                dengan perubahan tren teknologi yang terus berkembang, untuk itu kami hadir untuk memenuhi
                kebutuhan tersebut. Kami berkomitment bekerja optimal demi memberikan yang terbaik untuk kepuasan
                klien.</p>
            <a href="<?= base_url("/web-development") ?>" class="text-read-more">READ MORE</a>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 div-custom-col">
        <div class="d-flex position-relative pt-lg-4 pt-sm-3 ps-lg-5 custom-div-parent-img">
            <img class="img-fluid" src="<?= base_url('public/images/bulet.png') ?>" alt="">
            <img class="img-fluid" src="<?= base_url('public/images/kotak.png') ?>" alt="">
            <img class="img-fluid custom-item-mobile" src="<?= base_url('public/images/items-mobile-4x.png') ?>" alt="img-web">
        </div>
        <div>
            <h3 class="custom-text-title-service-mobile">Mobile Apps Development</h3>
            <p class="paragraph-service">Langit Digital 78 adalah Developer Aplikasi yang
                telah berpengalaman dalam berbagai pembuatan aplikasi dimana kami telah banyak
                menghasilkan Mobile Apps yang berkualitas internasional tentunya kami juga telah
                menyesuaikan dengan kebutuhan dari klien yang kami kemas dengan kreativitas dari Team
                Langit Digital 78 yang profesional sehingga menghasilkan sebuah aplikasi yang terbaik secara fungsional dan tampilan yang memukau. Aplikasi yang kami buat hadir di Playstore dan Apps Store. </p>
            <a href="<?= base_url("/mobile-development") ?>" class="text-read-more">READ MORE</a>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 div-custom-col pe-lg-4 ps-lg-5">
        <div class="d-flex position-relative pt-lg-4 pt-sm-3 ps-lg-5 custom-div-parent-img">
            <img class="img-fluid" src="<?= base_url('public/images/bulet.png') ?>" alt="">
            <img class="img-fluid" src="<?= base_url('public/images/kotak.png') ?>" alt="">
            <img class="img-fluid custom-item-cms" src="<?= base_url('public/images/items-cms-4x.png') ?>" alt="img-web">
        </div>
        <div>
            <h3 class="custom-text-title-service-cms">Content Management System</h3>
            <p class="paragraph-service">CMS memungkinkan untuk pengguna mengelola, membuat,
                dan mengubah konten digital di situs web, pengguna dapat lebih mudah mengelola
                konten tanpa memerlukan keterampilan teknis yang mendalam, sehingga mempermudah
                proses pengembangan dan pemeliharaan situs web.</p>
            <a href="<?= base_url("/content-management-system") ?>" class="text-read-more">READ MORE</a>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 div-custom-col custom-div-uiux">
        <div class="d-flex position-relative pt-lg-4 pt-sm-3 ps-lg-5 custom-div-parent-img">
            <img class="img-fluid" src="<?= base_url('public/images/bulet.png') ?>" alt="">
            <img class="img-fluid" src="<?= base_url('public/images/kotak.png') ?>" alt="">
            <img class="img-fluid custom-item-uiux" src="<?= base_url('public/images/items-uiux-4x.png') ?>" alt="img-web">
        </div>
        <div>
            <h3 class="custom-text-title-service-uiux">Ui / Ux Design</h3>
            <p class="paragraph-service">Aplikasi tentunya membutuhkan tampilan UI yang
                menarik sehingga membuat user memiliki ketertarikan berkat tampilan yang
                memanjakan mata, proses desain tentunya memiliki perhitungan yang matang,
                kami juga memperhatikan UX yang user friendly sehingga perasaan dan pengalaman
                keseluruhan pengguna saat menggunakan aplikasi. Keduanya bekerja bersama untuk
                menciptakan produk yang tidak hanya menarik secara visual, tetapi juga mudah digunakan dan menyenangkan.</p>
            <a href="<?= base_url("/ui-ux") ?>" class="text-read-more">READ MORE</a>
        </div>
    </div>
</section>

<section id="portofolio" class="container d-lg-flex d-md-flex flex-lg-wrap justify-content-center position-relative pt-5 custom-div-porto">
    <h3 class="custom-text-rotation-left">Our Works</h3>
    <div class="col-lg-6 col-md-12 col-sm-12 div-custom-col-porto custom-mini">
        <div class="image-container-home position-relative">
            <img class="item-squer-porto" src="<?= base_url('public/images/squer.png') ?>" alt="">
            <img class="img-fluid img-porto" src="<?= base_url('public/images/MINI-COOPER-4X.png') ?>" alt="mini-cooper">
            <img class="img-fluid hover-img-porto" src="<?= base_url('public/images/MINI-COOPER-2-4X.png') ?>" alt="">
        </div>
        <h6 class="text-title-porto">Mini Cooper</h6>
        <h6 class="text-child-title">Mobile Apps</h6>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 div-custom-col-porto pe-lg-4">
        <h3 class="custom-text-porto py-lg-5">Many Partners trusted <br>
            us to creat them Web <br>
            Site and Mobile Apps</h3>
        <div class="image-container-home ps-lg-4">
            <img class="img-fluid img-porto" src="<?= base_url('public/images/MERCEDES-4X.png') ?>" alt="mercedes">
            <img class="img-fluid hover-img-porto" src="<?= base_url('public/images/MERCEDES-2-4X.png') ?>" alt="">
        </div>
        <div class="ps-lg-4">
            <h6 class="text-title-porto">Mercedes Benz W204</h6>
            <h6 class="text-child-title">Mobile Apps</h6>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 div-custom-col-porto custom-koperasi">
        <div class="image-container-home">
            <img class="img-fluid img-porto" src="<?= base_url('public/images/YAMAHA-4X.png') ?>" alt="mini-cooper">
            <img class="img-fluid hover-img-porto" src="<?= base_url('public/images/YAMAHA-2-4X.png') ?>" alt="">
        </div>
        <h6 class="text-title-porto">Koperasi Yamaha</h6>
        <h6 class="text-child-title">Mobile Apps</h6>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 div-custom-col-porto">
        <div class="image-container-home ps-lg-4">
            <img class="img-fluid img-porto" src="<?= base_url('public/images/HARLEY-4X.png') ?>" alt="mini-cooper">
            <img class="img-fluid hover-img-porto" src="<?= base_url('public/images/HARLEY-2-4X.png') ?>" alt="">
        </div>
        <div class="ps-lg-4">
            <h6 class="text-title-porto">HOG Anak Elang</h6>
            <h6 class="text-child-title">Mobile Apps</h6>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 div-custom-col-porto custom-voucher">
        <div class="image-container-home">
            <img class="img-fluid img-porto" src="<?= base_url('public/images/tentangvoucher-4x.png') ?>" alt="mini-cooper">
            <img class="img-fluid hover-img-porto" src="<?= base_url('public/images/tentangvoucher-2-4x.png') ?>" alt="">
        </div>
        <h6 class="text-title-porto">TentangVoucher</h6>
        <h6 class="text-child-title">Web Development</h6>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 div-custom-col-porto">
        <div class="image-container-home ps-lg-4">
            <img class="img-fluid img-porto" src="<?= base_url('public/images/fspmi-4x.png') ?>" alt="mini-cooper">
            <img class="img-fluid hover-img-porto" src="<?= base_url('public/images/fspmi-2-4x.png') ?>" alt="">
        </div>
        <div class="ps-lg-4">
            <h6 class="text-title-porto">FSPMI Data Base</h6>
            <h6 class="text-child-title">Content Management System</h6>
        </div>
    </div>
    <h5 class="custom-text-bottom-porto">VIEW MORE PROJECTS</h5>
</section>

<section id="aboutUs" class="container pt-5 d-lg-flex justify-content-center">
    <div class="col-lg-12 col-md-12 col-sm-12 position-relative">
        <h2 class="text-title-about">What Our Clients Say About Us</h2>
        <img class="item-squer-about" src="<?= base_url('public/images/squer.png') ?>" alt="">
        <div class="swiper mt-5" id="customSwiper">
            <div class="swiper-wrapper container text-center div-swiper">
                <div class="swiper-slide custom-swiper-slide-home">
                    <div class="card">
                        <div class="card-body">
                            <p class="stars custom-stars">⭐⭐⭐⭐⭐</p>
                            <p style="text-align: justify;">Kami merasa senang dan bangga karena kami telah dibantu
                                untuk memiliki aplikasi yang diperuntukan bagi para anggota kami
                                sebagai sumber komunikasi dan informasi serta kami dapat berbagi informasi
                                kepada publik tentang komunitas kami dan apa yang telah kami lakukan untuk
                                masyarakat luas </p>
                            <div class="client-info">
                                <img src="<?= base_url('public/images/org.png') ?>" alt="profile-testimoni" class="client-photo">
                                <div style="text-align: left;">
                                    <h6>Frans Abdullah</h6>
                                    <p>Founder SKYE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide custom-swiper-slide-home">
                    <div class="card">
                        <div class="card-body">
                            <p class="stars custom-stars">⭐⭐⭐⭐⭐</p>
                            <p style="text-align: justify;">Kami merasa senang dan bangga karena kami telah dibantu
                                untuk memiliki aplikasi yang diperuntukan bagi para anggota kami
                                sebagai sumber komunikasi dan informasi serta kami dapat berbagi informasi
                                kepada publik tentang komunitas kami dan apa yang telah kami lakukan untuk
                                masyarakat luas </p>
                            <div class="client-info">
                                <img src="<?= base_url('public/images/org.png') ?>" alt="profile-testimoni" class="client-photo">
                                <div style="text-align: left;">
                                    <h6>Frans Abdullah</h6>
                                    <p>Founder SKYE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide custom-swiper-slide-home">
                    <div class="card">
                        <div class="card-body">
                            <p class="stars custom-stars">⭐⭐⭐⭐⭐</p>
                            <p style="text-align: justify;">Kami merasa senang dan bangga karena kami telah dibantu
                                untuk memiliki aplikasi yang diperuntukan bagi para anggota kami
                                sebagai sumber komunikasi dan informasi serta kami dapat berbagi informasi
                                kepada publik tentang komunitas kami dan apa yang telah kami lakukan untuk
                                masyarakat luas </p>
                            <div class="client-info">
                                <img src="<?= base_url('public/images/org.png') ?>" alt="profile-testimoni" class="client-photo">
                                <div style="text-align: left;">
                                    <h6>Frans Abdullah</h6>
                                    <p>Founder SKYE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container position-relative">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 d-lg-flex d-md-flex flex-lg-wrap justify-content-center">
            <h3 class="custom-text-rotation-right-testimonial">Testimonials</h3>
            <h2 class="title-client">Our Happy Clients</h2>
            <div class="param-logo-client">
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/AMULET.svg') ?>" alt="img-logo">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/CEK-PINJOL.svg') ?>" alt="img-logo">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/FASI.svg') ?>" alt="img-logo">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/FSPMI.svg') ?>" alt="img-logo" style="width: 117px; height: 119px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/LOGO-TOKOBONA.svg') ?>" alt="img-logo" style="width: 117px; height: 32px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/LOGO-IKAL(1).svg') ?>" alt="img-logo" style="width: 82px; height: 82px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/LOGO-SALAM-LESTARI.svg') ?>" alt="img-logo" style="width: 131px; height: 131px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/HOG.svg') ?>" alt="img-logo" style="width: 118px; height: 117px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/KOSGORO.svg') ?>" alt="img-logo" style="width: 119px; height: 117px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/MERCEDES.svg') ?>" alt="img-logo" style="width: 119px; height: 117px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/MINI-COOPER.svg') ?>" alt="img-logo" style="width: 117px; height: 117px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/LINGKUNGANKU.svg') ?>" alt="img-logo" style="width: 104px; height: 41px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/LOGO-MHS-CMS.svg') ?>" alt="img-logo" style="width: 65px; height: 62px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/PEPABRI-LOGO.svg') ?>" alt="img-logo" style="width: 75px; height: 75px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/PPI-DUNIA.svg') ?>" alt="img-logo" style="width: 118px; height: 120px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/SAHABAT-DISABILITAS.svg') ?>" alt="img-logo" style="width: 119px; height: 120px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/SAKA.svg') ?>" alt="img-logo" style="width: 119px; height: 120px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/STARLET.svg') ?>" alt="img-logo" style="width: 118px; height: 119px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/ATJ-logo.png') ?>" alt="img-logo" style="width: 76px; height: auto;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/LOGO-KOPERASI-YAMAHA-PNG.svg') ?>" alt="img-logo" style="width: 77px; height: 76px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/MUSLIMAPP-LOGO.svg') ?>" alt="img-logo" style="width: 93px; height: 56px;">
                </div>
            </div>
            <h2 class="title-client our-location">Our Location</h2>
        </div>
    </div>
</section>

<section class="custom-container-location">
    <div class="div-param-location">
        <h3 class="text-jakarta">JAKARTA</h3>
        <div class="div-address">
            <h5 class="font-weight-bold">PT LANGIT DIGITAL TUJUH DELAPAN</h5>
            <p class="text-address">Jl. Kemang Selatan IX No.9A, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12730</p>
        </div>
    </div>
</section>

<!--start back-to-top-->
<button onclick="topFunction()" id="back-to-top">
    <i class="mdi mdi-arrow-up"></i>
</button>
<!--end back-to-top-->

<?= view('layouts/footer'); ?>
<?= view('layouts/script'); ?>
<script>
    var swiper = new Swiper('.swiper', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        slidesOffsetAfter: 10,
        slidesOffsetBefore: 10,
        // autoplay: {
        // delay: 5000
        // }
        breakpoints: {
            500: { // Untuk tablet/desktop
                slidesPerView: 2,
                spaceBetween: 10,
            },
        },
    });
</script>