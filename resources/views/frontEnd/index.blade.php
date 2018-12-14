<?php echo View::make('includes/header'); ?>

			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center">
						<div class="banner-content col-lg-7 col-md-6 justify-content-center ">
							<h6 class="text-uppercase">Integrated System Solution</h6>
							<h1>
								Securities Online Trading Platform Provider			
							</h1>
							<p class="text-white">
								TRUS provides securities online trading platforms for Indonesian Stock Brokers in need, through a White Label program. 
							</p>
						</div>	
<!-- 						<div class="banner-img col-lg-5 col-md-6 align-self-end">
							<img class="img-fluid" src="img/banner-img.png" alt="">
						</div>											 -->
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			
			<!-- Start service Area -->
			<section class="service-area section-gap" id="service"  style="background-color: #E6E6FA">
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
								<h4>Mobile Application</h4>
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
								<h4>Web Application</h4>
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
								<h4>Desktop Application</h4>
								<p>
									inappropriate behavior is oftenlaug hed off as “boys will be boys,” women face higher conduct women face higher conduct.
								</p>
							</div>
						</div>
						<div class="button-group-area mt-40" style="margin: auto">
							<a href="{{route('frontEnd.service')}}" class="genric-btn primary e-large">VIEW MORE</a>
						</div>
																		
					</div>
				</div>	
			</section>
			<!-- End service Area -->
			<hr style="height: 40pt; visibility: hidden;">

			<!-- Start work-process Area -->
			<section class="work-process-area pt-250">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-7">
							<div class="title text-center">
								<h1 class="mb-10">Our Working Process</h1>
								<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game</p>
							</div>
						</div>
					</div>	
					<div class="total-work-process d-flex flex-wrap justify-content-around align-items-center">
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-funnel"></span>
							</div>
							<h4 class="caption">Detect problem</h4>
						</div>
						<div class="work-arrow">
							<img src="{{asset('img/arrow.png')}}" alt="">
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-layers"></span>
							</div>
							<h4 class="caption">Split solution into parts</h4>
						</div>
						<div class="work-arrow">
							<img src="{{asset('img/arrow.png')}}" alt="">
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-paw"></span>
							</div>
							<h4 class="caption">Analyzing method</h4>
						</div>
						<div class="work-arrow">
							<img src="{{asset('img/arrow.png')}}" alt="">
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-smile"></span>
							</div>
							<h4 class="caption">Final result comes out</h4>
						</div>											
					<div class="row">
						<div class="col"></div>
					</div>
				</div>	
			</section>
			<hr style="height: 100pt; visibility: hidden;">
			<!-- End work-process Area -->
			

			
			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest posts from our blog</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>					
					
				</div>	
			</section>
			<!-- End blog Area -->

						
<!-- Start discount-section Area -->
			<section class="discount-section-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row align-items-center justify-content-between no-gutters">
						<div class="col-lg-6 discount-left">
							<h1 class="text-white">Interesting With Our Works?  </h1>
							<p class="text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim est laborum.
							</p>
							<a href="{{route('frontEnd.contact')}}" class="header-btn">Order Service Now</a>
						</div>
						<div class="col-lg-5 discount-right">
							<h4 class="text-white">Wanna Know More</h4>
		                    <form class="booking-form" id="myForm" action="#" method="GET">
		                        <div class="row">
		                            <div class="col-lg-12 d-flex flex-column">
		                                <input name="name" placeholder="Your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" class="form-control mt-20" required="" type="text">
		                            </div>
		                            <div class="col-lg-6 d-flex flex-column">
		                                <input name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" class="form-control mt-20" required="" type="text">
		                            </div>
		                            <div class="col-lg-6 d-flex flex-column">
		                                <input name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class="form-control mt-20" required="" type="email">
		                            </div>
		                            <div class="col-lg-12 flex-column">
		                                <textarea rows="5" class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
		                            </div>

		                            <div class="col-lg-12 d-flex justify-content-end send-btn">
		                                <button class="genric-btn primary mt-20 text-uppercase ">Send</button>
		                            </div>
		                        </div>
		                    </form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End discount-section Area -->

<?php echo View::make('includes/footer'); ?>