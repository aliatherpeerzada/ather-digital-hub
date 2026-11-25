<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $service['title_tag'] }}</title>
    <meta name="description" content="{{ $service['meta'] }}">
    <link rel="canonical" href="{{ route('services.show', $slug) }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $service['title_tag'] }}">
    <meta property="og:description" content="{{ $service['meta'] }}">
    <meta property="og:url" content="{{ route('services.show', $slug) }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *{box-sizing:border-box}body{margin:0;background:#080808;color:#d0d0d0;font-family:Inter,Arial,sans-serif;line-height:1.75}a{color:inherit;text-decoration:none}.wrap{width:min(1120px,90%);margin:auto}.top{border-bottom:1px solid #29251a;background:#0b0b0b}.nav{min-height:78px;display:flex;align-items:center;justify-content:space-between;gap:20px}.brand{font-weight:800;color:#f2d982;font-size:1.1rem}.nav-links{display:flex;gap:22px;align-items:center}.nav-links a:hover,.crumb a:hover{color:#f2d982}.button{display:inline-flex;align-items:center;justify-content:center;color:#17130a;background:linear-gradient(135deg,#f5e6a5,#d4af37);border-radius:999px;padding:13px 24px;font-weight:700}.hero{padding:86px 0 72px;background:radial-gradient(ellipse at top left,#302817 0,transparent 65%)}.crumb{font-size:.9rem;color:#999;margin-bottom:32px}.eyebrow{color:#e5c75e;text-transform:uppercase;font-weight:700;letter-spacing:.12em;font-size:.8rem}.hero h1{font-size:clamp(2.35rem,5vw,4.4rem);line-height:1.1;letter-spacing:-.045em;color:white;max-width:850px;margin:14px 0 20px}.hero p{font-size:1.15rem;max-width:760px;margin:0 0 28px}.section{padding:68px 0}.section h2{font-size:clamp(1.7rem,3vw,2.5rem);color:#fff;line-height:1.2;margin:0 0 16px}.section-intro{max-width:780px}.two-col{display:grid;grid-template-columns:1fr 1fr;gap:55px}.panel{border:1px solid #342d1b;border-radius:20px;background:#111;padding:30px}.list{padding-left:1.25rem;margin:18px 0 0}.list li{padding:6px 0}.list li::marker{color:#d4af37}.process{display:grid;grid-template-columns:repeat(4,1fr);gap:15px;margin-top:28px}.step{border:1px solid #302a1a;border-radius:16px;padding:20px;background:#101010}.step strong{display:block;color:#e5c75e;margin-bottom:8px}.cta{padding:60px 0;background:#111;border-top:1px solid #29251a;border-bottom:1px solid #29251a}.cta-inner{display:flex;align-items:center;justify-content:space-between;gap:30px}.cta h2{color:white;margin:0 0 8px;font-size:2rem}.other{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-top:24px}.other a{padding:16px 18px;border:1px solid #302a1a;border-radius:12px;color:#f0d46b}.foot{padding:24px 0;color:#999}.foot .wrap{display:flex;justify-content:space-between;gap:15px;flex-wrap:wrap}@media(max-width:760px){.two-col{grid-template-columns:1fr;gap:24px}.process{grid-template-columns:1fr 1fr}.cta-inner{align-items:flex-start;flex-direction:column}.nav-links{gap:12px;font-size:.86rem}}@media(max-width:500px){.nav{align-items:flex-start;padding:14px 0;flex-direction:column}.nav-links{flex-wrap:wrap}.process,.other{grid-template-columns:1fr}.hero{padding-top:58px}}
    </style>
</head>
<body>
    <header class="top"><nav class="wrap nav"><a class="brand" href="{{ route('landing') }}">Ather Digital Hub</a><div class="nav-links"><a href="{{ route('services.index') }}">Services</a><a href="{{ route('landing') }}#about">About</a><a href="{{ route('blog.index') }}">Blog</a><a class="button" href="{{ route('landing') }}#contact">Book a consultation</a></div></nav></header>
    <main>
        <section class="hero"><div class="wrap"><div class="crumb"><a href="{{ route('landing') }}">Home</a> / <a href="{{ route('services.index') }}">Services</a> / {{ $service['title'] }}</div><span class="eyebrow">Ather Digital Hub services</span><h1>{{ $service['title'] }}</h1><p>{{ $service['description'] }}</p><a class="button" href="{{ route('landing') }}#contact">Discuss your project</a></div></section>
        <section class="section"><div class="wrap two-col"><div class="section-intro"><h2>Designed for the way your team works</h2><p>{{ $service['audience'] }}</p><p>We keep the work grounded in your business goals, user needs and practical delivery constraints. The right scope depends on your product, integrations and timeline, so we start by understanding those details.</p></div><div class="panel"><h2>How we can help</h2><ul class="list">@foreach($service['capabilities'] as $capability)<li>{{ $capability }}</li>@endforeach</ul></div></div></section>
        <section class="section" style="background:#0d0d0d"><div class="wrap"><h2>From discovery to ongoing improvement</h2><p class="section-intro">A clear process keeps decisions visible and gives you opportunities to review the product as it takes shape.</p><div class="process">@foreach($service['process'] as $step)<div class="step"><strong>Step {{ $loop->iteration }}</strong>{{ $step }}</div>@endforeach</div></div></section>
        <section class="cta"><div class="wrap cta-inner"><div><h2>Have a project in mind?</h2><p>Share your goals and expected budget. We’ll follow up to discuss fit and next steps.</p></div><a class="button" href="#contact">Book a project consultation</a></div></section>
        @include('components.project-booking-form')
        <section class="section"><div class="wrap"><h2>Explore related services</h2><div class="other">@foreach($otherServices as $otherSlug => $otherService)<a href="{{ route('services.show', $otherSlug) }}">{{ $otherService['title'] }} &rarr;</a>@endforeach</div></div></section>
    </main>
    <footer class="foot"><div class="wrap"><span>&copy; {{ date('Y') }} Ather Digital Hub</span><a href="mailto:info@atherdigitalhub.com">info@atherdigitalhub.com</a></div></footer>
</body>
</html>
