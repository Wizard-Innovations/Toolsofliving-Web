@extends('layouts.app')

@section('style')


<style>
    .blog-list-sec {
        background: #28a7de0f;
    }

    .blog-list-sec .row {
        row-gap: 30px;
    }

    .blog-list-sec h4 {
        font-size: 24px;
        text-align: left;
        color: #009144;
        font-weight: 400;
        /* text-decoration: underline; */
        margin-bottom: 10px;
    }

    .blog-list-sec h4,
    .blog-list-sec p {
        text-align: left;
    }

    .blog-list-sec p {
        font-size: 20px;
        text-align: left;
        font-weight: 400;
    }

    /* .blog-list-sec .blog_card .blog_card_body {
        padding-bottom: 0px;
    } */
    .blog-list-sec .seeAllBtn {
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

    .blog-list-sec .seeAllBtn:hover {
        color: #fff;
        /* background: #009144 ; */
        transition: .3s;
        box-shadow: inset 400px 0 0 0 #009144;
    }

    .blog-list-sec-browse-by-category {
        display: flex;
        flex-wrap: wrap;
    }

    .blog-list-sec .blog_head {
        margin-bottom: 30px;
    }

    .blog-list-sec .blog_head p {
        text-align: left;
        font-size: 18px;
    }

    .blog-list-sec .blog_card a {
        font-size: 18px;
    }

    .blog-list-sec .blog_card h4 {
        text-align: left;
    }

    .blog-list-sec .blog_card .blog_card_body {
        display: flex;
        flex-direction: column;
        padding-top: 0px;
    }





    .blog-cta-banner {
        background-color: #009144;
        text-align: center;
        padding: 50px 20px;
    }

    .blog-cta-banner h2 {
        text-align: center;
        color: #fff;
        font-size: 36px;
        margin-bottom: 20px;
    }

    .blog-cta-banner a {
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

    .blog-cta-banner a:hover {

        color: #009144;
        transition: .3s;
        box-shadow: inset 400px 0 0 0 #fff;
    }

    .blog-pagination-list {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 50px;
    }

    .blog-pagination-list-item {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 80px;
        height: 70px;
        padding: 10px 40px;
        color: #686868;
        font-size: 20px;
        font-weight: 500;
        margin: 10px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: inset 0 0 0 0 #009144;
        -webkit-transition: ease-out 0.4s;
        -moz-transition: ease-out 0.4s;
        transition: ease-out 0.4s;
    }

    .blog-pagination-list-item:hover {
        background-color: transparent !important;
        box-shadow: inset 400px 0 0 0 #009144 !important;
        border: 1px solid #009144;
        transition: .3s;
        color: #fff;
    }

    .blog-pagination-list-item:first-child,
    .blog-pagination-list-item:last-child {
        width: unset;
    }


    .relatedBlogs p {
        font-size: 14px;
        text-overflow: ellipsis;
        overflow: hidden;
        display: -webkit-box !important;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        white-space: normal;
        word-break: break-word;
    }

    .relatedBlogs h4 {
        font-size: 14px;
        text-overflow: ellipsis;
        overflow: hidden;
        display: -webkit-box !important;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        white-space: normal;
        word-break: break-word;
    }

    .relatedBlogs .blog_card {
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .relatedBlogs .blog_card .blog_card_body {
        padding: 0;
    }

    .relatedBlogs .blog_card img {
        width: 100px;
        height: 100px;
        object-fit: contain;
        margin-right: 10px;
    }

    .relatedBlogs .blog_head {
        margin-bottom: 0px;
    }

    .relatedBlogs .blog_head h3 {
        font-size: 26px;
    }
    .banner-content img {
        width: 25%;
        margin-bottom: 10px;
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
                <img src="{{asset('uploads/partner-images')}}/{{$partner->image}}" class="img-fluid d-block" alt="">
                    <h1 class="title custom_heading" data-aos="fade-up" data-aos-duration="2000">{{$partner->title}}</h1>

                    <p class="custom_paragraph" data-aos="fade-up" data-aos-duration="2000">
                        {{$partner->desc}}
                    </p>

                </div>
            </div>
        </div>

    </div>

</section>



<section class="blog-sec blog-list-sec">
    <div class="container-fluid">

        <div class="row d-flex align-items-start justify-content-between">

            <div class="col-12 col-md-9 col-lg-9">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                    <img src="{{asset('uploads/partner-images')}}/{{$partner->image}}" class="img-fluid d-block pt-5 px-4 text-left" alt="">
                    <div class="blog_card_body">

                        <h4 class="custom_heading mt-4">{{$partner->title}}</h4>
                        <p>
                            {{$partner->desc}}
                        </p>


                    </div>

                </div>

            </div>
            <div class="col-12 col-md-3 col-lg-3">

                <div class="row relatedBlogs">
                    <div class="col-md-12">
                        <div class="blog_head">
                            <h3 class="mb-2 custom_heading">More Partners</h3>
                        </div>
                    </div>

                    @foreach ($related_partners as $related_partner)
                    <div class="col-12 col-md-12 col-lg-12">
                        <a href="{{ route('partnerDetail', ['slug' => $related_partner->slug]) }}" class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                            <img src="{{asset('uploads/partner-images')}}/{{$related_partner->image}}" class="img-fluid" alt="">
                            <div class="blog_card_body">
                                <h4 class="custom_heading">{{$related_partner->title}}</h4>
                                <p>
                                    {{$related_partner->desc}}
                                </p>


                            </div>
                        </a>
                    </div>
                    @endforeach

                   

                   

                </div>
            </div>


        </div>

    </div>
</section>

<div class="container-fluid blog-cta-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Interested in more?</h2>
                <a href="blogs.php">
                    Find more articles</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection