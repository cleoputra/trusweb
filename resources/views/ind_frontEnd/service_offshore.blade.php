<?php echo View::make('includes/indHeader'); ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Blog Details Page				
							</h1>	
								<p class="text-white link-nav"><a href="{{route('id_frontEnd.index')}}">Beranda </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('id_frontEnd.service')}}">Servis </a> <span class="lnr lnr-arrow-right"></span> <a href="{{route('id_frontEnd.s_offshore')}}"> Offshore Development Services</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
									<a class="posts-title" href="#"><h3>OFFSHORE DEVELOPMENT SERVICES</h3></a>
										<img style="display: block;
												    margin-left: auto;
												    margin-right: auto;
												    width: 50%; " src="{{asset('img/offshore.jpg')}}" alt="">
									</div>									
								</div>
							
								<div class="col-lg-15 col-md-15">
									<br>
									<p class="excert">
										An offshore development center (ODC) is very crucial and helpful to clients. Indisputably, when you set up an Offshore Development Center in Indonesia with us, you receive varied benefits like high return on investment and highest quality of output. It also allows you to focus on your core competencies. Another reason for selecting TRUS as an offshore software development center is large pool of English speaking technical people for efficient and flawless communication.
									</p>
									<p>
										We help start-ups and small to mid size software companies to setup their offshore development center (ODC) to reduce their cost and increase ROI. By selecting us as an ODC, you can significantly reduce cost, as you do not have to incur expenses on infrastructure development, hiring employees or other cost involved in project development.
									</p>
									<p>

										Our ODC services include:
										<ul class="unordered-list">
											<li>Dedicated technical staff and infrastructure</li>
											<li>On time delivery</li>
											<li>Immediate response to your queries</li>
											<li>Privacy and confidentiality of work</li>
											<li>IP Protection</li>
											<li>Complete quality and process control</li>
											<li>Risk analysis systems</li>
										</ul>
									</p>
									<p>
										Our ODC staff has worked with multiple clients in different geographies and they understand that, success of project depends on mutual understanding, trust and commitment.
								</div>

								
							</div>
							<div class="navigation-area">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="detials">
											<p>Prev Solution</p>
											<a href="{{route('id_frontEnd.s_migration')}}"><h4>Software Migration</h4></a>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<div class="detials">
											<p>Next Solution</p>
											<a href="{{route('id_frontEnd.s_customapp')}}"><h4>Custom Application Development</h4></a>
										</div>							
									</div>									
								</div>
							</div>
						</div>
						
				</div>	
			</section>
			<!-- End post-content Area -->
			
<?php echo View::make('includes/indFooter'); ?>
