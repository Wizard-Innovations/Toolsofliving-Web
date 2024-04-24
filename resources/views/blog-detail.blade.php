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

        .blogsPopularTags {
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            margin-top: 20px;
            flex-direction: column;
        }

        .blogsPopularTagsText {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            margin-right: 10px;
            width: 13%;
            margin: 5px 5px 5px 0px;
        }

        .blogsPopularTagsInner {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-wrap: wrap;
            flex: 1;
        }

        .blogsPopularTagsInnerItem {
            background: #fff;
            color: #000;
            font-size: 16px;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 0px;
            margin: 5px 10px 5px 0px;
            box-shadow: inset 0 0 0 0 #009144;
            -webkit-transition: ease-out 0.4s;
            -moz-transition: ease-out 0.4s;
            transition: ease-out 0.4s;
        }

        .blogsPopularTagsInnerItem:hover {
            background-color: transparent !important;
            box-shadow: inset 400px 0 0 0 #009144 !important;
            color: #fff;
        }


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

        .blog-category-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .blog-category {
            font-size: 16px;
            font-weight: 500;
            padding: 8px 12px;
            background-color: #fff !important;
            border: 1px solid #ddd;
            color: #686868;
            display: inline;
            margin: 20px 0;
            /* width: min-content; */
            box-shadow: inset 0 0 0 0 #009144;
            -webkit-transition: ease-out 0.4s;
            -moz-transition: ease-out 0.4s;
            transition: ease-out 0.4s;
        }

        ol li {
            text-align: left;
        }

        .blog-category:hover {
            background-color: transparent !important;
            box-shadow: inset 400px 0 0 0 #009144 !important;
            border: 1px solid #009144;
            transition: .3s;
            color: #fff;
        }

        .blog-date {
            font-size: 16px;
            font-weight: 500;
            text-align: left;
            color: #686868;
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

        .relatedBlogs .blog-date {
            font-size: 12px;
            margin: 0px;
        }

        .relatedBlogs .blog-category {
            font-size: 12px;
            padding: 3px 5px;
            margin: 0;
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
            flex: 1;
        }

        .relatedBlogs .blog_card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 10px;
        }

        .relatedBlogs .blog_head {
            margin-bottom: 0px;
        }

        .relatedBlogs .blog_head h3 {
            font-size: 26px;
        }


        .blogSocialIcons {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
            padding: 35px;
        }

        .blogSocialIcons li {
            list-style: none;
        }

        .blogSocialIcons li a {
            height: 70px;
            width: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0px;
            background: #fff !important;
            box-shadow: inset 0 0 0 0 #009144;
            color: #000;
            -webkit-transition: ease-out .4s;
            -moz-transition: ease-out .4s;
            transition: ease-out .4s;
            border: 1px solid #ddd;
        }

        .blogSocialIcons li a:hover {
            box-shadow: inset 400px 0 0 0 #009144 !important;
            color: #fff;
        }

        .blogSocialIcons li a i {
            font-size: 20px;
        }

        #commentForm {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        #commentForm textarea {
            border: 1px solid #ddd;
            border-radius: 0px;
            margin-bottom: 20px;
        }

        #commentForm .commentSubmitBtn {
            font-size: 18px;
            font-weight: 500;
            background-color: #000;
            color: #fff;
            padding: 10px 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            width: max-content;
            margin-left: auto;
            box-shadow: inset 0 0 0 0 #009144;
            -webkit-transition: ease-out .4s;
            -moz-transition: ease-out .4s;
            transition: ease-out .4s;
            border: 1px solid #ddd;
        }

        #commentForm .commentSubmitBtn:hover {
            box-shadow: inset 400px 0 0 0 #009144 !important;
            color: #fff;
        }

        .commentList {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
            width: 50%;
        }

        .commentItem {
            border-bottom: 1px solid #ddd;
            padding: 20px;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            background: #fff;
        }

        .commentItem.reply {
            width: 90%;
            margin-left: auto;
        }

        .commentItemInner {
            display: flex;
            align-items: center;
            flex-direction: column;
            flex: 1;
        }

        .commentMeta {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
        }

        .commentName {
            font-size: 18px;
            font-weight: 500;
            color: #000;
        }

        .commentDate {
            font-size: 18px;
            font-weight: 500;
            color: #000;
        }

        .commentText {
            font-size: 16px;
            font-weight: 400;
            color: #000;
            display: block;
            width: 100%;
        }

        .commentItemActions {
            width: 10%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .commentItemReplyBtn {
            padding: 10px 20px;
            color: #fff;
            background: #000;
            font-size: 16px;
            font-weight: 500;
            box-shadow: inset 0 0 0 0 #009144;
            -webkit-transition: ease-out .4s;
            -moz-transition: ease-out .4s;
            transition: ease-out .4s;
            border: 1px solid #ddd;
        }

        .commentItemReplyBtn:hover {
            box-shadow: inset 400px 0 0 0 #009144 !important;
            color: #fff;
        }

        .blog-author {
            font-size: 16px;
            font-weight: 500;
            text-align: right;
            color: #009144;
            margin-left: 10px;
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

                        <h1 class="title custom_heading" data-aos="fade-up" data-aos-duration="2000">Blogs</h1>

                        <p class="custom_paragraph" data-aos="fade-up" data-aos-duration="2000">
                            Living better starts here.
                        </p>
                        {{-- <div class="conditionsSearchBox">
                            <input type="text" placeholder="Search for a post of a topic, author, condition, etc..."
                                class="form-control custom_paragraph">
                            <input type="submit" class="btn btn-primary custom_heading" value="Search">
                        </div> --}}
                        {{-- <div class="blogsPopularTags">
                        <div class="blogsPopularTagsText">
                            Popular tags
                        </div>
                        <div class="blogsPopularTagsInner">
                            <a href="#" class="blogsPopularTagsInnerItem">Patient Experiences</a>
                            <a href="#" class="blogsPopularTagsInnerItem">Conditions</a>
                            <a href="#" class="blogsPopularTagsInnerItem">Multiple Sclerosis</a>
                            <a href="#" class="blogsPopularTagsInnerItem">ALS</a>
                            <a href="#" class="blogsPopularTagsInnerItem">Parkinson's Disease</a>
                            <a href="#" class="blogsPopularTagsInnerItem">Mental Health</a>
                            <a href="#" class="blogsPopularTagsInnerItem">Research</a>
                            <a href="#" class="blogsPopularTagsInnerItem">Fibromyalgia</a>
                            <a href="#" class="blogsPopularTagsInnerItem">Epilepsy</a>
                            <a href="#" class="blogsPopularTagsInnerItem">Rare Diseases</a>
                            <a href="#" class="blogsPopularTagsInnerItem">Organ Transplants</a>
                            <a href="#" class="blogsPopularTagsInnerItem">HIV/AIDS</a>
                        </div>
                    </div> --}}














                    </div>
                </div>
            </div>

        </div>

    </section>



    <section class="blog-sec blog-list-sec">
        <div class="container-fluid">

            <div class="row d-flex align-items-start justify-content-between">
                <div class="col-12 col-md-3 col-lg-3">

                    <div class="row relatedBlogs">
                        <div class="col-md-12">
                            <div class="blog_head">
                                <h3 class="mb-2 custom_heading">Related Blogs</h3>
                            </div>
                        </div>

                        @foreach ($related_blogs as $related_blog)
                            <div class="col-12 col-md-12 col-lg-12">
                                <a href="{{ route('blogDetail', ['slug' => $related_blog['slug']]) }}" class="blog_card"
                                    data-aos="fade-up" data-aos-duration="1900">
                                    <img src="{{ asset('uploads/blog-images') }}/{{ $related_blog['image'] }}"
                                        class="img-fluid" alt="">
                                    <div class="blog_card_body">
                                        <h4 class="custom_heading">{{ $related_blog['title'] }}</h4>
                                        <p>{{ $related_blog['short_desc'] }}</p>

                                        <div class="d-flex align-items-center justify-content-between mt-2">
                                            <div class="blog-category-list">
                                                @foreach ($related_blog->categories as $blogCat)
                                                    <div class="blog-category">{{ $blogCat->name }}</div>
                                                @endforeach
                                            </div>

                                            <div class="blog-date">{{ formatDate($related_blog['created_at']) }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach




                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-9">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                        @foreach ($blogs as $blog)
                            <img src="{{ asset('uploads/blog-images') }}/{{ $blog['image'] }}" class="img-fluid"
                                alt="">
                            <div class="blog_card_body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="blog-category-list">
                                            @foreach ($blog->categories as $blogCat)
                                                <div class="blog-category">{{ $blogCat->name }}</div>
                                            @endforeach
                                        </div>
                                        <div class="blog-author">
                                            By CAROLE A. BAGGERLY
                                        </div>
                                    </div>

                                    <div class="blog-date">{{ formatDate($blog['created_at']) }}</div>
                                </div>
                                <h4 class="custom_heading">{{ $blog['title'] }}</h4>
                                <p>
                                    {!! $blog['long_desc'] !!}
                                </p>


                            </div>
                        @endforeach
                        <div class="row d-flex align-items-center justify-content-end">
                            <div class="col-md-5  ">
                                <ul class="blogSocialIcons">
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="commentList">
                                @foreach ($comments as $comment)
                                    <div class="commentItem" data-aos="fade-up" data-aos-duration="1900">
                                        <div class="commentItemInner">
                                            <div class="commentMeta">
                                                <div class="commentName">{{$comment->user->name}}</div>
                                                <div class="commentDate">&nbsp;on {{$comment->created_at}}</div>
                                            </div>
                                            <div class="commentText">
                                                {{$comment->comment}}
                                            </div>
                                        </div>
                                         

                                    </div>
                                @endforeach

                            </div>
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible mt-3 fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{ route('postComment') }}" id="commentForm">
                                <input type="hidden" name="blogid" value="{{ $blogs[0]['id'] }}">
                                <textarea name="message" class="form-control" id="" cols="30" rows="5"></textarea>
                                @if ($errors->has('message'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('message') }}
                                    </div>
                                @endif
                                <input type="submit" class="commentSubmitBtn" value="Submit Comment">
                            </form>
                        </div>
                        <div class="col-md-4">

                        </div>
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
                    <a href="{{ route('blog') }}">
                        Find more articles</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
