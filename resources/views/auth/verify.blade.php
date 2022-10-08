@extends('layout.master')

@section("page-title", "GEOCARS | verify email")

@section('app-body')
<div class="container p-2 p-sm-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 rounded-0 shadow-sm">
                <div class="card-header border-0 bg-transparent">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary p-0 px-3 m-0 align-baseline">{{ __('click here to request another') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
