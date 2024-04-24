@extends('layouts.app')
@section('style')
    <style>
        @import url('https://fonts.cdnfonts.com/css/kristen-itc');
        .signInContainer {
            width: 100%;
        }
        .signInCard {
            margin: 180px auto  0px auto; 
           
        }

        .signInCard .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            margin: 20px 0;
            padding: 20px 40px;
        }

        .signInLogo {
            width: 50%;
            display: block;
        }

        .signInCard .continueWithGoogle span {
            font-size: 18px;
            color: #606060;
            font-weight: 500;
            margin-right: 10px;
            transition: .3s;
        }

        .signInCard .continueWithGoogle {
            border: 1px solid #ddd;
            padding: 10px 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            box-shadow: inset 0 0 0 0 #009144;
            -webkit-transition: ease-out 0.4s;
            -moz-transition: ease-out 0.4s;
            transition: ease-out 0.4s;
        }
        .signInCard .continueWithGoogle:hover {
            background: transparent;
            box-shadow: inset 800px 0 0 0 #009144 !important;
            border: 1px solid #009144;
            color: #fff;
            transition: .3s;
        }
        .signInCard .continueWithGoogle:hover span {
            color: #fff;
            transition: .3s;
        }
        .signInCard form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .signInCard form .form-group {
            display: flex;
            flex-direction: column;
        }

        .signInCard form .form-group label {
            font-size: 16px;
            color: #606060;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .signInCard form .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        .rememberMe {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .rememberMe label {
            font-size: 16px;
            color: #606060;
            font-weight: 500;
            margin-left: 5px;
        }

        .forgotPassword {
            margin-left: auto;
            color: #868686;
            font-weight: 500;
        }

        .forgotPassword:hover {
            color: #009144;
        }

        .signupNote {
            color: #868686;
            font-weight: 500;
            margin-top: 20px;
            text-align: center;
        }

        .signupNote a {
            color: #606060;
        }

        .signupNote a:hover {
            color: #009144;
        }

        .signInBtn {
            padding: 15px 10px;
            background-color: #000;
            color: #fff;
            border: none;
            font-weight: 500;
            font-size: 18px;
            border-radius: 0px;
            font-family: 'Poppins', sans-serif;
            box-shadow: inset 0 0 0 0 #009144;
            -webkit-transition: ease-out 0.4s;
            -moz-transition: ease-out 0.4s;
            transition: ease-out 0.4s;
            width: 200px;
            margin: 20px auto 20px auto;
            text-align: center;

        }

        .signInBtn:hover {
            background: transparent;
            box-shadow: inset 800px 0 0 0 #009144 !important;
            color: #fff;
            transition: .3s;
        }
        .signUpCard {
            margin: 50px auto 100px auto; 
        }
        .signUpCard
        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            margin: 20px 0;
            padding: 20px 40px;
        }
        .signUpBtn {
            padding: 15px 10px;
            background-color: #000;
            color: #fff;
            border: none;
            font-weight: 500;
            font-size: 18px;
            border-radius: 0px;
            font-family: 'Poppins', sans-serif;
            box-shadow: inset 0 0 0 0 #009144;
            -webkit-transition: ease-out 0.4s;
            -moz-transition: ease-out 0.4s;
            transition: ease-out 0.4s;
            width: 200px;
            margin: 20px auto 20px auto;
            text-align: center;

        }

        .signUpBtn:hover {
            background: transparent;
            box-shadow: inset 800px 0 0 0 #009144 !important;
            color: #fff;
            transition: .3s;
        }
        .signUpCard .signupNote {
            font-size: 18px;
        }
    </style>
@endsection
@section('content')
    <div class="signInContainer">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card signInCard">
                    <div class="card-body">

                        <a href="{{ route('site') }}" class="signInLogo">
                            <img src="{{ asset('assets/images/Tools-of-Living-header.png') }}" class="img-fluid"
                                alt="logo-image">
                        </a>


                        <a href="#" class="continueWithGoogle">
                            <span>Continue with</span>
                            <img src="{{ asset('assets/images/google.png') }}" class="img-fluid" alt="continue-with-google">
                        </a>

                        <form action="#" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="text" placeholder="Email Address" name="email">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <a href="#" class="forgotPassword">Forgot Your Password?</a>
                            <div class="rememberMe">
                                <input type="checkbox" name="rememberMe" id="rememberMe">
                                <label for="rememberMe">Remember Me</label>
                            </div>
                            <input type="submit" class="signInBtn" value="Sign In">
                         
                            <p class="signupNote">By Signing in you agree to Toolsofliving <a href="#">Terms</a> and
                                <a href="#">Privacy</a></p>
                        </form>
                    </div>
                </div>

                <div class="card signUpCard">
                    <div class="card-body">
                        <h4 class="m-0">Create My Toolsofliving Account</h4>
                        <p class="m-0 signupNote">Dummy text goes here Dummy text goes here Dummy text goes here Dummy text goes here</p>
                            <a href="{{route('signUp')}}" class="signUpBtn">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
