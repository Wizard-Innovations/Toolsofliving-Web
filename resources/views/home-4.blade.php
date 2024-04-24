@extends('layouts.app')
@section('style')
    <style>
        /* @import url('https://fonts.cdnfonts.com/css/kristen-itc'); */

        @font-face {
            font-family: Kristen ITC;
            font-style: normal;
            font-weight: 400;
            src: local('Kristen ITC'),
                url("{{ asset('assets/fonts/ITCKRIST.ttf') }}") format('truetype')
        }

        .owl-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 20px;
            position: absolute;
            width: 100%;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .owl-nav button {
            /* border: 2px solid #009144 !important; */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            width: 50px;
            /* background: #fff !important; */
            color: #000 !important;
            border-radius: 50%;
            /* gap: 20px; */
            /* box-shadow: 2px 2px 5px #0000004a; */
            transition: .3s;
        }

        .owl-nav button:first-child {
            margin-left: -65px;
        }

        .owl-nav button:last-child {
            margin-right: -25px;
        }

        .owl-nav button:hover {
            background: #009144 !important;
            color: #fff !important;
            transition: .3s;
        }

        .owl-carousel .owl-item img {
            height: 275px;
            object-fit: cover;
        }

        .blog_head {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 30px;
            flex-direction: column;
        }

        .blog_head h3 {

            color: #009144;
            font-weight: 700 !important;
            margin: 0 !important;
            padding: 0px 12px;
            font-family: 'Kristen ITC', sans-serif !important;
        }

        .blog_head p {
            margin-bottom: 0px !important;
            font-size: 18px;
            font-weight: 400;
            color: #868686;
        }

        .blog_head span {
            margin-bottom: 0px !important;

            margin-right: 10px;
            font-size: 50px;
            background: rgba(0, 0, 0, 0.6);
            font-weight: 100;
            width: 3px;
            height: 60px;
        }

        #recentEpisodeSec {
            background-color: #FBDDBF30 !important;
            border-top-right-radius: 134px;
            border-bottom-left-radius: 134px;
            margin-bottom: 24px;
        }

        #popularTopicsSec {
            background-color: #D1E2E247;
            border-top-right-radius: 134px;
            border-bottom-left-radius: 134px;
            margin-bottom: 24px;
        }

        #collaborativePartnersSec {
            background-color: #FFF9F3;
            border-top-right-radius: 134px;
            border-bottom-left-radius: 134px;
            margin-bottom: 24px;
        }

        #lifestyleSec {
            background-color: #D1E2E247;
            border-top-right-radius: 134px;
            border-bottom-left-radius: 134px;
            margin-bottom: 24px;
        }

        #storySec {
            background-color: #EBC0B521;
            border-top-right-radius: 134px;
            border-bottom-left-radius: 134px;
            margin-bottom: 24px;
        }

        #home-4-banner-sec {
            /* background-image: url("{{ asset('assets/images/home-4-header-texture.png') }}");
                        background-size: contain;
                        background-position: left bottom;
                        background-repeat: no-repeat; */
            height: 800px;
            display: flex;
            align-items: center;
            background: linear-gradient(180deg, #fec900, #eb4000);

            /* background: #f5911f; */
        }

        .home-4-illustration-banner {
            margin-bottom: 80px;
        }

        #home-4-banner-sec .headerRightImage {

            background-image: url("{{ asset('assets/images/home-4-header-texture-2.png') }}");
            background-size: contain;
            background-position: left bottom;
            background-repeat: no-repeat;

        }

        #home-4-banner-sec h2 {
            color: #009144;
            font-weight: 700;
            font-size: 60px;
            font-family: 'Kristen ITC', sans-serif;
            margin-bottom: 10px;
        }

        #home-4-banner-sec .home-highlighted-text {
            color: #009144;
            font-weight: 500;
            font-size: 38px;
            font-family: 'Kristen ITC', sans-serif;
            margin-bottom: 10px;
            text-transform: capitalize;
        }

        #home-4-banner-sec h3 {
            /* color: #1c75b9; */
            color: #282828;
            font-weight: 500;
            font-size: 42px;

            /* font-family: 'Kristen ITC', sans-serif; */
        }

        #home-4-banner-sec .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #home-4-banner-sec .home-4-left {
            width: 30%;
        }

        #home-4-banner-sec .home-4-right {
            width: 50%;
        }

        .blog_head_inner {
            display: flex;
            align-items: center;
            justify-content: center;
            /* min-width: 485px; */
            flex-direction: row;
            position: relative;
        }

        .blog_head_inner_item {
            height: 2px;
            background: #868686;
            flex: 1;
            position: absolute;
            top: 50%;
            width: 100px;
            transform: translateY(-50%);
        }

        .blog_head_inner_item:first-child {
            left: -100px;

        }

        .blog_head_inner_item:last-child {
            right: -100px;
        }

        .blog_card {
            background: transparent;
            box-shadow: none;
            display: flex;
            flex-direction: column;
        }

        .blog_card:hover::after {
            display: none;
        }

        .blog_card:hover {
            box-shadow: none !important;
        }

        .blog_card .blog_card_body h4 {
            font-size: 18px;
            color: #5a5a5a;
            font-weight: 600 !important;
        }

        .blog_card .blog_card_body p {
            font-size: 16px;
            color: #868686;
            flex: 1;
        }

        .blog_card .blog_card_body {
            border: 1px solid #868686;
            border-radius: 20px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .blog_card .blog_card_image {
            height: 400px;
            padding: 50px;
            border-radius: 20px;
            margin-bottom: 20px;
        }

        .blog_card .blog_card_image img {
            width: 100%;
            object-fit: contain;
            height: 100%;
            mix-blend-mode: multiply;
            -webkit-mix-blend-mode: multiply;
            -moz-mix-blend-mode: multiply;
            -o-mix-blend-mode: multiply;
        }

        .collaborativePartnersSec .blog_card:hover .blog_card_image {
            filter: brightness(0.5);
            transition: .3s;
        }

        .collaborativePartnersSec .blog_card .blog_card_image {
            background: #fff;
            padding: 80px;
        }

        .collaborativePartnersSec .row {
            display: flex;
            align-items: stretch;
            justify-content: space-evenly;
            row-gap: 20px;
        }

        .recent_vlog_bg_color_1 {
            background-color: #F7881947;
        }

        .recent_vlog_bg_color_2 {
            background-color: #E6F5FC;
        }

        .recent_vlog_bg_color_3 {
            background-color: #E4FFBCB2;
        }

        .popular_topic_bg_color_1 {
            background-color: #EDFDCD;
        }

        .popular_topic_bg_color_2 {
            background-color: #FBC8AA59;
        }

        .popular_topic_bg_color_3 {
            background-color: #E6F5FC;
        }

        .popular_topic_bg_color_4 {
            background-color: #03A80326;
        }

        .lifestyle_bg_color_1 {
            background-color: #CEEBD2;
        }

        .lifestyle_bg_color_2 {
            background-color: #F3C0F34F;
        }

        .lifestyle_bg_color_3 {
            background-color: #E6F5FC;
        }

        .lifestyle_bg_color_4 {
            background-color: #FDDAB6;
        }

        .story_bg_color_1 {
            background-color: #559B994A;
        }

        .story_bg_color_2 {
            background-color: #CEEBD2;
        }

        .story_bg_color_3 {
            background-color: #D4310726;
        }

        .story_bg_color_4 {
            background-color: #E6F5FC;
        }

        /*  */


        .StorytellingSec .illustration-bg-1 {
            background-color: #000000;
            padding: 10px !important;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .StorytellingSec .illustration-bg-2 {
            background-color: #ffda8f;
            padding: 10px !important;
        }

        .StorytellingSec .illustration-bg-3 {
            background-color: #f6c5ac;
            padding: 10px !important;
        }

        .StorytellingSec .illustration-bg-4 {
            background-color: #fd8386;
            padding: 10px !important;
        }

        .StorytellingSec .illustration-bg-1 h2 {
            color: #fff;
            font-size: 40px;
            font-family: 'Kristen ITC', sans-serif;
        }

        .StorytellingSec .illustration-bg-1 h3 {
            color: #fff;
            font-size: 30px;
            font-family: 'Kristen ITC', sans-serif;
        }

        .StorytellingSec .illustration-bg-1 p {
            text-align: left !important;
            font-family: 'Kristen ITC', sans-serif;
        }

        .StorytellingSec .illustration-bg-2 p {
            text-align: left !important;
            font-family: 'Kristen ITC', sans-serif;
        }

        .StorytellingSec .illustration-bg-3 p {
            text-align: left !important;
            font-family: 'Kristen ITC', sans-serif;
        }

        .StorytellingSec .illustration-bg-4 p {
            text-align: left !important;
            font-family: 'Kristen ITC', sans-serif;
        }

        .StorytellingSec .illustration-bg-2 h4 {
            background-color: #ffda8f;
            color: #000;
            text-align: left;
            font-size: 18px;
            font-weight: 600;
            font-family: 'Kristen ITC', sans-serif;
        }

        .StorytellingSec .illustration-bg-3 h4 {
            background-color: #f6c5ac;
            color: #000;
            text-align: left;
            font-size: 18px;
           font-weight: 600;
            font-family: 'Kristen ITC', sans-serif;
        }

        .StorytellingSec .illustration-bg-4 h4 {
            background-color: #fd8386;
            color: #000;
            text-align: left;
            font-size: 18px;
           font-weight: 600;
            font-family: 'Kristen ITC', sans-serif;
        }

        #StorytellingSec .colmn {
            padding: 0px;
        }

        .illustration-bg-img-middle {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .illustration-bg-img img {
            height: 100% !important;
            width: 100%;
        }


        .illustration-images-bg {
            position: relative;
            background-color: #ffffff5c;
        }

        .illustration-images-bg-item {
            content: "";
            position: absolute;
            width: 300px;
            z-index: -1;
            filter: blur(2px);
        }

        .illustration-images-bg-item-1 {
            top: 0;
            left: 0;
        }

        .illustration-images-bg-item-2 {
            bottom: 0;
            left: 0;
        }

        .illustration-images-bg-item-3 {
            top: 0;
            right: 0;
        }

        .illustration-images-bg-item-4 {
            bottom: 0;
            right: 0;
        }

        .home-sec-2-container {
            background-image: url("{{ asset('assets/images/banner-illustration.png') }}");
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            position: relative;
        }

        .home-sec-2-container::before {
            position: absolute;
            content: "";
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: #0000008a;
        }

        #StorytellingSec .StorytellingSecContainer {
            padding: 20px;

            max-width: 1000px;
            margin: auto;
        }

        .StorytellingSecContainer .StorytellingSecContainerInner {
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #dee2e6 !important;
        }

        .StorytellingSecContainer .StorytellingSecContainerInner .row {
            padding: 0px;
            margin: 0px;
        }

        @media(max-width: 1024px) {
            #home-4-banner-sec h2 {
                font-size: 36px;
            }

            #home-4-banner-sec .home-highlighted-text {
                font-size: 36px;
            }

            #home-4-banner-sec h3 {
                font-size: 24px;
            }

        }

        @media(max-width: 768px) {
            .home-4-inner {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }

            #home-4-banner-sec .home-4-right,
            #home-4-banner-sec .home-4-left {
                width: 80%;
            }

            #recentEpisodeSec .row {
                gap: 20px;
            }

            .blog_head h3 {
                font-size: 24px;
            }

            .StorytellingSec .illustration-bg-1 h2 {
                font-size: 36px;
            }

            .StorytellingSec .illustration-bg-1 h3 {
                font-size: 24px;
            }


        }

        @media(max-width: 600px) {
            #home-4-banner-sec {
                height: 650px;

            }
        }

        @media(max-width: 425px) {
            #home-4-banner-sec {
                height: 550px;
            }

            #home-4-banner-sec h2 {
                font-size: 24px;
            }

            #home-4-banner-sec .home-highlighted-text {
                font-size: 24px;
            }

            #home-4-banner-sec h3 {
                font-size: 18px;
            }

            .blog_head h3 {
                font-size: 20px;
            }

            .blog_head p {
                font-size: 16px;
            }

            .blog_head_inner_item {
                width: 30px;
            }

            .blog_head_inner_item:first-child {
                left: -30px;
            }

            .blog_head_inner_item:last-child {
                right: -30px;
            }

            .blog_card .blog_card_image {
                height: 300px;
            }

            .StorytellingSec .illustration-bg-1 h2 {
                font-size: 24px;
            }

            .StorytellingSec .illustration-bg-1 h3 {
                font-size: 18px;
            }

            .StorytellingSec .illustration-bg-1 {
                padding: 20px !important;
            }

            .StorytellingSec .illustration-bg-2 {
                padding: 20px !important;
            }

            .StorytellingSec .illustration-bg-3 {
                padding: 20px !important;
            }

            .StorytellingSec .illustration-bg-4 {
                padding: 20px !important;
            }


        }

        .home-sec-2 .title {
            color: #fff;
            font-size: 34px;
            font-weight: 700 !important;
            text-transform: uppercase;
            font-family: 'Kristen ITC', sans-serif !important;
        }

        .footer-content2 h4 {
            color: #009144;
            margin-bottom: 20px;
            font-family: 'Kristen ITC', sans-serif !important;
        }
    </style>
@endsection
@section('content')
    <section class="home-4-banner-sec" id="home-4-banner-sec">
        <div class="container-fluid">
            {{-- <div class="container"> --}}
            <div class="row">
                <div class="col-md-12 d-flex align-items-center justify-content-center home-4-inner">

                    <div class="home-4-left">
                        <h2 class="text-capitalize">Tools of Living</h2>
                        
                        
                        <h3 class="">Claim the <span class="home-highlighted-text">JOY</span> of <br><span class="home-highlighted-text">YOUR</span> Health Today!</h3>
                    </div>
                    <div class="home-4-right">

                        <img src="{{ asset('assets/images/banner-illustration-middle.webp') }}" class="img-fluid"
                            alt="">

                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </div>
    </section>
    <section class="home-4-illustration-banner">

        <img src="{{ asset('assets/images/banner-illustration.png') }}" class="img-fluid" alt="">

    </section>
    <section class="blog-sec recentEpisodeSec" id="recentEpisodeSec">
        <div class="container-fluid">
            <div class="blog_head">
                <div class="blog_head_inner">
                    <div class="blog_head_inner_item"></div>
                    <h3 class="mb-5 custom_heading">Recent Vlogs</h3>
                    <div class="blog_head_inner_item"></div>
                </div>

                <p>Latest updates and insights.</p>

            </div>
            <div class="row d-flex align-items-stretch justify-content-evenly">
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="blog_card" onclick="showVideoModal('https://www.youtube.com/watch?v=nM8539vzxY0')"
                        data-aos="fade-up" data-aos-duration="1900">
                        {{-- <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A"
                            class="img-fluid" alt=""> --}}
                        <div class="blog_card_image recent_vlog_bg_color_1">



                            <img src="{{ asset('assets/images/recent_vlog_sun.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="blog_card_body">
                            <h4 class="custom_heading">
                                <h4 class="text-dark font-weight-bold">Vitamin D</h4>
                                <p>Is There Enough In Vitamin D?</p>
                                {{-- <i>Carole Baggerly</i> --}}
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3" data-aos="fade-down" data-aos-duration="1900">
                    <div class="blog_card" onclick="showVideoModal('https://www.youtube.com/watch?v=3MrBqmDhrts')"
                        data-aos="fade-up" data-aos-duration="1900">
                        {{-- <img src="https://i.ytimg.com/vi/3MrBqmDhrts/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDFmHVY9sr99ClUCAmhGILyyEWSZw"
                            class="img-fluid" alt=""> --}}
                        <div class="blog_card_image recent_vlog_bg_color_2">

                            <img src="{{ asset('assets/images/banner-illustration-1.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="blog_card_body">

                            <h4 class="custom_heading">
                                <h4 class="text-dark font-weight-bold">Vitamin D & Cancer</h4>
                                <p>Current trials and evidence.</p>
                                {{-- <i>Carole Baggerly</i> --}}
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3" data-aos="fade-up" data-aos-duration="1900">
                    <div class="blog_card" onclick="showVideoModal('https://www.youtube.com/watch?v=-kKMaoPlzaI')"
                        data-aos="fade-up" data-aos-duration="1900">
                        {{-- <img src="https://i.ytimg.com/vi/-kKMaoPlzaI/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAj7VzPYcVrtY7gvLHHMg1kbl6kVQ"
                            class="img-fluid" alt=""> --}}
                        <div class="blog_card_image recent_vlog_bg_color_3">

                            <img src="{{ asset('assets/images/banner-illustration-7.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="blog_card_body">

                            <h4 class="custom_heading">
                                <h4 class="text-dark font-weight-bold">Vitamin D Action</h4>
                                <p>It's up to US!</p>
                                {{-- <i>Carole Baggerly</i> --}}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-sec StorytellingSec" id="StorytellingSec">
        <div class="container-fluid ">
            <div class="blog_head">
                <div class="blog_head_inner">
                    <div class="blog_head_inner_item"></div>
                    <h3 class="mb-5 custom_heading">Caregiver Support

                    </h3>
                    <div class="blog_head_inner_item"></div>
                </div>

                <p>Provide emotional and social support</p>
            </div>


            <div class="StorytellingSecContainer">
                <div class="StorytellingSecContainerInner">
                    <div class="row">
                        <div class="colmn col-md-3 illustration-bg-img "><img
                                src="{{ asset('assets/images/banner-illustration-2.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="colmn col-md-6 illustration-bg-1">
                            <h2>Peace n’ Joy</h2>
                            <h3>Storytelling Festivals</h3>
                        </div>
                        <div class="colmn col-md-3 illustration-bg-img "><img
                                src="{{ asset('assets/images/banner-illustration-4.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="colmn col-md-3 illustration-bg-2">
                            <h4>Purpose</h4>
                            <p class="mt-2">Living Life to the FULLEST
                                Choose the top health focus for the group Adding JOY! </p>
                        </div>
                        <div class="colmn col-md-6 illustration-bg-img-middle  "><img
                                src="{{ asset('assets/images/banner-illustration-middle.webp') }}" class="img-fluid"
                                alt=""></div>
                        <div class="colmn col-md-3 illustration-bg-3">
                            <h4>AGING IN PLACE</h4>
                            {{-- <p class="mt-2">
                                San Diego Grab-Bars
                                Better Bones
                                GrassrootsHealth
                                (needs logos, etc.)</p> --}}
                            <p class="mt-2">Senior Strength Helping Others Prevention: Cancer, Birth Defects, Hearts,
                                Falls and more...</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="colmn col-md-3 illustration-bg-img  "><img
                                src="{{ asset('assets/images/banner-illustration-1.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="colmn col-md-6 illustration-bg-4">
                            <h4>PLAN</h4>
                            {{-- <p class="mt-2"> Get Feedback for Personal Goals
                                What did you do?
                                How did it work for you?
                                What are your next steps?</p> --}}
                            <p class="mt-2">Get Feedback for Personal Goals<br>
                                What did you do?<br>
                                How did it work for you?<br>
                                What are your next steps?</p>
                        </div>
                        <div class="colmn col-md-3 illustration-bg-img "><img
                                src="{{ asset('assets/images/banner-illustration-3.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>


                </div>





            </div>


        </div>
    </section>
    <section class="blog-sec popularTopicsSec" id="popularTopicsSec">
        <div class="container-fluid">
            <div class="blog_head">
                <div class="blog_head_inner">
                    <div class="blog_head_inner_item"></div>
                    <h3 class="mb-5 custom_heading">Popular Topics</h3>
                    <div class="blog_head_inner_item"></div>
                </div>


                <p>Trending discussions.</p>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image popular_topic_bg_color_1">




                            <img src="{{ asset('assets/images/banner-illustration-7.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="blog_card_body p-3">

                            <h4 class="custom_heading">
                                <h4 class="text-dark font-weight-bold">Insight into Public Concerns</h4>
                                <p>Understanding What Matters Most to People</p>
                                {{-- <i>Carole Baggerly</i> --}}
                            </h4>


                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image popular_topic_bg_color_2">
                            <img src="{{ asset('assets/images/popular-topics-2.png') }}" class="img-fluid"
                                alt="">

                        </div>
                        <div class="blog_card_body p-3">

                            <h4 class="custom_heading">
                                <h4 class="text-dark font-weight-bold">Understanding Heart Attacks</h4>
                                <p>What You Need to Know to Stay Heart-Healthy</p>
                                {{-- <i>Carole Baggerly</i> --}}
                            </h4>


                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image popular_topic_bg_color_3">

                            <img src="{{ asset('assets/images/banner-illustration-1.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="blog_card_body p-3">

                            <h4 class="custom_heading">
                                <h4 class="text-dark font-weight-bold">Shedding Light on Vitamin D Deficiency</h4>
                                <p>Essential Insights for Your Well-being</p>
                                {{-- <i>Carole Baggerly</i> --}}
                            </h4>


                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image popular_topic_bg_color_4">
                            <img src="{{ asset('assets/images/lifestyle-1.png') }}" class="img-fluid" alt="">
                        </div>

                        <div class="blog_card_body p-3">

                            <h4 class="custom_heading">
                                <h4 class="text-dark font-weight-bold">Navigating the Healthcare System</h4>
                                <p>Tips for Making Informed Decisions About Your Health</p>
                                {{-- <i>Carole Baggerly</i> --}}
                            </h4>


                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image popular_topic_bg_color_2">

                            <img src="{{ asset('assets/images/popular-topics-2.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="blog_card_body p-3">

                            <h4 class="custom_heading">
                                <h4 class="text-dark font-weight-bold">Managing Diabetes</h4>
                                <p>Proven Strategies for Keeping Blood Sugar Levels in Check</p>
                                {{-- <i>Carole Baggerly</i> --}}
                            </h4>


                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image popular_topic_bg_color_1">

                            <img src="{{ asset('assets/images/banner-illustration-7.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="blog_card_body p-3">

                            <h4 class="custom_heading">
                                <h4 class="text-dark font-weight-bold">Preventing Falls and Fractures</h4>
                                <p>Practical Steps to Safeguard Your Bones and Independence</p>
                                {{-- <i>Carole Baggerly</i> --}}
                            </h4>


                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <section class="blog-sec collaborativePartnersSec" id="collaborativePartnersSec">
        <div class="container-fluid">
            <div class="blog_head">
                <div class="blog_head_inner">
                    <div class="blog_head_inner_item"></div>
                    <h3 class="mb-5 custom_heading">Collaborative Partners</h3>
                    <div class="blog_head_inner_item"></div>
                </div>


                <p>Dynamic collaborations.</p>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel owl-theme">
                        @foreach ($partners as $partner)
                            <div class="item">

                                <a href="{{ route('partnerDetail', ['slug' => $partner->slug]) }}" class="blog_card"
                                    data-aos="fade-up" data-aos-duration="1900">
                                    <div class="blog_card_image">

                                        <img src="{{ asset('uploads/partner-images') }}/{{ $partner->image }}"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="blog_card_body">
                                        <h4 class="custom_heading">{{ $partner->title }}</h4>
                                        <p class="custom_paragraph">{{ $partner->desc }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="blog-sec lifestyleSec" id="lifestyleSec">
        <div class="container-fluid">
            <div class="blog_head">

                <div class="blog_head_inner">
                    <div class="blog_head_inner_item"></div>
                    <h3 class="mb-5 custom_heading">Lifestyle</h3>
                    <div class="blog_head_inner_item"></div>
                </div>
                <p>Wellness and living tips.</p>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image lifestyle_bg_color_1">




                            <img src="{{ asset('assets/images/lifestyle-1.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Life style 1</h4>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image lifestyle_bg_color_2">

                            <img src="{{ asset('assets/images/lifestyle-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Life style 2</h4>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image lifestyle_bg_color_3">

                            <img src="{{ asset('assets/images/banner-illustration-1.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Life style 3</h4>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image lifestyle_bg_color_4">

                            <img src="{{ asset('assets/images/recent_vlog_1.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Life style 4</h4>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image lifestyle_bg_color_1">

                            <img src="{{ asset('assets/images/lifestyle-1.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Life style 5</h4>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image lifestyle_bg_color_2">

                            <img src="{{ asset('assets/images/lifestyle-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Life style 6</h4>

                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>



    <section class="blog-sec storySec" id="storySec">
        <div class="container-fluid">
            <div class="blog_head">

                <div class="blog_head_inner">
                    <div class="blog_head_inner_item"></div>
                    <h3 class="mb-5 custom_heading">Stories</h3>
                    <div class="blog_head_inner_item"></div>
                </div>
                <p>Inspiring personal tales.</p>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image story_bg_color_1">




                            <img src="{{ asset('assets/images/story-1.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Story 1</h4>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image story_bg_color_2">

                            <img src="{{ asset('assets/images/story-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Story 2</h4>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image story_bg_color_3">

                            <img src="{{ asset('assets/images/banner-illustration-8.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Story 3</h4>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image story_bg_color_4">

                            <img src="{{ asset('assets/images/banner-illustration-1.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Story 4</h4>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image story_bg_color_1">

                            <img src="{{ asset('assets/images/story-1.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Story 5</h4>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card_image story_bg_color_2">
                            <img src="{{ asset('assets/images/story-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Story 6</h4>

                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="podcastVideoModal" tabindex="-1" aria-labelledby="podcastVideoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">


                <button type="button" class="close podcastVideoModalClose" onclick="closeVideoModal()">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <div class="modal-body p-0">
                    <div id="player"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid home-sec-2-container">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center flex-column text-center">
                <div class="col-md-8">
                    <div class="home-sec-2">
                        <h1 class="title custom_heading" data-aos="fade-up" data-aos-duration="2000">A newsletter that
                            respects you.</h1>
                        <h2 class="text-white sub-title custom_heading" data-aos="fade-down" data-aos-duration="2000">
                            When
                            you sign up, you’ll get distilled research on topics like fasting, depression, fitness, and
                            longevity.</h2>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsletterBox">
                        <input type="text" placeholder="Enter your email" class="form-control custom_paragraph">
                        <input type="submit" class="btn btn-primary custom_heading" value="Get Report">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script src="https://www.youtube.com/iframe_api"></script>
    <script>
        var player;


        function showVideoModal(videolink) {
            var url = new URL(videolink);

            var videoId = url.searchParams.get("v");


            $('#podcastVideoModal').modal('show');


            if (!player) {
                player = new YT.Player('player', {
                    height: '390',
                    width: '640',
                    events: {
                        'onReady': function(event) {

                            event.target.loadVideoById(videoId);
                        }
                    }
                });
            } else {

                player.loadVideoById(videoId);
            }
        }


        function closeVideoModal() {

            if (player) {
                player.stopVideo();
            }

            $('#podcastVideoModal').modal('hide');
        }


        var modal = document.getElementById('podcastVideoModal');


        var modalContent = modal.querySelector('.modal-content');


        modal.addEventListener('click', function(event) {
            if (event.target === modal) {

                closeVideoModal();
            }
        });

        $('.popularTopicsSec .owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 4
                }
            }
        })

        $('.lifestyleSec .owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 4
                }
            }
        })
        $('.storySec .owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 4
                }
            }
        })
        $('#collaborativePartnersSec .owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
@endsection
