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
        <div id="contact" class="row justify-content-center  ">
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

                            <div>
                                                                <input type="hidden" class="captcha_token" name="captcha_token"
                                value="">
                                <div class="mt-3 d-flex justify-content-end flex-column align-items-end ">
                                <div class="cf-turnstile"></div>
                                <div id="error_message" class="text-danger fw-bold"></div>
                               
                            </div>
                            <input type="hidden" id="captcha_token" name="captcha_token" value="">

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
                <div>
                    <input type="hidden" class="captcha_token" name="captcha_token"
                    value="">
                    <div class="mt-3 d-flex justify-content-end flex-column align-items-end ">
                    <div class="cf-turnstile"></div>
                    <div id="error_message" class="text-danger fw-bold"></div>
                </div>
                 <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                        class="fa fa-paper-plane text-primary fs-4"
                        onclick="newsletter_validate()"></i></button>
            </form>
        </div>
    </div>
</div>

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<script>
    function javascriptCallback(token) {
console.log("Turnstile token:", token); // Debugging
$(".captcha_token").val(token); // Set token in the correct form
}
 
window.onloadTurnstileCallback = function () {
$(".cf-turnstile").each(function () {
turnstile.render(this, {
sitekey: "0x4AAAAAAA13b52jQX0i8W4z",
callback: javascriptCallback.bind(this), // Bind the callback to the current element
});
});
};
</script>