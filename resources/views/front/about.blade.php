@extends('layouts.front')

@section('title')
    The Company - Alan & Grant | HR & Enterprise Solutions
@endsection

@section('jumbotron')
    <div class="container-fluid about-container head-container">
        <div class="row navigation">
            <div class="col-11">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="padding: 0 4%;">
                    <!-- Brand/logo -->
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('img/logo-white.png') }}" class="img-fluid" alt="Logo">
                    </a>

                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ml-auto text-uppercase">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('front.about') }}">The Company</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.services') }}">Our Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.insights') }}">Insights</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.learning') }}">Learning</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.jobs') }}">Jobs</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row page-jumbo">
            <div class="col-sm-8 offset-sm-2">
                <h1>
                    Innovative Solutions.
                </h1>
            </div>
        </div>

    </div>
@endsection


@section('content')
    <section class="container-fluid section-container about-who-we-are">
        <div class="row">
            <div class="col-sm-4 offset-sm-1 special-header-div">
                <h5 class="special-header sh-black"><span>WHO WE ARE</span></h5>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 title-div">
                        <p>
                            Working together to<br> deliver value to your<br> business.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 content-div">
                        <p>
                            We are a diverse team of consultants <br>
                            driven by a commitment to unlock <br>
                            value for our clients.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 content-div">
                        <p>
                            We strive for longterm client relationships, <br>
                            taking the time to gain a thorough understanding <br>
                            of the organization's business goal and  strategy, <br>
                            and the leadership competencies required for success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid section-container meet-the-team bg--dark">
        <div class="row">
            <div class="col-sm-4 offset-sm-1 title-div special-header-div">
                <h5 class="special-header sh-black"><span>MEET THE TEAM</span></h5>
                <br>
                <!--
                <p class="offset-sm-3 text-uppercase">
                    <strong>We are pleased</strong><br> to meet you.
                </p>
                -->
            </div>
            <div class="col-sm-7 content-wrapper">
                <div class="row">
                    <div class="col-sm-7 content-div">
                        <p>
                            We are a team of well trained consultants and project <br>
                            management professionals. The team is led by Gbenga <br>
                            TOTOYI, an astute HR and Business Management <br>
                            consultant with over a decade of experience. We are a <br>
                            fast-paced team who love working with our clients to <br>
                            innovate and improve overall performance.
                        </p>
                    </div>
                    <div class="col-sm-5 my-auto cta">
                        <p>
                            <strong>Join our team</strong> <span class="fa fa-long-arrow-right"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="container-fluid section-container team-gallery">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 wrapper">
                <div class="row">
                    <div class="col-6 col-md-3 outer">
                        <img src="{{ asset('img/gbenga.jpg') }}" alt="Person">
                        <div class="desc">
                            <h6><strong>Gbenga Totoyi</strong></h6>
                            <p class="text-uppercase title">ceo</p>
                            <p class="social-links">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="#">
                                    <span class="fa fa-linkedin"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 bg--off--white outer">
                        <img src="{{ asset('img/person-2.jpg') }}" alt="Person">
                        <div class="desc">
                            <h6><strong>Adeife Dawodu</strong></h6>
                            <p class="text-uppercase title">hr & people interventions</p>
                            <p class="social-links">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="#">
                                    <span class="fa fa-linkedin"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 outer">
                        <img src="{{ asset('img/person-1.jpg') }}" alt="Person">
                        <div class="desc">
                            <h6><strong>Ijeoma Innoson</strong></h6>
                            <p class="text-uppercase title">Project Manager</p>
                            <p class="social-links">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="#">
                                    <span class="fa fa-linkedin"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 bg--off--white outer">
                        <img src="{{ asset('img/person-2.jpg') }}" alt="Person">
                        <div class="desc">
                            <h6><strong>Early Verylongsurname</strong></h6>
                            <p class="text-uppercase title">Product manager</p>
                            <p class="social-links">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="#">
                                    <span class="fa fa-linkedin"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid section-container" style="padding: 7%;">

    </section>

    {{--

    <section class="container-fluid section-container mission-vision-values">
        <div class="row">
            <div class="col-sm-12 col-md-8 offset-md-1 special-header-div">
                <h5 class="special-header sh-black"><span>OUR MISSION, VISION, CORE VALUES</span></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-2">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" data-toggle="tab" href="#vision">Our Vision</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" data-toggle="tab" href="#mission">Our Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" data-toggle="tab" href="#core">Our Core Values</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 offset-sm-2 tab-content">
                <div id="vision" class="tab-pane active">
                    <div class="row">
                        <div class="col-12 col-md-6 mvv-content">
                            <p>
                                Our vision at Alan & Grant is to be the number one<br>
                                turnkey Business and HR Solution provider in<br>
                                Nigeria by 2022.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 mvv-title">
                            <h4 class="text-center">
                                Our vision is to be<br>
                                number one by 2022.
                            </h4>
                            <p class="text-center"><span class="fa fa-twitter"></span> Tweet this</p>
                        </div>
                    </div>
                </div>
                <div id="mission" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mvv-content">
                            <p>
                                Our mission at Alan & Grant is to be the number one<br>
                                turnkey Business and HR Solution provider in<br>
                                Nigeria by 2022.
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 mvv-title">
                            <h4 class="text-center">
                                Our mission is to be<br>
                                number one by 2022.
                            </h4>
                            <p class="blurred text-center"><span class="fa fa-twitter"></span> Tweet this</p>
                        </div>
                    </div>
                </div>
                <div id="core" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mvv-content">
                            <p>
                                Our turn time at Alan & Grant is to be the number one<br>
                                turnkey Business and HR Solution provider in<br>
                                Nigeria by 2022.
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 mvv-title">
                            <h4 class="text-center">
                                Our turn time is to be<br>
                                number one by 2022.
                            </h4>
                            <p class="text-center"><span class="fa fa-twitter"></span> Tweet this</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}

    <section class="container-fluid section-container contact-us-drop-line">
        <div class="row">
            <div class="col-12 col-md-6 left-div">
                <div class="row">
                    <div class="col-sm-11 offset-sm-1 special-header-div">
                        <h5 class="special-header sh-black"><span>GET IN TOUCH</span></h5>
                    </div>
                    <div class="col-sm-11 offset-sm-1">
                        <!--<h2>Our head office</h2>-->
                        <p>
                            <span class="fa fa-map-marker"></span> {{ config('utils.office-address') }}
                        </p>
                        <p>
                            <span class="fa fa-paper-plane"></span> {{ config('utils.contact-email') }}
                        </p>
                        <p>
                            <span class="fa fa-phone"></span> 09028521055
                        </p>
                        <br>
                        <h6 class="follow-us"><strong>FOLLOW US</strong></h6>
                        <br>
                        <ul>
                            <li>
                                <a href="{{ config('social.instagram') }}" target="_blank"><span class="fa fa-instagram fa-2x"></span> </a>
                            </li>
                            <li>
                                <a href="{{ config('social.twitter') }}" target="_blank"><span class="fa fa-twitter fa-2x"></span></a>
                            </li>
                            <li>
                                <a href="{{ config('social.facebook') }}" target="_blank"><span class="fa fa-facebook-square fa-2x"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-linkedin fa-2x"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 right-div">
                <div class="row">
                    <div class="col-sm-5 offset-sm-1 special-header-div">
                        <h5 class="special-header sh-black"><span>CONTACT US</span></h5>
                    </div>
                    <div class="col-sm-8 offset-sm-1 form-div">
                        <h2>Send us a message.</h2>
                        <form action="{{ route('front.send-message') }}" method="post" role="form" name="drop-line-form" id="drop-line-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control bg-ash" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control bg-ash" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control bg-ash" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control bg-ash" id="message" rows="6" placeholder="Message"></textarea>
                            </div>
                            <br>
                            <input type="submit" name="submit-button" class="form-button" value="Send a message">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


