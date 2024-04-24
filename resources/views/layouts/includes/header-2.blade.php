<header>
    <div class="bg-lightgreen">
        <div class="container-fluid">
            <div class="main-header">
                <div class="logo-img" data-aos="fade-down" data-aos-duration="2000">
                    <a href="{{route('site')}}">
                        <img src="{{asset('assets/images/Tools-of-Living-header.png')}}" class="img-fluid" alt="logo-image">
                    </a>
                </div>
                <div id="main-nav" class="stellarnav all-Links">
                    <ul class="nav-links ms-5">
                         
                        
                        
                        
                         
                        
                         
                        
                        <li>
                            <a href="{{route('site')}}"  class="custom_paragraph">Home</a>
                        </li>
                        <li>
                            <a href="{{route('myHealth')}}"  class="custom_paragraph">My Health</a>
                        </li>
                        <li>
                            <a href="{{route('conditions')}}"  class="custom_paragraph">Conditions</a>
                        </li>
                        <li>
                            <a href="{{route('treatments')}}"  class="custom_paragraph">Treatments</a>
                        </li>
                        <li>
                            <a href="{{route('blog')}}"  class="custom_paragraph">Blog</a>
                        </li>
                 
                    
                    </ul>
                    <ul class="nav-links">
                    <li>
                            <a href="{{route('signIn')}}"  class="custom_paragraph"
                             {{-- data-bs-toggle="modal" data-bs-target="#signInModal" --}}
                             >Sign In</a>
                        </li> 
                        <li class="becomeMemberBtn">
                            <a href="{{route('becomeMember')}}"   class=" custom_paragraph">Become a Member</a>
                        </li>  
                    </ul>
                </div>
             
            </div>
        </div>
    </div>
</header>