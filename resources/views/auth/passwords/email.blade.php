@extends('layout.master')

@section("page-title", "GEOCARS | reset by email")

@section("app-body")
<div class="container p-2 p-sm-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 rounded-0 shadow-sm">
                <div class="card-header border-0 bg-transparent">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="container-fluid" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row">
                            <div class="col-12 col-form-label">
                                <label for="email">{{ __('Email Address') }}</label>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <span class="input-group-text text-muted">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required placeholder="{{ __('email') }}" autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="d-inline-block mt-3 shadow-sm">
                                    <button class="btn btn-primary" type="submit">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
