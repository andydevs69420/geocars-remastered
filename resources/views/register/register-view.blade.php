@extends("layout.master")

@section("page-title", "GEOCARS | register")

{{-- css --}}
@section("stylesheet")
    {{-- page styling css --}}
    <link rel="stylesheet" href="{{ variant(asset("css/register/default/register.css"), asset("css/register/dark/register.css")) }}">
    {{-- variant selector css --}}
    <link rel="stylesheet" href="{{ asset("css/components/global/local-variant-selector/local-variant-selector.css") }}">
@stop

{{-- body --}}
@section("app-body")


   <div id="register__main" class="d-flex align-items-center justify-content-center">
       {{-- backdrop overlay --}}
        <div id="register__backdrop" class="d-block">
            <div id="backdrop__bg"></div>
            <div id="backdrop__fg"></div>
        </div>
        {{-- panel --}}
        <div id="register__panel" class="d-block border-0 rounded-3 {{-- shadow --}}">

            <div id="register__label-wrap" class="d-none d-sm-block mx-auto">
                <div id="register__icon-wrapper" class="d-block mx-auto bg-white shadow-sm">
                    <div id="pre-wrap" class="d-block">
                        <img class="img" src="{{ asset("images/geocarsapp.png") }}" alt="geocars-icon">
                    </div>
                </div>
                <h6 id="register__signup-label" class="display-6 mt-1 mb-0 text-center">{{ __("SIGN UP") }}</h6>
            </div>

            {{-- svg 0 --}}
            <svg id="login__wave-0" class="d-block d-sm-none" viewBox="0 0 1440 320">
                <path fill="#fffffd" fill-opacity="1" d="M0,128L80,106.7C160,85,320,43,480,53.3C640,64,800,128,960,170.7C1120,213,1280,235,1360,245.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>

            {{-- svg 1 --}}
            <svg id="login__wave-1" class="d-block d-sm-none" viewBox="0 0 1440 320">
                <path fill="#330f1e" fill-opacity="1" d="M0,128L80,106.7C160,85,320,43,480,53.3C640,64,800,128,960,170.7C1120,213,1280,235,1360,245.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>

            <form class="d-block p-3 w-100 h-100" action="#" method="POST">
                <div id="scrollable" class="container-fluid h-100">
                    <div class="row h-100">
                        <div id="register_page-1" class="page col-12 col-sm-6">
                            <div class="page-wrap container-fluid px-0">
                                <div class="row">
                                    <span class="register__signup-label-II d-inline-block d-sm-none mb-3 ps-3 text-white fw-bold" role="text">{{ __("SIGN UP") }}</span>
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow rounded">
                                            <span class="input-group-text border-0 bg-primary text-primary text-center" role="text">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <input class="form-control border-0" type="text" placeholder="{{ __("firstname") }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow rounded">
                                            <span class="input-group-text border-0 bg-primary text-primary" role="text">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <input class="form-control border-0" type="text" placeholder="{{ __("lastname") }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow rounded">
                                            <span class="input-group-text border-0 bg-primary text-primary" role="text">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <input class="form-control border-0" type="text" placeholder="{{ __("middle initial") }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow rounded">
                                            <span class="input-group-text border-0 bg-primary text-primary" role="text">
                                                <i class="fa-solid fa-envelope"></i>
                                            </span>
                                            <input class="form-control border-0" type="email" placeholder="{{ __("email") }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow rounded">
                                            <span class="input-group-text border-0 bg-primary text-primary" role="text">
                                                <i class="fa-solid fa-lock"></i>
                                            </span>
                                            <input class="form-control border-0" type="password" placeholder="{{ __("password") }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow rounded">
                                            <span class="input-group-text border-0 bg-primary text-primary" role="text">
                                                <i class="fa-solid fa-check-circle"></i>
                                            </span>
                                            <input class="form-control border-0" type="password" placeholder="{{ __("confirm password") }}">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2 d-block d-sm-none">
                                        <span class="register__btn-register-wrapper d-block rounded mx-auto shadow">
                                            <button id="register__next-btn" class="btn btn-primary w-100" type="button">
                                                {{ __("NEXT STEP") }}
                                            </button>
                                        </span>
                                    </div>
                                    <div class="col-12 mt-2 d-block d-sm-none">
                                        <span id="register__login-link" class="d-block my-4 text-center">
                                            <a href="{{ url("/login") }}">{{ __("Or Sign In") }}</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="register_page-2" class="page col-12 col-sm-6">
                            <div class="page-wrap container-fluid px-0">
                                <div class="row">
                                    <span class="register__signup-label-II d-inline-block d-sm-none mb-3 ps-3 text-white fw-bold" role="link">
                                        <a class="text-decoration-none" href="#register_page-1"><i class="fa-solid fa-arrow-left"></i> {{ __("Back") }}</a>
                                    </span>
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow rounded">
                                            <span class="input-group-text border-0 bg-primary text-primary" role="text">
                                                <i class="fa-solid fa-building"></i>
                                            </span>
                                            <input class="form-control border-0" type="text" placeholder="{{ __("company name") }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow rounded">
                                            <span class="input-group-text border-0 bg-primary text-primary" role="text">
                                                <i class="fa-solid fa-location"></i>
                                            </span>
                                            <input class="form-control border-0" type="text" name="address_field" placeholder="{{ __("address") }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow rounded">
                                            <span class="input-group-text border-0 bg-primary text-primary" role="text">
                                                <i class="fa-solid fa-rocket"></i>
                                            </span>
                                            <select class="form-select border-0" type="text" placeholder="{{ __("address") }}" required>
                                                <option selected>{{ __("-- select a plan --") }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <span class="register__btn-register-wrapper d-block mx-auto my-2 shadow rounded">
                                            <button id="register__signup-btn" class="btn btn-primary w-100" type="button">
                                                {{ __("SIGN UP") }}
                                            </button>
                                        </span>
                                    </div>
                                    <div class="col-12 mt-2 d-none d-sm-block border" style="border-color: transparent !important;">
                                        <span id="register__login-link" class="d-block my-4 text-center">
                                            <a href="{{ url("/login") }}">{{ __("Or Sign In") }}</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
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
    <script type="text/javascript" src="{{ asset("js/register/register-index.js") }}"></script>
@stop
