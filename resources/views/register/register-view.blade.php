@extends('layout.master')

@section('page-title', 'GEOCARS | register')

{{-- css --}}
@section('stylesheet')
    {{-- page styling css --}}
    <link rel="stylesheet"
        href="{{ variant(asset('css/register/default/register.css'), asset('css/register/dark/register.css')) }}">
    {{-- variant selector css --}}
    <link rel="stylesheet" href="{{ asset('css/components/local-variant-selector/local-variant-selector.css') }}">
@stop

{{-- body --}}
@section('app-body')


    <main id="register__main" class="d-flex align-items-center justify-content-center w-100 h-100">
        {{-- backdrop overlay --}}
        <div id="register__backdrop" class="d-block">
            <div id="backdrop__bg"></div>
            <div id="backdrop__fg"></div>
        </div>
        {{-- panel --}}
        <div id="register__panel" class="container-sm border-0 rounded-3 shadow">

            <div class="row">

                <div id="register__page-1" class="col-12 col-sm-5 bg-success">a</div>

                <div class="col-2 text-center">
                    <span class="register__vr vr"></span>
                </div>

                <div id="register__page-2" class="col-12 col-sm-5 bg-warning">c</div>

            </div>

        </div>
        <x-local-variant-selector></x-local-variant-selector>
    </main>

@stop

{{-- js --}}
@section('javascript')

@stop
