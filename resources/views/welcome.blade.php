<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Ather Digital Hub | Neumorphic Design</title>
    <meta name="description" content="Ather Digital Hub provides professional web development, digital marketing, and innovative tech solutions.">
    <meta name="robots" content="index, follow">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=outfit:300,400,600,700,900&display=swap" rel="stylesheet" />

    <style>
        :root {
            --bg-color: #e0e5ec;
            --text-main: #2d3748;
            --text-muted: #718096;
            --primary: #4c51bf;
            --primary-glow: #667eea;
            --shadow-light: rgba(255, 255, 255, 0.9);
            --shadow-dark: rgba(163, 177, 198, 0.6);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            font-family: 'Outfit', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        /* --- Neumorphic Utilities --- */
        .neu-flat {
            background-color: var(--bg-color);
            box-shadow: 9px 9px 16px var(--shadow-dark), -9px -9px 16px var(--shadow-light);
            border-radius: 1.5rem;
        }

        .neu-pressed {
            background-color: var(--bg-color);
            box-shadow: inset 6px 6px 10px 0 var(--shadow-dark), inset -6px -6px 10px 0 var(--shadow-light);
            border-radius: 1.5rem;
        }

        .neu-btn {
            background-color: var(--bg-color);
            box-shadow: 6px 6px 10px var(--shadow-dark), -6px -6px 10px var(--shadow-light);
            border-radius: 9999px;
            transition: all 0.2s ease-in-out;
            cursor: pointer;
            font-weight: 600;
            color: var(--primary);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.875rem 2.25rem;
            border: none;
        }

        .neu-btn:hover {
            box-shadow: 3px 3px 6px var(--shadow-dark), -3px -3px 6px var(--shadow-light);
            transform: translateY(1px);
        }

        .neu-btn:active {
            box-shadow: inset 4px 4px 8px var(--shadow-dark), inset -4px -4px 8px var(--shadow-light);
            transform: translateY(3px);
        }
        
        .neu-btn-primary {
            color: white;
            background: var(--primary);
            box-shadow: 6px 6px 12px var(--shadow-dark), -6px -6px 12px var(--shadow-light), inset 2px 2px 4px rgba(255,255,255,0.3);
        }
        
        .neu-btn-primary:hover {
            box-shadow: 3px 3px 6px var(--shadow-dark), -3px -3px 6px var(--shadow-light), inset 2px 2px 4px rgba(255,255,255,0.3);
            background: var(--primary-glow);
        }
        
        .neu-btn-primary:active {
            box-shadow: inset 4px 4px 8px rgba(0,0,0,0.3);
        }

        /* --- Layout & Typography --- */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        header {
            padding: 2rem 0;
            animation: fadeDown 0.8s ease forwards;
        }

        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            border-radius: 9999px;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 900;
            color: var(--primary);
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        nav {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }
        
        nav a:not(.neu-btn) {
            color: var(--text-muted);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }
        
        nav a:not(.neu-btn):hover {
            color: var(--primary);
        }

        /* --- Hero Section --- */
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 4rem 0;
            gap: 2rem;
        }

        .hero h1 {
            font-size: 4.5rem;
            line-height: 1.1;
            font-weight: 900;
            color: var(--text-main);
            letter-spacing: -1.5px;
            animation: fadeUp 0.8s 0.2s ease forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        
        .hero h1 span {
            color: var(--primary);
        }

        .hero p {
            font-size: 1.25rem;
            color: var(--text-muted);
            max-width: 600px;
            line-height: 1.6;
            animation: fadeUp 0.8s 0.4s ease forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        .hero-cta {
            display: flex;
            gap: 1.5rem;
            animation: fadeUp 0.8s 0.6s ease forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        /* 3D Tactile Element */
        .tactile-object {
            margin: 2rem auto;
            width: 240px;
            height: 240px;
            border-radius: 50%;
            background-color: var(--bg-color);
            box-shadow: 20px 20px 40px var(--shadow-dark), -20px -20px 40px var(--shadow-light);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            animation: float3d 6s ease-in-out infinite;
        }

        .tactile-inner {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            background-color: var(--bg-color);
            box-shadow: inset 10px 10px 20px var(--shadow-dark), inset -10px -10px 20px var(--shadow-light);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .tactile-core {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-glow), var(--primary));
            box-shadow: 5px 5px 15px rgba(76, 81, 191, 0.4);
        }

        /* --- Services Section --- */
        .services {
            padding: 5rem 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
        }

        .service-card {
            padding: 3rem 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-8px);
        }

        .icon-box {
            width: 80px;
            height: 80px;
            border-radius: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            color: var(--primary);
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text-main);
        }

        .service-card p {
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* --- Footer --- */
        footer {
            margin-top: auto;
            padding: 3rem 0;
            text-align: center;
            color: var(--text-muted);
        }

        /* --- Animations --- */
        @keyframes fadeUp {
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes float3d {
            0% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-15px) scale(1.02); }
            100% { transform: translateY(0) scale(1); }
        }
        
        /* --- Responsive --- */
        @media (max-width: 768px) {
            .hero h1 { font-size: 3rem; }
            .hero-cta { flex-direction: column; width: 100%; max-width: 300px; }
            .header-inner { flex-direction: column; gap: 1rem; border-radius: 1.5rem; padding: 1.5rem; }
            .tactile-object { width: 180px; height: 180px; }
            .tactile-inner { width: 120px; height: 120px; }
            .tactile-core { width: 60px; height: 60px; }
        }
    </style>
</head>
<body>

    <header class="container">
        <div class="header-inner neu-flat">
            <a href="/" class="logo">AtherHub.</a>
            
            @if (Route::has('login'))
                <nav>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="neu-btn" style="padding: 0.6rem 1.5rem;">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="neu-btn neu-btn-primary" style="padding: 0.6rem 1.5rem;">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <main class="container">
        <section class="hero">
            
            <!-- 3D Element -->
            <div class="tactile-object">
                <div class="tactile-inner">
                    <div class="tactile-core"></div>
                </div>
            </div>

            <h1>Digital Excellence,<br><span>Sculpted to Perfection.</span></h1>
            
            <p>We blend beautiful, tactile neumorphic design with cutting-edge technology to build digital experiences that feel truly alive.</p>
            
            <div class="hero-cta">
                <a href="#explore" class="neu-btn neu-btn-primary">Explore Services</a>
                <a href="#contact" class="neu-btn">Contact Us</a>
            </div>
        </section>

        <section id="explore" class="services">
            
            <!-- Service 1 -->
            <div class="service-card neu-flat">
                <div class="icon-box neu-pressed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                </div>
                <h3>Tactile Interface</h3>
                <p>Interfaces so intuitive and three-dimensional, your users will feel like they can reach out and touch them.</p>
            </div>
            
            <!-- Service 2 -->
            <div class="service-card neu-flat">
                <div class="icon-box neu-pressed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"></path></svg>
                </div>
                <h3>Blazing Speed</h3>
                <p>Optimized down to the last byte. Experience frictionless loading times that keep your audience deeply engaged.</p>
            </div>
            
            <!-- Service 3 -->
            <div class="service-card neu-flat">
                <div class="icon-box neu-pressed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
                </div>
                <h3>Global SEO</h3>
                <p>Architected perfectly for search engines. Dominate rankings while providing an unparalleled visual experience.</p>
            </div>

        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Ather Digital Hub. All rights reserved.</p>
        <p style="font-size: 0.8rem; margin-top: 0.5rem; opacity: 0.7;">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
    </footer>

</body>
</html>
