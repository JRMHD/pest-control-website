 <header>
     <div class="header-top-bar">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-6">
                     <ul class="top-bar-info list-inline-item pl-0 mb-0">
                         <li class="list-inline-item">
                             <a href="mailto:info@HypervermPestControl.com"><i
                                     class="icofont-support-faq mr-2"></i>info@HypervermPestControl.com</a>
                         </li>
                         <li class="list-inline-item">
                             <i class="icofont-location-pin mr-2"></i>Nairobi,Kenya
                         </li>
                     </ul>
                 </div>
                 <div class="col-lg-6">
                     <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                         <a href="tel:+254 728 094456">
                             <span>Call Now : </span>
                             <span class="h4">+254 728 094456</span>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <nav class="navbar navbar-expand-lg navigation" id="navbar">
         <div class="container">
             <a class="navbar-brand" href="{{ url('welcome') }}">
                 <img src="images/logo.png" alt="" class="img-fluid" />
             </a>

             <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                 aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="icofont-navigation-menu"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarmain">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="{{ url('welcome') }}">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ url('about') }}">About</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ url('service') }}">Services</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ url('appoinment') }}">Request Inspection</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
 </header>
