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
							<p class="text-white link-nav"><a href="{{route('id_frontEnd.index')}}">Beranda </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('id_frontEnd.service')}}">Servis </a> <span class="lnr lnr-arrow-right"></span> <a href="{{route('id_frontEnd.s_maintain')}}"> Software Maintenance</a></p>
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
									<a class="posts-title" href="#"><h3>SOFTWARE MAINTENANCE</h3></a>
										<img style="display: block;
												    margin-left: auto;
												    margin-right: auto;
												    width: 50%; " src="{{asset('img/maintain.jpg')}}" alt="">
									</div>									
								</div>
							
								<div class="col-lg-15 col-md-15">
									<br>
									<p class="excert">
										Application maintenance is the most critical part of any business. As needs for business change constantly, application deployed to manage business also needs to accommodate business changes as well as additional features are required to be developed. It is also a challenge for an application outsourcing service provider to work on an existing business critical system. Over the time, we have developed process which understands importance of critical business applications, thus TRUS assists you not only in customized application development but also maintaining them which ensures smooth operations and reduces the cost of redeveloping and redeploying applications.
									</p>
									<p>

										Below mentioned are some of the industries we offer our Application Maintenance Services to:
										<ul class="unordered-list">
											<li>Online bookstores and warehouse management</li>
											<li>Supply-chain management system</li>
											<li>Hotel booking systems</li>
											<li>Product development and maintenance with various versions</li>
											<li>Customized web application maintenance</li>
											<li>Insurance system management</li>
											<li>Risk analysis systems</li>
										</ul>
									</p>
									<p>
										We provide below mentioned application maintenance services
										<ul class="unordered-list">
											<li>New features implementation</li>
											<li>Configuration Management</li>
											<li>Use of legacy applications over the internet</li>
											<li>Troubleshooting and bug fixing</li>		
											<li>Performance management</li>
											<li>Change implementation, code review and testing</li>			
										</ul>
									</p>
									
									
								</div>

								
							</div>
							<div class="navigation-area">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="detials">
											<p>Prev Solution</p>
											<a href="{{route('id_frontEnd.s_web')}}"><h4>Web Development</h4></a>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<div class="detials">
											<p>Next Solution</p>
											<a href="{{route('id_frontEnd.s_migration')}}"><h4>Software Migration</h4></a>
										</div>
									</div>									
								</div>
							</div>
						</div>
						
				</div>	
			</section>
			<!-- End post-content Area -->
			
<?php echo View::make('includes/indFooter'); ?>
