<?= view('layouts/header'); ?>
<?= view('layouts/navBar'); ?>

<style>
    .customNav {
        flex-grow: 0 !important;
    }

    .image-container .hover-image {
        display: none;
        position: relative;
        z-index: 3;
    }

    /* Tampilkan gambar hover ketika di-hover */
    .image-container:hover .img-mini {
        display: none;
        position: relative;
        z-index: 3;
    }

    .image-container:hover .hover-image {
        display: block;
        position: relative;
        z-index: 3;
    }

    .item-squer{
        position: absolute; 
        top: -1rem; 
        /* z-index: 1 !important; */
    }
</style>

<!--Menu Modal -->
<!-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-close">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">
                    <div class="modal-body">
                        <div class="mb-4">
                            <h4 class="fw-semibold mb-0">Sign Up</h4>
                            <p class="text-muted">Already Have an account? <a href="javascript:void(0)">Log in here</a> </p>
                        </div>
                        <form>
                            <div class="mb-3 serch-form">
                                <label class="mb-2" for="Email">Email</label>
                                <input name="email" id="email" type="email" class="form-control" placeholder="Email">
                                <span class="input-group-text"><i class="mdi mdi-email-outline"></i></span>
                            </div>
                            <div class="mb-2 serch-form">
                                <label class="mb-2" for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter Password">
                                <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                            </div>
                            <div class="text-end">
                                <a href="recoverpw.html" class="text-muted fs-13"><i class="mdi mdi-lock me-1"></i> Forgot password?</a>
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-primary w-100" type="submit">Log in</button>
                            </div>
                        </form>
                        <p class="text-muted pt-3 mb-0">By signing up You agree to our
                            <a href="javascript:void(0)" class="text-muted"><u>Privacy Policy</u></a> and <a href="" class="text-muted"><u>Terms of Service</u></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- end modal -->

<!--START Hero-->
<section class="section" id="home" style="background-color:#fff !important">
    <div class="container">
        <div class="row align-items-center">
            <div>
                <img src="<?= base_url('public/images/home.png') ?>" alt="home" style="width: 100%; height: 597px !important; filter: brightness(55%)">
                <div class="d-flex">
                    <div style="position: absolute; bottom: 10px;">
                        <img src="<?= base_url('public/images/text-home.png') ?>" alt="textHome" style="padding-left: 2rem;padding-bottom: 2rem;">
                    </div>
                    <div style="position: absolute; right: 10px; bottom: 0px; background-color: #fff; height: 7rem; width: 34rem; padding-top: 1.5rem; padding-left: 1.5rem;">
                        <p style="margin-bottom: -1px; font-size: 19px; color:grey">Web Developer, Mobile Apps, Ui/Ux Design</p>
                        <div class="d-flex" style="gap: 10px;">
                            <img src="<?= base_url('public/images/mouse.png') ?>" alt="img" width="16" height="22">
                            <p style="color: #293C93; font-size: 17px;">Scroll to read more</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END HOME-->

<!-- Our service -->
<section class="section" id="home">
    <div class="container">
        <div class="row">
            <h1 style="position: absolute; transform: rotate(-90deg); left: 35rem; top: -10rem; font-size: 100px; color:#293C93">Our Services</h1>
            <div class="col-6" style="top: -87px;left: 3rem;">
                <h3 style="font-weight: bold; font-size: 40px;">We Create <br> Digital Products <br> as Your Solution</h3>
                <div>
                    <div class="d-flex" style="gap: 20px; margin-top: 2rem; margin-left: 4rem;">
                        <img src="<?= base_url('public/images/bulet.png') ?>" alt="bulet">
                        <img src="<?= base_url('public/images/kotak.png') ?>" alt="kotak">
                        <img src="<?= base_url('public/images/web.png') ?>" alt="web" style="position: absolute;top: 12.5rem;left: 5.5rem;">
                    </div>
                    <h3 style="margin-left: 4.5rem">Pengembang Situs Web</h3>
                    <p style="color: grey; text-align: left; max-width: 32rem;">Website adalah langkah penting dalam menghadapi era digital yang semakin maju,
                        memungkinkan individu dan organisasi untuk menjangkau audiens global dan beradaptasi
                        dengan perubahan tren teknologi yang terus berkembang, untuk itu kami hadir untuk memenuhi
                        kebutuhan tersebut. Kami berkomitment bekerja optimal demi memberikan yang terbaik untuk kepuasan
                        klien.</p>
                    <a href="#" style="color: #293C93; font-size: 14px; font-weight: 600;">READ MORE</a>
                </div>
            </div>
            <div class="col-6" style="top: -120px;left: 1rem;">
                <div>
                    <div class="d-flex" style="gap: 20px; margin-top: 2rem; margin-left: 4rem;">
                        <img src="<?= base_url('public/images/bulet.png') ?>" alt="bulet">
                        <img src="<?= base_url('public/images/kotak.png') ?>" alt="kotak">
                        <img src="<?= base_url('public/images/mobile.png') ?>" alt="web" style="position: absolute;top: 1.5rem;left: 6rem;">
                    </div>
                    <h3 style="margin-left: 3.5rem">Mobile Apps Development</h3>
                    <p style="color: grey; text-align: left; max-width: 30rem;">Langit Digital 78 adalah Developer
                        Aplikasi yang telah berpengalaman dalam berbagai pembuatan aplikasi dimana kami telah banyak
                        menghasilkan Mobile Apps yang berkualitas internasional tentunya kami juga telah menyesuaikan
                        dengan kebutuhan dari klien yang kami kemas dengan kreativitas dari Team Langit Digital 78 yang
                        profesional sehingga menghasilkan sebuah aplikasi yang terbaik secara fungsional dan tampilan yang
                        memukau. Aplikasi yang kami buat hadir di Playstore dan Apps Store.</p>
                    <a href="#" style="color: #293C93; font-size: 14px; font-weight: 600;">READ MORE</a>
                </div>
            </div>
            <div class="col-6" style="top: -50px;left: 3rem;">
                <div>
                    <div class="d-flex" style="gap: 20px; margin-top: 2rem; margin-left: 4rem;">
                        <img src="<?= base_url('public/images/bulet.png') ?>" alt="bulet">
                        <img src="<?= base_url('public/images/kotak.png') ?>" alt="kotak">
                        <img src="<?= base_url('public/images/pc.png') ?>" alt="web" style="position: absolute;top: 1.5rem;left: 4.4rem;">
                    </div>
                    <h3 style="margin-left: 2.5rem">Content Management System</h3>
                    <p style="color: grey; text-align: left; max-width: 32rem;">CMS memungkinkan untuk pengguna mengelola,
                        membuat, dan mengubah konten digital di situs web, pengguna dapat lebih mudah mengelola konten tanpa
                        memerlukan keterampilan teknis yang mendalam, sehingga mempermudah proses pengembangan dan pemeliharaan
                        situs web.</p>
                    <a href="#" style="color: #293C93; font-size: 14px; font-weight: 600;">READ MORE</a>
                </div>
            </div>
            <div class="col-6" style="top: -130px;left: 1rem;">
                <div>
                    <div class="d-flex" style="gap: 20px; margin-top: 0rem; margin-left: 4rem;">
                        <img src="<?= base_url('public/images/bulet.png') ?>" alt="bulet">
                        <img src="<?= base_url('public/images/kotak.png') ?>" alt="kotak">
                        <img src="<?= base_url('public/images/uiux.png') ?>" alt="web" style="position: absolute;top: 2rem;left: 6rem;">
                    </div>
                    <h3 style="margin-left: 7.5rem">Ui / Ux Design</h3>
                    <p style="color: grey; text-align: left; max-width: 32rem;">Aplikasi tentunya membutuhkan tampilan UI yang menarik
                        sehingga membuat user memiliki ketertarikan berkat tampilan yang memanjakan mata, proses desain tentunya memiliki
                        perhitungan yang matang, kami juga memperhatikan UX yang user friendly sehingga perasaan dan pengalaman keseluruhan
                        pengguna saat menggunakan aplikasi. Keduanya bekerja bersama untuk menciptakan produk yang tidak hanya menarik secara
                        visual, tetapi juga mudah digunakan dan menyenangkan.</p>
                    <a href="#" style="color: #293C93; font-size: 14px; font-weight: 600;">READ MORE</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!--END HOME-->

<!-- Our works -->
<section class="section" id="home">
    <div class="container">
        <div class="row">
            <h1 style="position: absolute; transform: rotate(-90deg); right: 36.5rem; top: -10rem; font-size: 100px; color:#293C93">Our Works</h1>
            <div class="col-6" style="top: -11rem;left: 3rem;">
                <div>
                    <div class="image-container" style="margin-top: 2rem; margin-bottom: 1rem; margin-right: 9rem;">
                        <img class="img-mini" src="<?= base_url('public/images/miniCooper.png') ?>" alt="bulet">
                        <img class="hover-image" src="<?= base_url('public/images/phone-mini.png') ?>" alt="web">
                        <img class="item-squer" src="<?= base_url('public/images/squer.png') ?>" alt="kotak">
                    </div>
                    <h3>Mini Cooper</h3>
                    <a href="#" style="color: #293C93; font-size: 16px; font-weight: 400;">Mobile Apps</a>
                </div>
            </div>
            <div class="col-6" style="top: -15rem;left: 1rem;">
                <h3 style="font-weight: bold; font-size: 40px;">Many Partners trusted <br>
                    us to creat them Web <br>
                    Site and Mobile Apps</h3>
                <div style="margin-left: 3rem;">
                    <div class="image-container" style="margin-top: 2rem; margin-bottom: 1rem; margin-right: 9rem;">
                        <img class="img-mini" src="<?= base_url('public/images/mercedes.png') ?>" alt="bulet">
                        <img class="hover-image" src="<?= base_url('public/images/phone-merce.png') ?>" alt="web">
                    </div>
                    <h3>Mercedes Benz W204</h3>
                    <a href="#" style="color: #293C93; font-size: 16px; font-weight: 400;">Mobile Apps</a>
                </div>
            </div>
            <div class="col-6" style="top: -20rem;left: 3rem;">
                <div>
                    <div class="image-container" style="margin-top: 2rem; margin-bottom: 1rem; margin-right: 9rem;">
                        <img class="img-mini" src="<?= base_url('public/images/koperasiYamaha.png') ?>" alt="bulet">
                        <img class="hover-image" src="<?= base_url('public/images/phone-koperasi.png') ?>" alt="web">
                    </div>
                    <h3>Koperasi Yamaha</h3>
                    <a href="#" style="color: #293C93; font-size: 16px; font-weight: 400;">Mobile Apps</a>
                </div>
            </div>
            <div class="col-6" style="top: -14rem;left: 1rem;">
                <div style="margin-left: 3rem;">
                    <div class="image-container" style="margin-top: 2rem; margin-bottom: 1rem; margin-right: 9rem;">
                        <img class="img-mini" src="<?= base_url('public/images/hog.png') ?>" alt="bulet">
                        <img class="hover-image" src="<?= base_url('public/images/phone-hog.png') ?>" alt="web">
                    </div>
                    <h3>HOG Anak Elang </h3>
                    <a href="#" style="color: #293C93; font-size: 16px; font-weight: 400;">Mobile Apps</a>
                </div>
            </div>
            <div class="col-6" style="top: -20rem;left: 3rem;">
                <div>
                    <div class="image-container" style="margin-top: 2rem; margin-bottom: 1rem; margin-right: 9rem;">
                        <img class="img-mini" src="<?= base_url('public/images/voucher.png') ?>" alt="bulet">
                        <img class="hover-image" src="<?= base_url('public/images/phone-voucher.png') ?>" alt="web">
                    </div>
                    <h3>TentangVoucher</h3>
                    <a href="#" style="color: #293C93; font-size: 16px; font-weight: 400;">Web Development</a>
                </div>
            </div>
            <div class="col-6" style="top: -14rem;left: 1rem;">
                <div style="margin-left: 3rem;">
                    <div class="image-container" style="margin-top: 2rem; margin-bottom: 1rem; margin-right: 9rem;">
                        <img class="img-mini" src="<?= base_url('public/images/fspmi.png') ?>" alt="bulet">
                        <img class="hover-image" src="<?= base_url('public/images/phone-fspmi.png') ?>" alt="web">
                    </div>
                    <h3>FSPMI Data Base</h3>
                    <a href="#" style="color: #293C93; font-size: 16px; font-weight: 400;">Content Management System</a>
                </div>
            </div>
            <h2 style="color: #293C93; font-size: 20px; font-weight:400; top: -11rem; left: 3rem;">VIEW MORE PROJECTS</h2>

        </div>
    </div>
</section>
<!--END HOME-->

<!-- Our Happy Clients -->
<section class="section" id="home">
    <div class="container">
        <div class="row">
            <div class="col-12" style="top: -250px; left: 3.5rem;">
                <h2 style="font-size: 40px">What Our Clients <br> Say About Us</h2>
            </div>
        </div>
    </div>
</section>
<!--END HOME-->

<!-- Our Happy Clients -->
<section class="section" id="home">
    <div class="container">
        <div class="row">
            <h1 style="position: absolute; transform: rotate(-90deg); left: 35rem; top: -29rem; font-size: 100px; color:#293C93">Testimonials</h1>
            <h2 style="text-align: center; font-size: 40px">Our Happy Clients</h2>
            <div style=" display: flex; padding: 0 3rem; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 1rem;">
                <div style="width: 118px; height: 119px; display: flex; align-items: center;">
                    <img src="<?= base_url('public/images/AMULET.png') ?>" alt="logo">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/CEK-PINJOL.png') ?>" alt="logo">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/FASI.png') ?>" alt="logo">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/FSPMI1.png') ?>" alt="logo" style="width: 117px; height: 119px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/LOGO-TOKOBONA.png') ?>" alt="logo" style="width: 117px; height: 32px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/LOGO-IKAL.png') ?>" alt="logo" style="width: 82px; height: 82px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/SALAM-LESTARI.png') ?>" alt="logo" style="width: 131px; height: 131px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/HOG1.png') ?>" alt="logo" style="width: 118px; height: 117px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/KOSGORO.png') ?>" alt="logo" style="width: 119px; height: 117px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/MERCEDES1.png') ?>" alt="logo" style="width: 119px; height: 117px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/MINI-COOPER.png') ?>" alt="logo" style="width: 117px; height: 117px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/LINGKUNGANKU.png') ?>" alt="logo" style="width: 104px; height: 41px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/LOGO-MHS.png') ?>" alt="logo" style="width: 65px; height: 62px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/PEPABRI-LOGO.png') ?>" alt="logo" style="width: 75px; height: 75px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/PPI-DUNIA.png') ?>" alt="logo" style="width: 118px; height: 120px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/SAHABAT-DISABILITAS.png') ?>" alt="logo" style="width: 119px; height: 120px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/SAKA(1).png') ?>" alt="logo" style="width: 119px; height: 120px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/STARLET.png') ?>" alt="logo" style="width: 118px; height: 119px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/LOGO-HTCI.png') ?>" alt="logo" style="width: 95px; height: 44px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/LOGO-KOPERASI-YAMAHA.png') ?>" alt="logo" style="width: 77px; height: 76px;">
                </div>
                <div style="width: 118px; height: 119px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= base_url('public/images/MUSLIMAPP-LOGO.png') ?>" alt="logo" style="width: 93px; height: 56px;">
                </div>
            </div>
            <h2 style="text-align: center; font-size: 40px">Our Location</h2>
        </div>
    </div>
</section>
<!--END HOME-->

<!-- <div class="container-fluid">
        <div class="row">
            <div class="home-shape-arrow">
                <a href="#features" class="mouse-down">
                    <svg class="arrows">
                        <path class="a1" d="M0 0 L25 22 L50 0"></path>
                        <path class="a2" d="M0 15 L25 40 L50 15"></path>
                        <path class="a3" d="M0 30 L25 54 L50 30"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div> -->

<!-- START FOOTER -->
<footer class="section footer" style="background-image: url('public/images/jakarta.png'); height: 647px; background-repeat: no-repeat; background-size: cover; background-position: center; filter: brightness(87%)">
    <div class="container" style="position: absolute; bottom: -24px; left: -20px; padding: 20px;">
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

<?= view('layouts/footer'); ?>


<!--start back-to-top-->
<button onclick="topFunction()" id="back-to-top">
    <i class="mdi mdi-arrow-up"></i>
</button>
<!--end back-to-top-->

<?= view('layouts/script'); ?>