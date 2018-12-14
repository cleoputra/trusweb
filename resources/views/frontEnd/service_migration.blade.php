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
								<p class="text-white link-nav"><a href="{{route('frontEnd.index')}}">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('frontEnd.service')}}">Service </a> <span class="lnr lnr-arrow-right"></span> <a href="{{route('frontEnd.s_migration')}}"> Software Migration</a></p>
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
									<a class="posts-title" href="#"><h3>SOFTWARE MIGRATION</h3></a>
										<img style="display: block;
												    margin-left: auto;
												    margin-right: auto;
												    width: 50%; " src="{{asset('img/migration.jpg')}}" alt="">
									</div>									
								</div>
							
								<div class="col-lg-15 col-md-15">
									<br>
									<p class="excert">
										Our Software Application Migration services help retain the know-how in your legacy applications and at the same time leverage on the performance potential of latest technologies. Whether the development toolset is at the desktop or on the Internet, TRUS is capable of developing and implementing software application migration / application porting projects. We perform migration / reengineering of applications from existing platforms to newer ones and from older legacy technologies to newer open technologies.

									</p>
									<p>
										Migration methodology can include an approach that:
										<ul class="unordered-list">
											<li>Integrates Legacy Systems and new Internet driven technologies.</li>
											<li>Migration of systems and business logic to new architectures, languages and web-based environments.</li>
											<li>Ensures systems quality and stability.</li>
											<li>Replace a legacy system, moving the data from the legacy application to the new application while preserving data integrity.</li>
											<li>Consolidate legacy systems eliminating duplication by moving data and functionality from various systems to a smaller number of systems.</li>
										</ul>
									</p>
									<p>
										TRUS, a custom software development company has web-enabled a lot of the legacy OLTP (An OLTP system is an application that modifies data and has a large number of concurrent users. Many OLTP systems are written against a DBMS) applications like replacing the middleware by Windows compliant application server and redesign the user interface with OO (.Net Apps), making the application accessible for enterprise application integration and e-business.
									</p>
									<p>
										We work on every phase of migration process i.e. current technology study and evaluation, requirement analysis, code migration, testing phase as well and deployment phase.
									</p>

									
								</div>

								
							</div>
							<div class="navigation-area">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="detials">
											<p>Prev Solution</p>
											<a href="{{route('frontEnd.s_maintain')}}"><h4>Software Maintenance</h4></a>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<div class="detials">
											<p>Next Solution</p>
											<a href="{{route('frontEnd.s_offshore')}}"><h4>Offshore Development Services</h4></a>
										</div>						
									</div>									
								</div>
							</div>
						</div>
						
				</div>	
			</section>
			<!-- End post-content Area -->
			
<?php echo View::make('includes/footer'); ?>
