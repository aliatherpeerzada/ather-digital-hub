    <!-- Navbar & Hero Start -->
    <div class="  position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <div>
                <a href="{{url('')}}" class="navbar-brand p-0">
                    
                   <img src="{{URL::asset('img/logo.png')}}" alt="Ather Digital Hub Logo">  
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="#about-us" class="nav-item nav-link">About</a>
                    <a href="#services" class="nav-item nav-link">Service</a>
                    {{-- <a href="#projects" class="nav-item nav-link">Project</a> --}}
                     {{-- <a href="#" class="nav-item nav-link">Contact</a> --}}
                </div>
                <a href="#contact" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
            </div>
        </nav>
    </div>

    <!-- Navbar & Hero End -->