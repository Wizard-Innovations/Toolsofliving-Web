@extends('layouts.app')

@section('content')
 
<section class="banner-section">
    <div class="container">
        <div class="banner-content">
            <h2 class="text-white" data-aos="fade-down" data-aos-duration="2000">Website in the Making:</h2>
            <h1 class="title" data-aos="fade-up" data-aos-duration="2000">Stay tuned for an Empowering<br> Experience to Live Life to the Fullest!</h1>
        </div>
    </div>
</section>

<section class="home-sect2">
   
    <div class="container">
        <div class="row  aboutRow" style="align-items:center">
            <div class="col-12 col-md-4 col-lg-4 mb-2">
                <div class="about-img" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="assets/images/leo-carole-baggerly-s.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-8 mb-2">
                <div class="about-content">
                    <p class="title" data-aos="fade-down" data-aos-duration="2000">Aging in Place</p>
                    <!--<p class="small-title mb-3" data-aos="fade-up" data-aos-duration="2000">Senior Living</p>-->
              
                    <p class="paragraph mb-3">When we first started GrassrootsHealth, its primary purpose was to get the word out about vitamin D–through testing, education–to help prevent cancer!</p>
                    <p class="paragraph mb-3">To this end, we worked with a Scientists’ Panel to develop the recommendations and implementation strategies–vitamin D levels need to be at least 40-60 ng/ml (100-150 nmol/L) to achieve the levels that were published for some key diseases from cancer to preterm births.</p>
                    
                    <a href="#signup_form" class="cta-btn">
                        <span class="btn-bggreen"><i class="fa-solid fa-arrow-right-long"></i></span>
                        <span>Learn more about AGES, devices, costs, information & finances</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="index-sec-6">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-7 col-lg-7">
				<div class="indexSec4-rightCol">
					<p class="black-heading mb-2">HOW TO PROTECT FROM FALLS</p>
					<p class="paragraph">In our home, Leo has recently had 2 different falls in getting into the stair lift to go down and, one downstairs getting out of the stair lift to get into a rollator. They have led to emergency hospital visits or neighbor rescues! A very high emotional and physical cost! In order to help prevent these accidents in the future, we called our San Diego Grab Bars associate, Gabriel Beddoes, to come help us design something to provide greater stability! It seemed in both cases that the missing piece was a physical item to firmly hold on to while making this move… please see the horizontal grab bar below. This is already a ‘winner’!</p>
				</div>
			</div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="sec6-imagewrap" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="assets/images/equipment.jpg" class="img-fluid" alt="">
                </div>
            
            </div>
		</div>
	</div>
</section> 
<section class="blog-sec">
    <div class="container">
        <div class="blog_head">
            <h3 class="mb-5">Collaborative Partners</h3>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">
                    <img src="assets/images/blogimg1.png" class="img-fluid mb-4" alt="" style="border-radius: 10px;">
                    <h3 class="mb-2">San Diego Grab Bars</h3>
                    <p class="paragraph">San Diego Grab Bars ensures secure bathrooms with top-quality grab bars for safety and accessibility through reliable installations.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-duration="1900">
                <div class="blog_card">
                    <img src="assets/images/blogimg3.png" class="img-fluid mb-4" alt="">
                    <h3 class="mb-2">Better Bones</h3>
                    <p class="paragraph">Elevate bone health naturally with expert advice and supplements for stronger, healthier bones.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1900">
                <div class="blog_card">
                    <img src="assets/images/blogimg2.png" class="img-fluid mb-4" alt="">
                    <h3 class="mb-2">GrassrootsHealth Nutrient Research Organization</h3>
                    <p class="paragraph">Empowering health through research and education, promoting vitamin D awareness for a stronger, vibrant community well-being.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

 
  