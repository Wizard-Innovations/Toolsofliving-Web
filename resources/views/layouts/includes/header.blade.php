<header>
		<div class="bg-lightgreen">
			<div class="container-fluid">
				<div class="main-header">
					<div class="logo-img" data-aos="fade-down" data-aos-duration="2000">
						<style>
							.MEBER-WRAPPER {
									display: flex;
									justify-content: end;
									align-items: baseline;
									width: unset;
									margin-left: auto;
									
								}
						</style>
						@if(Route::currentRouteName() == 'site')
							<style>
								.hideLogoOnHome {
									visibility: hidden;
								}
								.bg-lightgreen {
									background: transparent;
								}
								header {
									box-shadow: none;
								}
								.nav-links li a {
									border-right: none;
								}
								
								.stellarnav.all-Links ul {
									margin: 0;
									padding: 0;
									width: 100%;
									display: flex;
									align-items: center;
									justify-content: center;
								}
								.all-Links {
									width: 100%;
									max-width: 1150px;
									display: flex;
									align-items: center;
									justify-content: space-between;
								}
						 </style>
						@endif
						<a href="{{route('site')}}" class="hideLogoOnHome">
							<img src="{{asset('assets/images/Tools-of-Living-header.png')}}" class="img-fluid" alt="logo-image">
						</a>
					 
					</div>
					<div id="main-nav" class="stellarnav all-Links">
						<ul class="nav-links ">
							 
							
							
							
							 
							
							 
							
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
								<a href="{{route('blog')}}"  class="custom_paragraph">Blogs</a>
							</li>
					        <DIV CLASS="MEBER-WRAPPER">
							<li>
								<a href="{{route('signIn')}}"  class="custom_paragraph"
								 
								 >Sign In</a>
							</li> 
						
							<li class="becomeMemberBtn">
							    
								<a href="{{route('becomeMember')}}"   class=" custom_paragraph">Become a Member</a>
							</li>
						</DIV>  
						</ul>
					</div>
				 
				</div>
			</div>
		</div>
	</header>