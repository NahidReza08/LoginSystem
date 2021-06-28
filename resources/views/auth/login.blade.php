@extends('layouts.navbar')

@section('content')

<script src="https://kit.fontawesome.com/f449cca809.js" crossorigin="anonymous"></script>

<style>
    input[type="email"],
    select.form-control {
        background: transparent;
        border: none;
        border-bottom: 1px solid #000000;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-radius: 0;
    }

    input[type="email"]:focus,
    select.form-control:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    input[type="text"],
    select.form-control {
        background: transparent;
        border: none;
        border-bottom: 1px solid #000000;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-radius: 0;
    }

    input[type="text"]:focus,
    select.form-control:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    input[type="password"],
    select.form-control {
        background: transparent;
        border: none;
        border-bottom: 1px solid #000000;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-radius: 0;
    }

    input[type="password"]:focus,
    select.form-control:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
    }
</style>


<script type="text/javascript">
    document.getElementById('login').className = "nav-link active";
</script>

<br><br>

<!-- ======= Login Section ======= -->
<section class="login" data-aos="fade-up">
    <div class="container col-lg-4 offset-lg-4">
        <div class="card ">
            <img src="{{ asset('image/login.jpg') }}" class="card-img-top" alt="..." style="height: 200px;">
            <!--<div class="bottom-left"><h3><b>Login</b></h3></div>-->
            <div class="p-3 mb-2 bg-dark text-white">
                <h3><b>Login</b></h3>
            </div>
            <div class="card-body">
                <form class="container" method="POST" action="./login">
                    @csrf
                    <div class="from-group row">
                        <label for="Email" class="col-sm-2 col-form-label"><i class="fa fa-envelope" aria-hidden="true">
                                :
                            </i>
                        </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="Email Address" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label for="Password" class="col-sm-2 col-form-label"><i class="fa fa-lock"> : </i></label>
                        <div class="col input-group sm-10" id="show_hide_password">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" placeholder="Password" name="password" required
                                autocomplete="current-password">

                            <div class="input-group-append">
                                <span class="border-bottom border-dark" onclick="myFunction()"><i class="fas fa-eye"
                                        id="view_password"></i></span>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <script>
                            function myFunction() {
                                    var view = document.getElementById("password");
                                    if (view.type === "password") {
                                        view.type = "text";
                                        document.getElementById('view_password').className = "fas fa-eye-slash";
                                    } else {
                                        view.type = "password";
                                        document.getElementById('view_password').className = "fas fa-eye";
                                    }
                                }
                        </script>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <!--{{ old('remember') ? 'checked' : '' }}-->

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <a class="btn btn-link" href="#">
                                {{ __('Forgot Password?') }}
                            </a>
                        </div>
                        <div class="col"></div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="card-footer text-muted">
                Don't have an account?<a class="btn btn-link" href="./register_page">Sign Up</a>
            </div>
        </div>
    </div>
</section><!-- End Login Section -->



@endsection