<!DOCTYPE html>
<html lang="zxx">
<link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
<body>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "iaazso2imf");
</script>

<div class="loader js-preloader">
    <div></div>
    <div></div>
    <div></div>
</div>

<div class="switch-theme-mode">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
    </label>
</div>

<header class="header-wrap style1">
    <div class="header-top">
    <button type="button" class="close-sidebar">
    <i class="ri-close-fill"></i>
    </button>
    <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-9 col-md-12">
            <div class="header-top-left">
                <ul class="contact-info list-style">
                <li><i class="flaticon-call"></i> <a href="tel:+91 639-000-0201">+91 639-000-0201</a></li>
                <li><i class="flaticon-email-1"></i> <a href="mailto: hello@ufsdigital.com"><span>hello@ufsdigital.com</span></a></li>
                <li><i class="flaticon-pin"></i><p>7th floor, Summit Building, Vibhuti Khand, Gomti Nagar, Lucknow-226010, U.P.</p>
                </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="header-top-right">
                <ul class="header-top-menu list-style">
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="http://rozzgaar.in/search">BC Support Helpline</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="header-bottom">
    <div class="container">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="{{ route('mainpage') }}">
            <img class="logo-light" src="assets/img/logo.png" alt="logo">
            <img class="logo-dark" src="assets/img/logo-white.png" alt="logo">
        </a>
        <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
            <div class="menu-close xl-none">
                <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
            </div>
            <ul class="navbar-nav ms-auto">
                <!-- <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li> -->
                <li class="nav-item"><a href="{{ route('mainpage') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                <li class="nav-item has-dropdown">
                    <a href="{{ route('serviceDetail') }}" class="nav-link">Service<i class="ri-arrow-down-s-line"></i></a>
                    <ul class="dropdown-menu">
                    <li class="nav-item"><a href="{{ route('sb-account') }}" class="nav-link">SB Account Opening</a></li>
                    <li class="nav-item"><a href="{{ route('fd-account') }}" class="nav-link">FD Account Opening</a></li>
                    <li class="nav-item"><a href="{{ route('rd-account') }}" class="nav-link">RD Account Opening</a></li>
                    <li class="nav-item"><a href="{{ route('serviceDetail') }}" class="nav-link">Service Details</a></li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="{{ route('project') }}" class="nav-link">Project<i class="ri-arrow-down-s-line"></i></a>
                    <ul class="dropdown-menu">
                    <li class="nav-item"><a href="{{ route('projectDetails') }}" class="nav-link">Project Details</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('teams') }}" class="nav-link">Team</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact Us</a></li>
                <li class="nav-item xl-none"><a href="{{ route('register') }}" class="btn style1">Register Now</a></li>
            </ul>
            <div class="others-options lg-none">
                <div class="searchbox">
                    <input type="search" placeholder="Search" hidden>
                    <button type="button" hidden><i class="flaticon-search"></i></button>
                </div>
                <div class="header-btn lg-none">
                    <a href="http://rozzgaar.in/search" class="btn style1">BC Support Helpline</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="mobile-bar-wrap">
        <div class="mobile-sidebar">
            <i class="ri-menu-4-line"></i>
        </div>
        <button class="searchbtn xl-none" type="button"><i class="flaticon-search"></i></button>
        <div class="mobile-menu xl-none">
            <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
        </div>
    </div>
    </div>
    <div class="search-area">
        <div class="container">
            <form action="#">
                <div class="form-group">
                    <input type="search" placeholder="Search Here" autofocus>
                </div>
            </form>
            <button type="button" class="close-searchbox"><i class="ri-close-line"></i></button>
        </div>
    </div>
    </div>
</header>

 @yield('matter')

<footer class="footer-wrap bg-rock">
    <div class="container">
            <img src="assets/img/footer-shape-1.png" alt="Image" class="footer-shape-one">
            <img src="assets/img/footer-shape-2.png" alt="Image" class="footer-shape-two">
        <div class="row pt-100 pb-75">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <a href="{{ route('mainpage') }}" class="footer-logo"><img src="assets/img/logo-white.png" alt="Image"></a>
                    <p class="comp-desc">We are on a mission to empower the unbanked areas in both rural and urban regions with our cutting-edge of financial services, delivered through our dedicated BC agents.</p>
                    <div class="social-link">
                        <ul class="social-profile list-style style1">
                        <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100092288654567&mibextid=ZbWKwL"><i class="ri-facebook-fill"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/UFS_Digital"><i class="ri-twitter-fill"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/ufs-digital-ltd-ufs/"><i class="ri-linkedin-fill"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Services</h3>
                    <ul class="footer-menu list-style">
                        <li><a href="{{ route('sb-account') }}"><i class="flaticon-next"></i>SB Account Opening</a></li>
                        <li><a href="{{ route('fd-account') }}"><i class="flaticon-next"></i>FD Account Opening</a></li>
                        <li><a href="{{ route('rd-account') }}"><i class="flaticon-next"></i>RD Account Opening</a></li>
                        <li><a href="{{ route('serviceDetail') }}"><i class="flaticon-next"></i>Service Details</a></li>
                        <li><a href="{{ route('project') }}"><i class="flaticon-next"></i>Projects</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Quick Links</h3>
                    <ul class="footer-menu list-style">
                    <li><a href="{{ route('about') }}"><i class="flaticon-next"></i>About</a></li>
                    <li><a href="{{ route('serviceDetail') }}"><i class="flaticon-next"></i>Services</a></li>
                    <li><a href="{{ route('project') }}"><i class="flaticon-next"></i>Projects</a></li>
                    <!-- <li><a href="{{ route('mainpage') }}"><i class="flaticon-next"></i>Blog</a></li> -->
                    <li><a href="{{ route('teams') }}"><i class="flaticon-next"></i>Team</a></li>
                    <li><a href="{{ route('contact') }}"><i class="flaticon-next"></i>Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Address</h3>
                    <ul class="contact-info list-style">
                        <li><i class="flaticon-pin"></i><p>7th floor, Summit Building, Vibhuti Khand, Gomti Nagar, Lucknow-226010, Uttar Pradesh</p></li>
                        <li><i class="flaticon-call"></i> <a href="tel:+91 639-000-0201">+91 639-000-0201</a></li>
                        <li><i class="flaticon-email-1"></i><a href="mailto: hello@ufsdigital.com"><span>hello@ufsdigital.com</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-text">
        <p><i class="ri-copyright-line"></i>All Rights Reserved By <a href="https://ufsdigital.com/" target="_blank">UFS - DIGITAL LIMITED</a></p>
    </div>
</footer>

<a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/fancybox.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/tweenmax.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>