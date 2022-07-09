@extends("layout.master")

@section("page-title", "GEOCARS | app")

{{-- css --}}
@section("stylesheet")
    {{-- page styling css --}}
    <link rel="stylesheet" href="{{ variant(asset("css/main/default/main.css"), asset("css/register/dark/register.css")) }}">
    {{-- variant selector css --}}
    <link rel="stylesheet" href="{{ asset("css/components/local-variant-selector/local-variant-selector.css") }}">
@stop

{{-- body --}}
@section("app-body")
    <div class="d-inline" style="white-space: nowrap !important;">
        <nav id="main__nav-bar" class="d-block d-sm-inline-block bg-primary h-100">
            s
        </nav><!-- MAIN PAGE
        --><div class="d-inline-block w-100 h-100">
            s
        </div>
    </div>
@stop

{{-- js --}}
@section("javascript")

@stop
