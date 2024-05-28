<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Pest control service offering treatment against cockroaches, rodents, bedbugs, flying insects, and sugar ants. Serving all areas including camps, reception & offices, kitchens, restaurants & staff canteen, bar, stores, guest tents, staff houses, drivers quarters & management houses, washrooms, and more. Safe, odorless, and effective pest control solutions." />
    <meta name="author" content="Hyperverm" />

    <title>Hyperverm - Professional Pest Control Services</title>

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
    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing">Professional Pest Control Services</span>
                        <h1 class="mb-3 mt-3">
                            <span class="typing-text"></span><span class="cursor">|</span>
                        </h1>
                        <style>
                            .typing-text {
                                font-size: 3rem;
                                font-weight: bold;
                                white-space: pre-wrap;
                                /* Allow line breaks */
                                overflow: hidden;
                                border-right: 2px solid transparent;
                                animation: typing 4s steps(40) infinite, caret 0.5s step-end infinite;
                            }

                            @keyframes typing {
                                0% {
                                    width: 0;
                                }

                                50% {
                                    width: 100%;
                                }

                                100% {
                                    width: 0;
                                }
                            }

                            @keyframes caret {
                                50% {
                                    border-color: currentColor;
                                }
                            }

                            .cursor {
                                font-size: 3rem;
                                font-weight: bold;
                                animation: blink 1s infinite;
                            }

                            @keyframes blink {
                                50% {
                                    opacity: 0;
                                }
                            }
                        </style>
                        <script>
                            const typingText = document.querySelector('.typing-text');
                            const texts = [
                                'Comprehensive Pest Control\nfor Homes, Aviation, and Maritime Industries',
                                'Trusted Experts in Residential,\nAirport, and Cargo Facility Sanitization',
                                'Safeguarding Your Domestic\nand Commercial Spaces from Pests'
                            ];

                            let charIndex = 0;
                            let isTyping = true;
                            let textIndex = 0;

                            function typeText() {
                                const textToType = texts[textIndex];

                                if (isTyping) {
                                    if (charIndex < textToType.length) {
                                        typingText.textContent += textToType.charAt(charIndex);
                                        charIndex++;
                                        setTimeout(typeText, 100); // Adjust the typing speed by changing the timeout value
                                    } else {
                                        isTyping = false;
                                        setTimeout(eraseText, 2000); // Delay before starting to erase (adjust as needed)
                                    }
                                } else {
                                    if (charIndex > 0) {
                                        typingText.textContent = textToType.substring(0, charIndex - 1);
                                        charIndex--;
                                        setTimeout(typeText, 50); // Adjust the erasing speed by changing the timeout value
                                    } else {
                                        isTyping = true;
                                        textIndex = (textIndex + 1) % texts.length; // Switch to the next text
                                        setTimeout(typeText, 1000); // Delay before starting to type again (adjust as needed)
                                    }
                                }
                            }

                            function eraseText() {
                                isTyping = false;
                                typeText();
                            }

                            typeText();
                        </script>
                        <p class="mb-4 pr-5">
                            We specialize in comprehensive pest control solutions tailored
                            to your needs. Our services effectively eliminate pests from
                            residential, commercial, and industrial properties, ensuring a
                            pest-free environment.
                        </p>
                        <div class="btn-container">

                            <a href="{{ url('appoinment') }}" class="btn btn-main-2 btn-icon btn-round-full">Schedule
                                Service <i class="icofont-simple-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-bug"></i>
                            </div>
                            <span>Comprehensive Pest Control</span>
                            <h4 class="mb-3">Professional Extermination</h4>
                            <p class="mb-4">
                                We offer 24/7 pest control services for all types of
                                infestations. Our experts are trained to handle emergencies
                                and ensure your property is pest-free.
                            </p>
                            <a href="{{ url('appoinment') }}" class="btn btn-main btn-round-full">Schedule Service</a>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-clock-time"></i>
                            </div>
                            <span>Flexible Service Hours</span>
                            <h4 class="mb-3">Convenient Appointment Times</h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between">
                                    Monday - Monday : <span>8:00 AM - 6:00 PM</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    Saturday : <span>9:00 AM - 5:00 PM</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    Sunday : <span>9:00 AM - 5:00 PM</span>
                                </li>
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-phone"></i>
                            </div>
                            <span>Emergency Pest Control</span>
                            <h4 class="mb-3">24/7 Emergency Response</h4>
                            <p>
                                For urgent pest problems, call our emergency hotline:
                                <br />
                                <strong>+254 728 094456</strong>
                            </p>
                            <p> <strong>+254 758 621755</strong>
                            </p>
                            <p>
                                <strong>+254 796 701590</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="images/about/img-1.jpg" alt="" class="img-fluid" />
                        <img src="images/about/img-2.jpg" alt="" class="img-fluid mt-4" />
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="images/about/img-3.jpg" alt="" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Professional Pest Control Services</h2>
                        <p class="mt-4 mb-5">
                            We specialize in providing professional pest control services
                            for residential, commercial, and industrial properties. Our
                            dedicated team ensures effective pest elimination and long-term
                            prevention.
                        </p>

                        <a href="{{ url('service') }}" class="btn btn-main-2 btn-round-full btn-icon">View Our Services
                            <i class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3">1000</span>+
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3">95</span>%
                            <p>Pest Elimination Rate</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3">25</span>+
                            <p>Experienced Pest Control Experts</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3">20</span>
                            <p>Service Locations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section service gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Effective Pest Control Services</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>
                            Discover our comprehensive pest control services tailored to
                            meet your needs. We ensure effective and reliable solutions for
                            pest management.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-bug text-lg"></i>
                            <h4 class="mt-3 mb-3">Pest Extermination</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">
                                We specialize in safe and effective pest extermination
                                services to eliminate various types of pests from your
                                property.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-shield-alt text-lg"></i>
                            <h4 class="mt-3 mb-3">Pest Prevention</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">
                                Our proactive pest prevention measures help protect your
                                property from future infestations, ensuring long-term
                                pest-free environments.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-spray text-lg"></i>
                            <h4 class="mt-3 mb-3">Safe Chemical Treatments</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">
                                We use environmentally-friendly and safe chemical treatments
                                to ensure effective pest control without harming your
                                surroundings.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section testimonial-2 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>Customer Testimonials</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>
                            Hear what our clients have to say about our professional pest
                            control services and their experiences with us.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12 testimonial-wrap-2">
                    <div class="testimonial-block style-2 gray-bg">
                        <i class="icofont-quote-right"></i>

                        <div class="testimonial-thumb">
                            <img src="images/team/test-thumb1.jpg" alt="" class="img-fluid" />
                        </div>

                        <div class="client-info">
                            <h4>Highly Effective Service!</h4>
                            <span>Wanjiku Kamau</span>
                            <p>
                                They provided exceptional pest control service that completely
                                resolved our pest issues. Highly recommend!
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-block style-2 gray-bg">
                        <div class="testimonial-thumb">
                            <img src="images/team/test-thumb2.jpg" alt="" class="img-fluid" />
                        </div>

                        <div class="client-info">
                            <h4>Reliable and Professional!</h4>
                            <span>Mwangi Njoroge</span>
                            <p>
                                The pest control experts were prompt, knowledgeable, and
                                professional. Great experience overall!
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2 gray-bg">
                        <div class="testimonial-thumb">
                            <img src="images/team/test-thumb3.jpg" alt="" class="img-fluid" />
                        </div>

                        <div class="client-info">
                            <h4>Excellent Customer Service!</h4>
                            <span>Achieng Ogutu</span>
                            <p>
                                They provided outstanding customer service and addressed all
                                our concerns effectively. Very pleased with their service.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2 gray-bg">
                        <div class="testimonial-thumb">
                            <img src="images/team/test-thumb4.jpg" alt="" class="img-fluid" />
                        </div>

                        <div class="client-info">
                            <h4>Great Results!</h4>
                            <span>Mutua Kimani</span>
                            <p>
                                Their pest control treatment delivered excellent results, and
                                we haven't had any issues since. Highly satisfied!
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2 gray-bg">
                        <div class="testimonial-thumb">
                            <img src="images/team/test-thumb1.jpg" alt="" class="img-fluid" />
                        </div>

                        <div class="client-info">
                            <h4>Professional and Courteous!</h4>
                            <span>Muthoni Mwangi</span>
                            <p>
                                The team was professional, courteous, and thorough in
                                addressing our pest control needs. Would definitely use their
                                services again.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
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
