<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Maju Hardware</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">
                <img src="assets/img/logo.png" class="logo">
                <h1>MAJU HARDWARE<span></span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#promo">Promo</a></li>
                    <li><a href="#store">Store</a></li>

                    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

                    <a href="https://wa.me/+628113735757" target="_blank">
                        <button class="btn-floating whatsapp">
                            <img src="assets/img/halomaju.png" width="40" height="40" alt="whatsApp">
                            <span class=" text-warning">0811-373-5757</span>
                        </button>
                    </a>

        </div>
    </header><!-- End Header -->

    <section id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/banner/images1.jpg"><img src="assets/img/banner/images1.jpg"></a></div>
                </div>
                <div class="carousel-item">
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/banner/images2.jpg"><img src="assets/img/banner/images2.jpg"></a></div>
                </div>
                <div class="carousel-item">
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/banner/images3.jpg"><img src="assets/img/banner/images3.jpg"></a></div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- ======= Menu Section ======= -->
    <section id="promo" class="promo">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                {{-- <h2>Promo Terbaru</h2> --}}
                <p>HOT PROMO</p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#promo-gadget">
                        <h4>Gadget</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#promo-laptop">
                        <h4>Laptop</h4>
                    </a><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#promo-computer">
                        <h4>Computer</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#promo-tv">
                        <h4>TV & AV</h4>
                    </a>

                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#promo-homeappliances">
                        <h4>Home Appliances</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#promo-accessories">
                        <h4>Accessories</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#promo-elcvehicle">
                        <h4>Elc. Vehicle</h4>
                    </a>
                </li><!-- End tab nav item -->

            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                <div class="tab-pane fade active show" id="promo-gadget">

                    <div class="tab-header text-center">
                        {{-- <h2>Hot Promo</h2> --}}
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/promoip13.jpg" class="glightbox"><img
                                    src="assets/img/promo/promoip13.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/promoreno10.jpg" class="glightbox"><img
                                    src="assets/img/promo/promoreno10.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/promooppo.jpg" class="glightbox"><img
                                    src="assets/img/promo/promooppo.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->

                    </div>
                </div><!-- End Starter Menu Content -->

                <div class="tab-pane fade" id="promo-laptop">

                    <div class="tab-header text-center">
                        {{-- <h2>Hot Promo</h2> --}}
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/lenovoideapad.jpg" class="glightbox"><img
                                    src="assets/img/promo/lenovoideapad.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/lenovoideapad.jpg" class="glightbox"><img
                                    src="assets/img/promo/lenovoideapad.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/lenovoideapad.jpg" class="glightbox"><img
                                    src="assets/img/promo/lenovoideapad.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->

                    </div>
                </div><!-- End Breakfast Menu Content -->

                <div class="tab-pane fade" id="promo-computer">

                    <div class="tab-header text-center">
                        {{-- <h2>Hot Promo</h2> --}}
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/epson.jpg" class="glightbox"><img
                                    src="assets/img/promo/epson.jpg" class="menu-img img-fluid" alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/epson.jpg" class="glightbox"><img
                                    src="assets/img/promo/epson.jpg" class="menu-img img-fluid" alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/epson.jpg" class="glightbox"><img
                                    src="assets/img/promo/epson.jpg" class="menu-img img-fluid" alt=""></a>
                        </div><!-- Menu Item -->

                    </div>
                </div><!-- End Lunch Menu Content -->

                <div class="tab-pane fade" id="promo-tv">

                    <div class="tab-header text-center">
                        {{-- <h2>Hot Promo</h2> --}}
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/xiaomitv.jpg" class="glightbox"><img
                                    src="assets/img/promo/xiaomitv.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/xiaomitv.jpg" class="glightbox"><img
                                    src="assets/img/promo/xiaomitv.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/xiaomitv.jpg" class="glightbox"><img
                                    src="assets/img/promo/xiaomitv.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->
                    </div>
                </div><!-- End Dinner Menu Content -->

                <div class="tab-pane fade" id="promo-homeappliances">

                    <div class="tab-header text-center">
                        {{-- <h2>Hot Promo</h2> --}}
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/xiaomitv.jpg" class="glightbox"><img
                                    src="assets/img/promo/xiaomitv.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/xiaomitv.jpg" class="glightbox"><img
                                    src="assets/img/promo/xiaomitv.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/xiaomitv.jpg" class="glightbox"><img
                                    src="assets/img/promo/xiaomitv.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->
                    </div>
                </div><!-- End Dinner Menu Content -->

                <div class="tab-pane fade" id="promo-accessories">

                    <div class="tab-header text-center">
                        {{-- <h2>Hot Promo</h2> --}}
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/galaxywatch.jpg" class="glightbox"><img
                                    src="assets/img/promo/galaxywatch.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/galaxywatch.jpg" class="glightbox"><img
                                    src="assets/img/promo/galaxywatch.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/galaxywatch.jpg" class="glightbox"><img
                                    src="assets/img/promo/galaxywatch.jpg" class="menu-img img-fluid"
                                    alt=""></a>
                        </div><!-- Menu Item -->
                    </div>
                </div><!-- End Dinner Menu Content -->

                <div class="tab-pane fade" id="promo-elcvehicle">

                    <div class="tab-header text-center">
                        {{-- <h2>Hot Promo</h2> --}}
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/volta.jpg" class="glightbox"><img
                                    src="assets/img/promo/volta.jpg" class="menu-img img-fluid" alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/volta.jpg" class="glightbox"><img
                                    src="assets/img/promo/volta.jpg" class="menu-img img-fluid" alt=""></a>
                        </div><!-- Menu Item -->

                        <div class="col-lg-4 promo-item">
                            <a href="assets/img/promo/volta.jpg" class="glightbox"><img
                                    src="assets/img/promo/volta.jpg" class="menu-img img-fluid" alt=""></a>
                        </div><!-- Menu Item -->
                    </div>
                </div><!-- End Dinner Menu Content -->

            </div>

        </div>
    </section><!-- End Menu Section -->

    <!-- ======= Events Section ======= -->
    <section id="store" class="events">
        <div class="container-fluid" data-aos="fade-up">

            <div class="section-header">
                <h2>Store Kami</h2>
                <p>Temukan <span>Maju Hardware</span> Di Dekat Anda</p>
            </div>

            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                        style="background-image: url(assets/img/store/magetan.JPEG)">
                        {{-- <h3>Magetan</h3> --}}
                        <a href="https://maps.app.goo.gl/FC84v1PQxM93czun6">
                            <div class="price align-self-start">Maju Hardware Magetan</div>
                            <p class="description">
                                Jl. Jend. Sudirman No.38, Dusun Kebonagung, Kebonagung, Kec. Magetan, Kabupaten Magetan,
                                Jawa Timur 63317
                            </p>
                        </a>
                        <a href="https://wa.me/6285736589101">
                            <p class="contact">
                                085736589101
                            </p>
                        </a>
                    </div><!-- End Event item -->

                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                        style="background-image: url(assets/img/store/ngawi.JPG)">
                        <a href="https://maps.app.goo.gl/Bran511oNNtby9ev5">
                            <div class="price align-self-start">Maju Hardware Ngawi</div>
                            <p class="description">
                                Jl. Teuku Umar, Kerek, Margomulyo, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63217
                            </p>
                        </a>
                        <a href="https://wa.me/6285607970818">
                            <p class="contact">
                                085607970818
                            </p>
                        </a>

                    </div><!-- End Event item -->

                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                        style="background-image: url(assets/img/store/sragen.JPG)">
                        <a href="https://maps.app.goo.gl/prx7CwMTKT1zeATz6">
                            <div class="price align-self-start">Maju Hardware Sragen</div>
                            <p class="description">
                                Jl. RA. Kartini Jl. Taman Asri No.28, Magero, Kroyo, Kec. Karangmalang, Kabupaten
                                Sragen,
                                Jawa Tengah 57215
                            </p>
                        </a>
                        <a href="https://wa.me/6282140175757">
                            <p class="contact">
                                082140175757
                            </p>
                        </a>

                    </div><!-- End Event item -->

                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                        style="background-image: url(assets/img/store/kediri.JPG)">
                        <a href="https://maps.app.goo.gl/GYej1MFAxDDMGvfM7">
                            <div class="price align-self-start">Maju Hardware Kediri</div>
                            <p class="description">
                                Jl. Kilisuci.34b, Setono Pande, Kota, Kota Kediri, Setono Pande, Kec. Kota, Kabupaten
                                Kediri, Jawa Timur 64129
                            </p>
                        </a>
                        <a href="https://wa.me/62895709002255">
                            <p class="contact">
                                0895709002255
                            </p>
                        </a>

                    </div><!-- End Event item -->

                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                        style="background-image: url(assets/img/store/karangjati.JPG)">
                        <a href="https://maps.app.goo.gl/EMybwSktDxZsbky58">
                            <div class="price align-self-start">Maju Hardware Karangjati</div>
                            <p class="description">
                                Jl. Raya Ngawi - Caruban, RT.05/RW.01, Legundi 1, Legundi, Kec. Karangjati, Kabupaten
                                Ngawi,
                                Jawa Timur 63284
                            </p>
                        </a>
                        <a href="https://wa.me/6285179517757">
                            <p class="contact">
                                085179517757
                            </p>
                        </a>

                    </div><!-- End Event item -->

                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                        style="background-image: url(assets/img/store/ngawi.JPG)">
                        <a href="https://maps.app.goo.gl/3zVjLZqgcGZrrUnv6">
                            <div class="price align-self-start">Maju Hardware OKAZ Ponorogo</div>
                            <p class="description">
                                Jl. Sultan Agung No.74, Sultanagung, Nologaten, Kec. Ponorogo, Kabupaten Ponorogo, Jawa
                                Timur 63419
                            </p>
                        </a>
                        <a href="https://wa.me/628563699667">
                            <p class="contact">
                                08563699667
                            </p>
                        </a>

                    </div><!-- End Event item -->

                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                        style="background-image: url(assets/img/store/nganjuk.jpg)">
                        <a href="https://maps.app.goo.gl/54eseF6XVWoVNk5p7">
                            <div class="price align-self-start">Maju Hardware Nganjuk</div>
                            <p class="description">
                                Jl. Diponegoro No.18, Mangundikaran, Mangun Dikaran, Kec. Nganjuk, Kabupaten Nganjuk,
                                Jawa
                                Timur 64419
                            </p>
                        </a>
                        <a href="https://wa.me/6285607970818">
                            <p class="contact">
                                085607970818
                            </p>
                        </a>
                    </div><!-- End Event item -->

                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                        style="background-image: url(assets/img/store/messes.jpg)">
                        <a href="https://maps.app.goo.gl/3rxNws8CVGj2dQJh8">
                            <div class="price align-self-start">Maju Experience Store</div>
                            <p class="description">
                                Jl. Pahlawan No.39, Kartoharjo, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63121
                            </p>
                        </a>
                        <a href="https://wa.me/6285607970818">
                            <p class="contact">
                                085607970818
                            </p>
                        </a>
                    </div><!-- End Event item -->

                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                        style="background-image: url(assets/img/store/newmega.jpg)">
                        <a href="https://maps.app.goo.gl/DL8VXnVhFmvzyt1w7">
                            <div class="price align-self-start">Maju Hardware Premium Store</div>
                            <p class="description">
                                Jl. Dr. Sutomo No.95, Kejuron, Kec. Taman, Kota Madiun, Jawa Timur 63117
                            </p>
                        </a>
                        <a href="https://wa.me/6285607970818">
                            <p class="contact">
                                085607970818
                            </p>
                        </a>
                    </div><!-- End Event item -->

                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                        style="background-image: url(assets/img/store/oesmadiun.jpg)">
                        <a href="https://maps.app.goo.gl/2YGrWzg1fmpWTT2Z9">
                            <div class="price align-self-start">Oppo Experience Store Madiun</div>
                            <p class="description">
                                Jl. Dr. Sutomo No.95, Kejuron, Kec. Taman, Kota Madiun, Jawa Timur 63132
                            </p>
                        </a>
                        <a href="https://wa.me/6285109011107">
                            <p class="contact">
                                085109011107
                            </p>
                        </a>
                    </div><!-- End Event item -->

                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                        style="background-image: url(assets/img/store/pacitan.jpg)">
                        <a href="https://maps.app.goo.gl/PJZHNMtXfpJgft998">
                            <div class="price align-self-start">Maju Hardware Pacitan</div>
                            <p class="description">
                                Jl. Gatot Subroto No.34, Kuwarasan, Baleharjo, Kec. Pacitan, Kabupaten Pacitan, Jawa
                                Timur
                                63511
                            </p>
                        </a>
                        <a href="https://wa.me/6282228135757">
                            <p class="contact">
                                082228135757
                            </p>
                        </a>
                    </div><!-- End Event item -->

                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                        style="background-image: url(assets/img/store/warujayeng.jpg)">
                        <a href="https://maps.app.goo.gl/mDgtuEsNU2QLgQTs8">
                            <div class="price align-self-start">Maju Hardware Warujayeng</div>
                            <p class="description">
                                Jl. Jaksa Agung Suprapto, Pelem, Warujayeng, Kec. Tanjunganom, Kabupaten Nganjuk, Jawa
                                Timur
                                64482
                            </p>
                        </a>
                        <a href="https://wa.me/6285174397557">
                            <p class="contact">
                                085174397557
                            </p>
                        </a>
                    </div><!-- End Event item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Events Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        {{-- {{-- <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div> --}}

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>HQ Maju Hardware</h4>
                        <a href="https://maps.app.goo.gl/GecrGLPxoSWWU2Td6">
                            <p class="HQ">
                                Jl. Kutai No.5, Pandean, Kec. Taman <br>
                                Kota Madiun, Jawa Timur 63133<br>
                            </p>
                        </a>

                    </div>

                </div>

                {{-- {{-- <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div> --}}

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Jam Buka Store</h4>
                        <p>
                            <strong>Setiap Hari: </strong> 9 Pagi - 9 Malam<br>

                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="https://www.youtube.com/majuhardware" class="youtube"><i
                                class="bi bi-youtube"></i></a>
                        <a href="https://www.facebook.com/majuhardware" class="facebook"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/majuhardware.id" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://www.tiktok.com/@majuhardware.id" class="tiktok"><i
                                class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <a href='http://www.freevisitorcounters.com'>http://freevisitorcounters.com</a>
                    <script type='text/javascript'
                        src='https://www.freevisitorcounters.com/auth.php?id=5a68016543d43751775d15be09e241da1b2e1905'></script>
                    <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1141627/t/2"></script>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span><a href="https://majuhardware.id/">majuhardware.id</a></span></strong>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
