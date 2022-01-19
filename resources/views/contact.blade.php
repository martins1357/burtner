<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from www.websiteprofs.com/assets/images/html/Consultancy/consultivo-consulting-investments/MAIN_FILES/Consultivo/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jan 2022 09:41:23 GMT -->
<head>
@include('include.home_css')
<title>Consultivo | Consulting Business Consulting Finance Html5 Template</title>
</head>
<body>
    <!-- <div class="preloader">
	<div class="reverse-spinner"></div>
</div> -->

	<div id="wrapper" class="wrapper clearfix">
    @include('include.home_header') 

<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
    <div class="bg-section">
        <img src="{{asset('assets/images/page-titles/7.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="title title-6 text-center">
                    <div class="title--heading">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="index-2.html">about</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-lg-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->


<!-- Contact #1
============================================= -->
<section id="contact1" class="contact contact-1 pt-110 pb-110 text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-2 mb-50 text--center">
                    <p class="heading--subtitle">Have A Question?</p>
                    <h2 class="heading--title">Get in touch</h2>
                    <p class="heading--desc mb-0">We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.</p>
                </div>
            </div>
            <!-- .col-lg-6 end -->
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                <form class="mb-0">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="Your Name" required="">
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <input type="email" class="form-control" name="contact-email" id="contact-email" placeholder="Email">
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <input type="text" class="form-control" name="contact-phone" id="contact-phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                            <textarea class="form-control" name="contact-message" id="contact-message" rows="2" placeholder="Request Details:"></textarea>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <input type="submit" value="Submit Request" name="submit" class="btn btn--primary">
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="contact-result"></div>
                        </div>
                    </div>
                </form>
                <!-- form end -->
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #contact1 end -->
<!-- Google maps
============================================= -->
<section class="google-maps pb-0 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-12">
                <script src="http://maps.google.com/maps/api/js?key=AIzaSyBONZOFKcKAQ5rnRWbLMbSTiyml5IqNeJU"></script>
                <div id="googleMap" class="googleMap" data-map-address="121 King St,Melbourne, Australia" data-map-zoom="12" data-map-maker-icon="assets/images/gmap/maker.png" data-map-type="ROADMAP" data-map-info="Consultivo<br>info@7oroof.com" style="width:100%;height:490px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info
============================================= -->
<section id="contactInfo" class="contact contact-info bg-white text--center pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3>Our Address</h3>
                    <p>Alnahas Building, 2 AlBahr St, Tanta</p>
                    <p>AlGharbia, Egypt.</p>
                    <a class="link--styled" href="#">Get Directions</a>
                </div>
            </div>
            <!-- .col-lg-4 end -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3>Our Email</h3>
                    <p>Main Email : 7oroof@7oroof.com</p>
                    <p>Inquiries : Info@7oroof.com</p>
                    <a class="link--styled" href="#">Send a Message</a>
                </div>
            </div>
            <!-- .col-lg-4 end -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3>Our Support</h3>
                    <p>Main Support : 7oroof@7oroof.com</p>
                    <p>Sales : Sales@7oroof.com</p>
                    <a class="link--styled" href="#">Open a Ticket</a>
                </div>
            </div>
            <!-- .col-lg-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #contactInfo end -->

<!-- Footer #1
============================================= -->
@include('include.home_footer') 

<div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
 </div><!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
@include('include.home_script')
</body>

<!-- Mirrored from www.websiteprofs.com/assets/images/html/Consultancy/consultivo-consulting-investments/MAIN_FILES/Consultivo/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jan 2022 09:41:24 GMT -->
</html>