<?php echo View::make('includes/mandHeader'); ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('frontEnd.index')}}">主页 </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('frontEnd.about')}}"> 关于</a></p>
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
								我们在线提供证券印  <br>
								度尼西亚股票经纪人的交易平台
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
								<h3 class="mb-30">愿景</h3>
								<div class="row">
									<div class="col-md-3">
										<img src="{{asset('img/vision.jpg')}}" alt="" class="img-fluid">
									</div>
									<div class="col-md-9 mt-sm-30 typo-sec">
								<div class="">
									<ul class="unordered-list">
										<li>TRUS 成立于 2010年，以响应BEI（印度尼西亚证券交易所）的规则变更，强制要求印度尼西亚的所有股票经纪人在线交易，随后是 BAPEPAM（证券交易委员会）法规，旨在提供更透明的股票 市场。</li>
										<li>鉴于这个不断发展的行业的市场潜力，TRUS聚集了领先的金融和互联网开发专家，以开发印度尼西亚最先进和用户友好的股票在线交易平台。 </li>
										<li>提供白标计划，保证经纪人上网，只需最少的操作，TRUS是那些希望为交易者和互联网用户提供在线交易系统的人的首选。</li>
										<li>处理技术支持10个有用的提示</li>
										<li>为了满足运营在线交易操作所涉及的各个方面的需求，TRUS 以提供完整的解决方案而自豪。</li>
										<li>成为印尼证券经纪人和其他金融服务提供商值得信赖的合作伙伴，以确保持续，准确的交易。</li>
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
								<h3 class="mb-30">强度</h3>
								<div class="row">
									<div class="col-md-3">
										<img src="{{asset('img/strength.png')}}" alt="" class="img-fluid">
									</div>
									<div class="col-md-9 mt-sm-30 typo-sec">
								<div class="">
									<ul class="unordered-list">
										<li>始终领先于最新的信息技术。</li>
										<li>我们的应用程序已被15家证券公司使用，这也证明了我们的解决方案顺利进行。 </li>
										<li>我们以极具竞争力的价格提供最佳解决方案</li>
										<li>快速，自基础设施准备就绪后，只需大约1周的时间来部署演示项目。 请注意，目前IDX会员可以从远程交易行获取数据，因此请求数据馈送和建立链接不需要时间。</li>
										<li>请将我们的运行交易与其他解决方案进行比较</li>
										<li>应用程序可根据公司需求进行定制。</li>
										<li>我们的团队由在各自领域经验丰富的人员组成，特别是在在线交易范围内。</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
					
			<!-- End work-process Area -->

<?php echo View::make('includes/mandFooter'); ?>
