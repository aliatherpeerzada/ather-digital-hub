<!DOCTYPE html>
<html lang="en">


@section('seoMeta')
    <meta http-equiv="Cache-Control" content="max-age=31536000">
    <title>#1 In Software Development Company In World | Empowering IT World</title>
    <meta name="description"
        content="Discover the #1 software development company in the world, empowering the IT industry with innovative solutions, cutting-edge technology, and expert services to drive business growth and digital transformation.">
    <link rel="canonical" href="{{ url('/') }}" />
    <link rel="icon" href="{{ URL::asset('favicon-96x96.png')}}" sizes="96x96" type="image/png">


    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('apple-touch-icon.png') }}">
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('favicon-32x32.png') }}"> --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('favicon-16x16.png') }}">
    <meta name="keywords" content="website designing, website development, WordPress development, Wix development, Squarespace development, software application development, mobile app development, Odoo integration, Xero integration, Zoho integration, Mailchimp integration, custom software solutions, mobile app development company, responsive website design, web development services, digital transformation, eCommerce development, CMS development, SEO-friendly websites, professional website design, SaaS development, cloud software development, UI/UX design, web development agency, Odoo ERP, Xero accounting software, Zoho CRM, integrated software solutions, cross-platform app development">
    {{-- <link rel="icon" href="{{ URL::asset('favicon.svg') }}" sizes="96x96" type="image/svg+xml"> --}}
    <link rel="icon" href="{{ URL::asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ URL::asset('favicon.ico')}}" type="image/x-icon">

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
    <div class="   p-0" style="background-color: #f1f1f1;">
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
                <div class="container px-lg-5 " style="display: flex;align-items:center">
                    <div class="row g-5 ">
                        <div class="col-lg-6 text-center text-lg-start"
                            style="display: flex;
                                justify-content: center;
                                flex-direction: column;">
                            <h1 class="text-white wow animate__animated animate__bounceInDown" data-wow-duration="1s">
                                From Concept to Code</h1>
                            <h1 class="text-white mb-2 wow animate__animated animate__bounceInDown"
                                data-wow-duration="1s" data-wow-delay="0.4s"> Make It Happen.</h1>
                            <p class="text-white pb-3 wow animate__animated animate__bounceInDown"
                                data-wow-duration="1s" data-wow-delay="0.8s">We believe in building more than just
                                software — we create digital solutions that transform your business. From
                                conceptualization to full-scale deployment, we’re with you every step of the way,
                                delivering tailor-made solutions designed to meet your unique needs.</p>
                            <a href="https://www.fiverr.com/bestdevever" target="_blank"
                                class="btn btn-secondary   py-sm-3 px-sm-5 rounded-pill me-3 wow animate__animated animate__bounceInDown w-50"
                                data-wow-duration="1s" data-wow-delay="1.2s">Contact
                                Us</a>
                            {{-- <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a> --}}
                        </div>
                        <div class="col-lg-6 text-center text-lg-start wow animate__animated animate__slideInRight"
                            data-wow-duration="1s">

                            <img src="{{ URL::asset('data-test.svg') }}" style="position: relative; z-index:2" />
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



        <section id="services" class="advertisers-service-sec pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="section-header text-center">
                        <h2 class="fw-bold fs-1 wow animate__animated animate__bounceInDown" data-wow-duration="1s">
                            Our
                            <span class="b-class-secondary">Services </span>
                        </h2>

                    </div>
                </div>
                <div class="row mt-5 mt-md-4 row-cols-1 row-cols-sm-1 row-cols-md-3 justify-content-center">
                    <div class="col wow animate__animated animate__slideInLeft" data-wow-duration="3s">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa fa-laptop-code"></i>

                                {{-- <i class="fa-solid fa-chart-line"></i> --}}
                            </div>
                            <h3 class="">Website Design & Development</h3>
                            <p>
                                we design and develop fully customized, cutting-edge website that not only looks
                                stunning and aligns with your brand, but also incorporates advanced features and
                                seamless functionality to deliver an exceptional user experience and support your
                                business goals.
                            </p>
                            <a href="https://www.fiverr.com/bestdevever/develope-modern-mobile-responsive-html-or-wordpress-website-for-your-business"
                                target="_blank" class="fancy-button" style="--clr:#8A2BE2"> <span
                                    class="fancy-button__icon-wrapper">


                                    <svg viewBox="0 0 14 15" fill="none" width="10"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>Order Now

                            </a>
                        </div>
                    </div>
                    <div class="col wow animate__animated animate__slideInLeft" data-wow-duration="2s">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa fa-server "></i>
                            </div>
                            <h3>Website Hosting & Configuration</h3>
                            <p>
                                We provide reliable website hosting and expertly configure your site for optimal
                                performance, security, and speed, ensuring it runs smoothly and is always accessible to
                                your users.
                            </p>
                            <a href="https://www.fiverr.com/bestdevever/fix-and-update-your-html-css-jquery-php-laravel-code-ignitor-javascript-asp-bug"
                                target="_blank" class="fancy-button" style="--clr:#8A2BE2"> <span
                                    class="fancy-button__icon-wrapper">


                                    <svg viewBox="0 0 14 15" fill="none" width="10"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>Order Now

                            </a>
                        </div>
                    </div>
                    <div class="col wow animate__animated animate__slideInLeft" data-wow-duration="1s">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <svg class=" mb-2" fill="#6222cc" width="65px" height="65px"
                                    viewBox="-1.2 -1.2 26.40 26.40" role="img" xmlns="http://www.w3.org/2000/svg"
                                    stroke="#6222cc" stroke-width="0.00024000000000000003"
                                    transform="matrix(1, 0, 0, 1, 0, 0)">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>Xero icon</title>
                                        <path
                                            d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm6.585 14.655c-1.485 0-2.69-1.206-2.69-2.689 0-1.485 1.207-2.691 2.69-2.691 1.485 0 2.69 1.207 2.69 2.691s-1.207 2.689-2.69 2.689zM7.53 14.644c-.099 0-.192-.041-.267-.116l-2.043-2.04-2.052 2.047c-.069.068-.16.108-.258.108-.202 0-.368-.166-.368-.368 0-.099.04-.191.111-.263l2.04-2.05-2.038-2.047c-.075-.069-.113-.162-.113-.261 0-.203.166-.366.368-.366.098 0 .188.037.258.105l2.055 2.048 2.048-2.045c.069-.071.162-.108.26-.108.211 0 .375.165.375.366 0 .098-.029.188-.104.258l-2.056 2.055 2.055 2.051c.068.069.104.16.104.258 0 .202-.165.368-.365.368h-.01zm8.017-4.591c-.796.101-.882.476-.882 1.404v2.787c0 .202-.165.366-.366.366-.203 0-.367-.165-.368-.366v-4.53c0-.204.16-.366.362-.366.166 0 .316.125.346.289.27-.209.6-.317.93-.317h.105c.195 0 .359.165.359.368 0 .201-.164.352-.375.359 0 0-.09 0-.164.008l.053-.002zm-3.091 2.205H8.625c0 .019.003.037.006.057.02.105.045.211.083.31.194.531.765 1.275 1.829 1.29.33-.003.631-.086.9-.229.21-.12.391-.271.525-.428.045-.058.09-.112.12-.168.18-.229.405-.186.54-.083.164.135.18.391.045.57l-.016.016c-.21.27-.435.495-.689.66-.255.164-.525.284-.811.345-.33.09-.645.104-.975.06-1.095-.135-2.01-.93-2.28-2.01-.06-.21-.09-.42-.09-.645 0-.855.421-1.695 1.125-2.205.885-.615 2.085-.66 3-.075.63.405 1.035 1.021 1.185 1.771.075.419-.21.794-.734.81l.068-.046zm6.129-2.223c-1.064 0-1.931.865-1.931 1.931 0 1.064.866 1.931 1.931 1.931s1.931-.867 1.931-1.931c0-1.065-.866-1.933-1.931-1.933v.002zm0 2.595c-.367 0-.666-.297-.666-.666 0-.367.3-.665.666-.665.367 0 .667.299.667.665 0 .369-.3.667-.667.666zm-8.04-2.603c-.91 0-1.672.623-1.886 1.466v.03h3.776c-.203-.855-.973-1.494-1.891-1.494v-.002z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <h3>Xero Accounting Integration</h3>
                            <p>
                                We seamlessly integrate Xero Accounting with your Laravel application, enabling smooth
                                synchronization of financial data, automated workflows, and real-time accounting updates
                                directly within your custom platform.
                            </p>
                            <a href="https://www.fiverr.com/bestdevever/fix-your-window-form-application-and-solve-all-your-c-sharp-and-sqlserver-issues"
                                target="_blank" class="fancy-button" style="--clr:#8A2BE2"> <span
                                    class="fancy-button__icon-wrapper">


                                    <svg viewBox="0 0 14 15" fill="none" width="10"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>Order Now

                            </a>
                        </div>
                    </div>

                    <div class="col wow animate__animated animate__slideInRight" data-wow-duration="3s">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa fa-school"></i>
                            </div>
                            <h3>E-Learning and School Management</h3>
                            <p>
                                We design and develop advanced e-learning and school management solutions that
                                streamline administration, enhance the learning experience, and provide tools for
                                managing courses, student progress, and communication all in one platform.
                            </p>
                            <a href="https://www.fiverr.com/bestdevever/create-modern-responsive-website-or-upgrade-and-fix-your-current-one"
                                target="_blank" class="fancy-button" style="--clr:#8A2BE2"> <span
                                    class="fancy-button__icon-wrapper">


                                    <svg viewBox="0 0 14 15" fill="none" width="10"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>Order Now

                            </a>
                        </div>
                    </div>
                    <div class="col wow animate__animated animate__slideInRight" data-wow-duration="2s">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa fa-file-invoice-dollar"></i>
                            </div>
                            <h3>Billing And Invoicing Solutions</h3>
                            <p>
                                We provide tailored billing and invoicing solutions that automate your invoicing
                                process, ensure accurate and timely billing, and simplify payment tracking for a more
                                efficient and organized financial workflow.
                            </p>
                            <a href="https://www.fiverr.com/bestdevever/create-your-html-css-jquery-php-laravel-code-ignitor-javascript-asp"
                                target="_blank" class="fancy-button" style="--clr:#8A2BE2"> <span
                                    class="fancy-button__icon-wrapper">


                                    <svg viewBox="0 0 14 15" fill="none" width="10"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>Order Now

                            </a>
                        </div>
                    </div>
                    <div class="col wow animate__animated animate__slideInRight" data-wow-duration="1s">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa fa-hotel"></i>
                            </div>
                            <h3>Hotel & Booking Management Systems</h3>
                            <p class="m-0">We create comprehensive hotel and booking management systems that
                                streamline reservation processes, manage guest information, optimize room availability,
                                and provide seamless booking experiences for both customers and staff.</p>
                            <a href="https://www.fiverr.com/bestdevever/create-modern-responsive-website"
                                target="_blank" class="fancy-button" style="--clr:#8A2BE2"> <span
                                    class="fancy-button__icon-wrapper">


                                    <svg viewBox="0 0 14 15" fill="none" width="10"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>Order Now

                            </a>
                        </div>
                    </div>
                    <div class="col wow animate__animated animate__slideInLeft" data-wow-duration="3s">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa fa-warehouse"></i>
                            </div>
                            <h3>Inventory Management Systems</h3>
                            <p class="m-0">We develop customized inventory management systems that help you track
                                stock levels, automate reordering, manage suppliers, and gain real-time insights into
                                your inventory, ensuring efficient operations and reducing the risk of shortages or
                                overstocking.</p>
                            <a href="https://www.fiverr.com/bestdevever/sell-you-ready-made-php-point-of-sale-system-and-with-inventory-management"
                                target="_blank" class="fancy-button" style="--clr:#8A2BE2"> <span
                                    class="fancy-button__icon-wrapper">


                                    <svg viewBox="0 0 14 15" fill="none" width="10"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>Order Now

                            </a>
                        </div>
                    </div>
                    <div class="col wow animate__animated animate__slideInLeft" data-wow-duration="2s">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <svg class="" width="45px" height="45px" viewBox="0 0 18 18"
                                    xmlns="http://www.w3.org/2000/svg" mirror-in-rtl="true" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill="#6222cc"
                                            d="M14.6 0H3.4A1.417 1.417 0 0 0 2 1.43v15.14A1.417 1.417 0 0 0 3.4 18h11.2a1.417 1.417 0 0 0 1.4-1.43V1.43A1.417 1.417 0 0 0 14.6 0zM4 3.11a1.1 1.1 0 0 1 1.1-1.1h1.8A1.1 1.1 0 0 1 8 3.11v3.81a1.1 1.1 0 0 1-1.1 1.1H5.095A1.1 1.1 0 0 1 4 6.92V3.11zM7 16H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2zm6 0h-2a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2zm1-4.816a.818.818 0 0 1-.816.816H4.816A.818.818 0 0 1 4 11.184v-.367A.818.818 0 0 1 4.816 10h8.367a.818.818 0 0 1 .817.816v.368zM13 8h-2a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2zm0-4h-2a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <h3>Custom Registration Systems</h3>
                            <p class="m-0">We build custom registration systems tailored to your needs, enabling
                                seamless online sign-ups, secure user data management, and easy tracking of
                                registrations for events, memberships, or services.</p>
                            <a href="https://www.fiverr.com/bestdevever/make-your-php-contact-form-multistep-form-functioning-with-jquery-validation"
                                target="_blank" class="fancy-button" style="--clr:#8A2BE2"> <span
                                    class="fancy-button__icon-wrapper">


                                    <svg viewBox="0 0 14 15" fill="none" width="10"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>Order Now

                            </a>
                        </div>
                    </div>
                    <div class="col wow animate__animated animate__slideInLeft" data-wow-duration="1s">
                        <div class="service-card">
                            <div class="icon-wrapper">
                                <i class="fa fa-search"></i>
                            </div>
                            <h3>Photo studio Management Systems</h3>
                            <p class="m-0"> We design and develop photo studio management systems that streamline
                                appointment scheduling, manage client bookings, track projects, and simplify invoicing
                                and payments, allowing you to run your studio efficiently and deliver an exceptional
                                customer experience.</p>
                            <a href="https://www.fiverr.com/bestdevever/create-php-laravel-photos-management-system-for-you-studio-image-management-sys"
                                target="_blank" class="fancy-button" style="--clr:#8A2BE2"> <span
                                    class="fancy-button__icon-wrapper">


                                    <svg viewBox="0 0 14 15" fill="none" width="10"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>Order Now

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature End -->
        <!-- Testimonial Start -->
        <div id="testimonials" class=" py-5 wow fadeInUp" data-wow-delay="0.1s"
            style="    background-color: #6222cc;">
            <div class="container  px-lg-5">
                <p class="section-title text-secondary justify-content-center wow animate__animated animate__bounceInDown"
                    data-wow-duration="1s"><span></span>Testimonial<span></span>
                </p>
                <h1 class="text-center text-white mb-5 wow animate__animated animate__bounceInDown"
                    data-wow-duration="1s">What
                    Say Our Clients!</h1>
                <div class="owl-carousel testimonial-carousel wow animate__animated animate__bounceInUp"
                    data-wow-duration="1s">


                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x   mt-n4 me-3"></i>They worked
                            well with the team to make sure the integration was customised to our exact specification.
                            👌🏽</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/user.svg"
                                style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">LEE</h5>
                                <a href="https://www.fiverr.com/bestdevever" target="_blank"> <span>United
                                        Kingdom</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x   mt-n4 me-3"></i>Thank you very
                            much, everything was resolved quickly and efficiently, that's what I would like to
                            highlight. </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/user.svg"
                                style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Eduardoarane716</h5>
                                <a href="https://www.fiverr.com/bestdevever" target="_blank"> <span>Canada</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x   mt-n4 me-3"></i>Great
                            experience with him. Recommended </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/user.svg"
                                style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Sameer Siddiqui</h5>
                                <a href="https://www.fiverr.com/bestdevever" target="_blank"> <span>Pakistan</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x   mt-n4 me-3"></i>Very reliable
                            web developer, knowing what he does. He managed to develop even challenging parts of our...
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/user.svg"
                                style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Automaxed</h5>
                                <a href="https://www.fiverr.com/bestdevever" target="_blank"> <span>Netherlands</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x   mt-n4 me-3"></i>Awesome and
                            fast response.

                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/user.svg"
                                style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Mrradzi</h5>
                                <a href="https://www.fiverr.com/bestdevever" target="_blank"> <span>Thailand</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x   mt-n4 me-3"></i>I had the
                            pleasure of working with Bestdevever on several recent projects and was extremely impressed
                            ...</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/user.svg"
                                style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Brandonmazy</h5>
                                <a href="https://www.fiverr.com/bestdevever" target="_blank"> <span>United
                                        States</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x   mt-n4 me-3"></i>Second order
                            made to Bestdevever, always fast and accurate, by now I will only use him for all my future
                            projects.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/user.svg"
                                style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">ciappolo</h5>
                                <a href="https://www.fiverr.com/bestdevever" target="_blank"> <span>Italy</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x   mt-n4 me-3"></i>He is GREAT!!!
                            Every project Great!! Must use him you will be glad you did!!!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/user.svg"
                                style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">brandonmazy</h5>
                                <a href="https://www.fiverr.com/bestdevever" target="_blank"> <span>United
                                        States</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x   mt-n4 me-3"></i>Bestdevever
                            was very easy to work with and was able to execute every request. He works fast...</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/user.svg"
                                style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">adair_j</h5>
                                <a href="https://www.fiverr.com/bestdevever" target="_blank"> <span>United
                                        States</span> </a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- About Start -->
        <div id="about-us" class=" py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow animate__animated animate__slideInLeft" data-wow-duration="2s">
                        <p class="section-title text-secondary">About Us<span></span></p>
                        <h1 class="mb-5" id="heading" style="color:#6222cc"></h1>

                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Website Design & Development</p>
                                <p class="mb-2">99%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="99"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">E-Learning and School Management</p>
                                <p class="mb-2">95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Billing And Invoicing Solutions</p>
                                <p class="mb-2">92%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="91"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Website Hosting & Configuration</p>
                                <p class="mb-2">90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Xero Accounting Integration</p>
                                <p class="mb-2">75%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <a href="https://www.fiverr.com/bestdevever" target="_blank"
                            class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Lets Connect</a>
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__slideInRight" data-wow-duration="2s">
                        <img src="{{ URL::Asset('img/banner.gif') }}"
                            style="    border-radius: 0px 20px 0px 20px;
                                height: 400px;
                                width: 100%;
                                object-fit: cover;" />
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Facts Start -->
        <div class=" bg-primary fact py-5 wow animate__animated animate__fadeInUp" data-wow-duration="2s">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">10</h1>
                        <p class="text-white mb-0">Years Experience</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">18</h1>
                        <p class="text-white mb-0">Team Members</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">700</h1>
                        <p class="text-white mb-0">Satisfied Clients</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">1329</h1>
                        <p class="text-white mb-0">Completed Projects</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

        {{-- <div id="projects" class="    wow animate__animated animate__fadeInDown" data-wow-duration="2s">
            <div class="container py-5 px-lg-5">
                <div>
                    <p class="section-title text-secondary justify-content-center"><span></span>Our
                        Projects<span></span></p>
                    <h1 class="text-center mb-5">Recently Completed Projects</h1>
                </div>

                <div class="row g-4 portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-4.jpg"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                            class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-5.jpg"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                            class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-6.jpg"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                            class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <x-technologie />


        <!-- Newsletter Start -->
        <div class=" bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container  px-lg-5">

                <div class="row mt-5 ">
                    <div class="section-header text-center">
                        <h2 class="text-white fw-bold fs-1 wow animate__animated animate__bounceInDown"
                            data-wow-duration="1s">
                            Contact
                            <span class="b-class-secondary">Us </span>
                        </h2>

                    </div>
                </div>
                <div id="contact" class="row justify-content-center py-5">
                    <div class="container contact-form-container">
                        <div class="contact-form-card">
                            <!-- Left Section with Engaging Content -->
                            <div class="content-section">
                                <h2 class="form-title">Ready to Grow Your Business?</h2>
                                <p class="form-description mt-5">
                                    Our expert team is ready to help you achieve your goals. Whether you're looking to
                                    increase sales, streamline processes, or build custom software solutions, we're here
                                    for you. Let’s work together to create the perfect solution for your business.
                                </p>
                                <p>
                                    Fill out the form on the right to get started. We’re excited to help you grow your
                                    business and see measurable results.
                                </p>
                            </div>

                            <!-- Right Section with the Form -->
                            <div class="form-section">
                                <h3 class="form-title text-dark">Get in Touch</h3>
                                {{-- <form action="{{route('contact.store')}}" method="POST">
                                @csrf
                               
                              <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                                <label for="" class="in-valid">Name is required</label>
                              </div>
                      
                               
                              <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                              </div>
                              <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="number" class="form-control" id="number" name="number" placeholder="Enter your phone number" required>
                              </div>
                      
                               
                              <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tell us how we can help you" required></textarea>
                              </div>
                      
                               
                              <a href="javascript:void(0)" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block" style="color: var(--dark);
                                 background: var(--secondary);" id="submit_btn">Submit</a>

                                  
                            </form> --}}
                                <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                                    @csrf

                                    <!-- Name Field -->
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter your full name">
                                        <label for="" id="error_name" class="text-danger fw-bold "
                                            style="display: none">Name is
                                            required</label>
                                    </div>

                                    <!-- Email Field -->
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter your email address" required>
                                        <label for="invalid_email" id="invalid_email" class="text-danger fw-bold"
                                            style="display: none;">Invalid
                                            email</label>
                                        <label for="" id="error_email" class="text-danger fw-bold "
                                            style="display: none">
                                            Email is required
                                        </label>
                                    </div>

                                    <!-- Phone Number Field -->
                                    <div class="form-group">
                                        <label for="number">Phone Number</label>
                                        <input type="number" class="form-control" id="phone" name="phone"
                                            placeholder="Enter your phone number" required>
                                        <label for="" id="error_phone" class="text-danger fw-bold "
                                            style="display: none">Number is
                                            required</label>
                                    </div>

                                    <!-- Message Field -->
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="4"
                                            placeholder="Tell us how we can help you" required></textarea>
                                        <label for="" id="error_message" class="text-danger fw-bold "
                                            style="display: none">Message is
                                            required</label>
                                    </div>

                                    {{-- <div>
                                        <div class="cf-turnstile" data-sitekey="0x4AAAAAAAjrJLyb3MIY_kn6"
                                            id="cloud_flare_id_1" data-callback="javascriptCallback"></div>
                                        <div id="error_message" class="text-danger fw-bold"></div>
                                    </div>
                                    <input type="hidden" id="captcha_token" name="captcha_token" value=""> --}}

                                    <!-- Submit Button -->
                                    <a href="javascript:void(0)"
                                        class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block"
                                        style="color: var(--dark); background: var(--secondary);"
                                        onclick="validate()">Submit</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <!-- Newsletter End -->


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






        <!-- Team Start -->

        <!-- Team End -->

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



</html>
