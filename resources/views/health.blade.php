@extends('layouts.app')

@section('style')


<style>
    .my-health-sec-1 {
        /* background: #28a7de0f; */
    }

    .my-health-sec-1 .blog_card {
        height: 100%;
    }

    .my-health-sec-1 h4 {
        font-size: 20px;
        text-align: center;
        color: #009144;
        font-weight: 400;
        margin-bottom: 20px;
    }

    .my-health-sec-1 .blog_card img {
        margin: 30px 0 0 0;
        width: 100px;
    }

    .my-health-sec-2 {
        background: #28a7de0f;
    }

    .new-line {
        white-space: pre-line;
    }

    .my-health-testimony-box {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .my-health-testimony-box p {
        text-align: center;
        font-size: 24px;
    }

    .my-health-testimony-quote {
        color: #009144;
        font-size: 120px;
        mix-blend-mode: normal;
        font-family: sans-serif;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .my-health-testimony-quote-left {
        display: flex;
        align-self: flex-start;
        justify-content: center;
    }

    .my-health-testimony-quote-right {
        display: flex;
        align-self: flex-end;
        justify-content: center;
        margin-bottom: -50px;
    }

    .my-health-sec-2-inner-box {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
    }

    .my-health-sec-2-inner-box-item {}

    .my-health-sec-2-inner-box-item:first-child {
        padding: 60px 20px;
    }

    .my-health-sec-2-inner-box-item:last-child {
        background: #009144;
        text-align: center;
        padding: 20px;
    }

    .my-health-sec-2-inner-box-item:last-child h4 {
        margin-top: 20px;
        color: #fff;
    }

    .my-health-sec-2-inner-box-item:last-child img {
        border-radius: 50%;
    }


    .my-health-sec-3 .row {
        row-gap: 30px;
    }

    .my-health-sec-3 h4 {
        font-size: 65px;
        text-align: center !important;
        color: #009144;
        font-weight: 700 !important;
        margin-bottom: 20px;
    }

    .my-health-sec-3 p {
        text-align: left;
        font-size: 18px;
    }

    .my-health-sec-3 .blog_card_body h4,
    .my-health-sec-3 .blog_card_body p {
        text-align: center;
    }

    .my-health-sec-4 {
        background-color: #009144;
        text-align: center;
        padding: 50px 20px;
    }
    .my-health-sec-4 h2 {
        text-align: center;
        color: #fff;
        font-size: 36px;
        margin-bottom: 20px;
    }
    .my-health-sec-4 a {
        display: inline-block;
        border: 2px solid #009144;
        border-radius: 0px;
        padding: 15px 80px;
        font-size: 20px; 
        background: #000;
        color: #fff; 
        transition: .3s;
        font-weight: 500;
        box-shadow: inset 0 0 0 0 #fff;
        -webkit-transition: ease-out 0.4s;
        -moz-transition: ease-out 0.4s;
        transition: ease-out 0.4s; 
    }
    .my-health-sec-4 a:hover{
        
        color: #009144;
        transition: .3s;
        box-shadow: inset 400px 0 0 0 #fff;
    }
</style>
@endsection

@section('content')
 

<section class="banner-section">
    <video width="320" height="240" autoplay muted loop class="bg-video">
        <source src="{{asset('assets/images/bg-video.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-10">
                <div class="banner-content">

                    <h1 class="title custom_heading" data-aos="fade-up" data-aos-duration="2000">My Health</h1>
                    <h2 class="text-white sub-title custom_heading" data-aos="fade-down" data-aos-duration="2000">
                        Harness the power of your health insights
                    </h2>
                    <p class="custom_paragraph" data-aos="fade-up" data-aos-duration="2000">
                        Take control of your health decision-making and priority-setting
                        by tracking symptoms, treatments, labs, and vitals in one easy-
                        to-navigate place.
                    </p>
                </div>
            </div>
        </div>

    </div>

</section>



<section class="blog-sec my-health-sec-1">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                    <img src="assets/images/icons/collaboration.png" class="img-fluid" alt="">
                    <div class="blog_card_body">
                        <h4 class="custom_heading">SHARING</h4>
                        <p class="custom_paragraph">
                            Easily share data with doctors, caregivers, and
                            loved ones for more efficient and effective
                            conversations.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="1900">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                    <img src="assets/images/icons/insight.png" class="img-fluid" alt="">
                    <div class="blog_card_body">
                        <h4 class="custom_heading">ACTIONABLE INSIGHTS</h4>
                        <p class="custom_paragraph">
                            See how your experience compares with others and
                            get suggestions to help inform a healthy path
                            forward.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1900">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                    <img src="assets/images/icons/social-care.png" class="img-fluid" alt="">
                    <div class="blog_card_body">
                        <h4 class="custom_heading">SUPPORT SYSTEM</h4>
                        <p class="custom_paragraph">
                            Engage with a vibrant community of peer
                            support that genuinely understands and is there
                            for you when you need it most.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-sec my-health-sec-2">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="my-health-sec-2-inner-box">
                    <div class="my-health-sec-2-inner-box-item">
                        <div class="my-health-testimony-box">
                            <span class="my-health-testimony-quote my-health-testimony-quote-left">“</span>
                            <p>

                                Chronicling my illness on PLM over the past 8 years has
                                served as a solid longitudinal record of the trajectory of my
                                conditions, a record arguably more significant to me than my
                                formal medical records.
                            </p>

                            <span class="my-health-testimony-quote my-health-testimony-quote-right">”</span>
                        </div>
                    </div>
                    <div class="my-health-sec-2-inner-box-item">
                        <img src="https://www.patientslikeme.com/images/logged_out/Doug_headshot.png" class="img-fluid" alt="">
                        <h4>DOUG // LIVING WITH DEPRESSION</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="blog-sec my-health-sec-3">
    <div class="container-fluid">
        <div class="blog_head">
            <h3 class="mb-2 custom_heading">Tracking health data has a measurable impact</h3>
            <p class="mb-5">A study conducted with the University of California, San Francisco (UCSF) and the Veterans Health Administration (VHA)<br> in
                the PatientsLikeMe epilepsy community tracked patients over 6 months found that:</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">59%</h4>
                        <p class="custom_paragraph">had a better understanding
                            of their condition</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3" data-aos="fade-down" data-aos-duration="1900">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">30%</h4>
                        <p class="custom_paragraph">
                            more likely to remain
                            adherent to treatment plan
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3" data-aos="fade-up" data-aos-duration="1900">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">28%</h4>
                        <p class="custom_paragraph">
                            felt more in control of their
                            condition
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3" data-aos="fade-up" data-aos-duration="1900">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">23%</h4>
                        <p class="custom_paragraph">
                            reported fewer visits to the
                            emergency room
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<div class="container-fluid my-health-sec-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Start tracking your health</h2>
                <a href="{{route('becomeMember')}}">Become a Member</a>
            </div>
        </div>
    </div>
</div>
@endsection