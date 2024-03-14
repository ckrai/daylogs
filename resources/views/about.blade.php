@extends('layouts.primary')
@section('matter')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/fancybox.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark-theme.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>UFS DIGITAL LIMITED - About Us</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<style type="text/css">
    .span.odometer-formatting-mark {
    display: none!important;
    }
</style>

<div class="page-wrapper">
<div class="content-wrapper">

<div class="breadcrumb-wrap bg-spring">
    <img src="assets/img/breadcrumb/br-shape-1.png" alt="Image" class="br-shape-one xs-none">
    <img src="assets/img/breadcrumb/br-shape-2.png" alt="Image" class="br-shape-two xs-none">
    <img src="assets/img/breadcrumb/br-shape-3.png" alt="Image" class="br-shape-three moveHorizontal sm-none">
    <img src="assets/img/breadcrumb/br-shape-4.png" alt="Image" class="br-shape-four moveVertical sm-none">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-8 col-sm-8">
            <div class="breadcrumb-title">
                <h2>About Us</h2>
              <ul class="breadcrumb-menu list-style">
                <li><a href="index.php">Home</a></li>
                <li>About Us</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
            <div class="breadcrumb-img">
            <img src="assets/img/breadcrumb/br-shape-5.png" alt="Image" class="br-shape-five animationFramesTwo">
            <img src="assets/img/breadcrumb/br-shape-6.png" alt="Image" class="br-shape-six bounce">
            <img src="assets/img/breadcrumb/about us.png" alt="Image">
            </div>
          </div>
        </div>
    </div>
</div>

<section class="about-wrap style1 ptb-100">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="about-img-wrap">
                <img src="assets/img/about/about-shape-1.png" alt="Image" class="about-shape-one bounce">
                <img src="assets/img/about/about-shape-2.png" alt="Image" class="about-shape-two moveHorizontal">
                <img src="assets/img/about/about-img-1.png" alt="Image" class="about-img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <img src="assets/img/about/about-shape-3.png" alt="Image" class="about-shape-three">
                <div class="content-title style1">
                    <span>Smart Banking</span>
                    <h2>UFS Digital Limited – Revolutionizing Banking Services in Rural Areas</h2>
                    <p>In the technologically-driven world of today, the necessity for accessible and efficient banking services has never been more vital, especially in rural areas. UFS Digital Limited emerges as a pioneering force, bridging the gap between traditional banking and modern digital financial solutions.</p>
                </div>
                <ul class="content-feature-list style1 list-style">
                    <li><span><i class="flaticon-tick"></i></span>Seamless Account Opening</li>
                    <li><span><i class="flaticon-tick"></i></span>Empowering Through Digital Payments</li>
                    <li><span><i class="flaticon-tick"></i></span>Access to Credit and Loans</li>
                </ul>
                    <a href="about.php" class="btn style1">More About us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-wrap bg-albastor pt-100 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="section-title style1 text-center mb-40">
                <span>Services</span>
                <h2>Providing Services For Last 6 Years With Reputation</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                <div class="service-card style1">
                <span class="service-icon">
                <img src="assets/img/service/acopen.png" alt="Image">
                </span>
                <h3><a href="{{route('sb-account')}}">Account Opening</a></h3>
                <!-- <p>Lorem ipsum dolor sit ametus situlo consec tetur adicingus elittque coris sapite illo sit.</p> -->
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                <div class="service-card style1">
                <span class="service-icon">
                <img src="assets/img/service/cash.png" alt="Image">
                </span>
                <h3><a href="{{route('fd-account')}}">FD Services</a></h3>
                <!-- <p>Lorem ipsum dolor sit ametus situlo consec tetur adicingus elittque coris sapite illo sit.</p> -->
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                <div class="service-card style1">
                <span class="service-icon">
                <img src="assets/img/service/services.png" alt="Image">
                </span>
                <h3><a href="{{route('rd-account')}}">RD Services</a></h3>
                <!-- <p>Lorem ipsum dolor sit ametus situlo consec tetur adicingus elittque coris sapite illo sit.</p> -->
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                <div class="service-card style1">
                <span class="service-icon">
                <img src="assets/img/service/passbook.png" alt="Image">
                </span>
                <h3><a href="{{route('serviceDetail')}}">Passbook Printing</a></h3>
                <!-- <p>Lorem ipsum dolor sit ametus situlo consec tetur adicingus elittque coris sapite illo sit.</p> -->
                </div>
            </div> 
             <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                <div class="service-card style1">
                <span class="service-icon">
                <img src="assets/img/service/pension.png" alt="Image">
                </span>
                <h3><a href="{{route('serviceDetail')}}">Atal Pension Yojna</a></h3>
                <!-- <p>Lorem ipsum dolor sit ametus situlo consec tetur adicingus elittque coris sapite illo sit.</p> -->
                </div>
            </div> 
             <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                <div class="service-card style1">
                <span class="service-icon">
                <img src="assets/img/service/adhaar.png" alt="Image">
                </span>
                <h3><a href="{{route('serviceDetail')}}">Aadhar Seeding</a></h3>
                <!-- <p>Lorem ipsum dolor sit ametus situlo consec tetur adicingus elittque coris sapite illo sit.</p> -->
                </div>
            </div>  
        </div>
    </div>
</section>

<section class="shopping-wrap ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 order-lg-1 order-2">
                <div class="shopping-content">
                    <img src="assets/img/shopping/shopping-shape-1.png" alt="Image" class="shopping-shape-one">
                    <img src="assets/img/shopping/shopping-shape-2.png" alt="Image" class="shopping-shape-two">
                <div class="content-title style1 ">
                    <span>Woman Empowerment</span>
                    <h2>How BC SAKHIs Empower Women Entrepreneurs</h2>
                    <p>BC SAKHIs play a pivotal role in offering various financial services like opening bank accounts, processing loans, facilitating insurance, and promoting digital transactions. They act as the first point of contact between the community and formal banking institutions.</p>
                </div>
                <ul class="content-feature-list list-style">
                    <li><i class="ri-check-double-line"></i>Providing Access to Financial Services.</li>
                     <li><i class="ri-check-double-line"></i>Improving Financial Literacy.</li>
                    <li><i class="ri-check-double-line"></i>Fostering Entrepreneurship.</li>
                </ul>
                    <a href="contact.php" class="btn style1">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-6 col-12 order-lg-2 order-1">
                <div class="shopping-img-wrap">
                    <img src="assets/img/shopping/shopping-1.png" alt="Image">
                    <img src="assets/img/shopping/shopping-shape-3.png" alt="Image" class="shopping-shape-three">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="app-wrap  ptb-100 bg-rock">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8">
                <div class="app-content sm-center">
            <div class="content-title style2">
                <h2>You Can Find All Things You Need In Our App</h2>
            </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-4 text-md-end sm-center">
                <div class="app-btn">
                <a href="https://play.google.com/store/apps"><img src="assets/img/play-store.png" alt="Image"></a>
                <!-- <a href="https://www.apple.com/app-store/"><img src="assets/img/apple-store.png" alt="Image"></a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="goal-wrap ptb-100">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="goal-img-wrap">
                <img src="assets/img/goal/goal-shape-1.png" alt="Image" class="goal-shape-three">
                <img src="assets/img/goal/goal-shape-2.png" alt="Image" class="goal-shape-one">
                <img src="assets/img/goal/goal-shape-3.png" alt="Image" class="goal-shape-two">
                <img src="assets/img/goal/goal-1.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="goal-content">
            <div class="content-title style1">
                <span>Goal Setting</span>
                <h2>Maximizing Your Online Banking Experience</h2>
                <p>Online banking has become an integral part of managing our finances conveniently and efficiently. It offers a plethora of features that make financial transactions, such as transferring funds and making bill payments, quick and hassle-free.</p>
            </div>
            <ul class="content-feature-list style1 list-style">
                <li><span><i class="flaticon-tick"></i></span>Transfer Money Between Accounts</li>
                <li><span><i class="flaticon-tick"></i></span>Mobile Banking on the go</li>
                <li><span><i class="flaticon-tick"></i></span>Budgeting with Online Banking</li>
                <li><span><i class="flaticon-tick"></i></span>Protecting Your Account</li>
            </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="testimonial-wrap pt-100 pb-75 bg-albastor">
    <div class="container">
    <div class="row">
    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
    <div class="section-title style1 text-center mb-40">
    <span>Our Testimonials</span>
    <h2>What Client Says About Us</h2>
    </div>
    </div>
    </div>
    <div class="testimonial-slider-one owl-carousel">
    <div class="testimonial-card style1">
    <div class="client-info-area">
    <div class="client-info-wrap">
    <div class="client-img">
    <img src="assets/img/testimonials/client-1.jpg" alt="Image">
    </div>
    </div>
    <div class="quote-icon">
    <i class="flaticon-quote"></i>
    </div>
    </div>
    <p class="client-quote">Lorem ipsum dolor sit amet adi elition repell tetur delni vel quam aliq earum explibo dolor eme fugiat amet dolor lorem sit consect.</p>
    <div class="client-info">
    <h3>Jim Morison</h3>
    <span>Director, BAT</span>
    </div>
    </div>
    <div class="testimonial-card style1">
    <div class="client-info-area">
    <div class="client-info-wrap">
    <div class="client-img">
    <img src="assets/img/testimonials/client-2.jpg" alt="Image">
    </div>
    </div>
    <div class="quote-icon">
    <i class="flaticon-quote"></i>
    </div>
    </div>
    <p class="client-quote">Lorem ipsum dolor sit amet adi elition repell tetur delni vel quam aliq earum explibo dolor eme fugiat amet dolor lorem sit consect.</p>
    <div class="client-info">
        <h3>Alex Cruis</h3>
        <span>CEO, IBAC</span>
    </div>
    </div>
    <div class="testimonial-card style1">
        <div class="client-info-area">
            <div class="client-info-wrap">
            <div class="client-img">
            <img src="assets/img/testimonials/client-3.jpg" alt="Image">
            </div>
            </div>
            <div class="quote-icon">
            <i class="flaticon-quote"></i>
            </div>
        </div>
        <p class="client-quote">Lorem ipsum dolor sit amet adi elition repell tetur delni vel quam aliq earum explibo dolor eme fugiat amet dolor lorem sit consect.</p>
        <div class="client-info">
            <h3>Tom Haris</h3>
            <span>Engineer, Olleo</span>
        </div>
    </div>
    <div class="testimonial-card style1">
        <div class="client-info-area">
            <div class="client-info-wrap">
            <div class="client-img">
            <img src="assets/img/testimonials/client-4.jpg" alt="Image">
            </div>
            </div>
            <div class="quote-icon">
            <i class="flaticon-quote"></i>
            </div>
        </div>
        <p class="client-quote">Lorem ipsum dolor sit amet adi elition repell tetur delni vel quam aliq earum explibo dolor eme fugiat amet dolor lorem sit consect.</p>
        <div class="client-info">
        <h3>Harry Jackson</h3>
        <span>Enterpreneur</span>
        </div>
    </div>
    <div class="testimonial-card style1">
    <div class="client-info-area">
    <div class="client-info-wrap">
    <div class="client-img">
    <img src="assets/img/testimonials/client-5.jpg" alt="Image">
    </div>
    </div>
    <div class="quote-icon">
    <i class="flaticon-quote"></i>
    </div>
    </div>
    <p class="client-quote">Lorem ipsum dolor sit amet adi elition repell tetur delni vel quam aliq earum explibo dolor eme fugiat amet dolor lorem sit consect.</p>
    <div class="client-info">
    <h3>Chris Haris</h3>
    <span>MD, ITec</span>
    </div>
    </div>
    <div class="testimonial-card style1">
    <div class="client-info-area">
    <div class="client-info-wrap">
    <div class="client-img">
    <img src="assets/img/testimonials/client-6.jpg" alt="Image">
    </div>
    </div>
    <div class="quote-icon">
    <i class="flaticon-quote"></i>
    </div>
    </div>
    <p class="client-quote">Lorem ipsum dolor sit amet adi elition repell tetur delni vel quam aliq earum explibo dolor eme fugiat amet dolor lorem sit consect.</p>
    <div class="client-info">
    <h3>Mark Owen</h3>
    <span>Enterpreneur</span>
    </div>
    </div>
    </div>
    </div>
</section> -->

<section class="security-wrap ptb-100">
    <div class="container">
    <div class="row gx-5 align-items-center">
    <div class="col-lg-6 col-12 order-lg-1 order-2">
    <div class="security-content">
    <div class="content-title style1">
    <span>Banking Security</span>
    <h2>The Safest Way to Transact Your Money Fast</h2>
    <p>In today's digital era, where convenience and speed are paramount, the need for secure and fast money transactions has never been greater.</p>
    </div>
    <div class="feature-item-wrap">
    <div class="feature-item">
    <div class="feature-icon">
    <img src="assets/img/security/security-icon-1.png" alt="Image">
    </div>
    <div class="feature-text">
    <h3>Pay Online Securely</h3>
    <p>When utilizing UFS Digital Limited's platform, you can rest assured that your transactions are protected by state-of-the-art security features</p>
    </div>
    </div>
    <div class="feature-item">
    <div class="feature-icon">
    <img src="assets/img/security/security-icon-2.png" alt="Image">
    </div>
    <div class="feature-text">
    <h3>Convert Your Money In Seconds</h3>
    <p>UFS Digital Limited offers dedicated customer support to assist users in case of any transaction-related queries or concerns. Our support team plays a vital role in ensuring that customers have a smooth and secure experience on the platform.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-12 order-lg-2 order-1">
    <div class="security-img-wrap">
    <img src="assets/img/security/security-shape-1.png" alt="Image" class="security-shape-one">
    <img src="assets/img/security/security-shape-2.png" alt="Image" class="security-shape-two">
    <img src="assets/img/security/security-1.png" alt="Image">
    </div>
    </div>
    </div>
    </div>
</section>

<!-- <section class="testimonial-wrap pt-100 pb-75 bg-albastor">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
            <div class="section-title style1 text-center mb-40">
            <span>Our Clients</span>
            <h2>What Client Says About Us</h2>
            </div>
            </div>
        </div>
        <div class="testimonial-slider-one owl-carousel">
            @forelse ($clients as $client)
            <div class="testimonial-card style1">
            <div class="client-info-area">
            <div class="client-info-wrap">
            <div class="client-img">
            <img src="{{ url('/assets/'. $client->client_image)}}" alt="Image">
            </div>
            </div>
            <div class="quote-icon">
            <i class="flaticon-quote"></i>
            </div>
            </div>
            <p class="client-quote">{{$client->client_name}}</p>
            <div class="client-info">
            <h3>Jim Morison</h3>
            <span>Director, BAT</span>
            </div>
            </div>
            @empty
             <p class="btn btn-outline-danger">No record found, Please enter valid input!</p>
            @endforelse
        </div>
    </div>
</section> -->

</div>
</div>
@endsection