@extends('layouts.app')

@section('content')
<div class="container p-2 p-sm-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 rounded-0 shadow-sm">
                <div class="card-header border-0 bg-transparent">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-form-label">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            </div>
                            <div class="col-12">
                                <div class="input-group mb-2 shadow-sm">
                                    <span class="input-group-text text-muted">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="d-inline-block my-2 rounded shadow-sm">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Confirm Password') }}
                                    </button>
                                </span>
                            </div>
                            <div class="col-12 text-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
