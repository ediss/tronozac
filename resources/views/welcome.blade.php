<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials/head')
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        @include('partials/header')
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        @include('partials/welcome')
    </section>

    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        @include('partials/special')
    </section>
    <!-- ***** Special Area End ***** -->
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="features">



    <!-- ***** Video Area Start ***** -->
    <div class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Video Area Start -->
                    <div class="video-area" style="background-image: url(img/bg-img/video.jpg);">
                        <div class="video-play-btn">
                            <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- ***** Video Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool_facts_area clearfix">
        @include('partials/cool-facts')
    </section>
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** App Screenshots Area Start ***** -->
    <section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="gallery">
        @include('partials/gallery')
    </section>
    <!-- ***** App Screenshots Area End *****====== -->

    <!-- ***** Pricing Plane Area Start *****==== -->
    <section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
        @include('partials/prices')
    </section>
    <!-- ***** Pricing Plane Area End ***** -->


    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        @include('partials/contact')
    </section>
    <!-- ***** Contact Us Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <h2>Ca.</h2>
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
            <p>Copyright ©2017 Ca. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="../js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="../js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="../js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="../js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="../js/active.js"></script>
</body>

</html>