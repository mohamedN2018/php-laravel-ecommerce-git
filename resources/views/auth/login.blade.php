@include('layouts.navtow')

<div class="content">
    <div class="container">
        <div class="thickline"></div>
    </div>
    <nav class="breadcrumb container">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="login"><span class="breadcrumb-item active" style="color: red">Login</span></a>
        <a class="breadcrumb-item" href="{{ route('register') }}">Register</a>
    </nav>
</div>
    <!-- <login> -->
<section class="last">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <br> <br>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">Login</h2>
                    </div>
                </div>
                <form class="pluse" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="inputEmail1" class="col-sm-2 col-form-label">{{ __('E-Mail Address') }}</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="inputEmail1" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword1" class="col-sm-2 col-form-label @error('password') is-invalid @enderror" required autocomplete="current-password">{{ __('Password') }}</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="inputPassword1" placeholder="Password" {{ old('remember') ? 'checked' : '' }}>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row mb-0">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="form-control btn btn-primary submit px-3">
                                {{ __('Login') }}
                            </button>  <br>  <br>
                                    <a  href="{{ route('register') }}" type="submit" class="form-control btn btn-primary submit px-3">
                                        Go to Register
                                    </a>
                                    <br>
                            @if (Route::has('password.request'))
                                <a class="form-group d-md-flex" href="{{ route('password.request') }}">
                                    <br>
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">
                                        {{ __('Remember Me') }}
                                        <input type="checkbox" checked>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</section>
    <br><hr><br>

{{--< style >--}}
<style>
    .last {
        background-color: #dcdff1;
    }

    .text-center {
        text-align: center !important;
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

   .pluse {
       cursor: pointer;
       -webkit-box-shadow: none !important;
       box-shadow: none !important;
       font-size: 15px;
       padding: 10px 20px;
       border-radius: 50px;
   }

    .heading-section {
        color: #0fabf3;
    }
</style>
{{--< style >--}}
