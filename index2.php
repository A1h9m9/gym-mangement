<?php
session_start();
include 'connect2.php';
include 'navbar2.php';
?>

<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <!-- Logo -->

                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">Courses</a></li>
                                <li><a href="">Pricing</a></li>
                                    <ul class="submenu">
                                        <li><a href="">Blog</a></li>
                                        <li><a href="">Blog Details</a></li>
                                        <li><a href="">Elements</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header-btn -->
                    <div class="header-btns d-none d-lg-block f-right">
                        <a href="logout2.php" class="btn">logout</a>
                        <a href="signup.php" class="btn">signup</a>


                </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay="0.1s">Hi This is  gym</span>
                                <h1 data-animation="fadeInLeft" data-delay="0.4s">Gym Trainer</h1>
                                <a href="#" class="border-btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">My Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Traning categories Start -->
    <section class="traning-categories black-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="css/img/gallery/cat1.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>Personal traning</h3>
                                    <p>You’ll look at graphs and charts in Task One, how to approach the task and <br> the language needed for a successful answer.</p>
                                    <a href="#" class="border-btn">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="css/img/gallery/cat2.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>Group traning</h3>
                                    <p>You’ll look at graphs and charts in Task One, how to approach the task and <br> the language needed for a successful answer.</p>
                                    <a href="" class="btn">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Traning categories End-->
    <!--? Team -->
    <section class="team-area fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <h2 >What I Offer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                        <div class="cat-icon">
                            <img src="css/img/gallery/team1.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="">Body Building</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="css/img/gallery/team2.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="">Muscle Gain</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="css/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="">Weight Loss</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding30 ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(css/img/gallery/gallery1.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Bench Press</h3>
                                <a href="https://www.youtube.com/watch?v=rf0rJYrXgM0"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(css/img/gallery/gallery2.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>leg exercise </h3>
                                <a href="https://www.youtube.com/watch?v=RjexvOAsVtI"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(css/img/gallery/gallery3.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>weight loss exercises </h3>
                                <a href="https://www.youtube.com/watch?v=H3jJ29oE8Zg&t=97s"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(css/img/gallery/gallery4.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>six packs exercise </h3>
                                <a href="https://www.youtube.com/watch?v=uUKAYkQZXko"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!-- Courses area start -->
    <section class="pricing-area section-padding40 fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <h2>Pricing</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="css/img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">6 month</span>
                                <p class="mb-25">$30/m  <span>(Single class)</span></p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Free riding </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Unlimited equipments</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Personal trainer</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Weight losing classes</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Month to mouth</p>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="css/img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">6 month</span>
                                <p class="mb-25">$30/m  <span>(Single class)</span></p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Free riding </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Unlimited equipments</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Personal trainer</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Weight losing classes</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Month to mouth</p>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="css/img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">6 month</span>
                                <p class="mb-25">$30/m  <span>(Single class)</span></p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Free riding </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Unlimited equipments</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Personal trainer</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Weight losing classes</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="css/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Month to mouth</p>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses area End -->
    <!--? About Area-2 Start -->
    <section class="about-area2 fix pb-padding pt-50 pb-80">
        <div class="support-wrapper align-items-center">
            <div class="right-content2">
                <!-- img -->
                <div class="right-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <img src="css/img/gallery/about.png" alt="">
                </div>
            </div>
            <div class="left-content2">
                <!-- section tittle -->
                <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="front-text">
                        <h2 class="">About Me</h2>
                        <p>You’ll look at graphs and charts in Task One, how to approach the task and the language needed
                            for a successful answer. You’ll examine Task Two questions and learn how to plan, write and
                            check academic essays.</p>
                        <p class="mb-40">Task One, how to approach the task and the language needed for a successful answer. You’ll
                            examine Task Two questions and learn how to plan, write and check academic essays.</p>
                        <a href="" class="border-btn">My Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!--? Blog Area Start -->
    <section class="home-blog-area pt-10 pb-50">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2>From Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="css/img/gallery/blog1.png" alt="">
                            </div>
                            <div class="blog-cap">
                                <span>Gym & Fitness</span>
                                <h3><a href="">Your Antibiotic One Day To 10 Day Options</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="css/img/gallery/blog2.png" alt="">
                            </div>
                            <div class="blog-cap">
                                <span>Gym & Fitness</span>
                                <h3><a href="">Your Antibiotic One Day To 10 Day Options</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->

    <!-- ? services-area -->
    <section class="services-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="features-icon">
                            <img src="css/img/icon/icon1.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Location</h3>
                            <p>You’ll look at graphs and charts in Task One, how to approach </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="features-icon">
                            <img src="css/img/icon/icon2.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Phone</h3>
                            <p>123 123 123 123</p>
                            <p>  </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="features-icon">
                            <img src="css/img/icon/icon3.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Email</h3>
                            <p>deer.code@gmail.com</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area black-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- Footer Menu -->

                            <!-- Menu -->
                            <!-- Header Start -->
                            <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                <div class="main-header main-header2">
                                    <div class="menu-wrapper menu-wrapper2">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2 text-center">
                                            <nav>
                                                <ul>
                                                    <li><a href="index2.php">Home</a></li>
                                                    <li><a href="index2.php">About</a></li>
                                                    <li><a href="index2.php">Courses</a></li>
                                                    <li><a href="index2.php">Pricing</a></li>
                                                    <li><a href="index2.php">Gallery</a></li>
                                                    <li><a href="index2.php">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Header End -->
                            <!-- social -->
                            <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
























<?php
include 'footer2.php';
?>




