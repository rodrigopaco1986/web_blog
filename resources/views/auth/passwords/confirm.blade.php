@extends('layouts.admin.login')

@section('content')

    <div class="login-box">
        <div class="login-logo">
            <b>{{ config('app.name') }}</b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ __('Confirm Password') }}</p>

                <form action="{{ route('password.update') }}" method="post">
                    
                    {{ __('Please confirm your password before continuing.') }}
                    
                    @csrf

                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-6">
                        </div>
                        <div class="col-6 text-right">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Confirm Password') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
<!-- /.login-box -->
@endsection
