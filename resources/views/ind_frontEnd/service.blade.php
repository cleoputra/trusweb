<?php echo View::make('includes/indHeader'); ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Services				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('id_frontEnd.index')}}">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('id_frontEnd.service')}}"> Servis</a></p>
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
							<h1 class="mb-10">Yang Kami Tawarkan Untuk Anda</h1>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/custom.jpg')}}" alt="">									
								</div>
								<a href="{{route('id_frontEnd.s_customapp')}}">
								<h4>Custom Application Development</h4>
								</a>
								<p>
									TRUS sangat fokus pada pembuatan aplikasi perangkat lunak berorientasi pelanggan. Tim pengembang dengan teliti memeriksa dan menganalisis proses TI yang ada pada aplikasi di setiap klien.
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
								<a href="{{route('id_frontEnd.s_web')}}">
								<h4>Web Application</h4>
								</a>
								<p>
									Layanan pengembangan web TRUS memungkinkan organisasi untuk mengefisiensi waktu ke pasar, lebih dekat dengan pelanggan dan mencapai pertumbuhan jangka panjang dengan investasi yang menguntungkan.
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
								<a href="{{route('id_frontEnd.s_maintain')}}">
								<h4>Software Maintenance</h4>
								</a>
								<p>
									Pemeliharaan aplikasi adalah bagian paling penting dari bisnis apa pun. Karena kebutuhan untuk perubahan bisnis terus-menerus, aplikasi yang digunakan untuk mengelola bisnis juga perlu mengakomodasi perubahan bisnis serta fitur tambahan yang diperlukan untuk dikembangkan.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/migration.png')}}" alt="">									
								</div>
								<a href="{{route('id_frontEnd.s_migration')}}">
								<h4>Software Migration</h4>
								</a>
								<p>
									Aplikasi Perangkat Lunak kami Layanan migrasi membantu mempertahankan pengetahuan dalam aplikasi warisan Anda dan pada saat yang sama memanfaatkan potensi kinerja teknologi terbaru.						
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="{{asset('img/offshore.jpg')}}" alt="">									
								</div>
								<a href="{{route('id_frontEnd.s_offshore')}}">
								<h4>Offshore Development Services</h4>
								</a>
								<p>
									Offshore Development Center(ODC) sangat penting dan membantu klien. Tidak dapat disangkal, ketika Anda mendirikan Pusat Pengembangan Lepas Pantai di Indonesia bersama kami, Anda akan menerima beragam manfaat seperti pengembalian investasi tinggi dan kualitas output tertinggi.
								</p>
							</div>
						</div>	
																			
					</div>
				</div>
			</section>
			<!-- End service Area -->

<?php echo View::make('includes/indFooter'); ?>
