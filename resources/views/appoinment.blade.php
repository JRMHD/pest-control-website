<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Hyperverm - Professional Pest Control Services" />
    <meta name="author" content="Hyperverm" />

    <title>Book an Appointment - Hyperverm Pest Control</title>

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
                        <span class="text-white">Book an Appointment</span>
                        <h1 class="text-capitalize mb-5 text-lg">Inspection</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="appointment section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-3">
                        <div class="feature-icon mb-3">
                            <i class="icofont-bug text-lg"></i>
                            <!-- Updated icon to represent pest control -->
                        </div>
                        <span class="h3">Call for Pest Emergency Service!</span>
                        <h3 class="text-color mt-3">+254 728 094456</h3>
                        <h3 class="text-color mt-3">+254 758 621755</h3>
                        <h3 class="text-color mt-3">+254 796 701590</h3>
                        <!-- Updated phone number -->
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="appointment-wrap mt-5 mt-lg-0 pl-lg-5">
                        <h2 class="mb-2 title-color">Book an Appointment</h2>
                        <p class="mb-4">
                            Schedule a pest control service appointment by filling out the
                            form below.
                        </p>
                        <form id="appointment-form" class="appointment-form" method="post"
                            action="{{ route('appointment.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="department" name="department">
                                            <option>Select Pest Issue</option>
                                            <option>Cockroach Infestation</option>
                                            <option>Bed Bug Treatment</option>
                                            <option>Rodent Control</option>
                                            <option>Termite Inspection</option>
                                            <option>Ant Control</option>
                                            <option>Spider Extermination</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="date" id="date" type="text" class="form-control"
                                            placeholder="Preferred Date (dd/mm/yyyy)" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="time" id="time" type="text" class="form-control"
                                            placeholder="Preferred Time" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Your Full Name" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="phone" id="phone" type="tel" class="form-control"
                                            placeholder="Your Phone Number" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <textarea name="message" id="message" class="form-control" rows="6" placeholder="Additional Details (if any)"></textarea>
                            </div>
                            <button type="submit" class="btn btn-main btn-round-full">
                                Make Appointment <i class="icofont-simple-right ml-2"></i>
                            </button>
                            @if (session('success'))
                                <div class="alert alert-success" role="alert"
                                    style="background-color: #c8e6c9; color: #1b5e20; border-color: #b2dfb2;">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <!-- Display error messages -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </form>
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
