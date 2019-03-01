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
    <!-- <div class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-12"> -->
                    <!-- Video Area Start -->
                    <!-- <div class="video-area" style="background-image: url(img/bg-img/video.jpg);">
                        <div class="video-play-btn">
                            <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    </section>
    <!-- ***** Video Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool_facts_area clearfix">
        @include('partials/cool-facts')
    </section>
    <!-- ***** Cool Facts Area End ***** -->


    <section id = "models">
        @include('partials/models')
    </section>

    <!-- ***** App Screenshots Area Start ***** -->

    <section class="app-screenshots-area bg-white section_padding_0_100 mt-5 clearfix" id="gallery">
        @php /* @include('partials/gallery')*/ @endphp
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

    <!-- ***** Model order start ***** -->
    @include('partials.order-pop-up');
    <!-- ***** Model order End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center">
        <!-- footer logo -->
        <div class="footer-text">
<!--             <img src="{{(url(''))}}/img/Tronozac2.jpg" alt="">
 -->        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/tronozac.rs/" target="_blank"><i class="active fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
        </div>

        <!-- Foooter Text-->
        <div class="copyright-text">
            <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
            <p>Copyright ©2019 Tronožac.rs </p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="{{url('')}}/js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{url('')}}/js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="{{url('')}}/js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="{{url('')}}/js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="{{url('')}}/js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <!-- Active JS -->
    <script src="{{url('')}}/js/active.js"></script>

    <script src="{{url('')}}/js/my-script.js"></script>

</body>

</html>
