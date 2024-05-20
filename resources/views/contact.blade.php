<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Hyperverm - Professional Pest Control Services">
    <meta name="author" content="Hyperverm">

    <title>Hyperverm - Contact Us</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images\favicon h.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

    @include('header')



    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Contact Us</span>
                        <h1 class="text-capitalize mb-5 text-lg">Get in Touch</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
          </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact form start -->

    <section class="section contact-info pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-block mb-4 mb-lg-0">
                        <i class="icofont-live-support"></i>
                        <h5>Call Us</h5>
                        +254 728 094456
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-block mb-4 mb-lg-0">
                        <i class="icofont-support-faq"></i>
                        <h5>Email Us</h5>
                        info@hyperverm.com
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-block mb-4 mb-lg-0">
                        <i class="icofont-location-pin"></i>
                        <h5>Location</h5>
                        Nairobi, Kenya
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2 class="text-md mb-2">Contact us</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p class="mb-5">Have a question or need assistance? Reach out to us using the form below.</p>
                    </div>
                </div>
            </div>


           

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <form action="{{ route('contact.store') }}" method="POST" class="modern-form"
                        style="background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);">
                        @csrf
                        <h2 style="text-align: center; color: #333; margin-bottom: 30px;">Get in Touch</h2>
                        <div class="form-group">
                            <label for="name" style="font-weight: 600; color: #555;">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" required
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px; transition: border-color 0.3s ease;">
                        </div>
                        <div class="form-group">
                            <label for="email" style="font-weight: 600; color: #555;">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px; transition: border-color 0.3s ease;">
                        </div>
                        <div class="form-group">
                            <label for="subject" style="font-weight: 600; color: #555;">Subject:</label>
                            <input type="text" id="subject" name="subject" placeholder="Enter your subject"
                                required
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px; transition: border-color 0.3s ease;">
                        </div>
                        <div class="form-group">
                            <label for="phone" style="font-weight: 600; color: #555;">Phone:</label>
                            <input type="text" id="phone" name="phone" placeholder="Enter your phone number"
                                required
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px; transition: border-color 0.3s ease;">
                        </div>
                        <div class="form-group">
                            <label for="message" style="font-weight: 600; color: #555;">Message:</label>
                            <textarea id="message" name="message" placeholder="Enter your message" required
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px; transition: border-color 0.3s ease; resize: vertical; min-height: 150px;"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-submit"
                                style="background-color: #007bff; color: #fff; padding: 12px 30px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Submit</button>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success" role="alert"
                                style="background-color: #c8e6c9; color: #1b5e20; border-color: #b2dfb2;">
                                {{ session('success') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>



    <div class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510564.65107988653!2d36.5177334104462!3d-1.3031873859975642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1713272990738!5m2!1sen!2ske"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

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
