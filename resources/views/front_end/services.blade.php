<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Software Development Services | Ather Digital Hub</title>
    <meta name="description" content="Explore custom software, SaaS, web and mobile app, and AI agent development services from Ather Digital Hub.">
    <link rel="canonical" href="{{ route('services.index') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *{box-sizing:border-box}body{margin:0;background:#080808;color:#d0d0d0;font-family:Inter,Arial,sans-serif;line-height:1.7}a{color:inherit;text-decoration:none}.wrap{width:min(1160px,90%);margin:auto}.top{border-bottom:1px solid #29251a;background:#0b0b0b}.nav{min-height:78px;display:flex;align-items:center;justify-content:space-between;gap:24px}.brand{font-weight:800;color:#f2d982;font-size:1.15rem}.nav a:last-child,.button{color:#17130a;background:linear-gradient(135deg,#f5e6a5,#d4af37);border-radius:999px;padding:12px 22px;font-weight:700}.hero{padding:88px 0 58px;text-align:center;background:radial-gradient(ellipse at top,#2b2514 0,transparent 60%)}.eyebrow{color:#e5c75e;text-transform:uppercase;font-weight:700;letter-spacing:.12em;font-size:.8rem}.hero h1{font-size:clamp(2.2rem,5vw,4.2rem);line-height:1.1;letter-spacing:-.04em;color:white;margin:12px 0 18px}.hero p{max-width:760px;margin:0 auto 28px;font-size:1.1rem}.grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:20px;padding:22px 0 90px}.card{border:1px solid #3a321b;border-radius:20px;padding:28px;background:linear-gradient(140deg,#171717,#101010);display:flex;flex-direction:column}.card h2{font-size:1.35rem;color:white;margin:0 0 10px}.card p{margin:0 0 22px}.card a{color:#e5c75e;font-weight:700;margin-top:auto}.icon{color:#e5c75e;font-size:1.35rem;margin-bottom:15px}.foot{border-top:1px solid #29251a;padding:24px 0;color:#999}.foot .wrap{display:flex;justify-content:space-between;gap:15px;flex-wrap:wrap}@media(max-width:680px){.grid{grid-template-columns:1fr}.hero{padding-top:64px}.nav{min-height:68px}}
    </style>
</head>
<body>
    <header class="top"><nav class="wrap nav"><a class="brand" href="{{ route('landing') }}">Ather Digital Hub</a><a href="{{ route('landing') }}#contact">Book a consultation</a></nav></header>
    <main>
        <section class="hero"><div class="wrap"><span class="eyebrow">What we do</span><h1>Software built around your business</h1><p>From a first product release to connected business systems, choose a development service that fits the problem you need to solve.</p></div></section>
        <section class="wrap grid" aria-label="Software development services">
            @foreach($services as $slug => $service)
                <article class="card"><div class="icon" aria-hidden="true">{{ $loop->iteration }}</div><h2>{{ $service['title'] }}</h2><p>{{ $service['summary'] }}</p><a href="{{ route('services.show', $slug) }}">Explore {{ $service['title'] }} &rarr;</a></article>
            @endforeach
        </section>
        @include('components.project-booking-form')
    </main>
    <footer class="foot"><div class="wrap"><span>&copy; {{ date('Y') }} Ather Digital Hub</span><a href="mailto:info@atherdigitalhub.com">info@atherdigitalhub.com</a></div></footer>
</body>
</html>
