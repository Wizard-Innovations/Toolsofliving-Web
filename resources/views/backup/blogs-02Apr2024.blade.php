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
            margin: auto;
        }

        .conditionsSearchBox input[type="text"] {
            height: 100%;
            border-radius: 0px;
        }

        .conditionsSearchBox button {
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

        .conditionsSearchBox button:hover {
            background-color: transparent !important;
            box-shadow: inset 400px 0 0 0 #009144 !important;
            transition: .3s;
            color: #fff;
        }

        .blogsPopularTags {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin: 20px 0 30px 0;
            flex-direction: row;
        }

        .blogsPopularTagsText {
            color: #000;
            font-size: 18px;
            font-weight: 500;
            margin-right: 10px;
            width: 10%;
            margin: 5px 5px 5px 0px;
        }

        .blogsPopularTagsInner {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-wrap: wrap;
            flex: 1;
        }

        .blogPopularTags input[name="category[]"] {
            display: none;
        }

        input[name="category[]"]:checked+.blogPopularTagsItem {
            background: #009144;
            color: #fff;
        }

        .blogsPopularTagsInnerItem {
            background: #fff;
            color: #000;
            font-size: 16px;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 0px;
            margin: 5px 10px 5px 0px;
            border: 1px solid #ddd;
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
            text-overflow: ellipsis;
            overflow: hidden;
            display: -webkit-box !important;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            white-space: normal;
            word-break: break-word;
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

        .blog-list-sec .blog_card {
            display: block;
            color: #000;
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

        .blog-pagination-list nav {
            display: flex;
            gap: 20px;
        }

        .blog-pagination-list nav span {
            border-radius: 0px;
            border: 1px solid #bebebe !important;
            color: #000000;
            font-weight: 500;
            background: #bebebe !important;
            padding: 10px 30px !important;
            transition: .3s;
            cursor: no-drop;
        }

        .blog-pagination-list nav a {
            border-radius: 0px;
            border: 1px solid #009144 !important;
            color: #009144;
            font-weight: 500;
            background: transparent !important;
            padding: 10px 30px !important;
            transition: .3s;
            cursor: pointer;
        }

        .blog-pagination-list nav span:hover,
        {
        border: 1px solid #949494 !important;
        color: #000000;
        background: #949494 !important;
        transition: .3s;
        }

        .blog-pagination-list nav a:hover {
            border: 1px solid #009144 !important;
            color: #fff;
            background: #009144 !important;
            transition: .3s;
        }

        #blogFilter {
            min-width: 150px;
            text-align: left;
            padding: 5px 10px;
            border: 1px solid #ddd;
            background: #ffff;
            display: flex;
            align-items: center;
            justify-content: space-between;

        }

        .blogFilter .dropdown-menu.show {
            padding: 20px;
            border-radius: 0px;
            border: 1px solid #ddd;
            min-width: 280px;
        }

        .blogFilter .dropdown-menu.show h4 {
            font-size: 18px;
            font-weight: 500;
        }

        .blogFilter .dropdown-menu.show .searchTags {
            border: 1px solid #ddd;
            border-radius: 0px;
            height: 100%;
        }

        .blogFilter .dropdown-menu.show .searchTagsBox {
            position: relative;
            height: 42px;
        }

        .blogFilter .dropdown-menu.show .searchTagsBtn {
            position: absolute;
            top: 50%;
            right: 4px;
            transform: translateY(-50%);
            background-color: #009144 !important;
            box-shadow: inset 0 0 0 0 #009144;
            -webkit-transition: ease-out 0.4s;
            -moz-transition: ease-out 0.4s;
            transition: ease-out 0.4s;
            height: 80%;
            border: none;
            padding: 0px 12px;
        }

        .blogFilter .dropdown-menu.show .searchTagsBtn:hover {
            background-color: transparent !important;
            box-shadow: inset 400px 0 0 0 #000 !important;
            transition: .3s;
            color: #fff;
        }

        .blogFilter .dropdown-menu.show .searchTagsBtn i {
            color: #fff;
        }

        .blogFilter .dropdown-menu.show li {
            margin-bottom: 10px;
        }

        .blogFilter .dropdown-menu.show li input[type='checkbox'] {
            accent-color: #009144;
        }

        #blogSortFilter {
            min-width: 150px;
            text-align: left;
            padding: 5px 10px;
            border: 1px solid #ddd;
            background: #ffff;
            display: flex;
            align-items: center;
            justify-content: space-between;

        }

        .blogSortFilter .dropdown-menu.show {
            padding: 20px;
            border-radius: 0px;
            border: 1px solid #ddd;
            min-width: 280px;
        }

        .blogSortFilter .dropdown-menu.show h4 {
            font-size: 18px;
            font-weight: 500;
        }

        .blogSortFilter .dropdown-menu.show li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            flex-direction: row;
        }

        .blogSortFilter .dropdown-menu.show li label {
            margin-left: 5px;
        }

        .blogSortFilter .dropdown-menu.show li input {
            accent-color: #009144;
        }

        .blogPopularTags {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .blogPopularTagsItem {
            border: 1px solid #ddd;
            padding: 5px 5px;
            margin: 2px;
            font-size: 14px;
            color: #4b4b4b;
            cursor: pointer;
            transition: .3s;
        }

        .blogPopularTagsItem:hover {
            color: #009144;
            transition: .3s;
        }

        .blog-author {
            font-size: 16px;
            font-weight: 500;
            text-align: right;
            color: #009144;
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















                    </div>
                </div>
            </div>

        </div>

    </section>



    <section class="blog-sec blog-list-sec">
        <div class="container">
            <div class="blog_head">
                <h3 class="mb-2 custom_heading text-center">Search Blogs</h3>

            </div>
            <form method="get" action="{{ route('blog') }}">
                @php
                    $old = request()->all();

                @endphp

                <div class="row">
                    <div class="col-md-12">
                        <div class="conditionsSearchBox">
                            <input type="text" name="search"
                                placeholder="Search for a post of a topic, author, condition, etc..."
                                value="{{ $old['search'] ?? '' }}" class="form-control custom_paragraph">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        @php
                            $oldCategories = request()->has('category') ? request('category') : [];
                        @endphp
                        <div class="blogsPopularTags">
                            @if (!empty($oldCategories))
                                <div class="blogsPopularTagsText">
                                    Popular tags
                                </div>
                                <div class="blogsPopularTagsInner">


                                    @foreach ($categories as $category)
                                        @if (in_array($category->name, $oldCategories))
                                            <a href="#"
                                                class="blogsPopularTagsInnerItem active">{{ $category->name }}</a>
                                        @endif
                                    @endforeach


                                </div>
                            @endif
                        </div>



                    </div>
                </div>
                <div class="row mb-4 justify-content-between align-items-center">
                    <div class="col-md-3">
                        <div class="d-flex align-items-center">
                            <label for="">Show:</label>
                            <div class="dropdown ms-2 blogFilter">
                                <button class="dropdown-toggle" type="button" id="blogFilter" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    All
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="blogFilter">
                                    <li>
                                        <h4>Filter By</h4>
                                        <input type="checkbox" id="blogFilterAll" >
                                        <label for="blogFilterAll">All</label>
                                    </li>
                                    <li>
                                        <h4>Tags</h4>
                                        <div class="searchTagsBox">
                                            <input type="text" placeholder="Search for tags..."
                                                class="form-control searchTags">
                                            <button class="searchTagsBtn"><i
                                                    class="fa-solid fa-magnifying-glass"></i></button>
                                        </div>

                                    </li>
                                    <li>
                                        <h4>Popular tags</h4>
                                        <div class="blogPopularTags">
                                            @foreach ($categories as $key => $category)
                                                @php
                                                    $oldCategories = request()->has('category')
                                                        ? request('category')
                                                        : [];
                                                @endphp
                                                <input type="checkbox" class="form-check" name="category[]"
                                                    value="{{ $category->name }}"
                                                    id="{{ $category->slug }}-{{ $key }}"
                                                    {{ in_array($category->name, $oldCategories) ? 'checked' : '' }}>
                                                <label for="{{ $category->slug }}-{{ $key }}"
                                                    class="blogPopularTagsItem">{{ $category->name }}</label>
                                            @endforeach


                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="d-flex align-items-center justify-content-end">
                            <label for="">Sort:</label>
                            <div class="dropdown blogSortFilter ms-2">

                                <button class="dropdown-toggle" role="button" id="blogSortFilter" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Most Recent
                                </button>

                                <ul class="dropdown-menu" aria-labelledby="blogSortFilter">
                                    <h4>Sort By</h4>
                                    <li>
                                        <input type="radio" id="blogSortRecent" name="blogSortFilter" value="recent"
                                            {{ ($old['blogSortFilter'] ?? '') == 'recent' ? 'checked' : '' }}>
                                        <label for="blogSortRecent">Most recent</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="blogSortOld" name="blogSortFilter" value="oldest"
                                            {{ ($old['blogSortFilter'] ?? '') == 'oldest' ? 'checked' : '' }}>
                                        <label for="blogSortOld">Oldest</label>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

            </form>
            <div class="row" id="blogListContainer">

                @forelse ($blogs as $blog)
                    <div class="col-12 col-md-12 col-lg-12">
                        <a href="{{ route('blogDetail', ['slug' => $blog->slug]) }}" class="blog_card d-flex"
                            data-aos="fade-up" data-aos-duration="1900">
                            <div class="row flex-row-reverse align-items-center">
                                <div class="col-md-6">
                                    <img src="{{ asset('uploads/blog-images') }}/{{ $blog->image }}"
                                        class="img-fluid p-4" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="blog_card_body">
                                        <div class="blog-date">{{ formatDate($blog->created_at) }}</div>
                                        <h4 class="custom_heading mt-2">{{ $blog->title }}</h4>
                                        <p>{{ $blog->short_desc }}</p>
                                        <div class="blog-category-list">
                                            @foreach ($blog->categories as $blogCat)
                                                <div class="blog-category">{{ $blogCat->name }}</div>
                                            @endforeach
                                        </div>

                                        <div class="blog-author">
                                            By CAROLE A. BAGGERLY
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="blog-author">
                        No blogs found
                    </div>
                @endforelse







            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-pagination-list">
                        {{-- Previous Page Link --}}
                        {{ $blogs->links() }}
                        {{-- <a href="#" class="blog-pagination-link prev-page">Prev</a>
                        <a href="#" class="blog-pagination-link next-page">Next</a> --}}
                    </div>


                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid blog-cta-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>Join over 850,000 members on the road to better health.</h2>
                    <a href="{{ route('becomeMember') }}">Become a Member</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {

            $(".blogSortFilter .dropdown-menu").click(function(e) {
                e.stopPropagation();
            });
            $(".blogFilter .dropdown-menu").click(function(e) {
                e.stopPropagation();
            });
            $('.searchTags').on('input', function() {
                var keyword = $(this).val().toLowerCase();
                $('.blogPopularTagsItem').each(function() {
                    var tag = $(this).text().toLowerCase();
                    if (tag.includes(keyword)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
            $('#blogFilterAll').change(function() {
                if ($(this).prop('checked')) {
                    // Uncheck all category checkboxes
                    $('input[name="category[]"]').prop('checked', false);
                    // Uncheck all blogSortFilter radio buttons
                    $('input[name="blogSortFilter"]').prop('checked', false);
                    $(".blogsPopularTags").html('');
                }
            });
            $("input[name='category[]']").change(function() {
                let categories = $("input[name='category[]']:checked");


                $('.blogsPopularTags').html('');
                let blogsPopularTags = ``;

                blogsPopularTags += `<div class="blogsPopularTagsText">
                                Popular tags
                            </div>
                            <div class="blogsPopularTagsInner">`;
                categories.each(function(index, element) {

                    blogsPopularTags += `<a class="blogsPopularTagsInnerItem">${element.value}</a>`;

                });
                blogsPopularTags += `</div>`;

                $('.blogsPopularTags').html(blogsPopularTags);


            });
        });
    </script>
@endsection
