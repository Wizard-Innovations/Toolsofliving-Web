@extends('layouts.app')

@section('style')
    <style>
        .selectBox .select2-container:last-child {
            margin-left: 0px;
        }
    </style>
@endsection

@section('content')
    <section class="banner-section">
        <video width="320" height="240" autoplay muted loop class="bg-video">
            <source src="{{ asset('assets/images/bg-video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-10">
                    <div class="banner-content">

                        <h1 class="title custom_heading" data-aos="fade-up" data-aos-duration="2000">Become a Tools of
                            Living Premium Member Today</h1>
                        <p class="custom_paragraph" data-aos="fade-up" data-aos-duration="2000">Get instant access to
                            exclusive content, live Q&A events, and distilled research, all focused on extending your
                            healthspan.</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="form-wrapper" id="signup_form">
                   
                    <form method="post" action="{{ route('becomeMemberStore') }}">
                        @csrf
                        <h2 class="form-maintxt mb-3">Sign Up for Our<br> Premium Newsletter</h2>
                        <p class="form-gentext mb-5">Leave your email and any suggested needs and you'll be amongst the
                            first<br> to get the info.</p>

                        <input type="text" name="name" placeholder="Name" class="mb-3">
                        @if ($errors->has('name'))
                            <div class="alert alert-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <input type="email" name="email" placeholder="Email" class="mb-3">
                        @if ($errors->has('email'))
                            <div class="alert alert-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                        <input type="number" name="phone" placeholder="Phone" class="mb-3">
                        @if ($errors->has('phone'))
                            <div class="alert alert-danger">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                        <div class="selectBox">
                            <div class="d-flex flex-column w-50">
                                <select id="cities" name="cities">
                                    <option value="" disabled selected>Select City</option>
                                </select>
                                @if ($errors->has('cities'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('cities') }}
                                    </div>
                                @endif
                            </div>

                            <div class="d-flex flex-column w-50">
                                <select id="states" name="states">
                                    <option value="" disabled selected>Select State</option>
                                </select>
                                @if ($errors->has('states'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('states') }}
                                    </div>
                                @endif
                            </div>

                        </div>

                        <textarea name="message"></textarea>
                        @if ($errors->has('message'))
                            <div class="alert alert-danger">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                        <!--<p class="form-txt">By submitting this form, you are consenting to receive marketing emails from: Tools of Living, 550 Orpheus Avenue, Encinitas, CA, 92024, US, http://World Health Action. You can revoke your consent to receive emails at any time by using the SafeUnsubscribe® link, found at the bottom of every email. Emails are serviced by Constant Contact.</p>-->
                        <button type="submit">Sign Up</button>
                    </form>
                </div>
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
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
