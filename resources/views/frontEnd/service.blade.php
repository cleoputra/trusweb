<?php echo View::make('includes/header'); ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Services				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('frontEnd.index')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('frontEnd.index')}}"> Services</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start service Area -->
			<section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 pb-50 header-text text-center">
							<h1 class="mb-10">What we Offer to our Clients</h1>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/custom.jpg')}}" alt="">									
								</div>
								<a href="{{route('frontEnd.s_customapp')}}">
								<h4>Custom Application Development</h4>
								</a>
								<p>
									TRUS is strongly focused on creating customer oriented software applications. The development team minutely examines and analyses the existing IT processes of the clients. 
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/mobile.jpg')}}" alt="">									
								</div>
								<a href="#">
								<h4>Mobile Application</h4>
								</a>
								<p>
									inappropriate behavior is oftenlaug hed off as “boys will be boys,” women face higher conduct women face higher conduct.								
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/web.png')}}" alt="">									
								</div>
								<a href="{{route('frontEnd.s_web')}}">
								<h4>Web Application</h4>
								</a>
								<p>
									TRUS`s web development services enable organizations to reduce time to market, get closer to customers and achieve long-term, profitable growth. 
								</p>
							</div>
						</div>	
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/desktop.jpg')}}" alt="">
								</div>	
								<a href="#">								
								<h4>Desktop Application</h4>
								</a>
								<p>
									inappropriate behavior is oftenlaug hed off as “boys will be boys,” women face higher conduct women face higher conduct.
								</p>
							</div>
						</div>
					
				</div>
				<div class="container">
						<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/maintain.jpg')}}" alt="">									
								</div>
								<a href="{{route('frontEnd.s_maintain')}}">
								<h4>Software Maintenance</h4>
								</a>
								<p>
									Application maintenance is the most critical part of any business. As needs for business change constantly, application deployed to manage business also needs to accommodate business changes as well as additional features are required to be developed.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/migration.png')}}" alt="">									
								</div>
								<a href="{{route('frontEnd.s_migration')}}">
								<h4>Software Migration</h4>
								</a>
								<p>
									Our Software Application Migration services help retain the know-how in your legacy applications and at the same time leverage on the performance potential of latest technologies.							
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/offshore.jpg')}}" alt="">									
								</div>
								<a href="{{route('frontEnd.s_offshore')}}">
								<h4>Offshore Development Services</h4>
								</a>
								<p>
									An offshore development center (ODC) is very crucial and helpful to clients. Indisputably, when you set up an Offshore Development Center in Indonesia with us, you receive varied benefits like high return on investment and highest quality of output.
								</p>
							</div>
						</div>	
																			
					</div>
				</div>
			</section>
			<!-- End service Area -->

<?php echo View::make('includes/footer'); ?>
