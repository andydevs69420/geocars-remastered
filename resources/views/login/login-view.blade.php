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


   <div id="login__main" class="d-flex align-items-center justify-content-center">
       {{-- backdrop overlay --}}
        <div id="login__backdrop" class="d-block">
            <div id="backdrop__bg"></div>
            <div id="backdrop__fg"></div>
        </div>
        {{-- panel --}}
        <div id="login__panel" class="d-flex flex-column align-items-center justify-content-center d-sm-block border-0 rounded-3 {{-- shadow --}}">

            <div id="login__label-wrap" class="d-none d-sm-block mx-auto">
                <div id="login__icon-wrapper" class="d-block mx-auto bg-white shadow-sm">
                    <div id="pre-wrap" class="d-block">
                        <img class="img" src="{{ asset("images/geocarsapp.png") }}" alt="">
                    </div>
                </div>
                <h6 id="login__signin-label" class="display-6 mt-1 mb-0 text-center">{{ __("SIGN IN") }}</h6>
            </div>

            <svg id="login__wave" class="d-block d-sm-none" viewBox="0 0 1440 320">
                <path fill="#330f1e" fill-opacity="1" d="M0,320L60,277.3C120,235,240,149,360,96C480,43,600,21,720,32C840,43,960,85,1080,122.7C1200,160,1320,192,1380,208L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
            </svg>

            <form class="d-block p-3" action="#" method="POST">
                <span id="login__signin-label-II" class="d-inline d-sm-none ps-3 text-white fw-bold" role="text">{{ __("SIGN IN") }}</span>
                <div id="login__input-wrapper" class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group my-4 my-sm-3 rounded-pill shadow">
                                <span class="input-group-text border-0 bg-white text-muted rounded-pill" role="text">
                                    <i class="fa-solid fa-envelope fa-1x"></i>
                                </span>
                                <input class="form-control border-0" type="email" placeholder="{{ __("email") }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group mb-4 mb-sm-3 rounded-pill shadow">
                                <span class="input-group-text border-0 bg-white text-muted rounded-pill" role="text">
                                    <i class="fa-solid fa-lock fa-1x"></i>
                                </span>
                                <input class="form-control border-0" type="password" placeholder="{{ __("password") }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <span id="login__btn-signin-wrapper" class="d-block rounded-pill mx-auto shadow">
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
                <div id="login__social" class="container mt-2 mt-sm-0">
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
    </div>

@stop

{{-- js --}}
@section("javascript")

@stop
