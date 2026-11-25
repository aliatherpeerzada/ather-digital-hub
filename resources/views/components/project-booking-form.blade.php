<section class="booking-section" id="contact">
    <div class="booking-wrap">
        <div class="booking-copy">
            <p class="booking-eyebrow">Start a conversation</p>
            <h2>Book a Project Consultation</h2>
            <p>Tell us what you want to build, your budget and how to reach you. Our team will follow up about next steps.</p>
        </div>
        <div class="booking-card">
            @if(session('message'))<div class="booking-success">{{ session('message') }}</div>@endif
            @if($errors->any())<div class="booking-errors" role="alert">@foreach($errors->all() as $error)<p>{{ $error }}</p>@endforeach</div>@endif
            <form action="{{ route('contact.store') }}" method="POST" class="shared-booking-form">
                @csrf
                <div class="booking-fields">
                    <label>Name<input type="text" name="name" value="{{ old('name') }}" maxlength="120" autocomplete="name" required></label>
                    <label>Email<input type="email" name="email" value="{{ old('email') }}" maxlength="255" autocomplete="email" required></label>
                    <label>Phone<input type="tel" name="phone" value="{{ old('phone') }}" maxlength="40" autocomplete="tel" required></label>
                    <label>Budget (USD)<span class="usd-input"><span aria-hidden="true">$</span><input type="number" name="budget" value="{{ old('budget') }}" min="0" step="any" inputmode="decimal" placeholder="5000" required></span></label>
                </div>
                <label class="booking-detail-label" for="booking-project-details">Project details (up to 1,000 words)</label>
                <textarea id="booking-project-details" name="message" rows="6" maxlength="50000" required placeholder="Describe your goals, key features and timeline.">{{ old('message') }}</textarea>
                <p class="booking-word-count" aria-live="polite">0 / 1,000 words</p>
                @if(config('services.turnstile.key') && config('services.turnstile.secret'))
                    <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.key') }}" data-theme="dark"></div>
                @else
                    <p class="booking-unavailable">Online booking is temporarily unavailable. Email <a href="mailto:info@atherdigitalhub.com">info@atherdigitalhub.com</a>.</p>
                @endif
                <button type="submit" @if(!config('services.turnstile.key') || !config('services.turnstile.secret')) disabled @endif>Submit project enquiry</button>
            </form>
        </div>
    </div>
</section>
<style>
    .booking-section{padding:72px 0;background:#0d0d0d;border-top:1px solid #302a1a}.booking-wrap{width:min(1060px,90%);margin:auto;display:grid;grid-template-columns:.8fr 1.2fr;gap:48px;align-items:start}.booking-eyebrow{color:#e5c75e;text-transform:uppercase;letter-spacing:.12em;font-weight:700;font-size:.8rem}.booking-copy h2{color:#fff;font-size:clamp(1.8rem,3vw,2.7rem);line-height:1.15;margin:8px 0 14px}.booking-card{background:#141414;border:1px solid #3a321b;border-radius:20px;padding:28px}.shared-booking-form label{display:block;color:#f2f2f2;font-weight:600;font-size:.92rem}.booking-fields{display:grid;grid-template-columns:1fr 1fr;gap:16px}.shared-booking-form input,.shared-booking-form textarea{display:block;width:100%;margin-top:7px;padding:13px 14px;border:1px solid #3b3523;border-radius:10px;background:#090909;color:#fff;font:inherit}.shared-booking-form input:focus,.shared-booking-form textarea:focus{outline:2px solid #d4af37}.usd-input{position:relative;display:block}.usd-input>span{position:absolute;left:13px;top:50%;transform:translateY(-50%);color:#f2d982}.usd-input input{padding-left:30px}.booking-detail-label{margin-top:18px}.shared-booking-form textarea{resize:vertical}.booking-word-count{margin:5px 0 16px;text-align:right;color:#aaa;font-size:.82rem}.booking-word-count.is-over-limit{color:#ff8e8e}.shared-booking-form button{width:100%;margin-top:18px;border:0;border-radius:999px;padding:15px;background:linear-gradient(135deg,#f5e6a5,#d4af37);color:#17130a;font:inherit;font-weight:800;cursor:pointer}.shared-booking-form button:disabled{opacity:.55;cursor:not-allowed}.booking-success,.booking-errors,.booking-unavailable{padding:12px 14px;border-radius:10px;margin:0 0 16px}.booking-success{color:#9de2b2;background:#102116}.booking-errors{color:#ffb0a9;background:#281311}.booking-errors p{margin:0}.booking-unavailable{color:#f2d982;background:#211d11}.booking-unavailable a{color:#fff;text-decoration:underline}@media(max-width:760px){.booking-wrap{grid-template-columns:1fr;gap:22px}.booking-fields{grid-template-columns:1fr}.booking-card{padding:20px}}
</style>
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<script>
    (() => {
        const textarea = document.getElementById('booking-project-details');
        const counter = document.querySelector('.booking-word-count');
        if (!textarea || !counter) return;
        const update = () => {
            const count = (textarea.value.trim().match(/\S+/gu) || []).length;
            counter.textContent = `${count.toLocaleString()} / 1,000 words`;
            counter.classList.toggle('is-over-limit', count > 1000);
            textarea.setCustomValidity(count > 1000 ? 'Please keep project details within 1,000 words.' : '');
        };
        textarea.addEventListener('input', update);
        update();
    })();
</script>
