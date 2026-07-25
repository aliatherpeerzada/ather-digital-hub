<!DOCTYPE html>
<html lang="en">
<head>
    @yield('seoMeta')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
    <style>
        :root {
            --bg-main: #050505;
            --bg-sec: #111111;
            --bg-card: #181818;
            --gold-premium: #D4AF37;
            --gold-light: #F5E6A5;
            --text-white: #FFFFFF;
            --text-grey: #BFBFBF;
            --glass-bg: rgba(24, 24, 24, 0.6);
            --glass-border: rgba(212, 175, 55, 0.15);
            --gold-glow: 0 0 20px rgba(212, 175, 55, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--bg-main);
            color: var(--text-grey);
            overflow-x: hidden;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4, h5, h6 {
            color: var(--text-white);
            font-weight: 700;
            letter-spacing: -0.03em;
            line-height: 1.2;
        }

        a {
            text-decoration: none;
            transition: all 0.3s ease;
        }

        /* Utility */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
        }

        .section {
            padding: 120px 0;
            position: relative;
        }

        .text-center { text-align: center; }
        .text-gold { color: var(--gold-premium); }
        .mb-2 { margin-bottom: 0.5rem; }
        .mb-4 { margin-bottom: 1.5rem; }
        .mb-5 { margin-bottom: 3rem; }
        
        .section-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
        }

        .section-subtitle {
            font-size: 1.15rem;
            color: var(--text-grey);
            max-width: 700px;
            margin: 0 auto 4rem auto;
            line-height: 1.8;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 36px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1.05rem;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
        }

        .btn-gold {
            background: linear-gradient(135deg, var(--gold-light), var(--gold-premium));
            color: var(--bg-main);
            border: none;
            box-shadow: var(--gold-glow);
        }

        .btn-gold::after {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 50%; height: 100%;
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 100%);
            transform: skewX(-25deg);
            transition: all 0.7s ease;
        }

        .btn-gold:hover::after {
            left: 150%;
        }

        .btn-gold:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 30px rgba(212, 175, 55, 0.35);
        }

        .btn-outline {
            background: transparent;
            color: var(--text-white);
            border: 1px solid var(--glass-border);
        }

        .btn-outline:hover {
            border-color: var(--gold-premium);
            color: var(--gold-premium);
            background: rgba(212, 175, 55, 0.05);
            transform: translateY(-2px);
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 25px 0;
            z-index: 1000;
            transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
            background: transparent;
        }

        .navbar.scrolled {
            background: rgba(5, 5, 5, 0.85);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 15px 0;
            border-bottom: 1px solid var(--glass-border);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-logo img {
            height: 42px;
            filter: brightness(0) invert(1);
            transition: transform 0.3s ease;
        }

        .nav-logo:hover img {
            transform: scale(1.05);
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
        }

        .nav-link {
            color: var(--text-grey);
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0%;
            height: 2px;
            background: var(--gold-premium);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--text-white);
        }

        /* Scroll Animations */
        .reveal-up {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .reveal-up.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Hero */
        .hero {
            min-height: 50vh;
            display: flex;
            align-items: center;
            position: relative;
            padding-top: 120px;
            background: radial-gradient(circle at 70% 30%, #1a1a1a 0%, var(--bg-main) 70%);
            overflow: hidden;
            text-align: center;
            justify-content: center;
            border-bottom: 1px solid var(--glass-border);
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h40v40H0V0zm1 1h38v38H1V1z" fill="%23D4AF37" fill-opacity="0.03" fill-rule="evenodd"/></svg>');
            pointer-events: none;
            z-index: 1;
        }

        .hero-title {
            font-size: 4.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(180deg, #FFFFFF 0%, #A0A0A0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1.1;
            position: relative;
            z-index: 2;
        }

        .hero-title span {
            background: linear-gradient(135deg, var(--gold-light), var(--gold-premium));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* Footer */
        .footer {
            background: #000;
            padding: 100px 0 40px;
            border-top: 1px solid var(--glass-border);
            margin-top: 50px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 4rem;
            margin-bottom: 4rem;
        }
        .footer-logo { height: 45px; margin-bottom: 2rem; filter: brightness(0) invert(1); }
        .footer-title { color: var(--text-white); font-size: 1.3rem; margin-bottom: 2rem; font-weight: 700; }
        .footer-links { list-style: none; }
        .footer-links li { margin-bottom: 1rem; }
        .footer-links a { color: var(--text-grey); transition: color 0.3s ease; font-size: 1.05rem; }
        .footer-links a:hover { color: var(--gold-premium); padding-left: 5px; }
        
        /* Form control for footer newsletter */
        .form-control {
            width: 100%;
            background: rgba(0,0,0,0.5);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            padding: 1.2rem 1.5rem;
            color: var(--text-white);
            font-size: 1.05rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--gold-premium);
            background: rgba(0,0,0,0.8);
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.15);
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: var(--bg-main); }
        ::-webkit-scrollbar-thumb { background: rgba(212, 175, 55, 0.3); border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(212, 175, 55, 0.6); }
        
        @media (max-width: 768px) {
            .hero-title { font-size: 3rem; }
            .nav-links { display: none; }
            .footer-grid { grid-template-columns: 1fr; gap: 2.5rem;}
        }
        
        /* OVERRIDING BOOTSTRAP FOR BLOGS */
        .blog-grid, .row {
            display: grid !important;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)) !important;
            gap: 30px !important;
            margin-bottom: 30px !important;
        }
        .row::before, .row::after { display: none !important; }
        .col-md-4 { 
            width: 100% !important; 
            max-width: 100% !important; 
            flex: none !important; 
            padding: 0 !important;
            height: 100% !important; 
            display: flex; 
            flex-direction: column;
        }
        
        /* Restyling .example-1 cards */
        .example-1 { height: 100%; width: 100%; display: flex; flex-direction: column; }
        .example-1 .card { background: transparent; border: none; height: 100%; width: 100%; display: flex; flex-direction: column; }
        .example-1 .wrapper {
            background: var(--bg-card);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            cursor: pointer;
        }
        .example-1 .wrapper:hover {
            transform: translateY(-10px);
            border-color: rgba(212,175,55,0.4);
            box-shadow: 0 15px 30px rgba(0,0,0,0.5), 0 0 30px rgba(212,175,55,0.1);
        }
        .example-1 img {
            width: 100%;
            height: 240px !important;
            object-fit: cover;
            border-bottom: 1px solid var(--glass-border);
            transition: transform 0.5s ease;
        }
        .example-1 .wrapper:hover img {
            transform: scale(1.05);
        }
        .example-1 .data {
            padding: 25px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            position: relative;
            z-index: 2;
            background: var(--bg-card);
        }
        .example-1 .title {
            color: var(--text-white);
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            line-height: 1.4;
            transition: color 0.3s ease;
        }
        .example-1 .wrapper:hover .title {
            color: var(--gold-light);
        }
        .example-1 .author {
            color: var(--gold-premium);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 12px;
            display: block;
            font-weight: 600;
        }
        .example-1 .text {
            color: var(--text-grey);
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar reveal-up" id="navbar">
        <div class="container nav-container">
            <a href="/" class="nav-logo">
                <img src="{{ URL::asset('img/logo.png') }}" alt="Ather Digital Hub">
            </a>
            <div class="nav-links">
                <a href="{{ url('/') }}" class="nav-link">Home</a>
                <a href="{{ url('/') }}#services" class="nav-link">Services</a>
                <a href="{{ url('/') }}#portfolio" class="nav-link">Portfolio</a>
                <a href="{{ url('/') }}#technologies" class="nav-link">Technologies</a>
                <a href="{{ url('/') }}#about" class="nav-link">About</a>
                <a href="{{ url('blog') }}" class="nav-link active">Blog</a>
            </div>
            <a href="{{ url('/') }}#contact" class="btn btn-gold d-none-mobile" style="padding: 12px 28px;">Get Consultation</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero reveal-up delay-100">
        <div class="container" style="position: relative; z-index: 2;">
            <h1 class="hero-title">Our <span>Insights</span></h1>
            <p class="section-subtitle" style="margin-bottom: 0; color: #d1d1d1;">Explore the latest trends, news, and insights from the forefront of digital innovation and enterprise technology.</p>
        </div>
    </section>

    <!-- Blog Grid Content -->
    <section class="section">
        <div class="container pb-5">

            @php
            $blogs= App\Models\Blog::latest()->get();
        @endphp
        <div class="row pb-5">
                        @foreach ($blogs as $blog)
                            

                        <div class="col-md-4">
                            <div class="example-1 card">
                                <div class="wrapper">
                                    <a href='{{URL("$blog->slug")}}'> 
                                        <img src='{{ Storage::url("$blog->main_image") }}'
                                            class="img-fluid" alt="{{$blog->main_image_alt}}"> </a>
                                    <div class="data">
                                        <a  href='{{URL("$blog->slug")}}'>
                                            <div class="content">
                                                <span class="author">{{date('d-m-Y',strtotime($blog->created_at))}}</span>
                                                <h2 class="title"> 
                                            {{$blog->title}}
                                                                                </h2>
                                                <p class="text"> 
                                        {{ Str::words($blog->content, 50, '...') }}
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        @endforeach
        </div>
                   


           
            <div class="row  pb-5 ">

                

                <div class="col-md-4">
                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('importance-of-billing-and-invoicing-software-in-business')}}"> <img
                                    src="{{ asset('img/blogs/importance-of-billing-and-invoicing-software-in-business.jpg') }}"
                                    class="img-fluid" alt=""> </a>
                            <div class="data">
                                <a href="{{URL('importance-of-billing-and-invoicing-software-in-business')}}">
                                    <div class="content">
                                        <span class="author">22 November, 2024</span>
                                        <h2 class="title"> 
                                            Importance of Billing and Invoicing Software in Business 
                                                                          </h2>
                                        <p class="text"> 
                                            In today’s competitive business environment, having an efficient billing and invoicing system is crucial for success. Whether you’re running a startup, a small business, or a large enterprise, the right software can streamline operations, improve cash flow, and enhance customer satisfaction. This blog will delve into the benefits of billing and invoicing software, its role in modern business, and how investing in custom web applications can elevate your organization.                                                                                </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('boost-your-business-with-ather-digital-hubs-website-hosting-and-maintenance-services')}}"> <img
                                    src="{{ asset('img/blogs/boost_your_business_with_ather_digital_hubs_website_hosting_and_maintenance_services.webp') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('boost-your-business-with-ather-digital-hubs-website-hosting-and-maintenance-services')}}">
                                    <div class="content">
                                        <span class="author">24 November, 2024</span>
                                        <h2 class="title"> 
                                            Boost Your Business with Ather Digital Hub’s Website Hosting and Maintenance Services
                                            
                                        </h2>
                                        <p class="text"> 
                                            In today’s fast-paced digital world, your website is often the first point of contact between your business and potential customers. Whether you’re a small startup or a well-established enterprise, ensuring that your website is always up, secure, and performing optimally is crucial for your business success. At Ather Digital Hub, we provide comprehensive website hosting and maintenance services designed to enhance your business’s digital presence, improve security, and ensure long-term growth.                                     

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('transforming-education-the-role-of-e-learning-and-school-management-systems-in-todays-world')}}"> <img
                                    src="{{ asset('img/blogs/transforming_education_the_role_of_e_learning_and_school_management_systems_in_todays_world.webp') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('transforming-education-the-role-of-e-learning-and-school-management-systems-in-todays-world')}}">
                                    <div class="content">
                                        <span class="author">25 November, 2024</span>
                                        <h2 class="title"> 
                                            Transforming Education: The Role of E-Learning and School Management Systems in Today’s World
                                        </h2>
                                        <p class="text">In today’s fast-paced digital age, the world of education is undergoing a monumental transformation. Traditional teaching methods and manual school management practices are no longer sufficient to meet the ever-growing demands of modern education systems. With increasing class sizes, diverse learning needs, and a global shift toward digital solutions, e-learning platforms and school management systems have become indispensable tools for educators, administrators, students, and parents alike.</p>
                                     

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
            
              
              

      
            </div>
            {{-- 31 deca --}}
            <div class="row  pb-5 ">

                

                <div class="col-md-4">
                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('chatgpt-vs-gemini-vs-copilot-integrating-ai-to-boost-productivity-in-your-application')}}"> <img
                                    src="{{ asset('img/blogs/chatgpt_vs_gemini_vs_copilot_integrating_ai_to_boost_productivity_in_your_application.webp') }}"
                                    class="img-fluid" alt=""> </a>
                            <div class="data">
                                <a href="{{URL('chatgpt-vs-gemini-vs-copilot-integrating-ai-to-boost-productivity-in-your-application')}}">
                                    <div class="content">
                                        <span class="author">12 December, 2024</span>
                                        <h2 class="title"> 
                                            ChatGPT vs. Gemini vs. Copilot: Integrating AI to Boost Productivity in Your Application      
                                                                          </h2>
                                        <p class="text"> 
                                            Artificial Intelligence (AI) has revolutionized how businesses and individuals operate, driving efficiency, automation, and innovation. Among the many AI tools available, ChatGPT, Gemini, and Copilot are leading the way in enhancing productivity across various domains. These AI systems are not only reshaping how we interact with machines but are also providing valuable solutions for businesses looking to integrate AI into their applications.
                                                                                </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('revolutionize-your-business-how-a-modern-website-can-multiply-your-sales-100x')}}"> <img
                                    src="{{ asset('img/blogs/revolutionize_your_business_how_a_modern_website_can_multiply_your_sales_100x.webp') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('revolutionize-your-business-how-a-modern-website-can-multiply-your-sales-100x')}}">
                                    <div class="content">
                                        <span class="author">16 December, 2024</span>
                                        <h2 class="title"> 
                                            Revolutionize Your Business: How a Modern Website Can Multiply Your Sales 100x
                                            
                                        </h2>
                                        <p class="text"> 
                                            In today’s digital-first world, having an online presence isn’t just an option — it’s a critical lifeline for businesses seeking to thrive and expand. Gone are the days when traditional marketing methods alone could sustain a successful enterprise. Now, a strategic digital approach can transform your business from local to global, potentially multiplying your sales by an incredible 100x.                                        </p>
                                     

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('generating-passive-income-through-saas-5-lucrative-opportunities')}}"> <img
                                    src="{{ asset('img/blogs/generating_passive_income_through_saas_5_lucrative_opportunities.webp') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('generating-passive-income-through-saas-5-lucrative-opportunities')}}">
                                    <div class="content">
                                        <span class="author">20 November, 2024</span>
                                        <h2 class="title"> 
                                            Generating Passive Income Through SaaS: 5 Lucrative Opportunities
                                        </h2>
                                        <p class="text">In today’s digital economy, Software as a Service (SaaS) has emerged as one of the most profitable ways to generate passive income. With the right concept and execution, SaaS businesses can provide consistent recurring revenue while requiring minimal ongoing maintenance. Let’s explore five promising SaaS opportunities and how Ather Digital Hub can help bring your vision to life.</p>
                                     

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
            
              
              

      
            </div>

            {{-- 31- dec --}}
            <div class="row  pb-5 ">

                

                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('best-custom-software-development-solutions-in-america-a-spotlight-on-ather-digital-hub')}}"> <img
                                    src="{{ asset('img/blogs/best-custom-software-development-in-america-ather-digital-hub.jpg') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('best-custom-software-development-solutions-in-america-a-spotlight-on-ather-digital-hub')}}">
                                    <div class="content">
                                        <span class="author">03 December, 2024</span>
                                        <h2 class="title"> 
                                            Best Custom Software Development Solutions in America: A Spotlight on Ather Digital Hub
                                        </h2>
                                        <p class="text"> 
                                            In the fast-paced, technology-driven world of today, businesses are increasingly seeking custom software solutions to gain a competitive edge, streamline operations, and provide superior customer experiences. As the demand for bespoke software development continues to rise, many companies in America have emerged as leaders in this field, offering a wide range of services that cater to the unique needs of businesses across various industries. Among these industry giants, Ather Digital Hub stands out as a top-tier provider of custom software development solutions, setting the standard for innovation, efficiency, and client satisfaction.
                                        </p>
                                     

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>

                
                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('how-laravel-and-google-translate-api-can-simplify-multilingual-translation-for-your-website')}}"> <img
                                    src="{{ asset('img/blogs/laravel-google-api-making-multilingual-simplified.jpg') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('how-laravel-and-google-translate-api-can-simplify-multilingual-translation-for-your-website')}}">
                                    <div class="content">
                                        <span class="author">02 December, 2024</span>
                                        <h2 class="title"> 
                                            How Laravel and Google Translate API Can Simplify Multilingual Translation for Your Website
                                        </h2>
                                        <p class="text"> 
                                            In today’s globalized world, businesses, websites, and applications need to cater to diverse audiences who speak different languages. Offering your content in multiple languages can enhance the user experience and broaden your reach. However, manually translating content can be time-consuming and resource-intensive. Fortunately, combining the power of Laravel, a popular PHP framework, with the Google Translate API provides an efficient and automated solution for multilingual translation.
                                        </p>
                                     

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('laravel-vs-wordpress-why-laravel-is-ideal-for-erp-systems-and-how-ather-digital-hub-sets-itself-apart')}}"> <img
                                    src="{{ asset('img/blogs/laravel_vs_wordpress_why_laravel_is_ideal_for_erp_systems_and_how_ather_digital_hub_sets_itself_apart.jpg') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('laravel-vs-wordpress-why-laravel-is-ideal-for-erp-systems-and-how-ather-digital-hub-sets-itself-apart')}}">
                                    <div class="content">
                                        <span class="author">30 November, 2024</span>
                                        <h2 class="title"> 
                                            Laravel vs WordPress: Why Laravel is Ideal for ERP Systems and How Ather Digital Hub Sets Itself Apart
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
            
              
              

      
            </div>
      
            <div class="row pb-5">
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
                
                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('how-to-earn-money-as-a-laravel-developer-a-comprehensive-guide')}}"> <img
                                    src="{{ asset('img/blogs/how-to-earn-money-by-learning-laravel-development.jpg') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('how-to-earn-money-as-a-laravel-developer-a-comprehensive-guide')}}">
                                    <div class="content">
                                        <span class="author">26 November, 2024</span>
                                        <h2 class="title"> How to Earn Money as a Laravel Developer: A Comprehensive Guide
                                        </h2>
                                        <p class="text">  Laravel, a powerful PHP framework, has revolutionized web development. Its elegant syntax, robust features, and large community make it a top choice for developers worldwide.</p>
                                     

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row pb-5">
                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('streamline-your-business-with-xero-and-ather-digital-hubs-laravel-integration')}}"> <img
                                    src="{{ asset('img/blogs/streamline-your-business-with-xero-and-ather-digital-hubs-laravel-integration.jpg') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('streamline-your-business-with-xero-and-ather-digital-hubs-laravel-integration')}}">
                                    <div class="content">
                                        <span class="author">05 December, 2024</span>
                                        <h2 class="title"> 
                                            Streamline Your Business with Xero and Ather Digital Hub's Laravel Integration
                                         </h2>
                                        <p class="text"> 
                                            Running a business can be overwhelming, especially when it comes to managing finances. That’s where Xero, a powerful accounting software, comes in. Xero simplifies bookkeeping, invoicing, and financial tracking, making it a perfect solution for businesses of all sizes.     </p>
                                     

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('laravel-vs-wordpress-the-better-option-in-2025')}}"> <img
                                    src="{{ asset('img/blogs/laravel-vs-wordpress-in-2025.webp') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('laravel-vs-wordpress-the-better-option-in-2025')}}">
                                    <div class="content">
                                        <span class="author">23 December, 2024</span>
                                        <h2 class="title"> 
                                            Laravel vs WordPress: The Better Option in 2025?
                                        </h2>
                                        <p class="text"> 
                                            Are you trying to build a website but can’t decide between Laravel and WordPress? Don’t worry — we’ll break it down in simple terms that anyone can understand. Let’s explore which platform might be the best choice for your next project.                                        </p>
                                     

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('what-is-an-inventory-management-system-and-why-does-your-business-need-it')}}"> <img
                                    src="{{ asset('img/blogs/professional_enterprise_inventory_system_by_ather_digital_hub.jpg') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('what-is-an-inventory-management-system-and-why-does-your-business-need-it')}}">
                                    <div class="content">
                                        <span class="author">08 December, 2024</span>
                                        <h2 class="title"> 
                                            What Is an Inventory Management System and Why Does Your Business Need It?
                                        </h2>
                                        <p class="text"> 
                                            An inventory management system is a tool that helps businesses keep track of their products. Think of it as a smart assistant that tells you how many items you have in stock, what’s selling fast, and what needs to be restocked. Whether you run a small shop or a big company, having an organized way to manage your inventory saves time, money, and effort.
                                        </p>
                                     

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div class="row pb-5">
                <div class="col-md-4">

                    <div class="example-1 card">
                        <div class="wrapper">
                            <a href="{{URL('laravel-development-in-2025')}}"> <img
                                    src="{{ asset('img/blogs/laravel-development-in-2025.jpg') }}"
                                    class="img-fluid" alt=""> </a>

                            <div class="data">
                                <a href="{{URL('laravel-development-in-2025')}}">
                                    <div class="content">
                                        <span class="author">01 January, 2024</span>
                                        <h2 class="title"> 
                                            Laravel Development in 2025: Your Complete Guide to Getting Started
                                                                                 </h2>
                                        <p class="text"> 
                                            Laravel is like a Swiss Army knife for web developers — it’s a powerful PHP framework that makes building web applications faster, more secure, and more enjoyable. Created by Taylor Otwell in 2011, Laravel has grown to become one of the most popular web development frameworks worldwide.
                                        </p>

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
               


            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container reveal-up">
            <div class="footer-grid">
                <div>
                    <img src="{{ URL::asset('img/logo.png') }}" alt="Ather Digital Hub" class="footer-logo">
                    <p style="color: #888; font-size: 0.95rem; line-height: 1.8;">The #1 software development company empowering the IT world with innovative solutions, cutting-edge technology, and enterprise-grade services.</p>
                </div>
                <div>
                    <h4 class="footer-title">Company</h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}#about">About Us</a></li>
                        <li><a href="{{ url('/') }}#services">Services</a></li>
                        <li><a href="{{ url('/') }}#portfolio">Portfolio</a></li>
                  
                    </ul>
                </div>
             
                
                <div>
                    <h4 class="footer-title">Newsletter</h4>
                    <p style="margin-bottom: 1.5rem; color: #888; font-size: 0.95rem;">Stay updated with our latest technology insights.</p>
                    <form action="{{ url('/newsletter/store') }}" method="POST">
                        @csrf
                        <div style="display:flex; gap: 10px; margin-bottom: 15px;">
                            <input type="email" name="subscription_email" class="form-control" placeholder="Email Address" required style="padding: 1rem; border-radius: 12px; background: #111; width: 100%;">
                            <button type="submit" class="btn btn-gold" style="padding: 1rem 1.5rem; border-radius: 12px;"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div style="border-top: 1px solid #1a1a1a; padding-top: 30px; text-align: center; color: #666; font-size: 0.9rem; letter-spacing: 1px;">
                &copy; {{ date('Y') }} Ather Digital Hub. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Intersection Observer for Premium Scroll Animations
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Optional: stop observing once animated
                        // observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const animatedElements = document.querySelectorAll('.reveal-up, .reveal-scale');
            animatedElements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>
