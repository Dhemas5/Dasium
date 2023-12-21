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
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Dasium/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Dasium/assets/css/font-awesome.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/Dasium/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/Dasium/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/Dasium/assets/css/lightbox.css">
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
                            <li class="scroll-to-section"><a href="<?= site_url('index.php/landing_page/index') ?>" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#men">Pria</a></li>
                            <li class="scroll-to-section"><a href="#women">Wanita</a></li>
                            <li class="scroll-to-section"><a href="#kids">Anak-Anak</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="<?= site_url('index.php/landing_page/about') ?>">About Us</a></li>
                                    <li><a href="<?= site_url('index.php/landing_page/products') ?>">Products</a></li>
                                    <li><a href="<?= site_url('index.php/landing_page/contact') ?>">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="<?= site_url('index.php/auth/login') ?>">login</a></li>
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
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Tentang Toko Kami</h2>
                        <span>Toko baju kami adalah rumah bagi keunikan dan gaya pribadi Anda.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="<?= base_url() ?>assets/Dasium/assets/images/01.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>About Us &amp; Our Skills</h4>
                        <span>
                            Kami adalah sebuah tim yang berkomitmen untuk menghadirkan gaya dan kualitas yang tak tertandingi dalam dunia fashion. Dengan pengalaman bertahun-tahun dalam industri ini, kami telah membangun reputasi sebagai destinasi fashion yang dapat diandalkan. Toko baju kami didedikasikan untuk memenuhi kebutuhan dan keinginan Anda dalam hal penampilan yang stylish dan berkualitas. Kami percaya bahwa pakaian bukan hanya tentang penutup tubuh, tetapi juga tentang ekspresi diri dan kepercayaan diri. Mari temukan bagaimana kami dapat membantu Anda meraih penampilan terbaik Anda.
                        </span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>Kami tidak hanya menjual pakaian, kami membantu Anda mendefinisikan gaya Anda sendiri.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->
    <!-- <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Tim Luar Biasa Kami</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="<?= base_url() ?>assets/Dasium/assets/images/team-member-01.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Ragnar Lodbrok</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="<?= base_url() ?>assets/Dasium/assets/images/team-member-02.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Ragnar Lodbrok</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="<?= base_url() ?>assets/Dasium/assets/images/team-member-03.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Ragnar Lodbrok</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Our Team Area Ends ***** -->

    <!-- ***** Services Area Starts ***** -->
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>pelayanan kami</h2>
                        <span>Detail hingga detail inilah yang membedakan toko kami dengan toko lainnya.</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <!-- <h4></h4> -->
                        <p>Dengan sentuhan futuristik dan kenyamanan yang disertakan, toko baju tidak lagi hanya pusat perdagangan, melainkan destinasi yang menantang batas-batas konvensional dan mengangkat pengalaman berbelanja pakaian ke tingkat baru.</p>
                        <br>
                        <img src="<?= base_url() ?>assets/Dasium/assets/images/01.jpg" alt="" style="width: 100%; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <!-- <h4></h4> -->
                        <p>Setiap langkah di antara rak-rak penuh gaya adalah tarian pilihan dan ekspresi diri, mengubah ruang belanja menjadi perjalanan mode yang tak terlupakan.</p>
                        <br><br><br><br>
                        <img src="<?= base_url() ?>assets/Dasium/assets/images/02.jpg" alt="" style="width: 100%; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <!-- <h4></h4> -->
                        <p>Pakaian diatur dengan presisi, menciptakan narasi visual yang mengajak pengunjung dalam perjalanan mode yang menakjubkan.</p>
                        <br><br><br><br>
                        <img src="<?= base_url() ?>assets/Dasium/assets/images/03.png" alt="" style="width: 100%; height: 200px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Services Area Ends ***** -->

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

    <!-- Global Init -->
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