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
							<p class="text-white link-nav"><a href="{{route('frontEnd.index')}}">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('frontEnd.service')}}">Service </a> <span class="lnr lnr-arrow-right"></span> <a href="{{route('frontEnd.s_customapp')}}"> Custom Application Development</a></p>
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
									<h3>CUSTOM APPLICATION DEVELOPMENT</h3></a>
										<img style="display: block;
												    margin-left: auto;
												    margin-right: auto;
												    width: 50%; " src="{{asset('img/custom.jpg')}}" alt="">
									</div>									
								</div>
							
								<div class="col-lg-15 col-md-15">
									<br>
									<p class="excert">
										The modern business is completely Internet driven and stiff online competition makes it mandatory for every business to devise its strategy. Offshore application development brings in the much needed vibrancy in your business so that you can enjoy competitive edge and push up your ROI graph.

									</p>
									<h5>
										Custom Software Development Services at TRUS
									</h5>
									
									<p>
										TRUS is strongly focused on creating customer oriented software applications. The development team minutely examines and analyses the existing IT processes of the clients. It does the gap analysis to ensure complete compatibility between existing system and custom developed application. The supplications are designed, tested and deployed to complete satisfaction of the clients. We have expertise in following:

										<ul class="unordered-list">
											<li>Custom application development</li>
											<li>Application re-engineering</li>
											<li>E-commerce application development</li>
											<li>Enterprise level software application development</li>
											<li>Customized CRM and CMS development</li>
											<li>Application extension and up-gradation to make it more scalable for future business needs</li>
											<li>Custom web based application development using technologies like ASP.net, PHP</li>
											<li>Client - Server Application Development</li>
										</ul>
									</p>

									<h5>
										Technology Expertise
									</h5>
									<p>
										We use following tools and technologies to provide above mentioned custom application services:
										<ul class="unordered-list">
											<li>Microsoft Platform : .NET Technologies, SQL Server, Sharepoint, BizTalk server, Microsoft Dynamics CRM, WCF, MVC and Silverlight</li>
											<li>Open source : PHP, MySQL, Linux and Apache</li>
											<li>Others : Oracle, Adobe Flex, iPhone and Android programming</li>
											
										</ul>
									</p>

									<h5>
										Benefits of Custom Software Application Development

									</h5>
									<p>
										The business organizations need to spruce up their workflow/ IT processes so that they can deliver more customer-centric products/services to their clients. This adds value to their business and ensures a thumping web presence. Custom software development services have their own benefits, which are mentioned below:

										<ul class="unordered-list">
											<li>Allows businesses to innovate so that targeted user group is best served.</li>
											<li>Replaces the expensive and inefficient IT processes with custom made software applications for better business results.</li>
											<li>Streamlines business practices and reduces overheads.</li>
											<li>Helps businesses to embrace the latest technology and practices so that work process becomes highly market oriented.</li>
										</ul>
									</p>

									<h5>
										TRUS Advantage
									</h5>
									<p>

										TRUS offers it client the outsourcing benefits that drastically reduce the costs of custom application development. The clients stand to gain from their business association with TRUS because of the following reasons.

										<ul class="unordered-list">
											<li>State-of-the-art ODC that provides custom applications at very competitive pricing.
											<li>Flexible hiring options that suits the project and budget needs of the clients.</li>
											<li>Increased client in software application development for better results.</li>
											<li>Round-the-clock application maintenance services.</li>
											<li>Provides latest technology so that clients gain or retain competitive edge for long time.</li>
										</ul>
									</p>

									<p>

									TRUS provides cutting-edge custom application development in Indonesia through its offshore development center so that its global clientele can reap the benefits of robust, scalable, cost-effective and customized software applications.

									</p>

									<h5>
										TRUS`s Flagship Applications

									</h5>
									<ul class="unordered-list">
										<li> Indonesian Stock Exchange Industry : Online Trading Application, Online Trading Web Application, Online Trading Mobile Application, Remote Trading System, Risk Management System, Algo Trading System</li>
										<li>Financial Softwares</li>
										<li>Banking Softwares</li>
										<li>Logistic Softwares</li>
									</ul>

									
								</div>

								
							</div>
							<div class="navigation-area">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="detials">
											<p>Prev Solutions</p>
											<a href="{{route('frontEnd.s_offshore')}}"><h4>Offshore Development Services</h4></a>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<div class="detials">
											<p>Next Solutions</p>
											<a href="{{route('frontEnd.s_web')}}"><h4>Web Developments</h4></a>
										</div>
										
									</div>									
								</div>
							</div>
						</div>
						
				</div>	
			</section>
			<!-- End post-content Area -->
			
<?php echo View::make('includes/footer'); ?>
