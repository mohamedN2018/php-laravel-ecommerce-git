{{--@include('layouts.navone')--}}
@include('layouts.navtow')


    <div class="content">
        <div class="container">
            <div class="thickline"></div>
        </div>
        <nav class="breadcrumb container">
            <a class="breadcrumb-item" href="welcome">Home</a>
            <a class="breadcrumb-item" href="profile.profile">Profile</a>
            <a class="breadcrumb-item" href="login">Login</a>
            <a class="breadcrumb-item" href="register"><span class="breadcrumb-item active" style="color: red">Register</span></a>
        </nav>
    </div>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Vvveb">
        <!-- base href="/app/public/themes/default/" -->
        <link rel="icon" href="../../favicon.ico">

        <title>Register</title>

        <!-- Bootstrap core CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- link href="css/bootstrap.css" rel="stylesheet"-->
        <!-- link href="css/stylesheet.css" rel="stylesheet"-->
    </head>
<section class="last">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <br> <br>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">Register</h2>
                    </div>
                </div>
                        <form class="pluse" method="POST" action="{{ route('register') }}">
                            @csrf
                            <br>
                            <div class="form-group row">
                                <label for="inputEmail1" class="col-sm-2 col-form-label">{{ __('Name') }}</label>

                                <div class="col-sm-10">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-sm-10">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-sm-10">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                                <br>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-sm-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-sm-10">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            <br>
                        </form>
                        <div class="form-group row mb-0">
                            <div class="offset-sm-2 col-sm-10">
                                <a  href="{{ route('login') }}" type="submit" class="form-control btn btn-primary submit px-3">
                                    Go to login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

{{--   <style>--}}

<style>

    .last {
        background-color: #dcdff1;
    }

    .heading-section {
        color: #0fabf3;
    }
    .btn.btn-white.btn-outline-white {
        border: 1px solid #fff;
        background: transparent;
        color: #fff;
    }
    .btn.btn-white {
        background: #fff;
        border: 1px solid #fff;
        color: #fff;
    }
    .btn {
        cursor: pointer;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        font-size: 15px;
        padding: 10px 20px;
        border-radius: 50px;
    }

</style>

{{--   <style>--}}
