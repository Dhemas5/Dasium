<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Dasium | Store</title>
    <link rel="icon" href="<?= base_url() ?>assets/img/logo.png" type="image/png">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Dasium/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Dasium/assets/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/Dasium/assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/Dasium/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/Dasium/assets/css/lightbox.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/Dasium/assets/css/styles.css">
    <!--
        

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    <script src="<?= base_url() ?>assets/Dasium/assets/js/jquery-2.1.0.min.js"></script>
    <script src="<?= base_url() ?>assets/Dasium/assets/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="<?= base_url() ?>assets/Dasium/assets/images/logo.png" width="125" height="auto">
                        </a>

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#men">Pria</a></li>
                            <li class="scroll-to-section"><a href="#women">Wanita</a></li>
                            <li class="scroll-to-section"><a href="#kids">Anak-Anak</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="<?= site_url('landing_page/about') ?>">About Us</a></li>
                                    <li><a href="<?= site_url('landing_page/products') ?>">Products</a></li>
                                    <li><a href="<?= site_url('landing_page/contact') ?>">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="<?= site_url('auth/login') ?>">login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Kami Toko Baju Andalan </h4>
                                <span>Tingkatkan Gaya Anda Bersama Kami</span>
                            </div>
                            <img src="<?= base_url() ?>assets/Dasium/assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Wanita</h4>
                                            <span>Baju Terbaik Wanita</span>
                                        </div>
                                        <img src="<?= base_url() ?>assets/Dasium/assets/images/baner-right-image-01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Pria </h4>
                                            <span>Baju Terbaik Pria</span>
                                        </div>
                                        <img src="<?= base_url() ?>assets/Dasium/assets/images/baner-right-image-02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Anak-Anak</h4>
                                            <span>Pakaian Terbaik untuk Anak-Anak</span>
                                        </div>
                                        <img src="<?= base_url() ?>assets/Dasium/assets/images/baner-right-image-03.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Aksesories</h4>
                                            <span>Aksesories Terbaik</span>
                                        </div>
                                        <img src="<?= base_url() ?>assets/Dasium/assets/images/baner-right-image-04.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Pakaian Pria Terbaru</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                    </div>
                                    <img src="<?= base_url() ?>assets/Dasium/assets/images/men-01.jpg" alt="" width="100" height="400">
                                </div>
                                <div class="down-content">
                                    <h4>Busana Muslim</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                    </div>
                                    <img src="<?= base_url() ?>assets/Dasium/assets/images/men-02.jpg" alt="" width="100" height="400">
                                </div>
                                <div class="down-content">
                                    <h4>Baju Batik</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                    </div>
                                    <img src="<?= base_url() ?>assets/Dasium/assets/images/men-03.jpg" alt="" width="100" height="400">
                                </div>
                                <div class="down-content">
                                    <h4>Jas Hitam</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                    </div>
                                    <img src="<?= base_url() ?>assets/Dasium/assets/images/men-01.jpg" alt="" width="100" height="400">
                                </div>
                                <div class="down-content">
                                    <h4>Busana Muslim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Pakaian Wanita Terbaru </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                    </div>
                                    <img src="<?= base_url() ?>assets/Dasium/assets/images/women-01.jpg" alt="" width="100" height="400">
                                </div>
                                <div class="down-content">
                                    <h4>Cardigan</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                    </div>
                                    <img src="<?= base_url() ?>assets/Dasium/assets/images/women-02.jpg" alt="" width="100" height="400">
                                </div>
                                <div class="down-content">
                                    <h4>Dress</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                    </div>
                                    <img src="<?= base_url() ?>assets/Dasium/assets/images/women-03.jpg" alt="" width="100" height="400">
                                </div>
                                <div class="down-content">
                                    <h4>Atasan Batik</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                    </div>
                                    <img src="<?= base_url() ?>assets/Dasium/assets/images/women-01.jpg" alt="" width="100" height="400">
                                </div>
                                <div class="down-content">
                                    <h4>Cardigan</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Pakaian Anak-anak Terbaru</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <img src="<?= base_url() ?>assets/Dasium/assets/images/kid-01.jpg" alt="" width="100" height="400">
                                </div>
                                <div class="down-content">
                                    <h4>Baju Tidur</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="<?= base_url() ?>assets/Dasium/assets/images/kid-02.jpg" alt="" width="100" height="400">
                                </div>
                                <div class="down-content">
                                    <h4>Kaos Anak</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="<?= base_url() ?>assets/Dasium/assets/images/kid-03.jpg" alt="" width="100" height="400">
                                </div>
                                <div class="down-content">
                                    <h4>Kemeja Anak</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="<?= base_url() ?>assets/Dasium/assets/images/kid-01.jpg" alt="" width="100" height="400">
                                </div>
                                <div class="down-content">
                                    <h4>Baju Tidur</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-content">
                        <h2>Jelajahi Produk Kamu</h2>
                        <br>
                        <span>"Kami mengundang Anda untuk menjelajahi produk-produk kami yang berkualitas tinggi dan penuh dengan pilihan gaya yang menakjubkan. Temukan penampilan yang sesuai dengan kepribadian Anda, temukan kesempurnaan dalam setiap detail, dan hadirkan keindahan dalam gaya hidup Anda. Mari kita mulai petualangan fashion bersama!"</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <a href="index.html" class="logo">
                                <img src="<?= base_url() ?>assets/Dasium/assets/images/logo.png" width="150" height="auto">
                            </a>
                        </div>
                        <ul>
                            <li><a href="#">Dasium@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Belanja &amp; Kategori</h4>
                    <ul>
                        <li><a href="#">Pakaian Pria</a></li>
                        <li><a href="#">Pakaian Wanita</a></li>
                        <li><a href="#">Pakaian Anak-Anak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Lokasi &amp; Jam Kerja</h4>
                    <ul>
                        <li><a href="#">Jember - Jawa Timur</a></li>
                        <li><a href="#">08.00 - 16.00</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Sosial Media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="fa fa-whatsapp"></i> Whatsapp</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2024 Dasium Store . All Rights Reserved.

                            <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">RPL</a>

                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/Dasium/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?= base_url() ?>assets/Dasium/assets/js/popper.js"></script>
    <script src="<?= base_url() ?>assets/Dasium/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?= base_url() ?>assets/Dasium/assets/js/owl-carousel.js"></script>
    <script src="<?= base_url() ?>assets/Dasium/assets/js/accordions.js"></script>
    <script src="<?= base_url() ?>assets/Dasium/assets/js/datepicker.js"></script>
    <script src="<?= base_url() ?>assets/Dasium/assets/js/scrollreveal.min.js"></script>
    <script src="<?= base_url() ?>assets/Dasium/assets/js/waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/Dasium/assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>assets/Dasium/assets/js/imgfix.min.js"></script>
    <script src="<?= base_url() ?>assets/Dasium/assets/js/slick.js"></script>
    <script src="<?= base_url() ?>assets/Dasium/assets/js/lightbox.js"></script>
    <script src="<?= base_url() ?>assets/Dasium/assets/js/isotope.js"></script>

    <!-- Custom Script -->
    <script src="<?= base_url() ?>assets/Dasium/assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

</body>

</html>