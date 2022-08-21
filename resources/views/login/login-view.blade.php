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
                        <img class="img" src="{{ asset("images/geocarsapp.png") }}" alt="geocars-icon">
                    </div>
                </div>
                <h6 id="login__signin-label" class="display-6 mt-1 mb-0 text-center">{{ __("SIGN IN") }}</h6>
            </div>

            {{-- svg 0 --}}
            <svg id="login__wave-0" class="d-block d-sm-none" viewBox="0 0 1440 320">
                <path fill="#fffffd" fill-opacity="1" d="M0,128L80,106.7C160,85,320,43,480,53.3C640,64,800,128,960,170.7C1120,213,1280,235,1360,245.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>

            {{-- svg 1 --}}
            <svg id="login__wave-1" class="d-block d-sm-none" viewBox="0 0 1440 320">
                <path fill="#330f1e" fill-opacity="1" d="M0,128L80,106.7C160,85,320,43,480,53.3C640,64,800,128,960,170.7C1120,213,1280,235,1360,245.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>

            <form class="d-block p-3" action="#" method="POST">
                <div id="login__input-wrapper" class="container-fluid">
                    <div class="row">
                        <span id="login__signin-label-II" class="d-inline d-sm-none ps-3 text-white fw-bold" role="text">{{ __("SIGN IN") }}</span>
                        <div class="col-12">
                            <div class="input-group my-4 my-sm-3 shadow rounded">
                                <span class="input-group-text border-0 bg-white text-primary" role="text">
                                    <i class="fa-solid fa-envelope fa-1x"></i>
                                </span>
                                <input class="form-control border-0" type="email" placeholder="{{ __("email") }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group mb-4 mb-sm-3 shadow rounded">
                                <span class="input-group-text border-0 bg-white text-primary " role="text">
                                    <i class="fa-solid fa-lock fa-1x"></i>
                                </span>
                                <input class="form-control border-0" type="password" placeholder="{{ __("password") }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <span id="login__btn-signin-wrapper" class="d-block rounded mx-auto shadow">
                                <button class="btn btn-primary w-100" type="submit">
                                    {{ __("SIGN IN") }}
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
        <x-global.local-variant-selector></x-global.local-variant-selector>
    </div>

@stop

{{-- js --}}
@section("javascript")
    <script type="text/javascript" src="{{ asset("js/login/login-index.js") }}"></script>
@stop
