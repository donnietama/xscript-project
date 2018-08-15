@extends('layouts.app')

@section('content')
<section class="container-fluid">
    <div class="row login-screen-wrapper">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 login-splash-screen">
            <div class="splash-screen-context">
                <h1 class="display-5 greetings">Selamat datang!</h1>
                <p class="lead">Siap-siap untuk pengalaman belajar yang baru dan lebih seru! Tentukan masa depanmu mulai dari sekarang, nikmati prosesnya dan gapai cita-cita setinggi-tingginya.</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 bg-white px-5 login-area-wrapper">
            <div class="login-area-context">
                <form action="{{ route('login') }}" method="post" aria-label="{{ __('login') }}">
                    @csrf

                    <div class="form-group row">
                        
                        <div class="col-md-12">
                            <label for="email" class="form-label">{{ __('Alamat E-Mail') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        
                        <div class="col-md-12">
                            <label for="password" class="form-label">{{ __('Kata Sandi') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Simpan Info Login') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row text-center mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block btn-custom">
                                {{ __('Login') }}
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Lupa Password?') }}
                            </a>
                        </div>
                    </div>
                    <div class="form-group row text-center text-capitalize">
                        <div class="col-md-12">
                            <p>atau login dengan</p>
                            <a href="{{ url('/auth/facebook') }}" class="btn btn-block btn-info btn-icon-wrapper">
                                <span class="fab fa-facebook fa-2x mr-2 btn-icon"></span>
                                facebook
                            </a>
                            <a href="{{ url('/auth/google') }}" class="btn btn-block btn-danger btn-icon-wrapper">
                                <span class="fab fa-google fa-2x mr-2 btn-icon"></span>
                                google
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
