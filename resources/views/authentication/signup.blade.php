@extends('layouts.app')
@section('style')
    <style>
        @import url('https://fonts.cdnfonts.com/css/kristen-itc');
        .signInContainer {
            width: 100%;
        }
        .signInCard {
            margin: 180px auto  100px auto; 
           
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

        .signInCard form .form-group input,
        .signInCard form .form-group select {
            width: 100%;
            padding: 10px;
            height: 45px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            border-radius: 0px
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
        .signInCard .select2-container {
            width: 100% !important;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 0px; 
            background: #fff;
            height: 45px;
            display: flex;
            align-items: center;
        }
    </style>
@endsection
@section('content')
    <div class="signInContainer">
        <div class="row">
            <div class="col-md-6 mx-auto">
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input class="form-control" type="text" placeholder="Name" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email Address</label>
                                        <input class="form-control" type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Contact Number</label>
                                        <input class="form-control" type="number" placeholder="Contact Number" name="contactNumber">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">State</label>
                                        <select id="states" name="states">
                                            <option value="" disabled selected>Select State</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">City</label>
                                        <select id="cities" name="cities">
                                            <option value="" disabled selected>Select City</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Postal Code</label>
                                        <input class="form-control" type="text" placeholder="Postal Code" name="postalCode">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="text-capitalize">How did you hear about us?</label>
                                        <select name="howDidYouHearAboutUs" class="form-select" id="">
                                            <option value="0">Select</option>
                                            <option value="1">Social Media</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input class="form-control" type="text" placeholder="Password" name="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Confirm Password</label>
                                        <input class="form-control" type="text" placeholder="Confirm Password" name="confirmPassword">
                                    </div>
                                </div>
                            </div>
                             
                           
                            <input type="submit" class="signInBtn" value="Sign Up">
                            
                        </form>
                    </div>
                </div>
 
            </div>
        </div>
    </div>
@endsection

@section('script')

<script>
    var usCities = [
        "New York City", "Los Angeles", "Chicago", "Houston", "Phoenix",
        "Philadelphia", "San Antonio", "San Diego", "Dallas", "San Jose",
        "Austin", "Jacksonville", "San Francisco", "Columbus", "Indianapolis",
        "Seattle", "Denver", "Washington, D.C.", "Boston", "Nashville"
    ];

    // Get the select element
    var selectCities = $("#cities");

    // Populate the select element with options
    usCities.forEach(function(city) {
        var option = new Option(city, city);
        selectCities.append(option);
    });

    // Apply Select2 to the select element
    $(document).ready(function() {
        selectCities.select2();
    });
</script>
<script>
    var usStates = [
        "Alabama", "Alaska", "Arizona", "Arkansas", "California",
        "Colorado", "Connecticut", "Delaware", "Florida", "Georgia",
        "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa",
        "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland",
        "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri",
        "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey",
        "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio",
        "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina",
        "South Dakota", "Tennessee", "Texas", "Utah", "Vermont",
        "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"
    ];

    var selectStates = $("#states");

    // Populate the select element with options
    usStates.forEach(function(state) {
        var option = new Option(state, state);
        selectStates.append(option);
    });

    // Apply Select2 to the select element
    $(document).ready(function() {
        selectStates.select2();
    });
</script>
@endsection
