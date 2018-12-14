<?php echo View::make('includes/mandHeader'); ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Services				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('md_frontEnd.index')}}">主页 </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('md_frontEnd.index')}}"> 服务</a></p>
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
							<h1 class="mb-10">我们为客户提供的服务</h1>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/custom.jpg')}}" alt="">									
								</div>
								<a href="{{route('md_frontEnd.s_customapp')}}">
								<h4>Custom Application Development</h4>
								</a>
								<p>
									TRUS 非常注重创建面向客户的软件应用程序。 开发团队仔细检查和分析客户的现有IT流程。
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
								<a href="{{route('md_frontEnd.s_web')}}">
								<h4>Web Application</h4>
								</a>
								<p>
									TRUS 的网络开发服务使企业能够缩短产品上市时间，更贴近客户并实现长期盈利性增长。
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
								<a href="{{route('md_frontEnd.s_maintain')}}">
								<h4>Software Maintenance</h4>
								</a>
								<p>
									应用程序维护是任何业务中最关键的部分。 随着业务需求的不断变化，部署用于管理业务的应用程序也需要适应业务变化以及需要开发的其他功能。
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/migration.png')}}" alt="">									
								</div>
								<a href="{{route('md_frontEnd.s_migration')}}">
								<h4>Software Migration</h4>
								</a>
								<p>
									我们的软件应用程序迁移服务有助于保留旧应用程序的专有技术，同时利用最新技术的性能潜力。					
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/offshore.jpg')}}" alt="">									
								</div>
								<a href="{{route('md_frontEnd.s_offshore')}}">
								<h4>Offshore Development Services</h4>
								</a>
								<p>
									离岸开发中心对客户非常重要且有帮助。 毫无疑问，当您与我们在印度尼西亚建立离岸开发中心时，您可以获得各种好处，例如高投资回报率和最高产量。
								</p>
							</div>
						</div>	
																			
					</div>
				</div>
			</section>
			<!-- End service Area -->

<?php echo View::make('includes/mandFooter'); ?>
