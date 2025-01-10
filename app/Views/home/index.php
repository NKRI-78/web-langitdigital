<?= view('layouts/header'); ?>
<?= view('layouts/navBar'); ?>

<style>
    /* css slider */
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
  width: 90%;
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
  /* align-items: center; */
  justify-content: left;
}

.stars {
  font-size: 20px;
  color: #ffcc00;
  margin-bottom: 10px;
}

.client-info {
  display: flex;
  /* align-items: center; */
  margin-top: 20px;
}

.client-photo {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin-right: 10px;
}
</style>

<!--START Hero-->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img class="img-home" src="<?= base_url('public/images/home.png') ?>" alt="home" style="max-width: 100%;">
            <div class="d-flex">
                <div class="div-home mb-3">
                     <h2 style="color: #fff; font-size: 65px; font-weight: bold; padding-left: 2rem;">YOUR PARTNER TO <br> IMPROVE YOUR <br> BUSINESS</h2>
                </div>
                <div class="div-home2">
                    <p class="custom-paragraph-home">Web Developer, Mobile Apps, Ui/Ux Design</p>
                    <div class="d-flex gap-2">
                        <img src="<?= base_url('public/images/mouse.png') ?>" alt="img" width="16" height="22">
                        <p class="custom-readmore">Scroll to read more</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-6 col-lg-6">
            <div class="d-flex flex-column">
                <div class="div-home mb-3">
                    <img src="<?= base_url('public/images/text-home.png') ?>" alt="textHome" style="padding-left: 2rem;padding-bottom: 2rem;">
                     <h2 style="position: absolute; color: #fff; font-size: 65px; font-weight: 600;">YOUR PARTNER TO <br> IMPROVE YOUR <br> BUSINESS</h2>
                </div>
                <div class="div-home2">
                    <p class="custom-paragraph-home">Web Developer, Mobile Apps, Ui/Ux Design</p>
                    <div class="d-flex gap-2">
                        <img src="<?= base_url('public/images/mouse.png') ?>" alt="img" width="16" height="22">
                        <p class="custom-readmore">Scroll to read more</p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!--END HOME-->

<!-- Our service -->
<section class="section" id="service">
    <div class="container position-relative">
        <div class="row">
            <h1 class="text-rotate-service">Our Services</h1>
            <div class="col-6 div-custom-web">
                <h3 class="text-head-service">We Create <br> Digital Products <br> as Your Solution</h3>
                <div>
                    <div class="d-flex div-item-img">
                        <img src="<?= base_url('public/images/bulet.png') ?>" alt="items-bulet">
                        <img src="<?= base_url('public/images/kotak.png') ?>" alt="items-kotak">
                        <img class="img-web" src="<?= base_url('public/images/web.png') ?>" alt="img-web">
                    </div>
                    <div class="div-web">
                        <h3 class="text-title-web">Pengembang Situs Web</h3>
                        <p class="paragraph-service">Website adalah langkah penting dalam menghadapi era digital yang semakin maju,
                            memungkinkan individu dan organisasi untuk menjangkau audiens global dan beradaptasi
                            dengan perubahan tren teknologi yang terus berkembang, untuk itu kami hadir untuk memenuhi
                            kebutuhan tersebut. Kami berkomitment bekerja optimal demi memberikan yang terbaik untuk kepuasan
                            klien.</p>
                        <a href="<?= base_url("/web-development") ?>" class="text-readmore">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-6 div-params-content-mobile">
                <div>
                    <div class="d-flex div-item-img">
                        <img src="<?= base_url('public/images/bulet.png') ?>" alt="items-bulet">
                        <img src="<?= base_url('public/images/kotak.png') ?>" alt="items-kotak">
                        <img src="<?= base_url('public/images/mobile.png') ?>" alt="img-mobile" style="position: absolute;top: 1.5rem;left: 6rem;">
                    </div>
                    <div class="div-mobile">
                        <h3 class="text-title-mobile">Mobile Apps Development</h3>
                        <p class="paragraph-service">Langit Digital 78 adalah Developer
                            Aplikasi yang telah berpengalaman dalam berbagai pembuatan aplikasi dimana kami telah banyak
                            menghasilkan Mobile Apps yang berkualitas internasional tentunya kami juga telah menyesuaikan
                            dengan kebutuhan dari klien yang kami kemas dengan kreativitas dari Team Langit Digital 78 yang
                            profesional sehingga menghasilkan sebuah aplikasi yang terbaik secara fungsional dan tampilan yang
                            memukau. Aplikasi yang kami buat hadir di Playstore dan Apps Store.</p>
                        <a href="<?= base_url("/mobile-development") ?>" class="text-readmore">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-6 div-params-content-cms">
                <div>
                    <div class="d-flex div-item-img">
                        <img src="<?= base_url('public/images/bulet.png') ?>" alt="items-bulet">
                        <img src="<?= base_url('public/images/kotak.png') ?>" alt="items-kotak">
                        <img src="<?= base_url('public/images/pc.png') ?>" alt="img-cms" style="position: absolute;top: 1.5rem;left: 4.4rem;">
                    </div>
                    <div class="div-cms">
                        <h3 class="text-cms">Content Management System</h3>
                        <p class="paragraph-service">CMS memungkinkan untuk pengguna mengelola,
                            membuat, dan mengubah konten digital di situs web, pengguna dapat lebih mudah mengelola konten tanpa
                            memerlukan keterampilan teknis yang mendalam, sehingga mempermudah proses pengembangan dan pemeliharaan
                            situs web.</p>
                        <a href="<?= base_url("/content-management-system") ?>" class="text-readmore">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-6 div-params-content-uiux">
                <div>
                    <div class="d-flex div-item-img">
                        <img src="<?= base_url('public/images/bulet.png') ?>" alt="items-bulet">
                        <img src="<?= base_url('public/images/kotak.png') ?>" alt="items-kotak">
                        <img src="<?= base_url('public/images/uiux.png') ?>" alt="img-uiux" style="position: absolute;top: 2rem;left: 6rem;">
                    </div>
                    <div class="div-uiux">
                        <h3 class="text-uiux">Ui / Ux Design</h3>
                        <p class="paragraph-service">Aplikasi tentunya membutuhkan tampilan UI yang menarik
                            sehingga membuat user memiliki ketertarikan berkat tampilan yang memanjakan mata, proses desain tentunya memiliki
                            perhitungan yang matang, kami juga memperhatikan UX yang user friendly sehingga perasaan dan pengalaman keseluruhan
                            pengguna saat menggunakan aplikasi. Keduanya bekerja bersama untuk menciptakan produk yang tidak hanya menarik secara
                            visual, tetapi juga mudah digunakan dan menyenangkan.</p>
                        <a href="#" class="text-readmore">READ MORE</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--END HOME-->

<!-- Our works -->
<section class="section" id="portofolio">
<div class="container position-relative mt-5" id="portofolio">
    <div class="row">
        <h1 class="text-rotation-ourwork">Our Works</h1>
        <div class="col-6" style="top: -11rem;left: 3rem;">
            <div>
                <div class="image-container">
                    <img class="img-mini" src="<?= base_url('public/images/miniCooper.png') ?>" alt="img-produk">
                    <img class="hover-image" src="<?= base_url('public/images/phone-mini.png') ?>" alt="img-produk-hover">
                </div>
                <img class="item-squer" src="<?= base_url('public/images/squer.png') ?>" alt="kotak">
                <h3>Mini Cooper</h3>
                <a href="#" class="title-porto">Mobile Apps</a>
            </div>
        </div>
        <div class="col-6" style="top: -15rem;left: 1rem;">
            <h3 style="font-weight: bold; font-size: 40px;">Many Partners trusted <br>
                us to creat them Web <br>
                Site and Mobile Apps</h3>
            <div style="margin-left: 3rem;">
                <div class="image-container">
                    <img class="img-mini" src="<?= base_url('public/images/mercedes.png') ?>" alt="img-produk">
                    <img class="hover-image" src="<?= base_url('public/images/phone-merce.png') ?>" alt="img-produk-hover">
                </div>
                <h3>Mercedes Benz W204</h3>
                <a href="#" class="title-porto">Mobile Apps</a>
            </div>
        </div>
        <div class="col-6" style="top: -20rem;left: 3rem;">
            <div>
                <div class="image-container">
                    <img class="img-mini" src="<?= base_url('public/images/koperasiYamaha.png') ?>" alt="img-produk">
                    <img class="hover-image" src="<?= base_url('public/images/phone-koperasi.png') ?>" alt="img-produk-hover">
                </div>
                <h3>Koperasi Yamaha</h3>
                <a href="#" class="title-porto">Mobile Apps</a>
            </div>
        </div>
        <div class="col-6" style="top: -14rem;left: 1rem;">
            <div style="margin-left: 3rem;">
                <div class="image-container">
                    <img class="img-mini" src="<?= base_url('public/images/hog.png') ?>" alt="img-produk">
                    <img class="hover-image" src="<?= base_url('public/images/phone-hog.png') ?>" alt="img-produk-hover">
                </div>
                <h3>HOG Anak Elang </h3>
                <a href="#" class="title-porto">Mobile Apps</a>
            </div>
        </div>
        <div class="col-6" style="top: -20rem;left: 3rem;">
            <div>
                <div class="image-container">
                    <img class="img-mini" src="<?= base_url('public/images/voucher.png') ?>" alt="img-produk">
                    <img class="hover-image" src="<?= base_url('public/images/phone-voucher.png') ?>" alt="img-produk-hover">
                </div>
                <h3>TentangVoucher</h3>
                <a href="#" class="title-porto">Web Development</a>
            </div>
        </div>
        <div class="col-6" style="top: -14rem;left: 1rem;">
            <div style="margin-left: 3rem;">
                <div class="image-container">
                    <img class="img-mini" src="<?= base_url('public/images/fspmi.png') ?>" alt="img-produk">
                    <img class="hover-image" src="<?= base_url('public/images/phone-fspmi.png') ?>" alt="img-produk-hover">
                </div>
                <h3>FSPMI Data Base</h3>
                <a href="#" class="title-porto">Content Management System</a>
            </div>
        </div>
        <h2 style="color: #293C93; font-size: 20px; font-weight:400; top: -11rem; left: 3rem;">VIEW MORE PROJECTS</h2>

    </div>
</div>
</section>
<!--END HOME-->

<!-- Our Happy Clients -->
<section class="section" id="aboutUs">
    <div class="container">
        <div class="row">
            <div class="col-12 div-params-ourClients">
                <h2 style="font-size: 40px">What Our Clients <br> Say About Us</h2>
                <img class="img-items" src="<?= base_url('public/images/squer.png') ?>" alt="items-kotak">
            </div>

            <div class="swiper mySwiper" style="top: -13rem;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <p class="stars" style="margin-left: -19rem;">⭐⭐⭐⭐⭐</p>
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

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <p class="stars" style="margin-left: -19rem;">⭐⭐⭐⭐⭐</p>
                                <p style="text-align: justify;">Kami merasa senang dan puas dengan
                                    pelayanan yang telah di berikan oleh Langit Digitial 78 dengan tim
                                    yang berkerja dengan passion mereka, semua berjalan baik dan sesuai
                                    dengan jadwal yang telah di tentukan. Saat ini aplikasi masih kami
                                    pergunakan dan semua senang karena dapat memenuhi kebutuhan dari club.
                                    Mungkin kami akan bekerja sama kembali dengan project yang berbeda.</p>
                                <div class="client-info">
                                    <img src="<?= base_url('public/images/org.png') ?>" alt="profile-testimoni" class="client-photo">
                                    <div style="text-align: left;">
                                        <h6>Alex Copen</h6>
                                        <p>Founder SKYE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <p class="stars" style="margin-left: -19rem;">⭐⭐⭐⭐⭐</p>
                                <p style="text-align: justify;">Kami merasa senang dan puas dengan
                                    pelayanan yang telah di berikan oleh Langit Digitial 78 dengan tim
                                    yang berkerja dengan passion mereka, semua berjalan baik dan sesuai
                                    dengan jadwal yang telah di tentukan. Saat ini aplikasi masih kami
                                    pergunakan dan semua senang karena dapat memenuhi kebutuhan dari club.
                                    Mungkin kami akan bekerja sama kembali dengan project yang berbeda.</p>
                                <div class="client-info">
                                    <img src="<?= base_url('public/images/org.png') ?>" alt="profile-testimoni" class="client-photo">
                                    <div style="text-align: left;">
                                        <h6>Chaerudin</h6>
                                        <p>Founder SKYE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <p class="stars" style="margin-left: -19rem;">⭐⭐⭐⭐⭐</p>
                                <p style="text-align: justify;">Kami merasa senang dan puas dengan
                                    pelayanan yang telah di berikan oleh Langit Digitial 78 dengan tim
                                    yang berkerja dengan passion mereka, semua berjalan baik dan sesuai
                                    dengan jadwal yang telah di tentukan. Saat ini aplikasi masih kami
                                    pergunakan dan semua senang karena dapat memenuhi kebutuhan dari club.
                                    Mungkin kami akan bekerja sama kembali dengan project yang berbeda.</p>
                                <div class="client-info">
                                    <img src="<?= base_url('public/images/org.png') ?>" alt="profile-testimoni" class="client-photo">
                                    <div style="text-align: left;">
                                        <h6>Ipul</h6>
                                        <p>Founder SKYE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <p class="stars" style="margin-left: -19rem;">⭐⭐⭐⭐⭐</p>
                                <p style="text-align: justify;">Kami merasa senang dan puas dengan
                                    pelayanan yang telah di berikan oleh Langit Digitial 78 dengan tim
                                    yang berkerja dengan passion mereka, semua berjalan baik dan sesuai
                                    dengan jadwal yang telah di tentukan. Saat ini aplikasi masih kami
                                    pergunakan dan semua senang karena dapat memenuhi kebutuhan dari club.
                                    Mungkin kami akan bekerja sama kembali dengan project yang berbeda.</p>
                                <div class="client-info">
                                    <img src="<?= base_url('public/images/org.png') ?>" alt="profile-testimoni" class="client-photo">
                                    <div style="text-align: left;">
                                        <h6>upin</h6>
                                        <p>Founder SKYE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination" style="bottom: 17rem;"></div>
        </div>
    </div>
</section>
<!--END HOME-->

<!-- Our Happy Clients -->
<section class="section" id="home" style="margin-top: -16rem;">
    <div class="container position-relative">
        <div class="row">
            <h1 class="text-rotation-testimonial">Testimonials</h1>
            <h2 class="text-happy-client">Our Happy Clients</h2>
            <div class="div-params-index1">
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
                    <img src="<?= base_url('public/images/LOGO-HTCI.svg') ?>" alt="img-logo" style="width: 95px; height: 44px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/LOGO-KOPERASI-YAMAHA-PNG.svg') ?>" alt="img-logo" style="width: 77px; height: 76px;">
                </div>
                <div class="div-logo-index1">
                    <img src="<?= base_url('public/images/MUSLIMAPP-LOGO.svg') ?>" alt="img-logo" style="width: 93px; height: 56px;">
                </div>
            </div>
            <h2 style="text-align: center; font-size: 40px; top: 3rem;">Our Location</h2>
        </div>
    </div>
</section>
<!--END HOME-->

<!-- START FOOTER -->
<footer class="section footer footer-custom-index1">
    <div class="container div-custom-container">
        <div class="row">
            <div class="d-flex align-content-center" style="gap: 30px;">
                <img src="<?= base_url('public/images/JAKARTA2.png') ?>" alt="jakarta" style="left: 0; bottom: 0;">
                <!-- <p style="font-size: 171px; font-weight: 400; color:#fff; font-family: 'Gilroy-Heavy', Arial, sans-serif;">JAKARTA</p> -->
                <div>
                    <p style="color: #fff; font-weight: bold; font-size: 15.4px; margin-bottom: -1px;">PT NARA KAHAM RAYA INVESTAMA</p>
                    <p style="color: #fff; font-size: 15.4px; font-weight: 400;">JL. Kemang Selatan, GG Bambu Kuning No.3B, Desa
                        Kelurahan Cilandak Timur, Kec.
                        Pasar Minggu, Kota Adm. Jakarta Selatan, Provinsi <br>
                        DKI Jakarta, 12560</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->


<!--start back-to-top-->
<button onclick="topFunction()" id="back-to-top">
    <i class="mdi mdi-arrow-up"></i>
</button>
<!--end back-to-top-->

<?= view('layouts/footer'); ?>
<?= view('layouts/script'); ?>
<script>
    var swiper = new Swiper('.mySwiper', {
        loop: true, // Slider loop
        slidesPerView: 1,
        // spaceBetween: 20, 
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // Membuat pagination interaktif
        },
        // autoplay: {
        //     delay: 5000, // Otomatis geser tiap 5 detik
        //     disableOnInteraction: false,
        // },
    });
</script>