@extends('layouts.app')
@section('style')
    <style>
        .owl-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 20px;
        }

        .owl-nav button {
            border: 2px solid #009144 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            width: 50px;
            background: #fff !important;
            color: #009144 !important;
            border-radius: 50%;
            gap: 20px;
            box-shadow: 2px 2px 5px #0000004a;
            transition: .3s;
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
        }

        .blog_head h3 {
            margin: 0 10px 0 20px !important;
            color: #009144;
        }

        .blog_head p {
            margin-bottom: 0px !important;
         
            font-size: 24px;
            font-weight: 400;
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

                        <h1 class="title custom_heading" data-aos="fade-up" data-aos-duration="2000">Empowering YOU to Live
                            Life to the Fullest!</h1>
                        {{-- <p class="custom_paragraph" data-aos="fade-up" data-aos-duration="2000">Stay tuned for an Empowering<br> Experience to Live Life to the Fullest!</p> --}}
                    </div>
                </div>
            </div>

        </div>

    </section>
    
    {{-- <section class="blog-sec">
        <div class="container-fluid">
            <div class="blog_head">
                <h3 class="mb-5 custom_heading">What experts are saying</h3>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="blog_card expertsBox" data-aos="fade-up" data-aos-duration="1900"> 
                    <div class="blog_card_body">
                    <p class="custom_paragraph">“Rhonda displays an uncannily prescient knowledge of each subject area she attacks. If she decides to dig into a subject, she consumes it, and her podcasts are lucid, articulate, thoughtful, and informative.”</p>
                        <div class="expertsProfileBox">
                            <img src="https://www.foundmyfitness.com/packs/media/redesign2019/assets/images/testimonial-2-806afbd09f72cb2d327b9f1e264a7bed.jpg" class="img-fluid" alt="">
                            <div class="expertsProfileBoxInner">
                                <h4 class="custom_heading">Jed W Fahey, Sc.D.</h4>
                                <p class="custom_paragraph">Director of the Chemoprotection Center at Johns Hopkins</p>
                            </div>
                        </div>
                    </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="1900">
                    <div class="blog_card expertsBox">
                         <div class="blog_card_body">
                         <p class="custom_paragraph">“Rhonda displays an uncannily prescient knowledge of each subject area she attacks. If she decides to dig into a subject, she consumes it, and her podcasts are lucid, articulate, thoughtful, and informative.”</p>
                        <div class="expertsProfileBox">
                            <img src="https://www.foundmyfitness.com/packs/media/redesign2019/assets/images/testimonial-2-806afbd09f72cb2d327b9f1e264a7bed.jpg" class="img-fluid" alt="">
                            <div class="expertsProfileBoxInner">
                                <h4 class="custom_heading">Jed W Fahey, Sc.D.</h4>
                                <p class="custom_paragraph">Director of the Chemoprotection Center at Johns Hopkins</p>
                            </div>
                        </div>
                         </div>
                         
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1900">
                    <div class="blog_card expertsBox">
                        
                    <div class="blog_card_body">
                    <p class="custom_paragraph">“Rhonda displays an uncannily prescient knowledge of each subject area she attacks. If she decides to dig into a subject, she consumes it, and her podcasts are lucid, articulate, thoughtful, and informative.”</p>
                        <div class="expertsProfileBox">
                            <img src="https://www.foundmyfitness.com/packs/media/redesign2019/assets/images/testimonial-2-806afbd09f72cb2d327b9f1e264a7bed.jpg" class="img-fluid" alt="">
                            <div class="expertsProfileBoxInner">
                                <h4 class="custom_heading">Jed W Fahey, Sc.D.</h4>
                                <p class="custom_paragraph">Director of the Chemoprotection Center at Johns Hopkins</p>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="blog-sec recentEpisodeSec" id="recentEpisodeSec">
        <div class="container-fluid">
            <div class="blog_head">
                <h3 class="mb-5 custom_heading">Recent Vlogs</h3>
                <span></span>
                <p>Latest updates and insights.</p>

            </div>
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="blog_card" onclick="showVideoModal('https://www.youtube.com/watch?v=nM8539vzxY0')"
                        data-aos="fade-up" data-aos-duration="1900">
                        <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A"
                            class="img-fluid" alt="">
                        <div class="blog_card_body">
                            <h4 class="custom_heading">Vitamin D, Is There Enough In Vitamin D?</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="1900">
                    <div class="blog_card" onclick="showVideoModal('https://www.youtube.com/watch?v=3MrBqmDhrts')"
                        data-aos="fade-up" data-aos-duration="1900">
                        <img src="https://i.ytimg.com/vi/3MrBqmDhrts/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDFmHVY9sr99ClUCAmhGILyyEWSZw"
                            class="img-fluid" alt="">
                        <div class="blog_card_body">
                            <h4 class="custom_heading">Vitamin D & Cancer -- current trials and evidence
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1900">
                    <div class="blog_card" onclick="showVideoModal('https://www.youtube.com/watch?v=-kKMaoPlzaI')"
                        data-aos="fade-up" data-aos-duration="1900">
                        <img src="https://i.ytimg.com/vi/-kKMaoPlzaI/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAj7VzPYcVrtY7gvLHHMg1kbl6kVQ"
                            class="img-fluid" alt="">
                        <div class="blog_card_body">
                            <h4 class="custom_heading">It's up to US! with</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-sec popularTopicsSec" id="popularTopicsSec">
        <div class="container-fluid">
            <div class="blog_head">
                <h3 class="mb-5 custom_heading">Popular Topics</h3>
                <span></span>
                <p>Trending discussions.</p>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/popular-topics/concerned.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">What are people most concerned about?</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/popular-topics/heart-attack.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Get to know more about Heart Attacks</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/popular-topics/vitamin-d.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Vitamin D Deficiency</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/popular-topics/healthcare.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Health care system itself</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/popular-topics/diabetes.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">How to control Diabetes</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/popular-topics/falling.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">How to reduce Falling/Breaking Bones</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>


            </div>
            {{-- <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                       <img src="{{asset('assets/images/popular-topics/vitamin-c.jpg')}}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                        <h4 class="custom_heading">Vitamin C</h4>
                        <p class="custom_paragraph">Vitamin C is an essential nutrient, widely recognized for its antioxidant properties and its roles in many critical processes and pathways.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="1900">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                       <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Omega-3 fatty acids</h4>
                            <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                           <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                            <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Zinc</h4>
                            <p class="custom_paragraph">
                                Zinc is an essential nutrient that influences growth and development and plays critical roles in immune function, protein synthesis, wound healing, DNA synthesis, and cell division.
                            </p>
                            </div>
                        </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                       <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                        <h4 class="custom_heading">Brain-derived neurotrophic factor (BDNF)</h4>
                        <p class="custom_paragraph">
                        BDNF is a growth factor known for its influence on neuronal health and for its role in mediating the beneficial cognitive effects associated with exercise.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="1900">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                       <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Sauna</h4>
                            <p class="custom_paragraph">
                            Sauna use exposes the body to extreme heat and, in turn, induces protective responses that improve health and may increase healthspan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                           <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                            <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Red light therapy (photobiomodulation)</h4>
                            <p class="custom_paragraph">
                            Photobiomodulation is a non-invasive, light-based therapeutic technique that stimulates biological processes within cells and tissues, with potential applications in medicine, dentistry, cosmetic procedures, and scientific research.
                            </p>
                            </div>
                        </div>
                </div>
            </div> --}}
            {{-- <div class="row mt-5">
                <div class="col-md-12 d-flex align-items-center justify-content-center">
                    <a href="#" class="seeAllBtn custom_heading">See All</a>
                </div>
            </div> --}}
        </div>
    </section>

    <section class="blog-sec collaborativePartnersSec" id="collaborativePartnersSec">
        <div class="container-fluid">
            <div class="blog_head">
                <h3 class="mb-5 custom_heading">Collaborative Partners</h3>
                <span></span>
                <p>Dynamic collaborations.</p>
            </div>
            <div class="row">

                @foreach ($partners as $partner)
                    <div class="col-12 col-md-4 col-lg-4">
                        <a href="{{ route('partnerDetail', ['slug' => $partner->slug]) }}" class="blog_card"
                            data-aos="fade-up" data-aos-duration="1900">
                            <img src="{{ asset('uploads/partner-images') }}/{{ $partner->image }}" class="img-fluid"
                                alt="">
                            <div class="blog_card_body">
                                <h4 class="custom_heading">{{ $partner->title }}</h4>
                                <p class="custom_paragraph">{{ $partner->desc }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    </section>


    <section class="blog-sec lifestyleSec" id="lifestyleSec">
        <div class="container-fluid">
            <div class="blog_head">
                <h3 class="mb-5 custom_heading">Lifestyle</h3>
                <span></span>
                <p>Wellness and living tips.</p>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/lifestyle/1.jpg') }}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Life style 1</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/lifestyle/2.jpg') }}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Life style 2</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/lifestyle/3.jpg') }}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Life style 3</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/lifestyle/4.jpg') }}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Life style 4</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/lifestyle/5.jpg') }}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Life style 5</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/lifestyle/3.jpg') }}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Life style 6</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>


            </div>
            {{-- <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                       <img src="{{asset('assets/images/popular-topics/vitamin-c.jpg')}}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                        <h4 class="custom_heading">Vitamin C</h4>
                        <p class="custom_paragraph">Vitamin C is an essential nutrient, widely recognized for its antioxidant properties and its roles in many critical processes and pathways.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="1900">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                       <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Omega-3 fatty acids</h4>
                            <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                           <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                            <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Zinc</h4>
                            <p class="custom_paragraph">
                                Zinc is an essential nutrient that influences growth and development and plays critical roles in immune function, protein synthesis, wound healing, DNA synthesis, and cell division.
                            </p>
                            </div>
                        </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                       <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                        <h4 class="custom_heading">Brain-derived neurotrophic factor (BDNF)</h4>
                        <p class="custom_paragraph">
                        BDNF is a growth factor known for its influence on neuronal health and for its role in mediating the beneficial cognitive effects associated with exercise.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="1900">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                       <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Sauna</h4>
                            <p class="custom_paragraph">
                            Sauna use exposes the body to extreme heat and, in turn, induces protective responses that improve health and may increase healthspan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                           <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                            <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Red light therapy (photobiomodulation)</h4>
                            <p class="custom_paragraph">
                            Photobiomodulation is a non-invasive, light-based therapeutic technique that stimulates biological processes within cells and tissues, with potential applications in medicine, dentistry, cosmetic procedures, and scientific research.
                            </p>
                            </div>
                        </div>
                </div>
            </div> --}}
            {{-- <div class="row mt-5">
                <div class="col-md-12 d-flex align-items-center justify-content-center">
                    <a href="#" class="seeAllBtn custom_heading">See All</a>
                </div>
            </div> --}}
        </div>
    </section>



    <section class="blog-sec storySec" id="storySec">
        <div class="container-fluid">
            <div class="blog_head">
                <h3 class="mb-5 custom_heading">Stories</h3>
                <span></span>
                <p>Inspiring personal tales.</p>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/story/4.jpg') }}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Story 1</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/story/2.jpg') }}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Story 2</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/story/3.jpg') }}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Story 3</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/story/4.jpg') }}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Story 4</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/story/2.jpg') }}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Story 5</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                        <img src="{{ asset('assets/images/story/1.jpg') }}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Story 6</h4>
                            {{-- <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p> --}}
                        </div>
                    </div>
                </div>


            </div>
            {{-- <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                       <img src="{{asset('assets/images/popular-topics/vitamin-c.jpg')}}" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                        <h4 class="custom_heading">Vitamin C</h4>
                        <p class="custom_paragraph">Vitamin C is an essential nutrient, widely recognized for its antioxidant properties and its roles in many critical processes and pathways.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="1900">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                       <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Omega-3 fatty acids</h4>
                            <p class="custom_paragraph">
                            Omega-3 fatty acids play critical roles in human health and may be beneficial in ameliorating symptoms associated with chronic health conditions and in combating aging-related diseases.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                           <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                            <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Zinc</h4>
                            <p class="custom_paragraph">
                                Zinc is an essential nutrient that influences growth and development and plays critical roles in immune function, protein synthesis, wound healing, DNA synthesis, and cell division.
                            </p>
                            </div>
                        </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                       <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                        <h4 class="custom_heading">Brain-derived neurotrophic factor (BDNF)</h4>
                        <p class="custom_paragraph">
                        BDNF is a growth factor known for its influence on neuronal health and for its role in mediating the beneficial cognitive effects associated with exercise.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="1900">
                    <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                       <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                        <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Sauna</h4>
                            <p class="custom_paragraph">
                            Sauna use exposes the body to extreme heat and, in turn, induces protective responses that improve health and may increase healthspan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1900">
                        <div class="blog_card" data-aos="fade-up" data-aos-duration="1900"> 
                           <img src="https://i.ytimg.com/vi/nM8539vzxY0/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAtQ7OJXQRYumjr5t4fhLnOw11W8A" class="img-fluid" alt="">
                            <div class="blog_card_body p-3">
                            <h4 class="custom_heading">Red light therapy (photobiomodulation)</h4>
                            <p class="custom_paragraph">
                            Photobiomodulation is a non-invasive, light-based therapeutic technique that stimulates biological processes within cells and tissues, with potential applications in medicine, dentistry, cosmetic procedures, and scientific research.
                            </p>
                            </div>
                        </div>
                </div>
            </div> --}}
            {{-- <div class="row mt-5">
                <div class="col-md-12 d-flex align-items-center justify-content-center">
                    <a href="#" class="seeAllBtn custom_heading">See All</a>
                </div>
            </div> --}}
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
                        <h2 class="text-white sub-title custom_heading" data-aos="fade-down" data-aos-duration="2000">When
                            you sign up, you’ll get distilled research on topics like fasting, depression, fitness, and
                            longevity.</h2>
                        <!-- <p class="custom_paragraph" data-aos="fade-up" data-aos-duration="2000">Plus, you’ll also get our exclusive report: “Sauna Use: Implications for Aging and the Brain.”</p> -->
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
        // Declare a global variable to hold the player instance
        var player;

        // Function to open the modal and load YouTube video
        function showVideoModal(videolink) {
            var url = new URL(videolink);
            // Get the value of the 'v' parameter from the URL
            var videoId = url.searchParams.get("v");

            // Display the modal
            $('#podcastVideoModal').modal('show');

            // If player doesn't exist, create a new one
            if (!player) {
                player = new YT.Player('player', {
                    height: '390',
                    width: '640',
                    events: {
                        'onReady': function(event) {
                            // Load the video into the player
                            event.target.loadVideoById(videoId);
                        }
                    }
                });
            } else {
                // If player exists, load the new video into it
                player.loadVideoById(videoId);
            }
        }

        // Function to stop the video and close the modal
        function closeVideoModal() {
            // Stop the video
            if (player) {
                player.stopVideo();
            }
            // Hide the modal
            $('#podcastVideoModal').modal('hide');
        }

        // Get the modal element
        var modal = document.getElementById('podcastVideoModal');

        // Get the modal content
        var modalContent = modal.querySelector('.modal-content');

        // Add event listener for clicks outside the modal
        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                // Click occurred outside the modal content, close the modal
                closeVideoModal();
            }
        });

        $('.popularTopicsSec .owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })

        $('.lifestyleSec .owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
        $('.storySec .owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
        storySec
    </script>
@endsection
