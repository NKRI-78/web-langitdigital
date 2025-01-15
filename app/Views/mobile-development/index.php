<?= view('layouts/header'); ?>
<?= view('layouts/navbar'); ?>

<section class="container d-flex justify-content-between align-items-center" id="hero">
<div class="left-side">
<h5 class="hero-subtitle">
Mobile Apps Development
</h5>
<h3 class="hero-title fw-bold">
Mobile Apps 
Development in
Indonesia
</h3>
</div>

<div class="right-side">
    <div class="d-flex align-items-end back-img-hero">
    <img class="left-img" src="<?= base_url('public/images/bulet.png') ?>" alt="">
    <img class="right-img" src="<?= base_url('public/images/kotak.png') ?>" alt="">
    </div>
    <img class="mobile-img" src="<?= base_url('public/images/mobile-development-4x.png') ?>" alt="">
</div>

</section>

<section class="container" id="about">
    <div class="d-flex justify-content-between about-wrapper">
        <h3 class="title-section fw-bold">
            Mobile Apps 
            Development in
            Indonesia
        </h3>
        <p>
            Kami adalah mitra terpercaya Anda dalam mewujudkan ide aplikasi mobile menjadi kenyataan. Tim kami yang berpengalaman akan bekerja sama dengan Anda untuk memahami kebutuhan bisnis Anda dan merancang aplikasi yang sesuai. Kami menyediakan layanan Pembuatan Mobile Apps yang dirancang khusus untuk memenuhi kebutuhan bisnis Anda, baik di platform Android maupun iOS. Dengan desain yang user friendly dan performa tinggi, aplikasi mobile yang kami bangun akan memberikan pengalaman pengguna yang menarik, fungsional, dan responsif.
        </p>
    </div>
</section>

<section class="container position-relative" id="features">
    <div class="d-flex column-gap-5">
        <div class="left-side">
        <div class="feature-card">
                <div class="header">
                    <img src=<?= base_url('public/images/otp-2x.png') ?> alt="Otp Icon">
                    <h6>Era of Mobile Application</h6>
                </div>
                <p class="content">
                Memasuki era di mana semua serba digital,bawa bisnis Anda lebih dekat dengan pelanggan melalui solusi mobile yang inovatif. Di era digital ini, aplikasi mobile menjadi salah satu kunci utama untuk meningkatkan keterlibatan pengguna, memperluas jangkauan pasar, dan memperkuat loyalitas pelanggan. Kami hadir untuk membantu Anda mengembangkan aplikasi mobile yang canggih, fungsional dan user-friendly sesuai dengan kebutuhan bisnis anda
                </p>
            </div>
            <div class="feature-card">
                <div class="header">
                    <img src=<?= base_url('public/images/web-2x.png') ?> alt="Europe Icon">
                    <h6>User Friendly UI/UX</h6>
                </div>
                <p class="content">
                Tingkatkan kepuasan pengguna dengan desain UI/UX yang Friendly dan menarik, sehingga aplikasi Anda tidak hanya terlihat profesional tetapi juga mudah digunakan.
                </p>
            </div>
            <div class="feature-card">
                <div class="header">
                    <img src=<?= base_url('public/images/crowd-2x.png') ?> alt="Europe Icon">
                    <h6>Our Team</h6>
                </div>
                <p class="content">
                Selain itu, kami juga memiliki tim website developer Indonesia yang sudah ahli dalam membuat berbagai jenis website mulai dari web company profile hingga toko online dengan berbagai fitur menarik yang dapat memberikan benefit pada website Anda. Kami juga menyediakan jasa pembuatan aplikasi android dan juga iOS custom sesuai dengan kebutuhan Anda.
                </p>
            </div>
        </div>
        <div class="right-side pt-5">
            <div class="feature-card">
                <div class="header">
                    <div class="d-flex column-gap-2">
                        <div>
                            <img class="icon" src=<?= base_url('public/images/apple-2x.png') ?> alt="Apple Icon">
                        </div>
                        <div>
                            <img class="icon" src=<?= base_url('public/images/android-2x.png') ?> alt="Android Icon">
                        </div>
                    </div>
                    <h6>IOS & Android</h6>
                </div>
                <p class="content">
                Kami juga menyediakan jasa pembuatan aplikasi untuk Android dan IOS. Kami membantu anda menciptakan aplikasi yang dirancang untuk meningkatkan visibilitas, keterlibatan, dan interaksi dengan pelanggan. Dari konsep hingga peluncuran, kami memastikan setiap aplikasi memenuhi standar tinggi performa, keamanan dan user experience, sehingga Anda dapat menawarkan aplikasi yang andal dan menarik di kedua platform terkemuka ini.
                </p>
            </div>
            <div class="feature-card">
                <div class="header">
                    <img src=<?= base_url('public/images/price-tag-2x.png') ?> alt="Europe Icon">
                    <h6>Affordable</h6>
                </div>
                <p class="content">
                Kami menawarkan layanan jasa yang affordable dengan harga yang transparan dan fleksibel, sehingga bisnis Anda dapat berkembang dengan dukungan teknologi terbaik tanpa menguras biaya. Dengan berbagai paket layanan yang dapat disesuaikan, kami memastikan Anda mendapatkan nilai maksimal untuk setiap investasi yang Anda keluarkan.
                </p>
            </div>
            <div class="feature-card">
                <div class="header">
                    <img src=<?= base_url('public/images/megaphone-2x.png') ?> alt="Europe Icon">
                    <h6>Mobile App Marketing</h6>
                </div>
                <p class="content">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container mt-2" id="slider">
    <div class="text-center">
    <h5 class="fs-3">Mobile Apps Category</h5>
    <p>There are many types of Mobile Application you can make here at LangitDigital</p>
    </div>
    <div class="swiper" id="customSwiper">
                <div class="swiper-wrapper container">
                    <!-- Slide 1 -->
                    <div class="swiper-slide custom-swiper-slide">
                        <img class="item-slide" src=<?= base_url('public/images/PORTO-TRIP.png') ?> alt="Porto Trip">
                        <h6>Delivery Mobile Apps</h6>
                    </div>
                    <div class="swiper-slide custom-swiper-slide">
                        <img class="item-slide" src=<?= base_url('public/images/MARKET-PRICE.png') ?> alt="Market Price">
                        <h6>Market Place</h6>
                    </div>
                    <div class="swiper-slide custom-swiper-slide">
                        <img class="item-slide" src=<?= base_url('public/images/PPOB.png') ?> alt="PPOB">
                        <h6>Fitur PPOB</h6>
                    </div>
                    <div class="swiper-slide custom-swiper-slide">
                        <img class="item-slide" src=<?= base_url('public/images/SOS.png') ?> alt="SOS">
                        <h6>Fitur SOS</h6>
                    </div>
                    <div class="swiper-slide custom-swiper-slide">
                        <img class="item-slide" src=<?= base_url('public/images/SEKOLAH.png') ?> alt="Sekolah">
                        <h6>School Mobile Apps</h6>
                    </div>
                    <div class="swiper-slide custom-swiper-slide">
                        <img class="item-slide" src=<?= base_url('public/images/PETCARE.png') ?> alt="Petcare">
                        <h6>PetCare Mobile Apps</h6>
                    </div> 
                    <div class="swiper-slide custom-swiper-slide">
                        <img class="item-slide" src=<?= base_url('public/images/FORUM.png') ?> alt="Forum">
                        <h6>Fitur Forum</h6>
                    </div> 
                    <div class="swiper-slide custom-swiper-slide">
                        <img class="item-slide" src=<?= base_url('public/images/MEMBER.png') ?> alt="Member">
                        <h6>Membership Mobile Apps</h6>
                    </div> 
                    <div class="swiper-slide custom-swiper-slide">
                        <img class="item-slide" src=<?= base_url('public/images/ETALASE-ONLINE.png') ?> alt="Etalase Online">
                        <h6>Product Catalog</h6>     
                    </div>
                    <div class="swiper-slide custom-swiper-slide">
                        <img class="item-slide" src=<?= base_url('public/images/SIMPAN-PINJAM.png') ?> alt="Simpan Pinjam">
                        <h6>Finance Mobile Apps</h6>
                    </div>
                    <div class="swiper-slide custom-swiper-slide">
                        <img class="item-slide" src=<?= base_url('public/images/TIKETING-KONSER.png') ?> alt="Tiketing Konser">
                        <h6>Ticketing Mobile Apps</h6>
                    </div>
                    <div class="swiper-slide custom-swiper-slide">
                        <img class="item-slide" src=<?= base_url('public/images/F&B.png') ?> alt="F&B">
                        <h6>F&B Mobile Apps</h6>
                    </div>
                </div>
                <!-- Pagination -->
    </div>
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
    Mobile Apps Development</h5>
    </div>
<div class="d-flex justify-content-between features-wrapper">
            <div>
                <div class="image-container" >
                    <img class="img-mini" src="<?= base_url('public/images/MINI-COOPER-4X.png') ?>" alt="bulet">
                    <img class="hover-image" src="<?= base_url('public/images/MINI-COOPER-2-4X.png') ?>" alt="web">
                </div>
                <div class="mt-3">
                    <h3>Mini Cooper</h3>
                    <a href="#">Mobile Apps</a>
                </div>
            </div>
            <div class="pt-5">
                <div class="image-container" >
                    <img class="img-mini" src="<?= base_url('public/images/MERCEDES-4X.png') ?>" alt="bulet">
                    <img class="hover-image" src="<?= base_url('public/images/MERCEDES-2-4X.png') ?>" alt="web">
                </div>
                <div class="mt-3">
                    <h3>Mercedes Benz W204</h3>
                    <a href="#">Mobile Apps</a>
                </div>
            </div>
    </div>
    <div class="d-flex justify-content-between content-wrapper features-wrapper">
            <div>
                <div class="image-container" >
                    <img class="img-mini" src="<?= base_url('public/images/YAMAHA-4X.png') ?>" alt="bulet">
                    <img class="hover-image" src="<?= base_url('public/images/YAMAHA-2-4X.png') ?>" alt="web">
                </div>
                <div class="mt-3">
                    <h3>Koperasi Yamaha</h3>
                    <a href="#">Mobile Apps</a>
                </div>
            </div>
            <div class="pt-5">
                <div class="image-container" >
                    <img class="img-mini" src="<?= base_url('public/images/HARLEY-4X.png') ?>" alt="bulet">
                    <img class="hover-image" src="<?= base_url('public/images/HARLEY-2-4X.png') ?>" alt="web">
                </div>
                <div class="mt-3">
                    <h3>HOG Anak Elang </h3>
                    <a href="#">Mobile Apps</a>
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
    slidesPerView: 'auto',
    slidesOffsetAfter: 40,
    slidesOffsetBefore: 30,
    // spaceBetween: 30,
    autoplay: {
        delay: 5000
    },
    breakpoints: {
        480: {
            slidesPerView: 'auto',
            spaceBetween: 10
        }
    }
    });
</script>