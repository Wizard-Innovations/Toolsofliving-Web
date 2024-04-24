@extends('layouts.app')
@section('style')
  
<style>
    .conditionsSearchBox {
        position: relative;
        height: 50px;
        margin-top: 25px;
        border-radius: 0px;
        overflow: hidden;
        /* border: 1px solid #009144; */
        width: 60%;
    }

    .conditionsSearchBox input[type="text"] {
        height: 100%;
        border-radius: 0px;
    }

    .conditionsSearchBox input[type="submit"] {
        position: absolute;
        top: 0;
        height: 100%;
        right: 0;
        border-radius: 0px;
        padding: 0px 30px;
        background-color: #000 !important;
        border: none;
        color: #fff;
        box-shadow: inset 0 0 0 0 #009144;
        -webkit-transition: ease-out 0.4s;
        -moz-transition: ease-out 0.4s;
        transition: ease-out 0.4s;
    }

    .conditionsSearchBox input[type="submit"]:hover {
        background-color: transparent !important;
        box-shadow: inset 400px 0 0 0 #009144 !important;
        transition: .3s;
        color: #fff;
    }

    .conditions-sec-2 {
        margin-bottom:  50px;
    }

    .conditions-sec-2 .row {
        row-gap: 30px;
    }

    .conditions-sec-2 h4 {
        font-size: 24px;
        text-align: center;
        color: #009144;
        font-weight: 400;
        /* text-decoration: underline; */
        margin-bottom: 20px;
    }

    .conditions-sec-2 .blog_card {
        height: 350px;
    }

    .conditions-sec-2 .blog_card_body {

        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .conditions-sec-2 .blog_card_body h4,
    .conditions-sec-2 .blog_card_body p {
        text-align: left;
    }

    .conditions-sec-2 .blog_card_body p {
        flex: 1;
        font-size: 20px;
    }

    .conditions-sec-2-box-head {
        margin-bottom: 20px;
    }

    .conditions-sec-2-box-head h4 {
        color: #000;
        font-weight: 500;
        font-size: 28px;
    }

    .conditions-sec-2-box-head p {

        font-weight: 400;
        font-size: 18px;
        text-align: center;
    }

    .conditions-sec-2 img {
        width: 60px;
        filter: brightness(0) saturate(100%) invert(66%) sepia(84%) saturate(2002%) hue-rotate(346deg) brightness(99%) contrast(94%);
        margin-bottom: 20px;
    }

    .conditions-sec-2 .avatar .avatar-background-teal {
        background: #13c6ae;
    }

    .conditions-sec-2 .avatar.avatar-small {
        width: 35px;
        height: 35px;
        margin-right: 10px;
    }

    .conditions-sec-2 .conditions-sec-2-first-box span.box-logo-text {
        font-size: 14px;
    }

    .conditions-sec-2 .avatar .bg-image-wrapper {
        border-radius: 50%;
        display: -ms-flexbox;
        display: flex;
        height: 100%;
    }

    .conditions-sec-2 .avatar .avatar-hexagon {
        -webkit-clip-path: polygon(50% 0%, 94% 25%, 94% 75%, 50% 100%, 6% 75%, 6% 25%);
        clip-path: polygon(50% 0%, 94% 25%, 94% 75%, 50% 100%, 6% 75%, 6% 25%);
        border-radius: 0 !important;
    }

    .conditions-sec-2 .avatar .user-initial {
        color: #fff;
        font-family: "Kameron", serif;
        pointer-events: none;
        text-transform: uppercase;
    }

    .conditions-sec-2-first-box {
        display: flex;
        align-items: center;
        margin-top: 30px;
    }

    .conditions-sec-2-second-box {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-top: 20px;
    }

    .conditions-sec-2-second-box-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0px 10px;
    }

    .conditions-sec-2-second-box-inner i {
        margin-right: 5px;
        color: #333;
    }

    .conditions-sec-2-second-box-inner span {
        color: #333;
    }

    .conditions-sec-2 .my-health-testimony-quote-left {
        margin-bottom: -25px;
    }

    .conditions-sec-2 .my-health-testimony-quote {
        color: #009144;
        font-size: 120px;
        mix-blend-mode: normal;
        font-family: sans-serif;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .conditions-sec-3 {
        background-color: #009144;
        text-align: center;
        padding: 50px 20px;
    }

    .conditions-sec-3 h2 {
        text-align: center;
        color: #fff;
        font-size: 36px;
        margin-bottom: 20px;
    }

    .conditions-sec-3 a {
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

    .conditions-sec-3 a:hover {

        color: #009144;
        transition: .3s;
        box-shadow: inset 400px 0 0 0 #fff;
    }


    .conditions-sec-4{
        background: #28a7de0f;
    }
    .conditions-sec-4 .row {
        row-gap: 30px;
    }

    .conditions-sec-4 h4 {
        font-size: 24px;
        text-align: center;
        color: #009144;
        font-weight: 400;
        /* text-decoration: underline; */
        margin-bottom: 20px;
    }

    .conditions-sec-4 h4,
    .conditions-sec-4 p {
        text-align: center;
    }

    .conditions-sec-4 .seeAllBtn {
        border: 2px solid #009144;
        border-radius: 0px;
        padding: 15px 80px;
        font-size: 20px;
        /* background: #fff; */
        color: #009144;
        transition: .3s;
        font-weight: 500;
        box-shadow: inset 0 0 0 0 #009144;
        -webkit-transition: ease-out 0.4s;
        -moz-transition: ease-out 0.4s;
        transition: ease-out 0.4s;
    }

    .conditions-sec-4 .seeAllBtn:hover {
        color: #fff;
        /* background: #009144 ; */
        transition: .3s;
        box-shadow: inset 400px 0 0 0 #009144;
    }
    .conditions-sec-4-browse-by-category {
        display: flex;
        flex-wrap: wrap;
    }
    .conditions-sec-4 .blog_head {
        margin-bottom: 30px;
    }
    .conditions-sec-4 .blog_head p {
        text-align: left;
        font-size: 18px;
    }
    .conditions-sec-4 .blog_card a {
        font-size: 18px;
    }
    .conditions-sec-4 .blog_card h4 {
        text-align: left;
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

                    <h1 class="title custom_heading" data-aos="fade-up" data-aos-duration="2000">Conditions</h1>

                    <p class="custom_paragraph" data-aos="fade-up" data-aos-duration="2000">
                        Learn how to better manage your condition and share your experiences with others.
                    </p>
                    <div class="conditionsSearchBox">
                        <input type="text" placeholder="Start typing to find a condition..." class="form-control custom_paragraph">
                        <input type="submit" class="btn btn-primary custom_heading" value="Search">
                    </div>


                </div>
            </div>
        </div>

    </div>

</section>


<section class="blog-sec conditions-sec-2">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="conditions-sec-2-box-head">
                    <h4>Community Insights</h4>
                    <p>Learn new ways to manage your condition based on the lived experiences of real people like you.</p>
                </div>

                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <img src="assets/images/icons/insight.png" class="img-fluid" alt="">
                        <p class="custom_paragraph">To deal with brain fog, I write things down by hand: calendars, to-do lists, and notes help me when I’m struggling with memory loss.</p>
                        <div class="conditions-sec-2-first-box">
                            <div class="avatar avatar-small"><span title="avatar" class="bg-image-wrapper justify-content-center align-items-center avatar-background-teal avatar-hexagon"><span class="user-initial">b</span></span></div>
                            <span class="box-logo-text"><strong>BIPANN</strong> //LIVING WITH<br>
                                MULTIPLE SCLEROSIS</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="1900">
                <div class="conditions-sec-2-box-head">
                    <h4>Ask questions, get answers</h4>
                    <p>Better understand the road ahead from real people who've been in your shoes.</p>
                </div>

                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Q:
                            How do you combat guilt and shame?</h4>
                        <p class="custom_paragraph">
                            A:
                            One of the ways we reinforce our depression is through guilt and shame. These emotions are powerful and can deepen our sense....
                        </p>

                        <div class="conditions-sec-2-second-box">
                            <div class="conditions-sec-2-second-box-inner">
                                <i class="fa-regular fa-thumbs-up"></i>
                                <span>17 Helpful</span>
                            </div>
                            <div class="conditions-sec-2-second-box-inner">
                                <i class="fa-regular fa-message"></i>
                                <span>14 Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1900">
                <div class="conditions-sec-2-box-head">
                    <h4>Make Helpful Connections</h4>
                    <p>Be part of a safe community that has your back when you need it most.</p>
                </div>

                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <span class="my-health-testimony-quote my-health-testimony-quote-left">“</span>
                        <p class="custom_paragraph">
                            I could see people on PatientsLikeMe helping each other, and that was really important to me.
                        </p>
                        <div class="conditions-sec-2-first-box">

                            <span class="box-logo-text"><strong>SAMANTHA</strong> // LIVING WITH<br>
                                PULMONARY HYPERTENSION
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>




<section class="blog-sec conditions-sec-4">
    <div class="container-fluid">
        <div class="blog_head">
            <h3 class="mb-2 custom_heading">Browse by category</h3>
            <p>These are the top conditions listed by category. Don't see your condition? Use the search bar above.</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Cancer</h4>
                        <div class="conditions-sec-4-browse-by-category">
                            <a href="#" class="">Breast</a>,&nbsp;
                            <a href="#" class="">Lung</a>,&nbsp;
                            <a href="#" class="">Liver</a>,&nbsp;
                            <a href="#" class="">Testicular</a>,&nbsp;
                            <a href="#" class="">Prostate</a>,&nbsp;
                            <a href="#" class="">Pancreatic</a>,&nbsp;
                            <a href="#" class="">CLL (Chronic Lymphocytic Leukemia)</a>,&nbsp;
                            <a href="#" class="">Non-Hodgkin's Lymphoma</a>,&nbsp;
                            <a href="#" class="">Thyroid</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
         
    </div>
</section>


<div class="container-fluid conditions-sec-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Start learning together and connecting with others
                    living with your specific condition.
                </h2>
                <a href="{{route('becomeMember')}}">Become a Member</a>
            </div>
        </div>
    </div>
</div>
@endsection