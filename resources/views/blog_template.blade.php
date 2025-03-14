<!DOCTYPE html>
<html lang="en">


@section('seoMeta')
    <meta http-equiv="Cache-Control" content="max-age=31536000">
    <title>{{$blog->title}}</title>
    <meta name="description" content="{{$blog->meta_description}}">

    <link rel="canonical" href='{{ url("$blog->slug") }}' />
    <link rel="icon" href="{{ URL::asset('favicon-96x96.png') }}" sizes="96x96" type="image/png">


    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('apple-touch-icon.png') }}">
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('favicon-32x32.png') }}"> --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('favicon-16x16.png') }}">
    <meta name="keywords" content="{{$blog->meta_description}}">
    {{-- <link rel="icon" href="{{ URL::asset('favicon.svg') }}" sizes="96x96" type="image/svg+xml"> --}}
    <link rel="icon" href="{{ URL::asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon">

    <link rel="manifest" href="{{ URL::asset('site.webmanifest') }}">


    <meta name="msapplication-TileColor" content="#6222cc">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$blog->title}}" />
    <meta property="og:description"
        content="{{$blog->meta_description}}" />
    <meta property="og:url" content='{{ url("$blog->slug") }}' />
    <meta property="og:site_name" content="Ather Digital Hub" />
    <meta property="og:updated_time" content={{date('Y-m-d H:i:s',strtotime($blog->created_at))}} />
    <meta property="og:image" content='{{ Storage::url("$blog->main_image") }}' />
    <meta property="og:image:secure_url" content="{{ Storage::url("$blog->main_image") }}" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{$blog->main_image_alt}}" />
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
                <div class="container mt-5 pt-5 px-lg-5 " style="display: flex;align-items:center">
                    <div class="row p-4 g-5 card flex-row">
                        <div class="col-lg-6 px-0 text-center text-lg-start"
                            style="display: flex;
                                justify-content: center;
                                flex-direction: column;">
                            <h1 class="display-5  mt-0  wow animate__animated animate__bounceInDown"
                                data-wow-duration="1s">
                                {{$blog->title}}</h1>
                            {{-- <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a> --}}
                        </div>
                        <div class="col-lg-6 px-0 text-center mt-0 text-lg-start wow animate__animated animate__slideInRight"
                            data-wow-duration="1s">

                            <div class="blog-image-container">
                                <img src='{{ Storage::url("$blog->main_image") }}'
                                    alt="{{$blog->main_image_alt}}">
                            </div>
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

        <div class="container pb-5 blog-content">
            <div class="row  pb-5 ">



                {!! $blog->content  !!}

            </div>
        </div>
        <x-contact />
   

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
    .blog-image-container img {
        width: 500px;
        height: 500px;
        object-fit: contain;
        object-position: center;
        display: block;
        margin-right: 0;
        float: right;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    ol,
    ul {
        padding-left: 2.5rem !important
    }

    h3 {
        color: #6222cc;
    }

    ul {
        list-style: none;
    }

    ul li {
        position: relative;
        margin-bottom: 20px
    }

 strong {
        color: #fba504;
    }

    ul li::before {
    content: "➺";
    position: absolute;
    left: -35px;
    top: -9px;
    color: #6222cc;
    font-size: 30px;
}
</style>


</html>
