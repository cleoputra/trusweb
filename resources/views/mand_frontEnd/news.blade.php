<?php echo View::make('includes/mandHeader'); ?>

			  <!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Blog Details Page				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('frontEnd.index')}}">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('frontEnd.news')}}">News </a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  

			<hr style="height: 40pt; visibility: hidden;">
			<!-- Start post-content Area -->
			<section class="post-content-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li>Finance</li>
										<li> Investment,</li>
										<li> Business</li>
									</ul>
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6">TRUS Admin <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">10 Oct, 2018</a> <span class="lnr lnr-calendar-full"></span></p>
												
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="{{asset('img/discount-bg.jpg')}}" alt="">
									</div>
									<a class="posts-title" href="blog-single.html"><h3>IHSG Berpotensi Menguat, 4 Saham Ini Bisa Dipertimbangkan </h3></a>
									<p class="excert">
										Tim Riset CNBC Indonesia menilai empat saham ini memiliki peluang kenaikan harga pada perdagangan bursan hari ini, Rabu(10/10/2018), dengan mengacu pada pola pergerakan sahmnya secara teknikal...
									</p>
									<a href="#" class="primary-btn">View More</a>
								</div>
							</div>
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li>Finance</li>
										<li> Technology,</li>
										<li> Investment,</li>
										<li> Economy,</li>
										<li> Business</li>
									</ul>
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6">TRUS Admin <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">20 Jul, 2018</a> <span class="lnr lnr-calendar-full"></span></p>					
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="{{asset('img/banner-bg.jpg')}}" alt="">
									</div>
									<a class="posts-title" href="blog-single.html"><h3>Menengok Investasi Berbasis Teknologi untuk Milenial</h3></a>
									<p class="excert">
										Milenial merupakan generasi yang berpengaruh di dunia, termasuk di Indonesia. generasi melek digital dan terbuka akan gaya hidup baru yang menggunakan smartphone atau komputer. Dengan perkembangan teknologi ini, mereka...           
									</p>
									<a href="#" class="primary-btn">View More</a>
								</div>
							</div>
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li>Finance</li>
										<li> Investment,</li>
										<li> Economy,</li>
										<li> Business</li>
									</ul>
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6">TRUS Admin <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">20 Jul, 2018</a> <span class="lnr lnr-calendar-full"></span></p>				
									</div>
								</div>
								<div class="col-lg-9 col-md-9">
									<div class="feature-img">
										<img class="img-fluid" src="{{asset('img/discount-bg.jpg')}}" alt="">
									</div>
									<a class="posts-title" href="blog-single.html"><h3>Data Ekonomi Tekan IHSG, Saham Unggulan Jadi Pilihan</h3></a>
									<p class="excert">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven
										cillum dolore eu fugiat nulla pariatur.
									</p>
									<a href="#" class="primary-btn">View More</a>
								</div>
							</div>
																				
		                    <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item active"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item "><a href="#" class="page-link">02</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>
						</div>
						<div class="col-lg-4 sidebar-widgets"> 	
							<div class="widget-wrap">
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Berita Terkini</h4>
									<div class="popular-post-list">
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp1.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
												
											</div>
										</div>
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp2.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>The Amazing Hubble</h6></a>
												
											</div>
										</div>
										
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp4.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>Asteroids telescope</h6></a>
												
											</div>
										</div>															
									</div>
								</div>
															
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
			
<?php echo View::make('includes/mandFooter'); ?>
