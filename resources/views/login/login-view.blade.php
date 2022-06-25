@extends("layout.master")

@section("page-title", "GEOCARS | login")

{{-- css --}}
@section("stylesheet")
    {{-- page styling css --}}
    <link rel="stylesheet" href="{{ variant(asset("css/login/default/login.css"), asset("css/login/dark/login.css")) }}">
    {{-- variant selector css --}}
    <link rel="stylesheet" href="{{ asset("css/components/local-variant-selector/local-variant-selector.css") }}">
@stop

{{-- body --}}
@section("app-body")


   <main id="login__main" class="d-flex align-items-center justify-content-center w-100 h-100">
       {{-- backdrop overlay --}}
        <div id="login__backdrop" class="d-block">
            <div id="backdrop__bg"></div>
            <div id="backdrop__fg"></div>
        </div>
        {{-- panel --}}
        <div id="login__panel" class="d-flex flex-column justify-content-center border-0 rounded-3 shadow">

            <div id="login__icon-wrapper" class="d-inline-block mx-auto bg-white shadow-sm">
                <div id="pre-wrap" class="d-block">
                    <img class="img" src="{{ asset("images/geocarsapp.png") }}" alt="">
                </div>
            </div>

            <h6 id="login__signin-label" class="display-6 mt-1 mb-0 text-center">{{ __("Sign In") }}</h6>

            <form class="d-block p-3" action="#" method="POST">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group my-4 my-sm-3 shadow">
                                <span class="input-group-text border-0 bg-primary text-white" role="text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input class="form-control border-0" type="text" placeholder="{{ __("email") }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group mb-4 mb-sm-3 shadow">
                                <span class="input-group-text border-0 bg-primary text-white" role="text">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                <input class="form-control border-0" type="password" placeholder="{{ __("password") }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <span id="login__btn-signin-wrapper" class="d-block mx-auto shadow">
                                <button class="btn btn-primary w-100" type="submit">
                                    {{ __("SIGNIN") }}
                                </button>
                            </span>
                        </div>
                        <div class="col-12">
                            <span id="login__reg-link" class="d-block my-4 text-center">
                                <a href="{{ url("/register") }}">{{ __("Or Sign Up") }}</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="login__social" class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-auto">
                            <a class="login__social-icon d-flex align-items-center justify-content-center bg-white rounded-circle shadow sm" href="#">
                                <i class="fa-brands fa-facebook fa-2x"></i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a class="login__social-icon d-flex align-items-center justify-content-center bg-white rounded-circle shadow sm" href="#">
                                <i class="fa-brands fa-google fa-2x text-success"></i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a class="login__social-icon d-flex align-items-center justify-content-center bg-white rounded-circle shadow sm" href="#">
                                <i class="fa-brands fa-github fa-2x text-dark"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <x-local-variant-selector></x-local-variant-selector>
   </main>

@stop

{{-- js --}}
@section("javascript")

@stop
