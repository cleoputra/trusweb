<?php echo View::make('includes/mandHeader'); ?>

			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center">
						<div class="banner-content col-lg-7 col-md-6 justify-content-center ">
							<h6 class="text-uppercase">Integrated System Solution</h6>
							<h1>
								证券在线交易平台提供商			
							</h1>
							<p class="text-white">
								TRUS 通 过 白 标 计 划 为 有 需 要 的 印 尼 股 票 经 纪 人 提 供 证 券 在 线 交 易 平 台。
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
							<h1 class="mb-10">我们为客户提供的服务</h1>
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
									TRUS 非常注重创建面向客户的软件应用程序。 开发团队仔细检查和分析客户的现有IT流程。
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
									TRUS 的网络开发服务使企业能够缩短产品上市时间，更贴近客户并实现长期盈利性增长。
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
							<a href="{{route('md_frontEnd.service')}}" class="genric-btn primary e-large">查看更多</a>
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
								<h1 class="mb-10">我们的工作流程</h1>
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
							<h1 class="text-white">对我们的作品感兴趣？  </h1>
							<p class="text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim est laborum.
							</p>
							<a href="{{route('frontEnd.contact')}}" class="header-btn">Order Service Now</a>
						</div>
						<div class="col-lg-5 discount-right">
							<h4 class="text-white">Wanna Know More</h4>
		                    <form class="booking-form" id="myForm" action="#">
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

<?php echo View::make('includes/mandFooter'); ?>