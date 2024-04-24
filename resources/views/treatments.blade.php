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

    .treatments-sec-2 {
        margin-bottom: 50px;
    }

    .treatments-sec-2 .row {
        row-gap: 30px;
    }

    .treatments-sec-2 h4 {
        font-size: 24px;
        text-align: center;
        color: #009144;
        font-weight: 400;
        /* text-decoration: underline; */
        margin-bottom: 20px;
    }

    .treatments-sec-2 .blog_card {
        height: 350px;
    }

    .treatments-sec-2 .blog_card_body {

        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .treatments-sec-2 .blog_card_body h4,
    .treatments-sec-2 .blog_card_body p {
        text-align: left;
    }

    .treatments-sec-2 .blog_card_body p {
        flex: 1;
        font-size: 20px;
    }

    .treatments-sec-2-col {
        display: flex;
        flex-direction: column;
    }

    .treatments-sec-2-box-head {
        margin-bottom: 20px;
        flex: 1;
    }

    .treatments-sec-2-box-head h4 {
        color: #000;
        font-weight: 500;
        font-size: 28px;
    }

    .treatments-sec-2-box-head p {

        font-weight: 400;
        font-size: 18px;
        text-align: center;
    }

    .treatments-sec-2 img {
        width: 60px;
        filter: brightness(0) saturate(100%) invert(66%) sepia(84%) saturate(2002%) hue-rotate(346deg) brightness(99%) contrast(94%);
        margin-bottom: 20px;
    }

    .treatments-sec-2 .avatar .avatar-background-teal {
        background: #13c6ae;
    }

    .treatments-sec-2 .avatar.avatar-small {
        width: 35px;
        height: 35px;
        margin-right: 10px;
    }

    .treatments-sec-2 .treatments-sec-2-first-box span.box-logo-text {
        font-size: 14px;
    }

    .treatments-sec-2 .avatar .bg-image-wrapper {
        border-radius: 50%;
        display: -ms-flexbox;
        display: flex;
        height: 100%;
    }

    .treatments-sec-2 .avatar .avatar-hexagon {
        -webkit-clip-path: polygon(50% 0%, 94% 25%, 94% 75%, 50% 100%, 6% 75%, 6% 25%);
        clip-path: polygon(50% 0%, 94% 25%, 94% 75%, 50% 100%, 6% 75%, 6% 25%);
        border-radius: 0 !important;
    }

    .treatments-sec-2 .avatar .user-initial {
        color: #fff;
        font-family: "Kameron", serif;
        pointer-events: none;
        text-transform: uppercase;
    }

    .treatments-sec-2-first-box {
        display: flex;
        align-items: center;
        margin-top: 30px;
    }

    .treatments-sec-2-second-box {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-top: 20px;
    }

    .treatments-sec-2-second-box-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0px 10px;
    }

    .treatments-sec-2-second-box-inner i {
        margin-right: 5px;
        color: #333;
    }

    .treatments-sec-2-second-box-inner span {
        color: #333;
    }

    .treatments-sec-2 .my-health-testimony-quote-left {
        margin-bottom: -25px;
    }

    .treatments-sec-2 .my-health-testimony-quote {
        color: #009144;
        font-size: 120px;
        mix-blend-mode: normal;
        font-family: sans-serif;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .treatments-sec-2-chart-1 {
        display: flex;
        flex-direction: column;
        margin-top: 20px;
    }

    .treatments-sec-2-chart-1-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .treatments-sec-2-chart-1-inner-item:nth-child(1) {
        width: 50%;
        text-align: left;
    }

    .treatments-sec-2-chart-1-inner-item:nth-child(2) {
        width: 20%;
    }

    .treatments-sec-3 {
        background-color: #009144;
        text-align: center;
        padding: 50px 20px;
    }

    .treatments-sec-3 h2 {
        text-align: center;
        color: #fff;
        font-size: 36px;
        margin-bottom: 20px;
    }

    .treatments-sec-3 a {
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

    .treatments-sec-3 a:hover {

        color: #009144;
        transition: .3s;
        box-shadow: inset 400px 0 0 0 #fff;
    }


    .treatments-sec-4 {
        background: #28a7de0f;
    }

    .treatments-sec-4 .row {
        row-gap: 30px;
    }

    .treatments-sec-4 h4 {
        font-size: 24px;
        text-align: left;
        color: #009144;
        font-weight: 400;
        /* text-decoration: underline; */
        margin-bottom: 10px;
    }

    .treatments-sec-4 h4,
    .treatments-sec-4 p {
        text-align: left;
    }

    .treatments-sec-4 p {
        font-size: 20px;
        text-align: left;
        font-weight: 400;
    }

    /* .treatments-sec-4 .blog_card .blog_card_body {
        padding-bottom: 0px;
    } */
    .treatments-sec-4 .seeAllBtn {
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

    .treatments-sec-4 .seeAllBtn:hover {
        color: #fff;
        /* background: #009144 ; */
        transition: .3s;
        box-shadow: inset 400px 0 0 0 #009144;
    }

    .treatments-sec-4-browse-by-category {
        display: flex;
        flex-wrap: wrap;
    }

    .treatments-sec-4 .blog_head {
        margin-bottom: 30px;
    }

    .treatments-sec-4 .blog_head p {
        text-align: left;
        font-size: 18px;
    }

    .treatments-sec-4 .blog_card a {
        font-size: 18px;
    }

    .treatments-sec-4 .blog_card h4 {
        text-align: left;
    }




    /* treatments-sec-5  */


    .treatments-sec-5 {
        /* background: #28a7de0f; */
    }

    .treatments-sec-5 .row {
        row-gap: 30px;
    }

    .treatments-sec-5 h4 {
        font-size: 24px;
        text-align: left;
        color: #009144;
        font-weight: 400;
        /* text-decoration: underline; */
        margin-bottom: 10px;
    }

    .treatments-sec-5 h4,
    .treatments-sec-5 p {
        text-align: left;
    }

    .treatments-sec-5 p {
        font-size: 20px;
        text-align: left;
        font-weight: 400;
    }

    .treatments-sec-5 .seeAllBtn {
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

    .treatments-sec-5 .seeAllBtn:hover {
        color: #fff;
        /* background: #009144 ; */
        transition: .3s;
        box-shadow: inset 400px 0 0 0 #009144;
    }

    .treatments-sec-5-browse-by-category {
        display: flex;
        flex-wrap: wrap;
    }

    .treatments-sec-5 .blog_head {
        margin-bottom: 30px;
    }

    .treatments-sec-5 .blog_head p {
        text-align: left;
        font-size: 18px;
    }

    .treatments-sec-5 .blog_card a {
        font-size: 18px;
    }

    .treatments-sec-5 .blog_card h4 {
        text-align: left;
    }

    #commonTreatmentTable thead {
        background: #009144;
        color: #fff;
    }

    #commonTreatmentTable tbody {
        background: #28a7de0f;
    }

    #commonTreatmentTable thead th {
        padding: 20px 20px;
    }

    #commonTreatmentTable tbody td {
        padding: 15px 20px;
    }

    .progress-bar-chart {
        width: 100%;
        height: 20px;
        background-color: #efeded;
        position: relative;
    }

    .progress-bar-slider {
        background-color: #009144;
        position: absolute;
        width: 0;
        top: 0;
        left: 0;
        height: 100%;
        animation: fillProgress 1.5s linear forwards;
    }
    .progress-bar-chart-outer {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        /* width: 50%;  */
    }
    .progress-bar-chart-outer  .progress-bar-chart {
        margin-right: 10px;
    }
    @keyframes fillProgress {
        from {
            width: 0%;
        }

        to {
            width: 80%;
            /* Desired width (e.g., 80%) */
        }
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

                    <h1 class="title custom_heading" data-aos="fade-up" data-aos-duration="2000">Treatments</h1>

                    <p class="custom_paragraph" data-aos="fade-up" data-aos-duration="2000">
                        Learn from others and find the treatment that is right for you.
                    </p>
                    <div class="conditionsSearchBox">
                        <input type="text" placeholder="Start typing to find a treatment..." class="form-control custom_paragraph">
                        <input type="submit" class="btn btn-primary custom_heading" value="Search">
                    </div>


                </div>
            </div>
        </div>

    </div>

</section>


<section class="blog-sec treatments-sec-2">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 treatments-sec-2-col" data-aos="fade-up" data-aos-duration="1900">
                <div class="treatments-sec-2-box-head">
                    <h4>Advice and experience</h4>
                    <p>Tap into the shared knowledge of our community and see what has worked for other members.</p>
                </div>

                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <span class="my-health-testimony-quote my-health-testimony-quote-left">“</span>
                        <p class="custom_paragraph">
                            If I can help somebody out as much as PLM has helped me out in the past, that adds to my purpose of wanting to do better and help other people.
                        </p>
                        <div class="treatments-sec-2-first-box">
                            <div class="avatar avatar-small"><span title="avatar" class="bg-image-wrapper justify-content-center align-items-center avatar-background-teal avatar-hexagon" style="background-image: url(https://www.patientslikeme.com/images/logged_out/treatment_member.png);    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;"></span></div>
                            <span class="box-logo-text"><strong>JOSH</strong> // LIVING MS </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 treatments-sec-2-col">
                <div class="treatments-sec-2-box-head">
                    <h4>Share and compare</h4>
                    <p>See how your experience aligns with the community and if another treatment can help.</p>
                </div>

                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">PERCEIVED EFFECTIVENESS</h4>

                        <div class="treatments-sec-2-chart-1">
                            <div class="treatments-sec-2-chart-1-inner">
                                <div class="treatments-sec-2-chart-1-inner-item">Community effectiveness</div>
                                <div class="treatments-sec-2-chart-1-inner-item">
                                    <div class="progress-bar-chart">
                                        <div class="progress-bar-slider"></div>
                                    </div>
                                </div>
                                <div class="treatments-sec-2-chart-1-inner-item">Major</div>
                            </div>
                            <div class="treatments-sec-2-chart-1-inner">
                                <div class="treatments-sec-2-chart-1-inner-item">Your evaluation</div>
                                <div class="treatments-sec-2-chart-1-inner-item">
                                    <div class="progress-bar-chart">
                                        <div class="progress-bar-slider"></div>
                                    </div>
                                </div>
                                <div class="treatments-sec-2-chart-1-inner-item">Major</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 treatments-sec-2-col" data-aos="fade-down" data-aos-duration="1900">
                <div class="treatments-sec-2-box-head">
                    <h4>Trend data</h4>
                    <p>Understand what to expect when starting a new treatment.</p>
                </div>

                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">SIDE EFFECTS</h4>

                        <canvas id="sideEffectChart" width="420" height="400" style="width: 420px; height: 400px;    margin-top: -20px;"></canvas>


                    </div>
                </div>
            </div>


        </div>

    </div>
</section>




<section class="blog-sec treatments-sec-4">
    <div class="container-fluid">
        <div class="blog_head">
            <h3 class="mb-2 custom_heading">Browse by category</h3>

        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Prescription drugs</h4>
                        <p>6959 treatments</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Over the counter drugs</h4>
                        <p>1686 treatments</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Supplements</h4>
                        <p>4668 treatments</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Physical therapy</h4>
                        <p>217 treatments</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Equipment</h4>
                        <p>1159 treatments</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-lg-4">
                <div class="blog_card" data-aos="fade-up" data-aos-duration="1900">

                    <div class="blog_card_body">
                        <h4 class="custom_heading">Procedures</h4>
                        <p>1686 treatments</p>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>



<section class="blog-sec treatments-sec-5">
    <div class="container-fluid">
        <div class="blog_head">
            <h3 class="mb-2 custom_heading">Common treatments</h3>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-scroll">
                    <table class="table" id="commonTreatmentTable">
                        <thead>
                            <tr>
                                <th>TREATMENT</th>
                                <th>PERCEIVED EFFECTIVENESS</th>
                                <th>SIDE EFFECTS</th>
                                <th>TOP SIDE EFFECT</th>
                                <th>CATEGORY</th>
                                <th>REVIEWERS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Gabapentin</td>
                                <td>
                                    <div class="progress-bar-chart-outer">
                                    <div class="progress-bar-chart" style="width: 80px;">
                                        <div class="progress-bar-slider" style="background: #009144;"></div>
                                    </div>
                                    <span>Moderate</span>
                                    </div>
                                    
                                </td>
                                <td>
                                <div class="progress-bar-chart-outer">
                                    <div class="progress-bar-chart" style="width: 80px;">
                                        <div class="progress-bar-slider" style="background: #ff4b4b;"></div>
                                    </div>
                                    <span>Moderate</span>
                                    </div>
                                </td>
                                <td>Weight gain (2.71%)</td>
                                <td>Prescription Drug</td>
                                <td>2432</td>
                            </tr>
                            <tr>
                                <td>Individual Therapy</td>
                                <td>
                                <div class="progress-bar-chart-outer">
                                    <div class="progress-bar-chart" style="width: 80px;">
                                        <div class="progress-bar-slider" style="background: #009144;"></div>
                                    </div>
                                    <span>Moderate</span>
                                    </div>
                                </td>
                                <td>
                                <div class="progress-bar-chart-outer">
                                    <div class="progress-bar-chart" style="width: 80px;">
                                        <div class="progress-bar-slider" style="background: #ff4b4b;"></div>
                                    </div>
                                    <span>Moderate</span>
                                    </div>
                                </td>
                                <td>Distress (2.15%)</td>
                                <td>Psychotherapy</td>
                                <td>1627</td>
                            </tr>
                            <tr>
                                <td>Ibuprofen</td>
                                <td>
                                <div class="progress-bar-chart-outer">
                                    <div class="progress-bar-chart" style="width: 80px;">
                                        <div class="progress-bar-slider" style="background: #009144;"></div>
                                    </div>
                                    <span>Moderate</span>
                                    </div>
                                </td>
                                <td>
                                <div class="progress-bar-chart-outer">
                                    <div class="progress-bar-chart" style="width: 80px;">
                                        <div class="progress-bar-slider" style="background: #ff4b4b;"></div>
                                    </div>
                                    <span>Moderate</span>
                                    </div>
                                </td>
                                <td>Stomach pain (1.61%)</td>
                                <td>Over the Counter Drug</td>
                                <td>621</td>
                            </tr>
                            <tr>
                                <td>Physical Therapy</td>
                                <td>
                                <div class="progress-bar-chart-outer">
                                    <div class="progress-bar-chart" style="width: 80px;">
                                        <div class="progress-bar-slider" style="background: #009144;"></div>
                                    </div>
                                    <span>Moderate</span>
                                    </div>
                                </td>
                                <td>
                                <div class="progress-bar-chart-outer">
                                    <div class="progress-bar-chart" style="width: 80px;">
                                        <div class="progress-bar-slider" style="background: #ff4b4b;"></div>
                                    </div>
                                    <span>Moderate</span>
                                    </div>
                                </td>
                                <td>Pain (4.46%)</td>
                                <td>Physical Therapy</td>
                                <td>606</td>
                            </tr>
                            <tr>
                                <td>Vitamin D</td>
                                <td>
                                <div class="progress-bar-chart-outer">
                                    <div class="progress-bar-chart" style="width: 80px;">
                                        <div class="progress-bar-slider" style="background: #009144;"></div>
                                    </div>
                                    <span>Moderate</span>
                                    </div>
                                </td>
                                <td>
                                <div class="progress-bar-chart-outer">
                                    <div class="progress-bar-chart" style="width: 80px;">
                                        <div class="progress-bar-slider" style="background: #ff4b4b;"></div>
                                    </div>
                                    <span>Moderate</span>
                                    </div>
                                </td>
                                <td>Abdominal discomfort (0.17%)</td>
                                <td>Supplement</td>
                                <td>584</td>
                            </tr>
                            <tr>
                                <td>Acupuncture</td>
                                <td>
                                <div class="progress-bar-chart-outer">
                                    <div class="progress-bar-chart" style="width: 80px;">
                                        <div class="progress-bar-slider" style="background: #009144;"></div>
                                    </div>
                                    <span>Moderate</span>
                                    </div>
                                </td>
                                <td>
                                <div class="progress-bar-chart-outer">
                                    <div class="progress-bar-chart" style="width: 80px;">
                                        <div class="progress-bar-slider" style="background: #ff4b4b;"></div>
                                    </div>
                                    <span>Moderate</span>
                                    </div>
                                </td>
                                <td>Fatigue (2.14%)</td>
                                <td>Procedures</td>
                                <td>327</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</section>


<div class="container-fluid treatments-sec-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Explore more treatment reviews and options
                    personalized to your condition!</h2>
                <a href="{{route('becomeMember')}}">Become a Member</a>
            </div>
        </div>
    </div>
</div>

 

 
@endsection


@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    $(document).ready(function() {
        $('#commonTreatmentTable').DataTable({
            searching: false, // Disable search bar
            lengthChange: false, // Disable number of entries dropdown
            paging: false, // Disable pagination
            info: false
        });
    });
</script>
<script>
    var ctx = document.getElementById('sideEffectChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['First Month', 'After First Month'],
            datasets: [{
                label: 'Severe',
                data: [3, 2], // Example data for Severe level
                backgroundColor: [
                    'rgba(255, 0, 0, 0.6)', // Red
                    'rgba(255, 192, 203, 0.6)' // Pink
                ],
                borderColor: [
                    'rgba(255, 0, 0, 1)',
                    'rgba(255, 192, 203, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                x: {
                    stacked: true, // Stack bars horizontally
                    display: true,
                    title: {
                        display: true,
                        text: 'Months'
                    }
                },
                y: {
                    beginAtZero: true, // Start y-axis from zero
                    display: true,
                    title: {
                        display: true,
                        text: 'Number of Patients'
                    }
                }
            },
            plugins: {
                annotation: {
                    annotations: [{
                            type: 'line',
                            mode: 'horizontal',
                            scaleID: 'y',
                            value: 3, // Adjust the value according to your data
                            borderColor: 'rgba(0,0,0,0.5)',
                            borderWidth: 2,
                            label: {
                                enabled: true,
                                content: 'Severe'
                            }
                        },
                        {
                            type: 'line',
                            mode: 'horizontal',
                            scaleID: 'y',
                            value: 8, // Adjust the value according to your data
                            borderColor: 'rgba(0,0,0,0.5)',
                            borderWidth: 2,
                            label: {
                                enabled: true,
                                content: 'Moderate'
                            }
                        },
                        {
                            type: 'line',
                            mode: 'horizontal',
                            scaleID: 'y',
                            value: 12, // Adjust the value according to your data
                            borderColor: 'rgba(0,0,0,0.5)',
                            borderWidth: 2,
                            label: {
                                enabled: true,
                                content: 'Mild'
                            }
                        },
                        {
                            type: 'line',
                            mode: 'horizontal',
                            scaleID: 'y',
                            value: 20, // Adjust the value according to your data
                            borderColor: 'rgba(0,0,0,0.5)',
                            borderWidth: 2,
                            label: {
                                enabled: true,
                                content: 'None'
                            }
                        }
                    ]
                },
                legend: {
                    display: true // Show legend
                }
            }
        }
    });
</script>

@endsection