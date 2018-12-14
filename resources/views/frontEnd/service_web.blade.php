<?php echo View::make('includes/header'); ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Blog Details Page				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('frontEnd.index')}}">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('frontEnd.service')}}">Service </a> <span class="lnr lnr-arrow-right"></span> <a href="{{route('frontEnd.s_web')}}"> Web Development</a></p>
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
									<a class="posts-title" href="#"><h3>WEB DEVELOPMENT</h3></a>
										<img style="display: block;
												    margin-left: auto;
												    margin-right: auto;
												    width: 50%; " src="{{asset('img/web.png')}}" alt="">
									</div>									
								</div>
							
								<div class="col-lg-15 col-md-15">
									<br>
									<p class="excert">
										We are very experienced custom web application development company providing high quality and cost effective web development services using latest technologies - ASP.net, PHP, Flex and Silverlight. Our web development services are tailored specifically to meet client requirements and business objectives of customers. We have experience of delivering high performance web applications with complex functionalities and have achieved commercial success.
									</p>
									<p>

										TRUS`s web development services enable organizations to reduce time to market, get closer to customers and achieve long-term, profitable growth. We can help you to become web connected by providing solutions like :	
										<ul class="unordered-list">
											<li>Internet strategy development</li>
											<li>Web enablement of legacy applications</li>
											<li>e-Business development / eCommerce development/ Web site design and development</li>
											<li>Internet and Intranet solutions</li>
											<li>Portal solutions, Community site development</li>
											<li> Specialized custom applications for Supply chain management, Network management, Business process management etc.</li>
										</ul>
									</p>
									<p>
										Over the time, our applications have provided client benefits like :
										<ul class="unordered-list">
											<li>Improving business process efficiency</li>
											<li>Increased growth in terms of top line as well as bottom line</li>
											<li>Use of legacy applications over the internet</li>
											<li>Monitoring and Improving workforce productivity</li>		
											<li>Improving ROI</li>
											<li>Better client relationship and lower client support</li>			
										</ul>
									</p>
									
									
								</div>

								
							</div>
							<div class="navigation-area">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="detials">
											<p>Prev Solution</p>
											<a href="{{route('frontEnd.s_customapp')}}"><h4>Custom Application Development</h4></a>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<div class="detials">
											<p>Next Solution</p>
											<a href="{{route('frontEnd.s_maintain')}}"><h4>Software Maintenance</h4></a>
										</div>
														
									</div>									
								</div>
							</div>
						</div>
						
				</div>	
			</section>
			<!-- End post-content Area -->
			
<?php echo View::make('includes/footer'); ?>
