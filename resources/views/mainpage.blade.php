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
    <title>UFS DIGITAL LIMITED - Creating a Brighter, Safer Future</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "iaazso2imf");
    </script>
</head>

<style type="text/css">
    .span.odometer-formatting-mark {
        display: none!important;
    }
</style>

<section class="hero-wrap style3 bg-squeeze">
    <img src="assets/img/hero/hero-shape-10.png" alt="Image" class="hero-shape-one">
    <img src="assets/img/hero/hero-shape-15.png" alt="Image" class="hero-shape-two">
    <img src="assets/img/hero/hero-shape-14.png" alt="Image" class="hero-shape-three">
    <img src="assets/img/hero/hero-shape-11.png" alt="Image" class="hero-shape-four animationFramesTwo">
    <div class="hero-slider-one owl-carousel">
    <div class="hero-slide-item">
    <div class="container">
    <div class="row gx-5 align-items-center">
    <div class="col-md-6">
    <div class="hero-content" data-speed="0.10" data-revert="true">
        <span>Introducing UFS Digital Limited</span>
        <h1>Your Local Guide to Government Schemes & Banking Services</h1>
        <p>Welcome to UFS Digital Limited, your reliable partner in navigating the world of government schemes, insurance, pensions, and banking services</p>
        <div class="hero-btn">
            <a href="{{ route('serviceDetail') }}" class="btn style1">Get Started</a>
            <a class="play-video" data-fancybox href="#">
            <span class="play-btn"> <i class="flaticon-play-button-arrowhead"></i></span>
            <span class="sm-none">Watch Video</span>
            </a>
        </div>
    </div>
    </div>
    <div class="col-md-6">
        <div class="hero-img-wrap">
        <img src="assets/img/hero/hero-shape-13.png" alt="Image" class="hero-shape-five bounce">
        <img src="assets/img/hero/hero-shape-12.png" alt="Image" class="hero-shape-six moveHorizontal">
        <img src="assets/img/hero/hero-slide-1.png" alt="Image" class="hero-img">
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="hero-slide-item">
    <div class="container">
    <div class="row gx-5 align-items-center">
    <div class="col-md-6">
    <div class="hero-content" data-speed="0.10" data-revert="true">
    <span>Financial Empowerment System</span>
    <h1>Your Trusted Partner in Financial Empowerment</h1>
    <p>We are committed to empowering local individuals by providing them with the knowledge, guidance, and support required to make informed decisions. Contact us today and embark on a journey towards financial empowerment and security</p>
    <div class="hero-btn">
    <a href="{{ route('serviceDetail') }}" class="btn style1">Get Started</a>
    <a class="play-video" data-fancybox href="#">
    <span class="play-btn"> <i class="flaticon-play-button-arrowhead"></i></span>
    <span class="sm-none">Watch Video</span>
    </a>
    </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="hero-img-wrap">
    <img src="assets/img/hero/hero-shape-13.png" alt="Image" class="hero-shape-five bounce">
    <img src="assets/img/hero/hero-shape-12.png" alt="Image" class="hero-shape-six moveHorizontal">
    <img src="assets/img/hero/hero-slide-2.png" alt="Image" class="hero-img">
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="hero-slide-item">
    <div class="container">
    <div class="row gx-5 align-items-center">
    <div class="col-md-6">
    <div class="hero-content" data-speed="0.10" data-revert="true">
    <span>Global Money Transfer</span>
     <h1>Navigating the World of Banking Services</h1>
    <p>Banking services play a vital role in our daily lives, we recognize the importance of seamless & convenient banking experiences. Our banking coordinators will acquaint you with a wide range of banking services, including opening bank accounts, applying for loans, understanding investment options & accessing digital banking platforms</p>
    <div class="hero-btn">
    <a href="{{ route('serviceDetail') }}" class="btn style1">Get Started</a>
    <a class="play-video" data-fancybox href="#">
    <span class="play-btn"> <i class="flaticon-play-button-arrowhead"></i></span>
    <span class="sm-none">Watch Video</span>
    </a>
    </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="hero-img-wrap">
    <img src="assets/img/hero/hero-shape-13.png" alt="Image" class="hero-shape-five bounce">
    <img src="assets/img/hero/hero-shape-12.png" alt="Image" class="hero-shape-six moveHorizontal">
    <img src="assets/img/hero/hero-slide-3.png" alt="Image" class="hero-img">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>

<section class="feature-wrap pt-100 pb-75">
    <div class="container">
    <div class="row">
    <div class="col-xl-10 offset-xl-1 col-lg-6 offset-lg-1">
    <div class="section-title style1 text-center mb-40">
    <span>Services</span>
    <h2>Take Action! Click an option below to</h2>
    </div>
    </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="feature-card style3">
        <div class="feature-info">
            <div class="feature-title">
            <span><img src="assets/img/feature/mart.png" alt="Image"></span>
            <h3>UP MSME MART</h3>
            </div>
            <p>Explore our diverse product collection. Find quality products and exclusive deals. Shop now for a delightful experience!</p>
            <a href="https://upmsmemart.com/" class="link style1">Shop now!<i class="flaticon-right-arrow-1"></i></a>
        </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="feature-card style3">
            <div class="feature-info">
            <div class="feature-title">
            <span><img src="assets/img/feature/feature-icon-1.png" alt="Image"></span>
            <h3>BC AGENT</h3>
            </div>
            <p>Join as a BC agent and empower financial services. Earn commissions while providing banking solutions to customers.</p>
            <a href="{{ route('serviceDetail') }}" class="link ">Join now!<i class="flaticon-right-arrow-1"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="feature-card style3">
        <div class="feature-info">
        <div class="feature-title">
        <span><img src="assets/img/feature/feature-icon-3.png" alt="Image"></span>
        <h3>PAN CARD SERVICE</h3>
        </div>
        <p>Apply for PAN card online. Quick & easy process. Get your PAN card delivered to your doorstep.</p>
        <a href="{{ route('serviceDetail') }}" class="link style1">Apply now!<i class="flaticon-right-arrow-1"></i></a>
        </div>
      </div>
    </div>
    </div>
    </div>
</section>

<section class="why-choose-wrap style1 pb-100 bg-bunting">
    <div class="container">
      <div class="row gx-5 align-items-center">
        <div class="col-lg-6">
            <div class="wh-img-wrap">
            <img src="assets/img/why-choose-us/wh-img-1.png" alt="Image">
            <img class="wh-shape-one bounce" src="assets/img/why-choose-us/wh-shape-1.png" alt="Image">
            <img class="wh-shape-two animationFramesTwo" src="assets/img/why-choose-us/wh-shape-2.png" alt="Image">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="wh-content">
                <div class="content-title style1">
                    <span>Why Choose Us</span>
                    <h2>Get World Class &amp; Fastest Online Banking Services</h2>
                    <p>We aim to make banking accessible to everyone, ensuring that you have the necessary knowledge and tools to manage your finances effectively.</p>
                </div>
                <div class="feature-item-wrap">
                    <div class="feature-item">
                        <span class="feature-icon"><i class="flaticon-graph"></i></span>
                        <div class="feature-text">
                            <h3>Banking Made Easy</h3>
                            <p>Say goodbye to long queues & complicated procedures! At UFS DIGITAL LIMITED, we prioritize convenience & accessibility. Use our services effortlessly at our CSP with the help of our dedicated BC agents.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><i class="flaticon-user"></i></span>
                        <div class="feature-text">
                            <h3>Expert Assistance at Your Service</h3>
                            <p>Our BC agents are highly trained professionals, ready to assist you every step of the way. They have the knowledge & expertise to guide you through the banking process & address any concerns you may have.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><i class="flaticon-computer"></i></span>
                        <div class="feature-text">
                            <h3>Become a Member</h3>
                            <p>Join our growing community of satisfied customers! UFS DIGITAL LIMITED welcomes you with open arms, ready to provide you with top-notch banking services & personalized support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</section>

<div class="counter-wrap">
    <div class="container">
        <div class="counter-card-wrap">
            <div class="counter-card">
                <div class="counter-text">
                <div class="counter-num"><span class="odometer" data-count="6"></span></div>
                    <p>Years in Banking</p>
                </div>
            </div>
             <div class="counter-card">
                <div class="counter-text">
                <div class="counter-num"><span class="odometer" data-count="19"></span></div>
                    <p>Presence in States / UTs</p>
                </div>
            </div>
            <div class="counter-card">
                <div class="counter-text">
                <div class="counter-num"><span class="odometer" data-count="2,642"></span></div>
                    <p>Our CSP Branches</p>
                </div>
            </div>
            <div class="counter-card">
                <div class="counter-text">
                <div class="counter-num"><span class="odometer" data-count="2,00,000"></span></div>
                    <p>Happy Customers</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="service-wrap style3 ptb-100 bg-rock">
    <div class="container">
        <img src="assets/img/service-shape-1.png" alt="Image" class="service-shape-one">
        <img src="assets/img/service-shape-2.png" alt="Image" class="service-shape-two">
        <div class="section-title style1 text-center mb-40">
        <span>BANKING SERVICE</span>
        <h2 class="text-white">Get Your CSP Point</h2>
        </div>
        <div class="row gx-5 align-items-center">
            <div class="col-md-4">
                <div class="service-card style3">
                    <span ><img src="assets/img/feature/bob.jpg"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card style3">
                    <span ><img src="assets/img/feature/uco.jpg"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card style3">
                    <span ><img src="assets/img/feature/bubg.jpg"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card style3">
                    <span ><img src="assets/img/feature/sbi.jpg"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card style3">
                    <span ><img src="assets/img/feature/bggb.jpg"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card style3">
                    <span ><img src="assets/img/feature/PNB.jpg"></span>
                </div>
            </div>
        </div>
        <div class="text-center mt-20">
            <a href="{{ route('serviceDetail') }}" class="btn style1">View All Services</a>
        </div>
    </div>
</section>

<section class="shopping-wrap ptb-100">
  <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6 col-12 order-lg-1 order-2">
        <div class="shopping-content">
            <img src="assets/img/shopping/shopping-shape-1.png" alt="Image" class="shopping-shape-one moveHorizontal">
            <img src="assets/img/shopping/shopping-shape-2.png" alt="Image" class="shopping-shape-two bounce">
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
            <a href="{{ route('contact') }}" class="btn style1">Contact Us</a>
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

<section class="testimonial-wrap ptb-100  bg-albastor">
    <div class="container">
    <div class="row">
        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
        <div class="section-title style1 text-center mb-40">
        <span>Testimonials from Leaders, Celebrities, and Entrepreneurs</span>
        <h2>Unveiling the Path to Success</h2>
        </div>
        </div>
    </div>
    <div class="testimonial-slider-three owl-carousel">
        <div class="testimonial-card style3">
            <span class="quote-icon"><i class="flaticon-quotation-mark"></i></span>
            <p class="client-quote">अगर हम वास्तव में भ्रष्टाचार पर हमला करना चाहते हैं, तो हमें 'डिजिटल लेनदेन' की ओर बढ़ना होगा। टेक्नोलॉजी का इस्तेमाल करना होगा. प्रौद्योगिकी के इस्तेमाल से भ्रष्टाचार पर प्रहार होगा और गरीबों को सुविधाएं भी मिलेंगी । राज्य में 56,000 ग्राम पंचायतें हैं और उनमें से 55,000 में बैंकिंग कॉरेस्पोंडेंट सखी के चयन की प्रक्रिया पूरी हो चुकी है ।</p>
            <div class="testimonial-card-thumb">
              <div class="client-info-wrap">
                <div class="client-img"><img src="assets/img/testimonials/t6.jpg" alt="Image"></div>
                <div class="client-info"><h4>Yogi Adityanath</h4><span>Hon'ble CM, Uttar Pradesh</span></div>
              </div>
            </div>
        </div>
        <div class="testimonial-card style3">
            <span class="quote-icon"><i class="flaticon-quotation-mark"></i></span>
            <p class="client-quote">बी सी सखी (बैंकिंग करेस्पांडेंट) से प्रदेश की महिलाएं आत्मनिर्भर हो रही हैं। और बी सी सखियों को अपने कार्य क्षेत्र में और अधिक विस्तार देने की जरूरत है, इससे वह और अधिक स्वावलंबी, सशक्त और मजबूत हो सकेंगी। बी सी सखियों के कार्य से महिलाओं की न केवल आमदनी बढ़ी है, बल्कि उन्हें समाज में भी उचित स्थान मिला है, सम्मान मिला है और उनका स्वयं का भी आत्मविश्वास बढ़ा है।</p>
            <div class="testimonial-card-thumb">
              <div class="client-info-wrap">
                <div class="client-img"><img src="assets/img/testimonials/t8.jpg" alt="Image"></div>
                <div class="client-info"><h4>Keshav P. Maurya</h4><span>Deputy CM, Uttar Pradesh</span></div>
              </div>
            </div>
        </div>
        <div class="testimonial-card style3">
            <span class="quote-icon"><i class="flaticon-quotation-mark"></i></span>
            <p class="client-quote">बैंकिंग कॉरेस्पोंडेंट सखी, जो मोबाइल एटीएम मशीनों के उपयोग से ग्रामीण और दूरदराज के इलाकों में रहने वाले लोगों को नवीन बैंकिंग सेवाएं प्रदान करती है। जब आस-पास कोई बैंक न हो तो महिलाओं को मौके पर नकदी उपलब्ध कराने में मदद के लिए नियुक्त किया जाता है। यह इन "सखियों" को केवल वास्तविक आय अर्जित करने के साथ-साथ अपने समुदायों में वास्तविक प्रतिष्ठा हासिल करने की क्षमता प्रदान करता है।</p>
            <div class="testimonial-card-thumb">
              <div class="client-info-wrap">
                <div class="client-img"><img src="assets/img/testimonials/t5.jpg" alt="Image"></div>
                <div class="client-info"><h4>Priyanka Chopra</h4><span>National Ambassador to UNICEF India</span></div>
              </div>
            </div>
        </div>
        <div class="testimonial-card style3">
            <span class="quote-icon"><i class="flaticon-quotation-mark"></i></span>
            <p class="client-quote">मेरा नाम प्रियंका सिंह है और मैं सुल्तानपुर के पास एक छोटे से गाँव बहुरावां में रहती हूँ। पहले, हमारे गाँव में बैंकों तक पहुँचना एक बड़ी मुश्किल थी। दूर रहने के कारण हमें बैंक जाने में दिक्कत होती थी | बीसी सखी ने हमें आय के स्रोत के साथ हमारे छोटे से गाँव में बैंकिंग सेवाओं में सहायता की है,जैसे खाता खोलने, पैसे जमा या निकासी, व्यवसाय लोन में सहायता | बीसी सखी के आने से हमारे गाँव का विकास हुआ है और लोगों का जीवन सुगम हो गया है। हम बीसी सखी का हमेशा आभारी रहेंगे और यह हमारे लिए एक मार्गदर्शक और साथी बन गई हैं।</p>
            <div class="testimonial-card-thumb">
              <div class="client-info-wrap">
                <div class="client-img"><img src="assets/img/testimonials/priyanka.jpg" alt="Image"></div>
                <div class="client-info"><h4>Priyanka Singh</h4><span>BC SAKHI, Bank of Baroda</span></div>
              </div>
            </div>
        </div>
        <div class="testimonial-card style3">
            <span class="quote-icon"><i class="flaticon-quotation-mark"></i></span>
            <p class="client-quote">मेरा नाम शानू खान है। मैं पिछले 2 वर्षों से बैंक ऑफ बड़ौदा का बैंकिंग मित्र हूँ। एक बैंकिंग मित्र होने से मुझे आय का एक स्थिर और विश्वसनीय स्रोत मिला है। मुझे खोले गए प्रत्येक खाते, संसाधित प्रत्येक लेनदेन और बेचे गए प्रत्येक वित्तीय उत्पाद के लिए कमीशन मिलता है। इस आय ने न केवल मेरे परिवार को वित्तीय सुरक्षा प्रदान की है, बल्कि मुझे अपने बच्चों की शिक्षा में निवेश करने और हमारे जीवन स्तर में सुधार करने का भी अवसर मिला है।</p>
            <div class="testimonial-card-thumb">
            <div class="client-info-wrap">
            <div class="client-img"><img src="assets/img/testimonials/shanu1.jpg" alt="Image"></div>
            <div class="client-info"><h4>Shanu Khan</h4><span>BC, Bank of Baroda</span></div>
            </div>
            </div>
        </div>
        <div class="testimonial-card style3">
            <span class="quote-icon"><i class="flaticon-quotation-mark"></i></span>
            <p class="client-quote">बैंकिंग मित्र बनकर, मैंने स्वयं को एक सामाजिक कार्यकर्ता के रूप में भी पाया है। मेरे गांव के लोगों के लिए बैंकिंग सेवाओं तक पहुंचना एक बड़ी समस्या थी, लेकिन बैंकिंग मित्र के रूप में, मैंने उन्हें बैंक के नजदीक लाने में सहायता की है। अब वे अपने पैसे को सुरक्षित रखने, बैंक खाते के माध्यम से ऋण लेने और अन्य वित्तीय सेवाओं का उपयोग करने के लाभ उठा रहे हैं।</p>
            <div class="testimonial-card-thumb">
            <div class="client-info-wrap">
            <div class="client-img"><img src="assets/img/testimonials/rab_balak.jpg" alt="Image"></div>
            <div class="client-info"><h4>Ram Balak</h4><span>BC, UCO Bank</span></div>
            </div>
            </div>
        </div>
        <div class="testimonial-card style3">
            <span class="quote-icon"><i class="flaticon-quotation-mark"></i></span>
            <p class="client-quote">मैं एक बैंकिंग मित्र के रूप में काम करता हूं और आपसे अपने इस सफल अनुभव को साझा करना चाहता हूं । जिसने मुझे न केवल आर्थिक रूप से समृद्धि दी है बल्कि आधारभूत समाज सेवा में भागीदार बनाया है । मेरे बैंकिंग मित्र के रूप में काम करते समय, मैंने अपने गांव के लोगों को आधार, पैन कार्ड, किसान क्रेडिट कार्ड जैसे विभिन्न योजनाओं के लिए आवेदन करने में मदद की है । इसके अलावा, मैंने उन्हें ई-बैंकिंग, मोबाइल बैंकिंग और डिजिटल भुगतान के लाभ के बारे में शिक्षित किया है ।</p>
            <div class="testimonial-card-thumb">
            <div class="client-info-wrap">
            <div class="client-img"><img src="assets/img/testimonials/govind.jpg" alt="Image"></div>
            <div class="client-info"><h4>Gulab Chandra</h4><span>BC, Bank of Baroda</span></div>
            </div>
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
            <a href="https://play.google.com/store/apps/details?id=com.ufsdigital.ufsdhan"><img src="assets/img/play-store.png" alt="Image"></a>
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
                <img src="assets/img/goal/goal-shape-1.png" alt="Image" class="goal-shape-three bounce">
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
@endsection