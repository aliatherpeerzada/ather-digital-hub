<!DOCTYPE html>
<html lang="en">


@section('seoMeta')
    <meta http-equiv="Cache-Control" content="max-age=31536000">
    <title>#1 In Software Development Company In World | Empowering IT World</title>
    <meta name="description"
        content="Discover the #1 software development company in the world, empowering the IT industry with innovative solutions, cutting-edge technology, and expert services to drive business growth and digital transformation.">
    <link rel="canonical" href="{{ url('/') }}" />
    <link rel="icon" href="{{ URL::asset('favicon-96x96.png') }}" sizes="96x96" type="image/png">


    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('apple-touch-icon.png') }}">
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('favicon-32x32.png') }}"> --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('favicon-16x16.png') }}">
    <meta name="keywords"
        content="website designing, website development, WordPress development, Wix development, Squarespace development, software application development, mobile app development, Odoo integration, Xero integration, Zoho integration, Mailchimp integration, custom software solutions, mobile app development company, responsive website design, web development services, digital transformation, eCommerce development, CMS development, SEO-friendly websites, professional website design, SaaS development, cloud software development, UI/UX design, web development agency, Odoo ERP, Xero accounting software, Zoho CRM, integrated software solutions, cross-platform app development">
    {{-- <link rel="icon" href="{{ URL::asset('favicon.svg') }}" sizes="96x96" type="image/svg+xml"> --}}
    <link rel="icon" href="{{ URL::asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon">

    <link rel="manifest" href="{{ URL::asset('site.webmanifest') }}">


    <meta name="msapplication-TileColor" content="#6222cc">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="#1 In Software Development Company In World | Empowering IT World" />
    <meta property="og:description"
        content="Discover the #1 software development company in the world, empowering the IT industry with innovative solutions, cutting-edge technology, and expert services to drive business growth and digital transformation." />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:site_name" content="Ather Digital Hub" />
    <meta property="og:updated_time" content="2024-11-20 12:08:59" />
    <meta property="og:image" content="{{ URL::asset('img/social_media.jpg') }}" />
    <meta property="og:image:secure_url" content="{{ url('/') }}" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="World No 1 Custom Development Solution Company" />
    <meta property="og:image:type" content="image/jpg" />

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Corporation",
      "name": "Ather Digital Hub",
      "alternateName": "Ather Digitals",
      "url": "https://atherdigitalhub.com",
      "logo": "https://atherdigitalhub.com/img/logo.png"
    }
    </script>
@endsection

<x-front-header />

<body>
    <x-notification.notifications />
    <div class="p-0" style="background-color: #f1f1f1;">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <x-front-navbar />

        <div class="  position-relative p-0 ">
            <div id="particles-js" class="position-absolute"></div>
            <div class=" bg-primary hero-header ">
                <div class="container px-lg-5 pt-5 " style="display: flex;align-items:center">
                    <div class="row g-5 w-100  py-5  justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h1 class="display-1 text-white wow animate__animated animate__bounceInDown"
                                data-wow-duration="1s">
                                Our <span>Blogs</span></h1>

                            {{-- <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a> --}}
                        </div>

                    </div>
                </div>
            </div>

            <style>
                .hero-header {
                    background: none
                }
            </style>
        </div>

        <div class="container pb-5">
            <div class="row  pb-5 ">


                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('the-benefits-of-a-hotel-and-booking-management-system')}}"> <img
                                    src="{{ asset('img/blogs/hotel-and-booking-managemeny-system-by-ather-digital-hub.jpg') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('the-benefits-of-a-hotel-and-booking-management-system')}}">
                                    <div class="content">
                                        <span class="author">27 November, 2024</span>
                                        <h2 class="title"> The Benefits of a Hotel and Booking
                                            Management
                                            System: Why Laravel and Ather Digital Hub Are the Perfect Choice
                                        </h2>
                                        <p class="text"> In today’s fast-paced and highly competitive hospitality
                                            industry, a Hotel and Booking Management System is no longer a luxury—it’s a
                                            necessity. Whether you own a boutique hotel, a large resort, or a chain of
                                            properties, having an efficient, automated system can revolutionize your
                                            business operations. But the real game-changer? Developing it in Laravel
                                            with
                                            the expertise of Ather Digital Hub.</p>
                                     

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
              
                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('how-to-earn-extra-money-by-selling-billing-and-invoicing-solutions-as-a-service-by-ather-digital-hub')}}"> <img
                                    src="{{ asset('img/blogs/how-to-earn-extra-money-by-selling-billing-and-invoicing-solutions-as-a-service-by-ather-digital-hub.jpeg') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('how-to-earn-extra-money-by-selling-billing-and-invoicing-solutions-as-a-service-by-ather-digital-hub')}}">
                                    <div class="content">
                                        <span class="author">28 November, 2024</span>
                                        <h2 class="title"> How to Earn Extra Money by Selling Billing and Invoicing Solutions as a Service
                                        </h2>
                                        <p class="text"> In today’s fast-paced digital economy, businesses of all sizes need efficient billing and invoicing solutions to streamline their financial operations. Entrepreneurs and tech enthusiasts can seize this opportunity by offering billing and invoicing solutions as a service. Not only is this a lucrative income stream, but it also helps businesses save time, reduce errors, and enhance their cash flow management.</p>
                                     

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <x-contact />
        <div class="row p-5 justify-content-center"
            style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
            <div class="col-lg-7 text-center">
                <p class="section-title text-secondary justify-content-center   wow animate__animated animate__fadeInDown"
                    data-wow-duration="2s"><span></span>Newsletter<span></span>
                </p>
                <h1 class="text-center   mb-4 wow animate__animated animate__fadeInDown" data-wow-duration="6s">Always
                    Stay In Touch</h1>

                <div class="position-relative w-100 mt-3">
                    <form method="POST" action="{{ route('newsletter.store') }}" id="news_form">
                        @csrf
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
                            placeholder="Enter Your Email" style="height: 48px;" name="subscription_email"
                            id="subscription_email">
                        <label for="invalid_subscription_email" id="invalid_subscription_email"
                            class="text-danger fw-bold" style="display: none;">Invalid
                            email</label>
                        <label for="" id="error_subscription_email" class="text-danger fw-bold "
                            style="display: none">

                        </label>
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"
                                onclick="newsletter_validate()"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <x-front-footer-nav />

    </div>


    <x-front-footer />
</body>

<script src="{{ URL::Asset('js/particles.js') }}"></script>
{{-- <script src="{{ URL::Asset('js/particleConfig.json') }}"></script> --}}
<script src="{{ URL::Asset('js/particleConfig.js') }}"></script>
<script>
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var i = 0;
    var txt = '#1 Digital solution with 10 years of experience';
    var speed = 100;

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("heading").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }




    typeWriter();

    let captchaToken = '';

    function javascriptCallback(token) {
        if (token) {
            captchaToken = token;
            console.log("Turnstile response token:", token);
        } else {
            console.log("Error: Turnstile token not generated.");
            captchaToken = '';
        }
    }

    function validate() {
        if ($("#name").val() == "") {
            $("#name").addClass("is-invalid");
            $("#error_name").show();
            return;
        } else {
            $("#name").removeClass("is-invalid");
            $("#error_name").hide();
        }




        var email = $("#email").val();
        if ($("#email").val() == "") {
            $("#email").addClass("is-invalid");
            $("#error_email").show();
            return;


        } else {
            $("#email").removeClass("is-invalid");
            $("#error_email").hide();
            $("#invalid_email").hide();
        }


        if (!emailRegex.test(email)) {
            $("#email").addClass("is-invalid");
            $("#invalid_email").show();
            return;
        } else {
            $("#email").removeClass("is-invalid");
            $("#error_email").hide();
            $("#invalid_email").hide();
        }

        if ($("#phone").val() == "") {
            $("#phone").addClass("is-invalid");
            $("#error_phone").show();
            return;
        } else {
            $("#phone").removeClass("is-invalid");
            $("#error_phone").hide();
        }

        if ($("#message").val() == "") {
            $("#message").addClass("is-invalid");
            $("#error_message").show();
            return;
        } else {
            $("#message").removeClass("is-invalid");
            $("#error_message").hide();
        }

        // if (captchaToken) {
        //     // Set the hidden captcha token field
        //     $('#captcha_token').val(captchaToken);
        //     $('#contactForm').submit();
        // } else {
        //     $('#error_message').html("Please check the captcha").show();
        // }


        $('#contactForm').submit();

    }

    function newsletter_validate() {
        var email = $("#subscription_email").val();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Define the email regex pattern

        // Check if email field is empty
        if (email === "") {
            $("#subscription_email").addClass("is-invalid");
            $("#error_subscription_email").show();
            $("#invalid_subscription_email").hide();
            return;
        } else {
            $("#subscription_email").removeClass("is-invalid");
            $("#error_subscription_email").hide();
            $("#invalid_subscription_email").hide();
        }

        // Check if email matches the regex pattern
        if (!emailRegex.test(email)) {
            $("#subscription_email").addClass("is-invalid");
            $("#invalid_subscription_email").show();
            return;
        } else {
            $("#subscription_email").removeClass("is-invalid");
            $("#error_subscription_email").hide();
            $("#invalid_subscription_email").hide();
        }

        // If validation passes, submit the form
        $('#news_form').submit();
    }

    // $(document).ready(function() {

    //     particlesJS.load('particles-js', 'particles.json', function() {
    //         console.log('callback - particles.js config loaded');
    //     });
    // });
</script>
<style>
    /* Variables (Converted to plain CSS values) */
    :root {
        --regal-blue: #034378;
        --san-juan: #2d4e68;
        --bermuda: #6222cc;
        --white: #fff;
        --black: #000;
        --open-sans: 'Open Sans', sans-serif;
    }







    /* Base styles for .card */
    .card {

        padding: 0;
        width: 100%;
    }

    .card .menu-content {
        display: table;
        position: relative;
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    .card .menu-content li {
        display: inline-block;
    }

    .card .menu-content a {
        color: var(--white);
    }

    .card .menu-content span {
        position: absolute;
        left: 50%;
        top: 0;
        font-size: 10px;
        font-weight: 700;
        font-family: 'Open Sans';
        transform: translate(-50%, 0);
    }

    /* Clearfix */
    .card .menu-content::before,
    .card .menu-content::after {
        content: '';
        display: table;
    }

    .card .menu-content::after {
        clear: both;
    }

    .card .wrapper {
        background-color: var(--white);
        min-height: 510px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 19px 38px rgba(#000, 0.3), 0 15px 12px rgba(#000, 0.2);
        border-radius: 10px;
    }

    .card .wrapper img {
        height: 360px !important;
        width: 100%;
        object-fit: cover;
        object-position: center;
    }

    .card .wrapper:hover .data {
        transform: translateY(0);
    }

    .card .data {
        position: absolute;
        bottom: 0;
        width: 100%;
        transform: translateY(calc(70px + 1em));
        transition: transform 0.3s;
    }

    .card .content {
        padding: 1em;
        position: relative;
        z-index: 1;
    }

    .card .author {
        font-size: 14px;
    }

    .card .title {
        margin-top: 10px;
        font-size: 25px;
        margin-bottom: 15px;
    }

    .card .title,
    .card .text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .card .text {
        height: 70px;
        margin: 0;
        color: rgba(0, 0, 0)
    }

    .card input[type='checkbox'] {
        display: none;
    }

    .card input[type='checkbox']:checked+.menu-content {
        transform: translateY(-60px);
    }



    .example-1 .date {
        position: absolute;
        top: 0;
        right: 0;
        background-color: var(--bermuda);
        color: var(--white);
        padding: 0.8em;
    }

    .example-1 .date span {
        display: block;
        text-align: center;
    }

    .example-1 .day {
        font-weight: 700;
        font-size: 24px;
        text-shadow: 2px 3px 2px rgba(var(--black), 0.18);
    }

    .example-1 .month {
        text-transform: uppercase;
    }

    .example-1 .month,
    .example-1 .year {
        font-size: 12px;
    }

    .example-1 .content {
        background-color: var(--white);
        box-shadow: 0 5px 30px 10px rgba(var(--black), 0.3);
    }

    .example-1 .title a {
        color: lighten(var(--black), 50%);
    }

    .example-1 .menu-button {
        position: absolute;
        z-index: 999;
        top: 16px;
        right: 16px;
        width: 25px;
        text-align: center;
        cursor: pointer;
    }

    .example-1 .menu-button span {
        width: 5px;
        height: 5px;
        background-color: lighten(var(--black), 50%);
        color: lighten(var(--black), 50%);
        position: relative;
        display: inline-block;
        border-radius: 50%;
    }

    .example-1 .menu-button span::after,
    .example-1 .menu-button span::before {
        content: '';
        display: block;
        width: 5px;
        height: 5px;
        background-color: currentColor;
        position: absolute;
        border-radius: 50%;
    }

    .example-1 .menu-button span::before {
        left: -10px;
    }

    .example-1 .menu-button span::after {
        right: -10px;
    }

    .example-1 .menu-content {
        text-align: center;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: -1;
        transition: transform 0.3s;
        transform: translateY(0);
    }

    .example-1 .menu-content li {
        width: 33.333333%;
        float: left;
        background-color: var(--bermuda);
        height: 60px;
        position: relative;
    }

    .example-1 .menu-content a {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 24px;
    }

    .example-1 .menu-content span {
        top: -10px;
    }
</style>


</html>
