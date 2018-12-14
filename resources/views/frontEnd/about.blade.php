<?php echo View::make('includes/header'); ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('frontEnd.index')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('frontEnd.about')}}"> About Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap relative">			
				<div class="container">
					<div class="row align-items-center justify-content-start">
						<div class="col-lg-6 no-padding home-about-right">
							<h1>
								We provides securities online  <br>
								trading platforms for Indonesia's Stock Brockers
							</h1>
							<p>
								PT Tri Ultima Solusindo (TRUS) is a Jakarta based software outsourcing company that focuses on developing Cost-Effective but Highly Performance Softwares, as well as Total Solution to serve all of your Company`s IT needs. 
								Our flagship softwares are Online Stock Monitoring and Trading Systems. <br><br>TRUS aims to make our Internet Based Stock Monitoring and Online Trading Systems broadly accessible to Securities Companies targeting for retail investor based capital market in Indonesia.
								Increase Your Company Competitiveness with our Cutting Edge Technology Solutions
							</p>
							<div class="row no-gutters">
								<div class="single-services col">
									<span class="lnr lnr-diamond"></span>
									<a href="#">
										<h4>Expert Services</h4>
									</a>
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology.
									</p>
								</div>
								<div class="single-services col">
									<span class="lnr lnr-phone"></span>
									<a href="#">
										<h4>Great Support</h4>
									</a>
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology.
									</p>
								</div>								
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->

			<!-- Start work-process Area -->
			<div class="whole-wrap" style="background-color: #E6E6FA ">
				<div class="container">
					<div class="section-top-border">
								<h3 class="mb-30">Our Vision</h3>
								<div class="row">
									<div class="col-md-3">
										<img src="{{asset('img/vision.jpg')}}" alt="" class="img-fluid">
									</div>
									<div class="col-md-9 mt-sm-30 typo-sec">
								<div class="">
									<ul class="unordered-list">
										<li>TRUS was established in 2010, in response to the rule change of the BEI (Indonesian Stock Exchange) to mandatory urge all stock brokers in Indonesia to be trading online, followed by the BAPEPAM(Securities and Exchange Commission) regulations aimed for a more transparent stock market.</li>
										<li>Identifying the market potential of this growing industry, TRUS congregated leading financial and internet development experts to develop the most advanced and user-friendly Stock Online Trading platform available in Indonesia. </li>
										<li>Offering a White Label program that guarantees brokers to go online with minimal work on the operator`s side, TRUS is the first choice for those looking to offer Online Trading system to traders and internet users.</li>
										<li>Dealing With Technical Support 10 Useful Tips</li>
										<li>Answering the needs of every aspect involved in running an online trading operation, TRUS prides itself in providing a complete solution.</li>
										<li>To become a trusted partner of Indonesian Stock Brokers and other financial providers to ensure ongoing, accurate trading.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Start work-process Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
								<h3 class="mb-30">Strength</h3>
								<div class="row">
									<div class="col-md-3">
										<img src="{{asset('img/strength.png')}}" alt="" class="img-fluid">
									</div>
									<div class="col-md-9 mt-sm-30 typo-sec">
								<div class="">
									<ul class="unordered-list">
										<li>Always keep ahead of the latest Information Technology.</li>
										<li>Our application have been used by 9 securities companies, which also proves that our solution goes well. </li>
										<li>We give the best solution with very competitive price</li>
										<li>Fast, just need approximately 1 week for deploying the demo project since infrastructure is ready. Note that currently IDX members can get datafeed from Remote Trading line, so it will not takes time to request datafeed and establish the link.</li>
										<li>Please compare our running trades with other solution.</li>
										<li>Application is customizable to company needs.</li>
										<li>Our team consists of people who experienced in their respective fields, especially within the scope of Online Trading</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
					
			<!-- End work-process Area -->

<?php echo View::make('includes/footer'); ?>
