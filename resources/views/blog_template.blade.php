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
        
        h3 {
            color: var(--gold-premium) !important;
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-size: 1.8rem;
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
            min-height: 60vh;
            display: flex;
            align-items: center;
            position: relative;
            padding-top: 120px;
            padding-bottom: 60px;
            background: radial-gradient(circle at 70% 30%, #1a1a1a 0%, var(--bg-main) 70%);
            overflow: hidden;
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
        
        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(180deg, #FFFFFF 0%, #A0A0A0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1.2;
            position: relative;
            z-index: 2;
        }

        .blog-image-container img {
            width: 100%;
            max-width: 500px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5), 0 0 30px rgba(212,175,55,0.15);
            border: 1px solid var(--glass-border);
            display: block;
            margin: 0 auto;
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
        
        /* Form control */
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
            .hero-grid { grid-template-columns: 1fr; text-align: center; }
            .hero-title { font-size: 2.5rem; }
            .nav-links { display: none; }
            .footer-grid { grid-template-columns: 1fr; gap: 2.5rem;}
        }
        
        /* Blog Content Styling */
        .blog-content {
            max-width: 900px;
            margin: 0 auto;
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-grey);
            padding: 60px 5%;
        }
        .blog-content strong {
            color: var(--gold-light);
            font-weight: 600;
        }
        .blog-content ul {
            list-style: none;
            padding-left: 0 !important;
            margin-bottom: 2rem;
        }
        .blog-content ul li {
            position: relative;
            padding-left: 35px;
            margin-bottom: 15px;
        }
        .blog-content ul li::before {
            content: "➺";
            position: absolute;
            left: 0;
            top: 2px;
            color: var(--gold-premium);
            font-size: 20px;
        }
        .blog-content p {
            margin-bottom: 1.5rem;
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
        <div class="container hero-grid">
            <div class="hero-content">
                <h1 class="hero-title">{{$blog->title}}</h1>
                <a href="{{ url('blog') }}" class="btn btn-outline" style="padding: 10px 24px; font-size: 0.95rem; margin-top: 1rem;"><i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Back to Blogs</a>
            </div>
            <div class="hero-visual reveal-scale delay-300">
                <div class="blog-image-container">
                    <img src='{{ asset("$blog->main_image") }}' alt="{{$blog->main_image_alt}}">
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="section pt-0">
        <div class="blog-content reveal-up delay-200">



                {!! $blog->content  !!}

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
                    }
                });
            }, observerOptions);

            const animatedElements = document.querySelectorAll('.reveal-up, .reveal-scale');
            animatedElements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>
