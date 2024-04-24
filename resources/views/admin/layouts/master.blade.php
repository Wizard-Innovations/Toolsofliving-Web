<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"
        integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
   

    @yield('css')
    @include('admin.layouts.includes.css')
    <style>
        .adminLeftBar {
            background: #28a7de0f;
            box-shadow: 2px -3px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
        }

        .adminLeftBar .nav-pills .nav-link {
            background: 0 0;
            border-radius: 0px;
            width: 100%;
            padding: 5px 0px !important;
            color: #009144 !important;
            font-weight: 500;
            text-transform: uppercase;

        }

        .adminLeftBar .nav-pills .nav-item {
            margin: 10px 10px;
            position: relative;
        }

        .adminLeftBar .nav-pills li:after {
            position: absolute;
            content: '';
            width: 0%;
            border-bottom: 2px solid #009144;
            left: 0;
            bottom: 0;
            transition: linear 0.3s;
        }

        .adminLeftBar .nav-pills li:hover:after {

            width: 100%;
            transition: linear 0.3s;
        }

        .card {
            border-radius: 0px;
        }

        input,
        textarea,
        button,
        select {
            border-radius: 0px !important;
        }

        input[type='text'],
        select {
            height: 45px;
        }

        button {
            border: 2px solid #009144 !important;
            border-radius: 0px;
            padding: 10px 22px !important;
            font-weight: 500;
            background: #009144;
            color: #fff;
            box-shadow: inset 0 0 0 0 #009144;
            -webkit-transition: ease-out 0.4s;
            -moz-transition: ease-out 0.4s;
            transition: ease-out 0.4s;
        }

        label {
            color: #535353;
            font-weight: 500;
        }

        button:hover {
            background: #016e34;
            border: 2px solid #016e34 !important;

        }

        .card-header {
            background: #28a7de0f;
            color: #009144;
            font-weight: 500;
            text-transform: uppercase;
            border-bottom: 1px solid #ddd;
            border-radius: 0px !important;

        }

        .select2-container .select2-selection--multiple .select2-selection__rendered {
            display: flex;
            gap: 20px;
            padding: 10px 0px 0px 10px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {


            padding: 2px 10px !important;
            border: none !important;
            background: #f63e3e;
            color: #fff;
            margin-right: 0px;
            border-radius: 0px !important;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #fff;
            border: 1px solid #aaa;
            border-radius: 0px;
            display: flex;
            flex-direction: row-reverse;
            flex-wrap: wrap;
            width: max-content;
            margin-left: 0px;
            margin-top: 0px;
            padding: 0px;
        }

        .select2-container--default .select2-selection--multiple {
            padding-bottom: 0px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            padding-left: 7px;
            padding-right: 7px;
            font-size: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .adminLeftBar .nav-pills .nav-link.active {
            border-bottom: 2px solid #009144;
        }

        .dropdown-menu {
            right: 0 !important;
            left: unset !important;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 adminLeftBar">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="{{ route('site') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="logo-image">
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 mt-4 align-items-center align-items-sm-start"
                        id="menu">

                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}"
                                class="nav-link align-middle px-0 text-white {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                                <i class="fa-solid fa-house"></i>
                                <span class="ms-1">Home</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('blogList') }}"
                                class="nav-link px-0 align-middle text-white  {{ Route::currentRouteName() == 'blogList' ? 'active' : '' }}">

                                <i class="fa-solid fa-blog"></i>
                                <span class="ms-1">Blogs</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('partnerList') }}"
                                class="nav-link px-0 align-middle text-white  {{ Route::currentRouteName() == 'partnerList' ? 'active' : '' }}">

                                <i class="fa-solid fa-handshake"></i>
                                <span class="ms-1">Partners</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('categoryList') }}"
                                class="nav-link px-0 align-middle text-white  {{ Route::currentRouteName() == 'categoryList' ? 'active' : '' }}">

                                <i class="fa-solid fa-layer-group"></i>
                                <span class="ms-1">Blog Category</span>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a href="{{ route('userList') }}"
                                class="nav-link px-0 align-middle text-white  {{ Route::currentRouteName() == 'userList' ? 'active' : '' }}">

                                <i class="fa-solid fa-users"></i>
                                <span class="ms-1">Users</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('memberFormList') }}"
                                class="nav-link px-0 align-middle text-white  {{ Route::currentRouteName() == 'memberFormList' || Route::currentRouteName() == 'memberFormView' ? 'active' : '' }}">

                                <i class="fa-solid fa-list-check"></i>
                                <span class="ms-1">Member Form Inquiry</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blogCommentList') }}"
                                class="nav-link px-0 align-middle text-white  {{ Route::currentRouteName() == 'blogCommentList' ? 'active' : '' }}">

                                <i class="fa-solid fa-comment"></i>
                                <span class="ms-1">Blog Comments</span>
                            </a>
                        </li>


                    </ul>

                </div>
            </div>
            <div class="col pb-3">

                <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                    <div class="container">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-capitalize" href="#"
                                        id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        @if (Auth::check())
                                            <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
                                        @else
                                            <i class="fa-solid fa-user"></i> Guest
                                        @endif
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>

                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>
                </nav>

                @yield('content')
            </div>
        </div>
    </div>




    <!-- Include jQuery (required for Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"
        integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    @include('admin.layouts.includes.script')
    @yield('script')
</body>

</html>
