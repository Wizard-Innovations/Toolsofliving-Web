<!-- Modal -->
{{-- <div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body p-0">
                <div class="d-flex align-items-center justify-content-between h-100">
                    <div class="leftCol h-100">
                        <h4>Welcome to Toolsofliving</h4>
                        <p>Everything you love about Toolsofliving®, all in one convenient, easy-to-use location, on any device!</p>

                        <h5>Benefits</h5>
                        <ul>
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Discover upcoming events, shows, and activities throughout the community.</span>
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Find, save, and share your dream homes in the HomeFinderTM.</span>
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Save your favorite local shops, restaurants, and destinations.</span>
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Use Toolsofliving to sync your favorites between Toolsofliving.com and Toolsofliving App.</span>
                            </li>

                        </ul>

                    </div>
                    <div class="rightCol h-100">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <a href="index.php">
                            <img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="logo-image" >
                        </a>
                        <h2>Sign in to get started!</h2>
                        <form >
                            <div class="mb-3">
                                <label for="emailOrUsername" class="form-label">Username or Email</label>
                                <input type="email" class="form-control signInFields" id="emailOrUsername">

                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control signInFields" id="password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me on this computer</label>
                            </div>
                            <button type="submit" class="btn btn-primary signInSubmitBtn" data-bs-dismiss="modal" aria-label="Close">Sign in</button>

                           

                            <a href="{{route('becomeMember')}}">Create new account</a>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div> --}}


<footer class="footer">
    <div class="container-fluid footerInner">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="footer-logo">
                    <a href="{{ route('site') }}">
                        <img src="{{ asset('assets/images/Tools-of-Living-footer.png') }}" class="img-fluid foot-logos"
                            alt="" style="max-width:300px;">
                    </a>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-start justify-content-between">
            <div class="col-md-3 col-lg-3 col-sm-12 footer-column">
                <div class="footer-customRow" data-aos="fade-up" data-aos-duration="2000">
                    <div class="footer-content1">

                        <div class="footer-content2">
                            <h4 class="custom_heading">About</h4>
                            <p>
                                Welcome to Tools of Living, where we believe every stage of life is an opportunity for
                                fulfillment and joy. Our mission is to empower Aging in Place for seniors to embrace
                                life to the fullest by providing them with the tools, resources, and caregiving support
                                they need to thrive.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-2 col-lg-2 col-sm-12 footer-column">
                <div class="footer-customRow" data-aos="fade-up" data-aos-duration="2000">
                    <div class="footer-content1">

                        <div class="footer-content2">
                            <h4 class="custom_heading">Quick Links</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="{{ route('site') }}" class="custom_paragraph">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('myHealth') }}" class="custom_paragraph">My Health</a>
                                </li>
                                <li>
                                    <a href="{{ route('conditions') }}" class="custom_paragraph">Conditions</a>
                                </li>
                                <li>
                                    <a href="{{ route('treatments') }}" class="custom_paragraph">Treatments</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}" class="custom_paragraph">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-2 col-lg-2 col-sm-12 footer-column">
                <div class="footer-customRow" data-aos="fade-up" data-aos-duration="2000">
                    <div class="footer-content1">

                        <div class="footer-content2">
                            <h4 class="custom_heading">More Links</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="#recentEpisodeSec" class="custom_paragraph">Recent Vlogs</a>
                                </li>
                                <li>
                                    <a href="#popularTopicsSec" class="custom_paragraph">Popular Topics</a>
                                </li>
                                <li>
                                    <a href="#collaborativePartnersSec" class="custom_paragraph">Collaborative
                                        Partners</a>
                                </li>
                                <li>
                                    <a href="#lifestyleSec" class="custom_paragraph">Lifestyle</a>
                                </li>
                                <li>
                                    <a href="#storySec" class="custom_paragraph">Stories</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 footer-column">
                <div class="footer-customRow" data-aos="fade-up" data-aos-duration="2000">
                    <div class="footer-content1">

                        <div class="footer-content2">
                            <h4 class="custom_heading">Get In Touch</h4>
                            <div class="footerNewsletterBox">
                                <input type="text" placeholder="Enter your email"
                                    class="form-control custom_paragraph">
                                <input type="submit" class="btn btn-primary custom_heading" value="Get Report">
                            </div>

                            <ul class="footerContactInfo">

                                <li>
                                    <a href="tel:+619-823-7062">
                                        <i class="fa-solid fa-phone"></i>
                                        <span>619-823-7062</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@toolsofliving.com">
                                        <i class="fa-solid fa-envelope"></i>
                                        <span>info@toolsofliving.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa-solid fa-location-pin"></i>
                                        <span>315 S. Coast Hwy 101<br>
                                            Suite U-87<br>
                                            Encinitas, CA 92024</span>
                                    </a>
                                </li>
                            </ul>

                            <ul class="footerSocialIcons">
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
            </div>

        </div>
    </div>


    <div class="bottom-footer-Bg">
        <div class="container">
            <div class="bottom-footer">
                <p>© Tools of Living, 2024. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>





@include('layouts.includes.script')
</body>

</html>
