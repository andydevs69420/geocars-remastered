@extends("layout.master")

@section("page-title", "GEOCARS | register")

{{-- css --}}
@section("stylesheet")
    {{-- page styling css --}}
    <link rel="stylesheet" href="{{ variant(asset("css/register/default/register.css"), asset("css/register/dark/register.css")) }}">
    {{-- variant selector css --}}
    <link rel="stylesheet" href="{{ asset("css/components/local-variant-selector/local-variant-selector.css") }}">
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

            <div id="register__lable-wrap" class="d-block mx-auto mb-md-4">
                <div id="register__icon-wrapper" class="d-block mx-auto bg-white shadow-sm">
                    <div id="pre-wrap" class="d-block">
                        <img class="img" src="{{ asset("images/geocarsapp.png") }}" alt="">
                    </div>
                </div>
                <h6 id="register__signin-label" class="display-6 mt-1 mb-0 text-center">{{ __("Sign Up") }}</h6>
            </div>

            <form class="d-block p-3 w-100 h-100" action="#" method="POST">
                <div class="container-fluid h-100">
                    <div class="row h-100">
                        <div class="col-12 col-md-6">
                            <div class="container-fluid px-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow">
                                            <span class="input-group-text border-0 bg-primary text-white" role="text">
                                                <i class="fa-solid fa-envelope"></i>
                                            </span>
                                            <input class="form-control border-0" type="text" placeholder="{{ __("email") }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow">
                                            <span class="input-group-text border-0 bg-primary text-white" role="text">
                                                <i class="fa-solid fa-lock"></i>
                                            </span>
                                            <input class="form-control border-0" type="password" placeholder="{{ __("password") }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow">
                                            <span class="input-group-text border-0 bg-primary text-white" role="text">
                                                <i class="fa-solid fa-check-circle"></i>
                                            </span>
                                            <input class="form-control border-0" type="password" placeholder="{{ __("confirm password") }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="container-fluid px-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group my-2 shadow">
                                            <span class="input-group-text border-0 bg-primary text-white" role="text">
                                                <i class="fa-solid fa-envelope"></i>
                                            </span>
                                            <input class="form-control border-0" type="text" placeholder="{{ __("email") }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
