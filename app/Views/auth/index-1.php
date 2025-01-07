<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Langit Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap v5.3.2 Landing Page Template" />
    <meta name="keywords" content="bootstrap v5.3.2, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />

    <link rel="shortcut icon" href="<?= base_url('public/assets/images/logo-langit.png') ?>" />

    <!-- fevicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>" type="text/css" />

    <!-- animation -->
    <link rel="stylesheet" href="<?= base_url('public/css/aos.css') ?>" />

    <!-- slider -->
    <link rel="stylesheet" href="<?= base_url('public/css/swiper-bundle.min.css') ?>" />

    <!-- Icon -->
    <link rel="stylesheet" href="<?= base_url('public/css/materialdesignicons.min.css') ?>" type="text/css" />

    <link rel="stylesheet" href="<?= base_url('public/css/boxicons.min.css') ?>" type="text/css" />

    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('public/css/style.min.css') ?>" type="text/css" />
</head>
<style>
    .customNav {
        flex-grow: 0 !important;
    }
</style>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky" id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand text-uppercase" href="index-1.html">
                <img class="logo-light" src="<?= base_url('public/assets/images/logo-langit.png') ?>" alt="" height="40">
                <img class="logo-dark" src="<?= base_url('public/assets/images/logo-langit.png') ?>" alt="" height="40">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
                <!-- toggle button -->
            </button>

            <div class="collapse navbar-collapse customNav" id="navbarCollapse">
                <ul class="navbar-nav" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-3 mb-lg-0" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div><!-- End container -->
    </nav>
    <!-- End Navbar -->

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
    <!-- <section class="section home home-1" id="home" style="background-image: url('images/home-bg.png');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-10">
                    <div class="mt-4">
                        <h1 class="head-line text-uppercase">do more for less</h1>
                        <p class="home-caption text-muted mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dignssimos provident requste uisquam quia vel sint the mollitia the Internet tend to repeat predefined chunks as necessary, making.</p>
                        <div class="mt-5">
                            <a href="javascript:void(0)" class="btn btn-primary me-3">Get Started</a>
                            <a href="javascript:void(0)" class="btn btn-white play-button text-center shadow-sm" data-bs-toggle="modal"
                                data-bs-target="#watchvideomodal"><i class="mdi mdi-play align-middle home-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="watchvideomodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                    <div class="modal-content home-modal">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <video id="VisaChipCardVideo" class="video-box" controls>
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
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
                        <div class="d-flex" style="gap: 20px; margin-top: 2rem; margin-bottom: 1rem">
                            <img src="<?= base_url('public/images/miniCooper.png') ?>" alt="bulet" style="z-index: 2;">
                            <img src="<?= base_url('public/images/squer.png') ?>" alt="web" style="position: absolute;top: -0.6rem;">
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
                        <div class="d-flex" style="gap: 20px; margin-top: 2rem; margin-bottom: 1rem">
                            <img src="<?= base_url('public/images/mercedes.png') ?>" alt="bulet" style="z-index: 2;">
                            <!-- <img src="<?= base_url('public/images/squer.png') ?>" alt="web" style="position: absolute;top: -0.6rem;"> -->
                        </div>
                        <h3>Mercedes Benz W204</h3>
                        <a href="#" style="color: #293C93; font-size: 16px; font-weight: 400;">Mobile Apps</a>
                    </div>
                </div>
                <div class="col-6" style="top: -20rem;left: 3rem;">
                    <div>
                        <div class="d-flex" style="gap: 20px; margin-top: 2rem; margin-bottom: 1rem">
                            <img src="<?= base_url('public/images/koperasiYamaha.png') ?>" alt="bulet" style="z-index: 2;">
                            <!-- <img src="<?= base_url('public/images/squer.png') ?>" alt="web" style="position: absolute;top: -0.6rem;"> -->
                        </div>
                        <h3>Koperasi Yamaha</h3>
                        <a href="#" style="color: #293C93; font-size: 16px; font-weight: 400;">Mobile Apps</a>
                    </div>
                </div>
                <div class="col-6" style="top: -14rem;left: 1rem;">
                    <div style="margin-left: 3rem;">
                        <div class="d-flex" style="gap: 20px; margin-top: 2rem; margin-bottom: 1rem">
                            <img src="<?= base_url('public/images/hog.png') ?>" alt="bulet" style="z-index: 2;">
                            <!-- <img src="<?= base_url('public/images/squer.png') ?>" alt="web" style="position: absolute;top: -0.6rem;"> -->
                        </div>
                        <h3>HOG Anak Elang </h3>
                        <a href="#" style="color: #293C93; font-size: 16px; font-weight: 400;">Mobile Apps</a>
                    </div>
                </div>
                <div class="col-6" style="top: -20rem;left: 3rem;">
                    <div>
                        <div class="d-flex" style="gap: 20px; margin-top: 2rem; margin-bottom: 1rem">
                            <img src="<?= base_url('public/images/voucher.png') ?>" alt="bulet" style="z-index: 2;">
                            <!-- <img src="<?= base_url('public/images/squer.png') ?>" alt="web" style="position: absolute;top: -0.6rem;"> -->
                        </div>
                        <h3>TentangVoucher</h3>
                        <a href="#" style="color: #293C93; font-size: 16px; font-weight: 400;">Web Development</a>
                    </div>
                </div>
                <div class="col-6" style="top: -14rem;left: 1rem;">
                    <div style="margin-left: 3rem;">
                        <div class="d-flex" style="gap: 20px; margin-top: 2rem; margin-bottom: 1rem">
                            <img src="<?= base_url('public/images/fspmi.png') ?>" alt="bulet" style="z-index: 2;">
                            <!-- <img src="<?= base_url('public/images/squer.png') ?>" alt="web" style="position: absolute;top: -0.6rem;"> -->
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

    <!--start Features -->
    <!-- <section class="section features" id="features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <div class="heading">
                            <h2 class="mb-0">Features</h2>
                            <div class="box first">
                            </div>
                        </div>
                        <p class="text-muted">All the features. No hidden layers. </p>
                    </div>
                </div>
            </div>

            <div class="row g-3 gx-sm-5">
                <div class="col-lg-4 col-md-6">
                    <div class="features-box mt-4 p-5">
                        <div class="avatar-sm features-icon">
                            <span class="avatar-title gradients">
                                <i class="mdi mdi-file-document-edit-outline"></i>
                            </span>
                        </div>
                        <h5 class="features-title fs-5 fw-bold">Jupyter Notebook</h5>
                        <p class="mt-4 mb-0 text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="features-box mt-4 p-5">
                        <div class="avatar-sm features-icon">
                            <span class="avatar-title gradients">
                                <i class="mdi mdi-chart-box-plus-outline"></i>
                            </span>
                        </div>
                        <h5 class="features-title fs-5 fw-bold">Distributed Training</h5>
                        <p class="mt-4 mb-0 text-muted">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz
                            graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="features-box mt-4 p-5">
                        <div class="avatar-sm features-icon">
                            <span class="avatar-title gradients">
                                <i class="mdi mdi-chemical-weapon"></i>
                            </span>
                        </div>
                        <h5 class="features-title fs-5 fw-bold">Experiment Parallel</h5>
                        <p class="mt-4 mb-0 text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself
                            transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="features-box mt-4 p-5">
                        <div class="avatar-sm features-icon">
                            <span class="avatar-title gradients">
                                <i class="mdi mdi-connection"></i>
                            </span>
                        </div>
                        <h5 class="features-title fs-5 fw-bold">Tensor Board</h5>
                        <p class="mt-4 mb-0 text-muted">A wonderful serenity has taken possession of my entire soul, like these sweet
                            mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="features-box mt-4 p-5">
                        <div class="avatar-sm features-icon">
                            <span class="avatar-title gradients">
                                <i class="mdi mdi-arrow-decision-outline"></i>
                            </span>
                        </div>
                        <h5 class="features-title fs-5 fw-bold">Fine-Tunes Performance</h5>
                        <p class="mt-4 mb-0 text-muted">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrovee.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="features-box mt-4 p-5">
                        <div class="avatar-sm features-icon">
                            <span class="avatar-title gradients">
                                <i class="mdi mdi-lightning-bolt"></i>
                            </span>
                        </div>
                        <h5 class="features-title fs-5 fw-bold">Easy Deployment</h5>
                        <p class="mt-4 mb-0 text-muted">The European languages are members of the same family. Their separate
                            existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages</p>
                    </div>
                </div>
            </div>

            <div class="mt-5 text-center">
                <a href="javascript:void(0)" class="btn btn-primary text-uppercase">Start for free</a>
            </div>
        </div>
    </section> -->

    <!-- Start Reviews -->
    <!-- <section class="section reviews" id="review">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <div class="heading">
                            <h2 class="mb-0 text-white">Reviews</h2>
                            <div class="box first">
                            </div>
                        </div>
                        <p class="text-white-50">What Our Customers Are Saying. </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <a href="#collapseOne" class="accordion-button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="d-flex align-items-center">
                                        <span class="flex-shrink-0">
                                            <img src="images/user/user.png" class="avatar-md rounded-circle" alt="">
                                        </span>
                                        <div class="flex-grow-1 ms-4">
                                            <h6 class="mb-0 text-primary fw-bold">Alan <span class="text-black">Macedo</span> </h6>
                                            <div class="flex-shrink-0">
                                                <span class="mb-0 fs-14 text-muted">47 Follower,69 Reviews</span>
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="fs-15">
                                        <i class="bx bxs-quote-alt-left fs-4"></i>
                                        Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc,
                                        litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun
                                        vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores.
                                        At solmen va esser necessi far
                                    </p>
                                    <ul class="list-unstyled">
                                        <li class="list-inline-item">
                                            <a class="btn btn-soft-primary clinte-btn" href="javascript:void(0)">
                                                <i class="mdi mdi-comment-multiple-outline me-1"></i>Public comment
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn btn-soft-primary clinte-btn" href="javascript:void(0)">
                                                <i class="mdi mdi-email-multiple-outline me-1"></i>Direct message
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <a href="#collapseTwo" class="accordion-button collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="d-flex align-items-center">
                                        <span class="flex-shrink-0">
                                            <img src="images/user/user1.png" class="avatar-md rounded-circle" alt="">
                                        </span>
                                        <div class="flex-grow-1 ms-4">
                                            <h6 class="mb-0 text-primary fw-bold">Erla <span class="text-black">Petursdottir</span> </h6>
                                            <div class="flex-shrink-0">
                                                <span class="mb-0 fs-14 text-muted">87 Follower,79 Reviews</span>
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                                <div class="accordion-body">
                                    <p class="fs-15">
                                        <i class="bx bxs-quote-alt-left fs-4"></i>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                        ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                                        fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis
                                    </p>
                                    <ul class="list-unstyled">
                                        <li class="list-inline-item">
                                            <a class="btn btn-soft-primary clinte-btn" href="javascript:void(0)">
                                                <i class="mdi mdi-comment-multiple-outline me-1"></i>Public comment
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn btn-soft-primary clinte-btn" href="javascript:void(0)">
                                                <i class="mdi mdi-email-multiple-outline me-1"></i>Public comment
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <a href="#collapseThree" class="accordion-button collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="d-flex align-items-center">
                                        <span class="flex-shrink-0">
                                            <img src="images/user/user2.png" class="avatar-md rounded-circle" alt="">
                                        </span>
                                        <div class="flex-grow-1 ms-4">
                                            <h6 class="mb-0 text-primary fw-bold">Palmi <span class="text-black">Arnason</span> </h6>
                                            <div class="flex-shrink-0">
                                                <span class="mb-0 fs-14 text-muted">78 Follower,89 Reviews</span>
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                                <div class="accordion-body">
                                    <p class="fs-15">
                                        <i class="bx bxs-quote-alt-left fs-4"></i>
                                        The European languages are members of the same family. Their separate existence is a myth. For science, music,
                                        sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and
                                        their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay
                                        expensive translators. To achieve this
                                    </p>
                                    <ul class="list-unstyled">
                                        <li class="list-inline-item">
                                            <a class="btn btn-soft-primary clinte-btn" href="javascript:void(0)">
                                                <i class="mdi mdi-comment-multiple-outline me-1"></i>Public comment
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn btn-soft-primary clinte-btn" href="javascript:void(0)">
                                                <i class="mdi mdi-email-multiple-outline me-1"></i>Public comment
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour">
                                <a href="#collapseFour" class="accordion-button collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                    <div class="d-flex align-items-center">
                                        <span class="flex-shrink-0">
                                            <img src="images/user/user6.png" class="avatar-md rounded-circle" alt="">
                                        </span>
                                        <div class="flex-grow-1 ms-4">
                                            <h6 class="mb-0 text-primary fw-bold">Charlotte <span class="text-black">Charpentier</span> </h6>
                                            <div class="flex-shrink-0">
                                                <span class="mb-0 fs-14 text-muted">44 Follower,53 Reviews</span>
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="link">
                                                            <i class="mdi mdi-star"></i>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                                <div class="accordion-body">
                                    <p class="fs-15">
                                        <i class="bx bxs-quote-alt-left fs-4"></i>
                                        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated
                                        they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their
                                        place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts.
                                    </p>
                                    <ul class="list-unstyled">
                                        <li class="list-inline-item">
                                            <a class="btn btn-soft-primary clinte-btn" href="javascript:void(0)">
                                                <i class="mdi mdi-comment-multiple-outline me-1"></i>Public comment
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn btn-soft-primary clinte-btn" href="javascript:void(0)">
                                                <i class="mdi mdi-email-multiple-outline me-1"></i>Public comment
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Reviews -->

    <!-- Start Team -->
    <!-- <section class="section team" id="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="heading mb-3">
                        <h2 class="mb-0">Our Team</h2>
                        <div class="box first">
                        </div>
                    </div>
                    <div class="swiper mySwiper6">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="team-img">
                                            <img class="img-fluid" src="images/team/team1.png" alt="">
                                            <div class="img-text">
                                                <h6>Marta Matković</h6>
                                                <span class="text-white-50">Web designer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="card h-100">
                                            <div class="team-heading">
                                                <div data-aos="fade-left" data-aos-duration="2000">
                                                    <h6>Marta</h6>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-text">
                                                    <h6>Designation</h6>
                                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla</p>
                                                </div>
                                                <ul class="inline-item team-icon">
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="1000">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="1800">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="2500">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-instagram"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="3000">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-google-play"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="team-img">
                                            <img class="img-fluid" src="images/team/team2.png" alt="">
                                            <div class="img-text">
                                                <h6>Silvija Vučković</h6>
                                                <span class="text-white-50">Web devloper</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="card h-100">
                                            <div class="team-heading">
                                                <div data-aos="fade-left" data-aos-duration="2000">
                                                    <h6>Silvija</h6>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-text">
                                                    <h6>Designation</h6>
                                                    <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                                        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit</p>
                                                </div>
                                                <ul class="inline-item team-icon">
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="1000">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="1800">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="2500">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-instagram"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="3000">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-google-play"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="team-img">
                                            <img class="img-fluid" src="images/team/team3.png" alt="">
                                            <div class="img-text">
                                                <h6>Laura Rodrigues Pereira</h6>
                                                <span class="text-white-50">Team Leader</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="card h-100">
                                            <div class="team-heading">
                                                <div data-aos="fade-left" data-aos-duration="2000">
                                                    <h6>Laura</h6>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-text">
                                                    <h6>Designation</h6>
                                                    <p class="text-muted">But I must explain to you how all this mistaken idea of denouncing pleasure and
                                                        praising pain was born and I will give you a complete account of the system, and expound the actual
                                                        teachings of the great explorer of the truth, the master-builder of human happiness. No</p>
                                                </div>
                                                <ul class="inline-item team-icon">
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="1000">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="1800">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="2500">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-instagram"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="3000">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-google-play"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="team-img">
                                            <img class="img-fluid" src="images/team/team4.png" alt="">
                                            <div class="img-text">
                                                <h6>Arthur Hjálmarsson</h6>
                                                <span class="text-white-50">CEO</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="card h-100">
                                            <div class="team-heading">
                                                <div data-aos="fade-left" data-aos-duration="2000">
                                                    <h6>Arthur</h6>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-text">
                                                    <h6>Designation</h6>
                                                    <p class="text-muted">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.
                                                        Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li
                                                        grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de</p>
                                                </div>
                                                <ul class="inline-item team-icon">
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="1000">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="1800">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="2500">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-instagram"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div data-aos="fade-up" data-aos-duration="3000">
                                                            <a href="javascript:void(0)">
                                                                <i class="mdi mdi-google-play"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Team -->

    <!--CTA-->
    <!-- <section class="section cta">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center text-white">
                        <h1 class="lh-base">Start controlling your contributions, <br>together with GititBack !</h1>
                        <p class="mt-4 lh-base text-white-50">The generated lorem is therefore always free trial from
                            explore we denounce <br> with righteous indignation and dislike men </p>
                        <div class="mt-5">
                            <a href="javascript:void(0)" class="btn btn-primary"><i class="mdi mdi-github fs-16"></i>
                                Sign in with Github Trial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End cta -->

    <!-- START pricing -->
    <!-- <section class="section pricing" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <div class="heading">
                            <h2 class="mb-0">Pricing</h2>
                            <div class="box first"></div>
                        </div>
                        <p class="text-muted">Pays for itself with with one saved invoice.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="toggle-btn text-center pb-5 d-flex align-items-center justify-content-center">
                        <div class="me-1 me-md-3 toggle-text">Monthly</div>
                        <label class="switch">
                            <input type="checkbox" id="checbox" onclick="check()" />
                            <span class="slider round rounded-pill"></span>
                        </label>
                        <div class="ms-1 ms-md-3 toggle-text">Annually</div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-10">
                    <div class="row g-md-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="card pricing-box h-100">
                                <div class="card-body p-0">
                                    <div class="card-header">
                                        <h6 class="fw-normal mb-3 text-white">Free Plan</h6>
                                        <div class="d-flex align-items-end justify-content-start">
                                            <div class="flex-shrink-0 pricing-price">
                                                <h1 class="mb-0 text1 text-white">$0</h1>
                                                <h1 class="mb-0 text2 text-white">$0</h1>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 ms-1 fs-14 text-white">/ Life Time</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <ul class="list-unstyled">
                                            <li class="list-text">
                                                <i class="mdi mdi-checkbox-marked-circle">
                                                    <span>Today Planing & view</span>
                                                </i>
                                            </li>
                                            <li class="list-text">
                                                <i class="mdi mdi-checkbox-marked-circle">
                                                    <span>Checklist templates</span>
                                                </i>
                                            </li>
                                            <li class="list-text">
                                                <i class="mdi mdi-checkbox-marked-circle">
                                                    <span>Clander intergation</span>
                                                </i>
                                            </li>
                                            <li class="list-text">
                                                <i class="mdi mdi-checkbox-marked-circle">
                                                    <span>Browser extension</span>
                                                </i>
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary pricing-btn rounded-pill">Get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card pricing-box h-100 active-price">
                                <div class="card-body p-0">
                                    <div class="positin-relative">
                                        <span class="lable-name text-uppercase">Popular</span>
                                    </div>
                                    <div class="card-header">
                                        <h6 class="fw-normal mb-3 text-white">Besic Plan</h6>
                                        <div class="d-flex align-items-end justify-content-start">
                                            <div class="flex-shrink-0 pricing-price">
                                                <h1 class="mb-0 text1 text-white">$30</h1>
                                                <h1 class="mb-0 text2 text-white">$10</h1>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 ms-1 fs-14 text2 text-white">/ Per Month</p>
                                                <p class="mb-0 ms-1 fs-14 text1 text-white">/ Annually</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <ul class="list-unstyled">
                                            <li class="list-text">
                                                <i class="mdi mdi-checkbox-marked-circle">
                                                    <span>Everithing in Free</span>
                                                </i>
                                            </li>
                                            <li class="list-text">
                                                <i class="mdi mdi-checkbox-marked-circle">
                                                    <span>Checklist templates</span>
                                                </i>
                                            </li>
                                            <li class="list-text">
                                                <i class="mdi mdi-checkbox-marked-circle">
                                                    <span>Premium intergation</span>
                                                </i>
                                            </li>
                                            <li class="list-text">
                                                <i class="mdi mdi-checkbox-marked-circle">
                                                    <span>30-Day trial</span>
                                                </i>
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary pricing-btn rounded-pill">Get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card pricing-box h-100">
                                <div class="card-body p-0">
                                    <div class="card-header">
                                        <h6 class="fw-normal mb-3 text-white">Advance Plan</h6>
                                        <div class="d-flex align-items-end justify-content-start">
                                            <div class="flex-shrink-0 pricing-price">
                                                <h1 class="mb-0 text1 text-white">$100</h1>
                                                <h1 class="mb-0 text2 text-white">$50</h1>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 ms-1 fs-14 text2 text-white">/ Per Month</p>
                                                <p class="mb-0 ms-1 fs-14 text1 text-white">/ Annually</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <ul class="list-unstyled">
                                            <li class="list-text">
                                                <i class="mdi mdi-checkbox-marked-circle">
                                                    <span>Everithing in Basic</span>
                                                </i>
                                            </li>
                                            <li class="list-text">
                                                <i class="mdi mdi-checkbox-marked-circle">
                                                    <span>Unlimited members</span>
                                                </i>
                                            </li>
                                            <li class="list-text">
                                                <i class="mdi mdi-checkbox-marked-circle">
                                                    <span>dedicated support</span>
                                                </i>
                                            </li>
                                            <li class="list-text">
                                                <i class="mdi mdi-checkbox-marked-circle">
                                                    <span>All Advance Featuers</span>
                                                </i>
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0)" class="btn btn-primary pricing-btn rounded-pill">Get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END pricing -->

    <!-- Start contact -->
    <!-- <section class="section contact" id="contact">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="row align-items-center gy-3">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="social-list">
                                        <h6 class="mb-0">Let's Get</h6>
                                        <h3 class="fw-semibold">Started</h3>
                                        <div class="d-sm-flex card-text">
                                            <p class="me-4 mb-0">Reach up</p>
                                            <a class="text-white" href="javascript:void(0)"><i class="mdi mdi-phone-outline me-2"></i>408.409.6483</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form method="post" onsubmit="return validateForm()" class="contact-form" name="myForm" id="myForm">
                                <span id="error-msg"></span>
                                <div class="row rounded-3 py-3">
                                    <div class="col-lg-12">
                                        <div class="position-relative mb-3">
                                            <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="position-relative mb-3">
                                            <span class="input-group-text"><i class="mdi mdi-email-outline"></i></span>
                                            <input name="email" id="Email" type="email" class="form-control" placeholder="Enter your email*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="position-relative mb-3">
                                            <span class="input-group-text"><i class="mdi mdi-file-document-outline"></i></span>
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="position-relative mb-3">
                                            <span class="input-group-text align-items-start"><i class="mdi mdi-comment-text-outline"></i></span>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message*"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="text-end">
                                            <input type="submit" id="submit" name="send" class="btn btn-primary" value="Send Message">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End contact -->

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

    <!-- FOOTER-ALT -->
    <div class="footer-alt pt-5 pb-5" style="background-color: #293C93; color:#fff">
        <div class="container"">
            <div class=" row">
            <div class="col-lg-12">
                <div>
                    <h2 class="text-center" style="font-size: 66px; font-weight: 400;">Let's Work Together!</h2>
                    <div class="d-flex justify-content-center" style="gap: 45px">
                        <div class="d-flex align-content-center" style="gap: 12px">
                            <img src="<?= base_url('public/images/WhatsApp.png') ?>" alt="wa" width="45" height="45">
                            <div class="text-left">
                                <p style="margin-bottom: -1px;">WHATSAPP US NOW</p>
                                <p style="font-weight: 800;">+621234567890987</p>
                            </div>
                        </div>
                        <div class="d-flex align-content-center" style="gap: 12px">
                            <img src="<?= base_url('public/images/iphone.png') ?>" alt="wa" width="45" height="45">
                            <div class="text-left">
                                <p style="margin-bottom: -1px;">CALL US TODAY</p>
                                <p style="font-weight: 800;">+621234567890987</p>
                            </div>
                        </div>
                        <div class="d-flex align-content-center" style="gap: 12px">
                            <img src="<?= base_url('public/images/Email.png') ?>" alt="wa" width="45" height="45">
                            <div class="text-left">
                                <p style="margin-bottom: -1px;">EMAIL US ANYTIME</p>
                                <p style="font-weight: 800;">langitdigital78@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- END FOOTER-ALT -->

    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up"></i>
    </button>
    <!--end back-to-top-->

    <!--Custom js-->
    <script src="<?= base_url('public/js/counter.js') ?>"></script>

    <!--Bootstrap Js-->
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- animation -->
    <script src="<?= base_url('public/js/aos.js') ?>"></script>

    <!-- swiper js -->
    <script src="<?= base_url('public/js/swiper-bundle.min.js') ?>"></script>

    <!-- contact -->
    <script src="<?= base_url('public/js/contact.js') ?>"></script>

    <!-- App Js -->
    <script src="<?= base_url('public/js/app.js') ?>"></script>

</body>

</html>