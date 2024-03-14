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
    <title>UFS DIGITAL LIMITED - Contact</title>
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
        <h2>Contact Us</h2>
        <ul class="breadcrumb-menu list-style">
        <li><a href="index.php">Home </a></li>
         <li>Contact</li>
        </ul>
        </div>
        </div>
        <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
        <div class="breadcrumb-img">
        <img src="assets/img/breadcrumb/br-shape-5.png" alt="Image" class="br-shape-five animationFramesTwo">
        <img src="assets/img/breadcrumb/br-shape-6.png" alt="Image" class="br-shape-six bounce">
        <img src="assets/img/breadcrumb/contact.png" alt="Image">
        </div>
        </div>
        </div>
        </div>
    </div>

    <section class="contact-wrap pt-100">
        <div class="container">
        <div class="row justify-content-center pb-75">
            <div class="col-lg-4 col-md-6">
                <div class="contact-item">
                    <span class="contact-icon"><i class="flaticon-map"></i></span>
                    <div class="contact-info">
                        <h3>Our Location</h3>
                        <p>Summit Building, Vibhuti Khand, Gomti Nagar, Lucknow-226010</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-item">
                <span class="contact-icon"><i class="flaticon-email-2"></i></span>
                <div class="contact-info">
                    <h3>Email Us</h3>
                    <a href="mailto: hello@ufsdigital.com">hello@ufsdigital.com</a>
                    <a href="mailto: hari.pandey@ufsdigital.com">hari.pandey@ufsdigital.com</a>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-item">
                    <span class="contact-icon"><i class="flaticon-phone-call"></i></span>
                    <div class="contact-info">
                        <h3>Call us</h3>
                        <a href="tel:6390000201">+91 639 000 0201</a>
                        <a href="tel:6390000205">+91 639 000 0205</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=705, Summit Building, Vibhuti Khand, Gomti Nagar, Lucknow-226010&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {width:100%!important;height:400px!important;}</style></div>
        <!-- <div class="comp-map pb-100">
            <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=705, Summit Building, Vibhuti Khand, Gomti Nagar, Lucknow-226010&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div> -->
        </div>
        <div class="contact-form-area ptb-100 bg-albastor">
        <img src="assets/img/contact-shape-1.png" alt="Image" class="contact-shape-one animationFramesTwo">
        <img src="assets/img/contact-shape-2.png" alt="Image" class="contact-shape-two bounce">
         <div class="container">
        <div class="row">
        <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
        <div class="content-title style1 text-center mb-40">
        <span>Send Us A Message</span>
        <h2>Do You have Any Questions?</h2>
        </div>
        <div class="contact-form">
        <form class="form-wrap" id="contactForm">
        <div class="row">
        <div class="col-md-6">
        <div class="form-group">
        <input type="text" name="name" placeholder="Your Name*" id="name" required data-error="Please enter your name">
        <div class="help-block with-errors"></div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <input type="email" name="email" id="email" required placeholder="Your Email*" data-error="Please enter your email*">
        <div class="help-block with-errors"></div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <input type="number" name="phone" id="phone" required placeholder="Phone Number" data-error="Please enter your phone number">
        <div class="help-block with-errors"></div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <input type="text" name="msg_subject" placeholder="Subject" id="msg_subject" required data-error="Please enter your subject">
        <div class="help-block with-errors"></div>
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group v1">
        <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
        <div class="help-block with-errors"></div>
        </div>
        </div>
        <div class="col-md-12 text-center">
        <button type="submit" class="btn style1 w-100 d-block">Send Message </button>
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
  </div>
</div>
@endsection