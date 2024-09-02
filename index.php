<?php



$message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['name']) && $_POST['name'] != '' ){

    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $to = 'info@alpharoar-uae.com';
    $subject = 'Schedule Your Appointment';
    // $to = 'a.malek@orbit2i.ca';

    $msg = '
    <html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    </head>
    <body>
        <h4 style="display:rlt;">From: '.$name.'</h4>
        <h4 style="display:rlt;">From: '.$phone.'</h4>
        <h4 style="display:rlt;">From: '.$website.'</h4>
    </body>
    </html>
    ';
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <minakaramcs@gmail.com>' . "\r\n";  

    mail($to,$subject,$msg,$headers);
    $message_sent = true;
}


?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- meta tag -->
    <meta charset="utf-8" />
    <title>Orbit2i | IT CONSULTING SERVICES FOR YOUR BUSINESS</title>
    <meta name="description" content="Orbit2i | IT CONSULTING SERVICES FOR YOUR BUSINESS" />
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/images/fav.png"
    />
    <!-- Bootstrap v4.4.1 css -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/bootstrap.min.css"
    />
    <!-- font-awesome css -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/font-awesome.min.css"
    />
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css" />
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css" />
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css" />
    <!-- magnific popup css -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/magnific-popup.css"
    />
    <!-- Main Menu css -->
    <link rel="stylesheet" href="assets/css/rsmenu-main.css" />
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css" />
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="defult-home">
    <!--Preloader area start here-->
    <div id="loader" class="loader">
      <div class="loader-container"></div>
    </div>
    <!--Preloader area End here-->

    <!-- Main content Start -->
    <div class="main-content">
      <!--Full width header Start-->
      <div class="full-width-header">
        <!--Header Start-->
        <header id="rs-header" class="rs-header">
          <!-- Topbar Area Start -->
          <div class="topbar-area">
            <div class="container">
              <div class="row rs-vertical-middle">
                <div class="col-lg-2">
                  <div class="logo-part">
                    <a href="index.html"
                      ><img src="assets/images/logo-dark.png" alt=""
                    /></a>
                  </div>
                </div>
                <div class="col-lg-10 text-right">
                  <ul class="rs-contact-info">
                    <li class="contact-part">
                      <i class="flaticon-location"></i>
                      <span class="contact-info">
                        <span>Address</span>
                        5144 Morris St, Halifax, NS
                      </span>
                    </li>
                    <li class="contact-part">
                      <i class="flaticon-email"></i>
                      <span class="contact-info">
                        <span>E-mail</span>
                        <a href="mailto:A.malek@orbit2i.ca"> A.malek@orbit2i.ca</a>
                      </span>
                    </li>
                    <li class="contact-part no-border">
                      <i class="flaticon-call"></i>
                      <span class="contact-info">
                        <span>Phone</span>
                        <a href="tel:+19024483953">+1-902-448-3953</a>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Topbar Area End -->
        </header>
        <!--Header End-->
      </div>
      <!--Full width header End-->

      <!-- Banner Section Start -->
      <div class="rs-banner main-home pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-12 pr-140 md-mb-140 md-pr-15">
              <div class="content-wrap">
                <h1 class="it-title">
                  IT Consulting Services For Your Business
                </h1>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 pl-70 md-pl-15">
              <div class="rs-contact">
                <div class="contact-wrap">
                  <div class="content-part mb-25">
                    <h2 class="title mb-15">Schedule Your Appointment</h2>
                    <p class="desc">We here to help you 24/7 with experts</p>
                  </div>
                  <div id="appointment-messages"></div>


                  <?php 
                        if( $message_send ):

                    ?>

                       <h4> Data sent successfully, we will contact you. </h4>
                    
                    <?php 
                       else:
                    ?>
                   
                   <form action="index.php" method="POST" class="contact-form" novalidate="novalidate">

<fieldset>
  <div class="row">
    <div class="col-lg-12 mb-15">
      <input
        class="from-control"
        type="text"
        name="name"
        placeholder="Name"
        required=""
      />
    </div>
    <div class="col-lg-12 mb-15">
      <input
        class="from-control"
        type="email"
        name="email"
        placeholder="E-Mail"
        required=""
      />
    </div>
    <div class="col-lg-12 mb-15">
      <input
        class="from-control"
        type="text"
        name="phone"
        placeholder="Phone Number"
        required=""
      />
    </div>
    <div class="col-lg-12 mb-25">
      <input
        class="from-control"
        type="text"
        name="website"
        placeholder="Your Website"
        required=""
      />
    </div>
  </div>
  <div class="form-group mb-0">
    <input
      class="submit-btn"
      type="submit"
      value="Submit Now"
    />
  </div>
</fieldset>
</form>

                    <?php 
                      endif;
                    ?>








                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Banner Section End -->

      <!-- About Section Start -->
      <div
        id="rs-about"
        class="rs-about style1 pt-130 pb-190 md-pt-80 md-pb-80"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-12 md-mb-50">
              <div class="rs-animation-shape">
                <div class="pattern">
                  <img
                    src="assets/images/about/main-home/about-part-1.png"
                    alt=""
                  />
                </div>
                <div class="middle">
                  <img
                    class="dance"
                    src="assets/images/about/main-home/about-part-2.png"
                    alt=""
                  />
                </div>
                <div class="bottom-shape">
                  <img
                    class="dance2"
                    src="assets/images/about/main-home/about-part-3.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-12 pl-40 md-pl-15 md-pt-200 sm-pt-0">
              <div class="sec-title mb-30">
                <div class="sub-text">About Us</div>
                <h2 class="title pb-20">
                  Turning IT challenges to opportunities
                </h2>
                <div class="desc pr-90 md-pr-0">
                  We specialize in IT strategy, cloud solutions, Cybersecurity,
                  IoT, Data Science and AI.
                </div>
              </div>
              <!-- Skillbar Section Start -->
              <div class="row">
                <div class="col-lg-10">
                  <div class="rs-skillbar style1">
                    <div class="cl-skill-bar">
                      <!-- Start Skill Bar -->
                      <span class="skillbar-title"
                        >Client Satisfaction with Cloud Solutions</span
                      >
                      <div class="skillbar" data-percent="92">
                        <p class="skillbar-bar"></p>
                        <span class="skill-bar-percent"></span>
                      </div>
                      <!-- Start Skill Bar -->
                      <span class="skillbar-title"
                        >Cybersecurity Solutions Effectiveness</span
                      >
                      <div class="skillbar" data-percent="80">
                        <p class="skillbar-bar"></p>
                        <span class="skill-bar-percent"></span>
                      </div>
                      <!-- Start Skill Bar -->
                      <span class="skillbar-title"
                        >AI-Driven Strategy Implementation</span
                      >
                      <div class="skillbar" data-percent="95">
                        <p class="skillbar-bar"></p>
                        <span class="skill-bar-percent"></span>
                      </div>
                      <!-- Start Skill Bar -->
                      <span class="skillbar-title"
                        >IoT Integration Success Rate</span
                      >
                      <div class="skillbar" data-percent="85">
                        <p class="skillbar-bar"></p>
                        <span class="skill-bar-percent"></span>
                      </div>
                      <div class="btn-part mt-55">
                        <a class="readon learn-more" href="#rs-header">
                          Schedule Consultation</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Skillbar Section End -->
            </div>
          </div>
        </div>
      </div>
      <!-- About Section End -->

      <!-- Services Section Start -->
      <div
        class="rs-services main-home gray-color pt-120 pb-120 md-pt-70 md-pb-70"
      >
        <div class="container">
          <div class="sec-title2 text-center mb-45">
            <span class="sub-text">Services</span>
            <h2 class="title">
              Our Specialized IT Consulting and Technology Solutions
            </h2>
            <div class="heading-line"></div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-25">
              <div class="services-item">
                <div class="services-icon">
                  <div class="image-part">
                    <img
                      src="assets/images/services/main-home/icons/1.png"
                      alt=""
                    />
                  </div>
                </div>
                <div class="services-content">
                  <div class="services-text">
                    <h3 class="services-title">
                      <a href="software-development.html"
                        >IT Strategy & Consulting</a
                      >
                    </h3>
                  </div>
                  <div class="services-desc">
                    <p>
                      At vero eos et accusamus etiusto odio praesentium
                      accusamus etiusto odio data center for managing database.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-25">
              <div class="services-item">
                <div class="services-icon">
                  <div class="image-part">
                    <img
                      src="assets/images/services/main-home/icons/2.png"
                      alt=""
                    />
                  </div>
                </div>
                <div class="services-content">
                  <div class="services-text">
                    <h3 class="services-title">
                      <a href="web-development.html">Cloud solutions</a>
                    </h3>
                  </div>
                  <div class="services-desc">
                    <p>
                      At vero eos et accusamus etiusto odio praesentium
                      accusamus etiusto odio data center for managing database.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-25">
              <div class="services-item">
                <div class="services-icon">
                  <div class="image-part">
                    <img
                      src="assets/images/services/main-home/icons/3.png"
                      alt=""
                    />
                  </div>
                </div>
                <div class="services-content">
                  <div class="services-text">
                    <h3 class="services-title">
                      <a href="case-studies-single.html"
                        >Cybersecurity solutions</a
                      >
                    </h3>
                  </div>
                  <div class="services-desc">
                    <p>
                      At vero eos et accusamus etiusto odio praesentium
                      accusamus etiusto odio data center for managing database.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 md-mb-25">
              <div class="services-item">
                <div class="services-icon">
                  <div class="image-part">
                    <img
                      src="assets/images/services/main-home/icons/4.png"
                      alt=""
                    />
                  </div>
                </div>
                <div class="services-content">
                  <div class="services-text">
                    <h3 class="services-title">
                      <a href="cloud-and-devops.html"
                        >IoT Integration services</a
                      >
                    </h3>
                  </div>
                  <div class="services-desc">
                    <p>
                      At vero eos et accusamus etiusto odio praesentium
                      accusamus etiusto odio data center for managing database.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-mb-25">
              <div class="services-item">
                <div class="services-icon">
                  <div class="image-part">
                    <img
                      src="assets/images/services/main-home/icons/5.png"
                      alt=""
                    />
                  </div>
                </div>
                <div class="services-content">
                  <div class="services-text">
                    <h3 class="services-title">
                      <a href="product-design.html">Data Science & Analytics</a>
                    </h3>
                  </div>
                  <div class="services-desc">
                    <p>
                      At vero eos et accusamus etiusto odio praesentium
                      accusamus etiusto odio data center for managing database.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="services-item">
                <div class="services-icon">
                  <div class="image-part">
                    <img
                      src="assets/images/services/main-home/icons/6.png"
                      alt=""
                    />
                  </div>
                </div>
                <div class="services-content">
                  <div class="services-text">
                    <h3 class="services-title">
                      <a href="data-center.html">AI powered solutions</a>
                    </h3>
                  </div>
                  <div class="services-desc">
                    <p>
                      At vero eos et accusamus etiusto odio praesentium
                      accusamus etiusto odio data center for managing database.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Services Section End -->

      <!-- Call Us Section Start -->
      <div class="rs-call-us bg1 pt-120 md-pt-70 md-pb-80">
        <div class="container">
          <div class="row rs-vertical-middle">
            <div class="col-lg-6">
              <div class="image-part">
                <img src="assets/images/call-us/contact-here.png" alt="" />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="rs-contact-box text-center">
                <div class="address-item mb-25">
                  <div class="address-icon">
                    <i class="fa fa-phone"></i>
                  </div>
                </div>
                <div class="sec-title3">
                  <span class="sub-text">CALL US 24/7</span>
                  <h2 class="title"><a href="tel:+19024483953" class="text-white">+1-902-448-3953</a></h2>
                  <p class="desc">
                    Have any idea or project for in your mind call us or
                    schedule a appointment. Our representative will reply you
                    shortly.
                  </p>
                </div>
                <div class="btn-part mt-40">
                  <a class="readon lets-talk" href="#rs-header">Let's Talk</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Call Us Section Start -->

      <!-- Process Section Start -->
      <div class="rs-process pt-180 pb-120 md-pt-70 md-pb-70">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 md-mb-40">
              <div class="process-wrap bg3">
                <div class="sec-title mb-30">
                  <div class="sub-text new">Working Process</div>
                  <h2 class="title white-color">
                    Our Proven Process for Strategic IT Solutions
                  </h2>
                </div>
                <div class="btn-part mt-40">
                  <a class="readon learn-more contact-us" href="contact.html"
                    >Contact Us</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-8 pl-30 md-pl-15">
              <div class="row">
                <div class="col-md-6 mb-40">
                  <div class="rs-addon-number">
                    <div class="number-text">
                      <div class="number-area">1.</div>
                      <div class="number-title">
                        <h3 class="title">Discovery</h3>
                      </div>
                      <p class="number-txt">
                        We begin by understanding your business goals,
                        challenges, and technology landscape to identify the
                        best opportunities for growth and optimization.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-40">
                  <div class="rs-addon-number">
                    <div class="number-text">
                      <div class="number-area">2.</div>
                      <div class="number-title">
                        <h3 class="title">Strategy & Planning</h3>
                      </div>
                      <p class="number-txt">
                        Our experts develop a customized IT strategy,
                        integrating cloud solutions, AI, IoT, data analytics,
                        and cybersecurity to align with your business
                        objectives.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 sm-mb-40">
                  <div class="rs-addon-number">
                    <div class="number-text">
                      <div class="number-area">3.</div>
                      <div class="number-title">
                        <h3 class="title">Implementation & Execution</h3>
                      </div>
                      <p class="number-txt">
                        We deploy the planned solutions, ensuring seamless
                        integration with your existing systems, while minimizing
                        disruptions to your operations.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="rs-addon-number">
                    <div class="number-text">
                      <div class="number-area">4.</div>
                      <div class="number-title">
                        <h3 class="title">Monitoring & Optimization</h3>
                      </div>
                      <p class="number-txt">
                        Post-deployment, we continuously monitor performance and
                        provide ongoing optimization to maximize the value and
                        effectiveness of your IT investments.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Process Section End -->
    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
              <div class="footer-logo mb-30">
                <a><img src="assets/images/logo-dark.png" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
              <h3 class="widget-title">IT Services</h3>
              <ul class="site-map">
                <li>
                  <a>IT Strategy & Consulting</a>
                </li>
                <li><a>Cloud solutions</a></li>
                <li>
                  <a>Cybersecurity solutions</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                <h3 class="widget-title">IT Services</h3>
                <ul class="site-map">
                  <li><a>IoT Integration services</a></li>
                  <li><a>Data Science & Analytics</a></li>
                  <li><a>AI powered solutions</a></li>
                </ul>
              </div>
            <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
              <h3 class="widget-title">Contact Info</h3>
              <ul class="address-widget">
                <li>
                  <i class="flaticon-location"></i>
                  <div class="desc">5144 Morris St, Halifax, NS</div>
                </li>
                <li>
                  <i class="flaticon-call"></i>
                  <div class="desc">
                    <a href="tel:+19024483953">+1-902-448-3953</a>
                  </div>
                </li>
                <li>
                  <i class="flaticon-email"></i>
                  <div class="desc">
                    <a href="mailto:A.malek@orbit2i.ca">A.malek@orbit2i.ca</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row y-middle">
            <div class="col-lg-12">
              <div class="copyright text-center">
                <p>
                  &copy; <span id="current-year">2024</span> All Rights
                  Reserved.
                  <a href="#">Orbit2i</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="orange-color">
      <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div
      aria-hidden="true"
      class="modal fade search-modal"
      role="dialog"
      tabindex="-1"
    >
      <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
      >
        <span class="flaticon-cross"></span>
      </button>
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="search-block clearfix">
            <form>
              <div class="form-group">
                <input
                  class="form-control"
                  placeholder="Search Here..."
                  type="text"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Menu js -->
    <script src="assets/js/rsmenu-main.js"></script>
    <!-- op nav js -->
    <script src="assets/js/jquery.nav.js"></script>
    <!-- owl.carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Skill bar js -->
    <script src="assets/js/skill.bars.jquery.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- counter top js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- swiper js -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- particles js -->
    <script src="assets/js/particles.min.js"></script>
    <!-- magnific popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- pointer js -->
    <script src="assets/js/pointer.js"></script>
    <!-- contact form js -->
    <script src="assets/js/contact.form.js"></script>
    <!-- appointment form js -->
    <script src="assets/js/appointment.form.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
