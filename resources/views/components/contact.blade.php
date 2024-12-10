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
                                <div class="cf-turnstile" data-sitekey="0x4AAAAAAA13b52jQX0i8W4z"
                                    id="cloud_flare_id_1" data-callback="javascriptCallback"></div>
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