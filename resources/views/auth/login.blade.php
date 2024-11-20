<x-auth-layout>
    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <!--begin::Logo-->

        <!--end::Logo-->
        <!--begin::Wrapper-->
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

            

            <!--begin::Form-->
            <form class="form w-100" form method="POST" action="{{ route('login') }}">
                <!--begin::Heading--> @csrf
                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Sign In</h1>
                    <!--end::Title-->
                </div>
                <!--begin::Heading-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label for="email" class="form-label fs-6 fw-bolder text-dark">Email</label>
                    <!--end::Label-->
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack mb-2">
                        <!--begin::Label-->
                        <label for="password" class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                        <!--end::Label-->
                        {{-- @if (Route::has('password.request'))
                            <a class="link-primary fs-6 fw-bolder" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
                    </div>
                    <!--end::Wrapper-->
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="fv-row">
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary w-100 mb-">
                            {{ __('Login') }}
                        </button>
                    </div>

                    {{-- <a href="/register">Don't have an account? Register Now</a> --}}
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
</x-auth-layout>
