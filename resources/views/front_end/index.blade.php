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
        .reveal-scale {
            opacity: 0;
            transform: scale(0.9);
            transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .reveal-scale.active {
            opacity: 1;
            transform: scale(1);
        }
        
        /* Delays */
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }
        .delay-500 { transition-delay: 500ms; }

        /* Hero */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            padding-top: 80px;
            background: radial-gradient(circle at 70% 30%, #1a1a1a 0%, var(--bg-main) 70%);
            overflow: hidden;
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
            font-size: 5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(180deg, #FFFFFF 0%, #A0A0A0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1.1;
        }

        .hero-title span {
            background: linear-gradient(135deg, var(--gold-light), var(--gold-premium));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-desc {
            font-size: 1.25rem;
            margin-bottom: 3rem;
            max-width: 90%;
            line-height: 1.8;
            color: #d1d1d1;
        }

        .hero-btns {
            display: flex;
            gap: 1.2rem;
        }

        /* Stats */
        .stats {
            background: var(--bg-sec);
            padding: 80px 0;
            border-top: 1px solid var(--glass-border);
            border-bottom: 1px solid var(--glass-border);
            position: relative;
            z-index: 2;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            text-align: center;
        }

        .stat-item i {
            font-size: 2.5rem;
            color: var(--gold-premium);
            margin-bottom: 1.2rem;
        }

        .stat-num {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--text-white);
            margin-bottom: 0.5rem;
            letter-spacing: -2px;
        }

        /* Services */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.5rem;
        }

        .service-card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
            cursor: pointer;
        }

        .service-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top right, rgba(212, 175, 55, 0.15), transparent 70%);
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .service-card:hover {
            transform: translateY(-12px);
            border-color: rgba(212, 175, 55, 0.5);
            box-shadow: 0 25px 50px rgba(0,0,0,0.6), 0 0 30px rgba(212,175,55,0.15);
            background: rgba(24, 24, 24, 0.8);
        }

        .service-card:hover::after { opacity: 1; }

        .service-icon {
            width: 70px;
            height: 70px;
            background: rgba(212, 175, 55, 0.1);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold-premium);
            font-size: 1.8rem;
            margin-bottom: 2rem;
            border: 1px solid var(--glass-border);
            transition: transform 0.5s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
            background: rgba(212, 175, 55, 0.2);
        }

        .service-title {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            transition: color 0.3s ease;
        }

        .service-card:hover .service-title {
            color: var(--gold-light);
        }

        .service-desc {
            font-size: 1rem;
            margin-bottom: 2rem;
            flex-grow: 1;
            color: #aaa;
            line-height: 1.7;
        }
        
        .service-link {
            color: var(--gold-premium);
            font-weight: 600;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin-top: auto;
            z-index: 2;
        }

        .service-link i {
            transition: transform 0.3s ease;
        }

        .service-card:hover .service-link i {
            transform: translateX(8px);
        }

        /* Tech */
        .tech-bg { background: var(--bg-sec); }
        .tech-grid {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            gap: 1.5rem;
        }
        .tech-card {
            background: var(--bg-card);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            padding: 2rem 1rem;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            cursor: pointer;
        }
        .tech-card:hover {
            transform: translateY(-8px) scale(1.05);
            border-color: var(--gold-premium);
            background: rgba(212, 175, 55, 0.08);
            box-shadow: 0 15px 30px rgba(0,0,0,0.4);
        }
        .tech-card i, .tech-card span {
            font-size: 2rem;
            color: var(--text-white);
            display: block;
            margin-bottom: 0.8rem;
            transition: color 0.3s ease;
        }
        .tech-card:hover i { color: var(--gold-premium); }
        .tech-card p {
            font-size: 0.9rem;
            font-weight: 600;
            margin: 0;
            color: var(--text-grey);
            transition: color 0.3s ease;
        }
        .tech-card:hover p { color: var(--text-white); }

        /* Split Layout */
        .split-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6rem;
            align-items: center;
        }
        
        .feature-list {
            list-style: none;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: var(--text-white);
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .feature-item i {
            color: var(--gold-premium);
            background: rgba(212, 175, 55, 0.1);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(212, 175, 55, 0.3);
        }

        /* Portfolio */
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
        }
        .portfolio-card {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid var(--glass-border);
            aspect-ratio: 16/10;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            cursor: pointer;
        }
        .portfolio-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
            background: linear-gradient(135deg, var(--bg-sec) 0%, #1a1a1a 100%);
            background-size: cover;
            background-position: center;
        }
        
        /* Unsplash placeholders for Portfolio */
        .portfolio-card:nth-child(1) .portfolio-img { background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=1200'); }
        .portfolio-card:nth-child(2) .portfolio-img { background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=1200'); }
        .portfolio-card:nth-child(3) .portfolio-img { background-image: url('https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=1200'); }
        .portfolio-card:nth-child(4) .portfolio-img { background-image: url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&q=80&w=1200'); }
        .portfolio-card:nth-child(5) .portfolio-img { background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=1200'); }
        .portfolio-card:nth-child(6) .portfolio-img { background-image: url('https://images.unsplash.com/photo-1501504905252-473c47e087f8?auto=format&fit=crop&q=80&w=1200'); }
        .portfolio-card:nth-child(7) .portfolio-img { background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&q=80&w=1200'); } /* Fixed broken hotel image */
        .portfolio-card:nth-child(8) .portfolio-img { background-image: url('https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=1200'); }

        .portfolio-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(5,5,5,0.95) 0%, rgba(5,5,5,0.4) 50%, rgba(5,5,5,0.1) 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 3rem;
            opacity: 0;
            transition: all 0.5s ease;
        }
        .portfolio-card:hover .portfolio-img {
            transform: scale(1.08);
        }
        .portfolio-card:hover .portfolio-overlay {
            opacity: 1;
        }
        .portfolio-title { font-size: 2.2rem; margin-bottom: 1rem; color: #fff;}
        .portfolio-tag { 
            color: var(--gold-premium); 
            font-size: 0.9rem; 
            text-transform: uppercase; 
            letter-spacing: 3px;
            font-weight: 700;
            margin-bottom: 0.5rem;
            display: block;
        }

        /* Contact & Footer */
        .contact-form {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            padding: 4rem;
            border-radius: 30px;
            border: 1px solid rgba(212, 175, 55, 0.2);
            box-shadow: 0 30px 60px rgba(0,0,0,0.4);
        }
        .form-group { margin-bottom: 2rem; position: relative; }
        
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
        
        .form-control::placeholder {
            color: #666;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--gold-premium);
            background: rgba(0,0,0,0.8);
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.15);
            transform: translateY(-2px);
        }
        
        .footer {
            background: #000;
            padding: 100px 0 40px;
            border-top: 1px solid var(--glass-border);
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
        
        /* Floating 3D Elements Placeholder */
        .hero-visual {
            position: relative;
            width: 100%;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Central glow */
        .hero-visual::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(212, 175, 55, 0.15);
            filter: blur(100px);
            border-radius: 50%;
            z-index: 0;
            animation: pulse-glow 4s ease-in-out infinite alternate;
        }

        @keyframes pulse-glow {
            0% { transform: scale(0.8); opacity: 0.5; }
            100% { transform: scale(1.2); opacity: 1; }
        }

        .glass-panel {
            position: absolute;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 30px;
            animation: float 6s ease-in-out infinite;
            box-shadow: 0 30px 60px rgba(0,0,0,0.3), inset 0 0 20px rgba(255,255,255,0.02);
        }
        .panel-1 { width: 380px; height: 400px; right: 5%; z-index: 2; border-color: rgba(212, 175, 55, 0.4); display: flex; flex-direction: column; justify-content: center; padding: 40px; background: rgba(24, 24, 24, 0.4); }
        .panel-2 { width: 320px; height: 140px; right: 50%; top: 10%; z-index: 3; animation-delay: -2s; background: rgba(0,0,0,0.85); border-color: rgba(212, 175, 55, 0.3); display: flex; align-items: center; }
        .panel-3 { width: 220px; height: 220px; right: 40%; bottom: 0%; z-index: 4; animation-delay: -4s; display: flex; align-items: center; justify-content: center; flex-direction: column; background: rgba(0,0,0,0.7); backdrop-filter: blur(15px); border-color: rgba(212, 175, 55, 0.2); }
        
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-25px) rotate(1deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }

        /* Timeline */
        .timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }
        .timeline::before {
            content: '';
            position: absolute;
            width: 2px;
            background: linear-gradient(to bottom, transparent, var(--gold-premium), transparent);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1px;
        }
        .timeline-item {
            padding: 50px 0;
            position: relative;
            width: 50%;
        }
        .timeline-item:nth-child(odd) {
            left: 0;
            padding-right: 60px;
            text-align: right;
        }
        .timeline-item:nth-child(even) {
            left: 50%;
            padding-left: 60px;
        }
        .timeline-dot {
            position: absolute;
            width: 24px;
            height: 24px;
            background: var(--bg-main);
            border: 4px solid var(--gold-premium);
            border-radius: 50%;
            top: 60px;
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.5);
            z-index: 2;
        }
        .timeline-item:nth-child(odd) .timeline-dot { right: -12px; }
        .timeline-item:nth-child(even) .timeline-dot { left: -12px; }
        
        .timeline-content {
            background: var(--glass-bg);
            padding: 2.5rem;
            border-radius: 20px;
            border: 1px solid var(--glass-border);
            transition: all 0.4s ease;
            backdrop-filter: blur(10px);
        }
        .timeline-content:hover {
            border-color: var(--gold-premium);
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }
        .timeline-content h3 { color: var(--gold-premium); margin-bottom: 1rem; font-size: 1.5rem; }

        /* Responsive */
        @media (max-width: 1024px) {
            .services-grid { grid-template-columns: repeat(2, 1fr); }
            .tech-grid { grid-template-columns: repeat(4, 1fr); }
            .hero-title { font-size: 4rem; }
            .hero-grid { grid-template-columns: 1fr; gap: 2rem; }
            .hero-visual { height: 400px; margin-top: 2rem; }
            .panel-1 { right: auto; left: 50%; transform: translateX(-50%); }
            .panel-2 { right: auto; left: 20%; }
        }
        @media (max-width: 768px) {
            .hero-grid, .split-grid, .portfolio-grid { grid-template-columns: 1fr; gap: 3rem;}
            .services-grid { grid-template-columns: 1fr; }
            .stats-grid { grid-template-columns: repeat(2, 1fr); }
            .footer-grid { grid-template-columns: 1fr; gap: 2.5rem;}
            .nav-links { display: none; }
            .hero-title { font-size: 3rem; }
            .feature-list { grid-template-columns: 1fr; }
            .timeline::before { left: 30px; }
            .timeline-item { width: 100%; padding-left: 80px !important; padding-right: 0 !important; left: 0 !important; text-align: left !important; }
            .timeline-dot { left: 18px !important; }
            .contact-form { padding: 2rem; }
        }
    </style>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-62XFM2N3Q0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-62XFM2N3Q0');
</script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar reveal-up" id="navbar">
        <div class="container nav-container">
            <a href="/" class="nav-logo">
                <img src="{{ URL::asset('img/logo.png') }}" alt="Ather Digital Hub">
            </a>
            <div class="nav-links">
                <a href="#home" class="nav-link active">Home</a>
                <a href="#services" class="nav-link">Services</a>
                <a href="#portfolio" class="nav-link">Portfolio</a>
                <a href="#technologies" class="nav-link">Technologies</a>
                <a href="#about" class="nav-link">About</a>
                <a href="{{ url('blog') }}" class="nav-link">Blog</a>
            </div>
            <a href="#contact" class="btn btn-gold d-none-mobile" style="padding: 12px 28px;">Get Consultation</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero" id="home">
        <div class="container hero-grid">
            <div class="hero-content reveal-up delay-100">
                <h1 class="hero-title">Building Premium <br><span>Digital Products</span><br> That Scale Businesses.</h1>
                <p class="hero-desc">We build enterprise software, web applications, mobile apps, ERP systems, AI solutions, cloud infrastructure, and digital experiences for companies worldwide.</p>
                <div class="hero-btns">
                    <a href="#contact" class="btn btn-gold">Start Your Project</a>
                    <a href="#portfolio" class="btn btn-outline">View Portfolio</a>
                </div>
            </div>
            <div class="hero-visual reveal-scale delay-300">
                <div class="glass-panel panel-1">
                    <i class="fas fa-shield-alt text-gold" style="font-size: 3.5rem; margin-bottom: 25px;"></i>
                    <h3 style="font-size: 1.5rem; margin-bottom: 20px;">Security & Compliance</h3>
                    
                    <div style="display:flex; justify-content:space-between; margin-bottom:12px; font-size:0.95rem; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 12px; width: 100%;">
                        <span style="color: #aaa;">Encryption</span>
                        <span class="text-gold" style="font-weight:600;">AES-256</span>
                    </div>
                    <div style="display:flex; justify-content:space-between; margin-bottom:12px; font-size:0.95rem; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 12px; width: 100%;">
                        <span style="color: #aaa;">Data Protocol</span>
                        <span class="text-gold" style="font-weight:600;">GDPR / HIPAA</span>
                    </div>
                    <div style="display:flex; justify-content:space-between; font-size:0.95rem; width: 100%;">
                        <span style="color: #aaa;">Threat Scans</span>
                        <span class="text-gold" style="font-weight:600;">Daily Auto</span>
                    </div>
                </div>
                <div class="glass-panel panel-2">
                    <div style="padding: 25px; display: flex; align-items: center; gap: 20px; width: 100%;">
                        <i class="fas fa-server text-gold" style="font-size: 2.5rem;"></i>
                        <div>
                            <h4 style="font-size: 1.2rem; margin-bottom: 5px;">Cloud Deployed</h4>
                            <p style="font-size: 0.95rem; margin:0; color: #aaa;">99.99% Uptime SLA</p>
                        </div>
                    </div>
                </div>
                <div class="glass-panel panel-3">
                    <i class="fas fa-chart-line text-gold" style="font-size: 3rem; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.2rem;">AI Analytics</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <div class="stats">
        <div class="container stats-grid">
            <div class="stat-item reveal-up">
                <i class="fas fa-award"></i>
                <div class="stat-num">10+</div>
                <p>Years Experience</p>
            </div>
            <div class="stat-item reveal-up delay-100">
                <i class="fas fa-users"></i>
                <div class="stat-num">700+</div>
                <p>Global Clients</p>
            </div>
            <div class="stat-item reveal-up delay-200">
                <i class="fas fa-check-circle"></i>
                <div class="stat-num">1300+</div>
                <p>Projects Delivered</p>
            </div>
            <div class="stat-item reveal-up delay-300">
                <i class="fas fa-user-tie"></i>
                <div class="stat-num">18+</div>
                <p>Tech Experts</p>
            </div>
        </div>
    </div>

    <!-- Services -->
    @php
    $services = [
        ['icon' => 'fa-laptop-code', 'title' => 'Custom Software Development', 'desc' => 'Tailor-made enterprise software solutions built to solve complex business challenges and drive digital growth.'],
        ['icon' => 'fa-mobile-alt', 'title' => 'Mobile App Development', 'desc' => 'Native and cross-platform mobile applications that deliver exceptional user experiences.'],
        ['icon' => 'fa-code', 'title' => 'Laravel Development', 'desc' => 'Robust backend architectures powered by Laravel, ensuring security, scalability, and speed.'],
        ['icon' => 'fa-shield-alt', 'title' => 'Security & Compliance', 'desc' => 'Bank-grade security architectures ensuring strict data compliance and vulnerability protection.'],
        ['icon' => 'fa-layer-group', 'title' => 'UI/UX Design', 'desc' => 'Research-driven interface design that guarantees user engagement and conversion.'],
        ['icon' => 'fa-robot', 'title' => 'AI Automation', 'desc' => 'Intelligent workflow automation and AI integrations to drastically reduce operational overhead.']
    ];
    @endphp

    <section class="section" id="services">
        <div class="container">
            <h2 class="section-title text-center reveal-up">Premium <span class="text-gold">Services</span></h2>
            <p class="section-subtitle text-center reveal-up delay-100">Comprehensive technical solutions engineered to perfection.</p>
            
            <div class="services-grid">
                @foreach($services as $index => $service)
                <div class="service-card reveal-up" style="transition-delay: {{ ($index % 3) * 100 }}ms;">
                    <div class="service-icon">
                        <i class="fas {{ $service['icon'] }}"></i>
                    </div>
                    <h3 class="service-title">{{ $service['title'] }}</h3>
                    <p class="service-desc">{{ $service['desc'] }}</p>
                    <a href="#contact" class="service-link">
                        Read More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                @endforeach
            </div>
            
            <div class="text-center reveal-up delay-300" style="margin-top: 4rem;">
                <a href="#contact" class="btn btn-outline" style="padding: 14px 40px; font-size: 1.1rem; border-color: rgba(212, 175, 55, 0.5);">
                    Explore All Capabilities <i class="fas fa-arrow-right" style="margin-left: 10px; color: var(--gold-premium);"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Technologies -->
    @php
    $technologies = [
        ['icon' => 'fab fa-laravel', 'name' => 'Laravel'],
        ['icon' => 'fab fa-php', 'name' => 'PHP'],
        ['icon' => 'fas fa-mobile', 'name' => 'Flutter'],
        ['icon' => 'fab fa-react', 'name' => 'React'],
        ['icon' => 'fab fa-react', 'name' => 'Next.js'],
        ['icon' => 'fab fa-vuejs', 'name' => 'Vue.js'],
        ['icon' => 'fab fa-node-js', 'name' => 'Node.js'],
        ['icon' => 'fas fa-database', 'name' => 'PostgreSQL'],
        ['icon' => 'fas fa-database', 'name' => 'MySQL'],
        ['icon' => 'fab fa-docker', 'name' => 'Docker'],
        ['icon' => 'fab fa-aws', 'name' => 'AWS'],
        ['icon' => 'fab fa-microsoft', 'name' => 'Azure'],
        ['icon' => 'fab fa-google', 'name' => 'GCP'],
        ['icon' => 'fas fa-memory', 'name' => 'Redis'],
        ['icon' => 'fas fa-server', 'name' => 'Nginx'],
        ['icon' => 'fab fa-linux', 'name' => 'Linux']
    ];
    @endphp
    
    <section class="section tech-bg" id="technologies">
        <div class="container">
            <h2 class="section-title text-center reveal-up">Enterprise <span class="text-gold">Technologies</span></h2>
            <p class="section-subtitle text-center reveal-up delay-100">We utilize a modern, secure, and scalable tech stack.</p>
            
            <div class="tech-grid">
                @foreach($technologies as $index => $tech)
                <div class="tech-card reveal-scale" style="transition-delay: {{ ($index % 8) * 50 }}ms;">
                    <i class="{{ $tech['icon'] }}"></i>
                    <p>{{ $tech['name'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section class="section" id="portfolio">
        <div class="container">
            <h2 class="section-title text-center reveal-up">Our <span class="text-gold">Portfolio</span></h2>
            <p class="section-subtitle text-center reveal-up delay-100">A showcase of world-class digital experiences.</p>
            
            <div class="portfolio-grid">
                <div class="portfolio-card reveal-up">
                    <div class="portfolio-img"></div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-tag">Fintech</span>
                        <h3 class="portfolio-title">Global Banking Portal</h3>
                        <a href="#contact" class="btn btn-outline" style="width:fit-content; margin-top:15px;">Book a Consultation</a>
                    </div>
                </div>
                <div class="portfolio-card reveal-up delay-100">
                    <div class="portfolio-img"></div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-tag">E-Commerce</span>
                        <h3 class="portfolio-title">Luxury Retail Platform</h3>
                        <a href="#contact" class="btn btn-outline" style="width:fit-content; margin-top:15px;">Book a Consultation</a>
                    </div>
                </div>
                <div class="portfolio-card reveal-up delay-200">
                    <div class="portfolio-img"></div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-tag">Healthcare</span>
                        <h3 class="portfolio-title">Medical ERP System</h3>
                        <a href="#contact" class="btn btn-outline" style="width:fit-content; margin-top:15px;">Book a Consultation</a>
                    </div>
                </div>
                <div class="portfolio-card reveal-up delay-300">
                    <div class="portfolio-img"></div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-tag">Real Estate</span>
                        <h3 class="portfolio-title">Property Management App</h3>
                        <a href="#contact" class="btn btn-outline" style="width:fit-content; margin-top:15px;">Book a Consultation</a>
                    </div>
                </div>
                <div class="portfolio-card reveal-up delay-100">
                    <div class="portfolio-img"></div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-tag">Logistics</span>
                        <h3 class="portfolio-title">Supply Chain Tracker</h3>
                        <a href="#contact" class="btn btn-outline" style="width:fit-content; margin-top:15px;">Book a Consultation</a>
                    </div>
                </div>
                <div class="portfolio-card reveal-up delay-200">
                    <div class="portfolio-img"></div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-tag">Education</span>
                        <h3 class="portfolio-title">E-Learning Platform</h3>
                        <a href="#contact" class="btn btn-outline" style="width:fit-content; margin-top:15px;">Book a Consultation</a>
                    </div>
                </div>
                <div class="portfolio-card reveal-up delay-300">
                    <div class="portfolio-img"></div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-tag">Travel</span>
                        <h3 class="portfolio-title">Hotel Booking System</h3>
                        <a href="#contact" class="btn btn-outline" style="width:fit-content; margin-top:15px;">Book a Consultation</a>
                    </div>
                </div>
                <div class="portfolio-card reveal-up delay-400">
                    <div class="portfolio-img"></div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-tag">SaaS</span>
                        <h3 class="portfolio-title">Enterprise CRM</h3>
                        <a href="#contact" class="btn btn-outline" style="width:fit-content; margin-top:15px;">Book a Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section tech-bg" id="about">
        <div class="container split-grid">
            <div class="reveal-up">
                <h2 class="section-title">Why Choose <br><span class="text-gold">Ather Digital</span></h2>
                <p class="mb-4" style="font-size: 1.15rem; color: #ccc;">We are more than developers. We are strategic technical partners dedicated to building flawless, scalable, and secure software that accelerates your business.</p>
                
                <ul class="feature-list">
                    <li class="feature-item"><i class="fas fa-check"></i> Enterprise Architecture</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Secure Development</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Cloud Deployment</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Scalable Solutions</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Agile Methodology</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Dedicated Support</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Fast Delivery</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Global Clients</li>
                </ul>
            </div>
            <div class="hero-visual reveal-scale delay-200" style="height: 450px;">
                <div class="glass-panel" style="width: 100%; height: 100%; display: flex; align-items:center; justify-content:center; flex-direction:column; background: radial-gradient(circle at center, rgba(212, 175, 55, 0.15), transparent);">
                    <i class="fas fa-shield-alt text-gold" style="font-size: 6rem; margin-bottom: 30px;"></i>
                    <h3 style="font-size: 1.8rem; font-weight: 800;">ISO Certified Security</h3>
                    <p style="color: #999; margin-top: 10px;">Bank-grade encryption & compliance</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Development Process -->
    <section class="section">
        <div class="container">
            <h2 class="section-title text-center reveal-up">Development <span class="text-gold">Process</span></h2>
            <p class="section-subtitle text-center reveal-up delay-100">A proven methodology for delivering excellence.</p>
            
            <div class="timeline">
                <div class="timeline-item reveal-up">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>1. Discovery</h3>
                        <p>We analyze your business goals, technical requirements, and target audience to formulate a robust strategy.</p>
                    </div>
                </div>
                <div class="timeline-item reveal-up delay-100">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>2. Planning & Architecture</h3>
                        <p>Our architects design a scalable, secure cloud infrastructure and database schema tailored to your needs.</p>
                    </div>
                </div>
                <div class="timeline-item reveal-up delay-200">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>3. UI/UX Design</h3>
                        <p>Crafting intuitive, world-class interfaces that prioritize user experience and drive high conversion rates.</p>
                    </div>
                </div>
                <div class="timeline-item reveal-up delay-300">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>4. Development</h3>
                        <p>Agile engineering sprints using modern frameworks, ensuring clean, maintainable, and high-performance code.</p>
                    </div>
                </div>
                <div class="timeline-item reveal-up delay-400">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>5. Testing</h3>
                        <p>Rigorous QA, including automated testing, security audits, and performance profiling before launch.</p>
                    </div>
                </div>
                <div class="timeline-item reveal-up delay-500">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>6. Deployment & Maintenance</h3>
                        <p>Seamless cloud deployment followed by 24/7 dedicated support and continuous system optimization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section tech-bg">
        <div class="container">
            <h2 class="section-title text-center reveal-up">Client <span class="text-gold">Testimonials</span></h2>
            <p class="section-subtitle text-center reveal-up delay-100">Trusted by industry leaders worldwide.</p>
            
            <div class="services-grid">
                <div class="service-card reveal-up" style="border-top: 4px solid var(--gold-premium);">
                    <div style="display:flex; justify-content:space-between; margin-bottom: 2rem;">
                        <i class="fas fa-quote-left text-gold" style="font-size: 2.5rem; opacity: 0.5;"></i>
                        <div class="text-gold" style="font-size: 1.1rem;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="service-desc" style="font-size: 1.15rem; color: var(--text-white); font-style: italic;">"They worked well with the team to make sure the integration was customised to our exact specification. Simply brilliant."</p>
                    <div style="display:flex; align-items:center; gap: 15px; margin-top: auto;">
                        <div style="width: 55px; height: 55px; border-radius: 50%; background: var(--bg-main); display:flex; align-items:center; justify-content:center; border: 1px solid var(--gold-premium);">
                            <i class="fas fa-user text-gold" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; margin-bottom: 2px;">LEE</h4>
                            <p style="font-size: 0.85rem; margin:0; color: var(--gold-premium);">United Kingdom</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-card reveal-up delay-100" style="border-top: 4px solid var(--gold-premium);">
                    <div style="display:flex; justify-content:space-between; margin-bottom: 2rem;">
                        <i class="fas fa-quote-left text-gold" style="font-size: 2.5rem; opacity: 0.5;"></i>
                        <div class="text-gold" style="font-size: 1.1rem;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="service-desc" style="font-size: 1.15rem; color: var(--text-white); font-style: italic;">"Very reliable web developer, knowing what he does. He managed to develop even challenging parts of our project flawlessly."</p>
                    <div style="display:flex; align-items:center; gap: 15px; margin-top: auto;">
                        <div style="width: 55px; height: 55px; border-radius: 50%; background: var(--bg-main); display:flex; align-items:center; justify-content:center; border: 1px solid var(--gold-premium);">
                            <i class="fas fa-user text-gold" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; margin-bottom: 2px;">Automaxed</h4>
                            <p style="font-size: 0.85rem; margin:0; color: var(--gold-premium);">Netherlands</p>
                        </div>
                    </div>
                </div>

                <div class="service-card reveal-up delay-200" style="border-top: 4px solid var(--gold-premium);">
                    <div style="display:flex; justify-content:space-between; margin-bottom: 2rem;">
                        <i class="fas fa-quote-left text-gold" style="font-size: 2.5rem; opacity: 0.5;"></i>
                        <div class="text-gold" style="font-size: 1.1rem;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="service-desc" style="font-size: 1.15rem; color: var(--text-white); font-style: italic;">"Second order made to Bestdevever, always fast and accurate. By now I will only use him for all my future enterprise projects."</p>
                    <div style="display:flex; align-items:center; gap: 15px; margin-top: auto;">
                        <div style="width: 55px; height: 55px; border-radius: 50%; background: var(--bg-main); display:flex; align-items:center; justify-content:center; border: 1px solid var(--gold-premium);">
                            <i class="fas fa-user text-gold" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; margin-bottom: 2px;">Ciappolo</h4>
                            <p style="font-size: 0.85rem; margin:0; color: var(--gold-premium);">Italy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="border-top: 1px solid var(--glass-border); border-bottom: 1px solid var(--glass-border); background: radial-gradient(circle at center, rgba(212,175,55,0.15) 0%, var(--bg-main) 50%);">
        <div class="container text-center reveal-up">
            <h2 class="section-title" style="font-size: 4.5rem;">Let's Build Something <br><span class="text-gold">Extraordinary</span></h2>
            <p class="section-subtitle" style="margin-bottom: 3rem; font-size: 1.2rem;">Partner with an elite software development team to bring your vision to life.</p>
            <div class="hero-btns" style="justify-content: center;">
                <a href="#contact" class="btn btn-gold">Book Consultation</a>
                <a href="#contact" class="btn btn-outline">Get Quote</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="container split-grid">
            <div class="reveal-up">
                <h2 class="section-title">Get in <span class="text-gold">Touch</span></h2>
                <p class="mb-5" style="font-size: 1.15rem; color: #ccc;">Ready to transform your business with world-class digital solutions? Contact our technical experts today.</p>
                
                <div style="display:flex; flex-direction:column; gap: 2.5rem;">
                    <div style="display:flex; align-items:center; gap: 1.5rem;">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(212,175,55,0.1); display:flex; align-items:center; justify-content:center; border: 1px solid rgba(212,175,55,0.3);">
                            <i class="fas fa-envelope text-gold" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 1.2rem; margin-bottom: 5px;">Corporate Email</h4>
                            <p style="margin:0; color: #aaa;">info@atherdigitalhub.com</p>
                        </div>
                    </div>
                    <div style="display:flex; align-items:center; gap: 1.5rem;">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(212,175,55,0.1); display:flex; align-items:center; justify-content:center; border: 1px solid rgba(212,175,55,0.3);">
                            <i class="fas fa-phone-alt text-gold" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 1.2rem; margin-bottom: 5px;">Phone / WhatsApp</h4>
                            <p style="margin:0; color: #aaa;">03363498664</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form reveal-up delay-200">
                @if(session('message'))
                    <div style="background: rgba(46, 204, 113, 0.2); border: 1px solid #2ecc71; color: #2ecc71; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        {{ session('message') }}
                    </div>
                @endif
                @if($errors->any())
                    <div style="background: rgba(231, 76, 60, 0.2); border: 1px solid #e74c3c; color: #e74c3c; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        @foreach($errors->all() as $error)
                            <p style="margin: 0;">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                
                <form action="{{ url('contact/store') }}" method="POST">
                    @csrf
                    <div class="split-grid" style="gap: 1.5rem; margin-bottom: 1.5rem; grid-template-columns: 1fr 1fr;">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                        <input type="email" name="email" class="form-control" placeholder="Corporate Email" required>
                    </div>
                    <div class="split-grid" style="gap: 1.5rem; margin-bottom: 1.5rem; grid-template-columns: 1fr 1fr;">
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                        <input type="number" name="additional_number" class="form-control" placeholder="Additional Number">
                    </div>
                    <div class="split-grid" style="gap: 1.5rem; margin-bottom: 1.5rem; grid-template-columns: 1fr 1fr;">
                        <input type="text" name="company" class="form-control" placeholder="Company Name">
                        <input type="text" name="budget" class="form-control" placeholder="Project Budget (e.g. $10k - $25k)">
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" rows="5" placeholder="Project Details" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-gold w-100" style="width: 100%; padding: 18px; font-size: 1.1rem; letter-spacing: 1px;">Send Request <i class="fas fa-paper-plane" style="margin-left: 10px;"></i></button>
                </form>
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
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                  
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
