<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description"
        content="Pest control services including cockroach removal, bed bug treatment, rodent control, and termite extermination. Professional and effective pest management solutions." />
    <meta name="author" content="Hyperverm" />

    <title>Hyperverm - Pest Control Services</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images\favicon h.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body id="top">
    @include('header')

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Our services</span>
                        <h1 class="text-capitalize mb-5 text-lg">What We Do</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our services</a></li>
          </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section service-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="images\about\about-1.jpg" alt="" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Cockroach Control</h4>
                            <p class="mb-4">
                                Effective and thorough cockroach removal services.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="images\about\about-2.jpg" alt="" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Bed Bug Treatment</h4>
                            <p class="mb-4">
                                Comprehensive bed bug eradication and prevention.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="images\about\about-3.jpg" alt="" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Rodent Control</h4>
                            <p class="mb-4">
                                Reliable rodent removal and prevention methods.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 mb-lg-0">
                        <img src="images\service\Termite .jpeg" alt="" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Termite Extermination</h4>
                            <p class="mb-4">
                                Effective termite elimination and long-term protection.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 mb-lg-0">
                        <img src="images\service\pest exami.jpeg" alt="" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">
                                Pest Examination & Diagnosis
                            </h4>
                            <p class="mb-4">
                                Thorough examination and accurate diagnosis of pest issues.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 mb-lg-0">
                        <img src="images\about\about-4.jpg" alt="" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Ant Control</h4>
                            <p class="mb-4">
                                Effective control and prevention of ant infestations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section cta-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="cta-content">
                        <div class="divider mb-4"></div>
                        <h2 class="mb-5 text-lg">
                            Get rid of pests with our effective
                            <span class="title-color">pest control services</span>
                        </h2>
                        <p class="mb-4">
                            Hyperverm offers professional pest control services tailored to
                            your needs. Say goodbye to pests and ensure a safe environment
                            for your home or business.
                        </p>
                        <a href="{{ url('appoinment') }}"> class="btn btn-main-2 btn-round-full">
                            Schedule a Service<i class="icofont-simple-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    @include('footer')
    <!--
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>

    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>

    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>
</body>

</html>
