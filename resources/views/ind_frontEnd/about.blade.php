<?php echo View::make('includes/indHeader'); ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Tentang Kami				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('id_frontEnd.index')}}">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('id_frontEnd.about')}}"> Tentang Kami</a></p>
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
								<h3 class="mb-30">Visi Kami</h3>
								<div class="row">
									<div class="col-md-3">
										<img src="{{asset('img/vision.jpg')}}" alt="" class="img-fluid">
									</div>
									<div class="col-md-9 mt-sm-30 typo-sec">
								<div class="">
									<ul class="unordered-list">
										<li>TRUS didirikan pada tahun 2010, sebagai tanggapan terhadap perubahan aturan BEI (Bursa Efek Indonesia) menjadi keharusan mendesak semua pialang saham di Indonesia untuk berdagang secara online, diikuti oleh peraturan BAPEPAM (Securities and Exchange Commission) yang bertujuan untuk menciptakan pasar saham yang lebih aman serta transparan.</li>
										<li>Mengidentifikasi potensi pasar dari industri yang sedang berkembang ini, TRUS mengumpulkan para ahli pengembangan keuangan dan internet terkemuka untuk mengembangkan platform Stock Online Trading yang paling canggih dan mudah digunakan yang tersedia di Indonesia. </li>
										<li>Menawarkan program "White Label" yang menjamin broker untuk online dengan pekerjaan minimal di sisi operator, TRUS adalah pilihan pertama bagi mereka yang ingin menawarkan sistem Perdagangan Online kepada para pedagang dan pengguna internet.</li>
										<li>Memberikan dukungan hingga 10 tips teknikal support.</li>
										<li>Menjawab kebutuhan setiap aspek yang terlibat dalam menjalankan operasi perdagangan online, TRUS membanggakan dirinya dalam memberikan solusi lengkap.</li>
										<li>Untuk menjadi mitra terpercaya dari Pialang Saham Indonesia dan penyedia keuangan lainnya untuk memastikan perdagangan yang berlangsung dan akurat.</li>
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
								<h3 class="mb-30">Kemampuan</h3>
								<div class="row">
									<div class="col-md-3">
										<img src="{{asset('img/strength.png')}}" alt="" class="img-fluid">
									</div>
									<div class="col-md-9 mt-sm-30 typo-sec">
								<div class="">
									<ul class="unordered-list">
										<li>Selalu tetap di depan pada Teknologi serta Informasi terbaru.</li>
										<li>Aplikasi kami telah digunakan oleh 15 perusahaan sekuritas, yang juga membuktikan bahwa solusi kami berjalan dengan sangat baik. </li>
										<li>Kami juga memberikan solusi terbaik dengan harga yang kompetitif.</li>
										<li>Cepat, hanya perlu sekitar 1 minggu untuk menyebarkan proyek demo karena infrastruktur sudah siap. Perhatikan bahwa saat ini anggota IDX dapat memperoleh umpan data dari jalur Remote Trading, sehingga tidak akan membutuhkan waktu untuk meminta "Datafeed" dan membuat tautan(link).</li>
										<li>Silahkan untuk membandingkan solusi aplikasi kami dengan solusi lainnya.</li>
										<li>Aplikasi dapat disesuaikan dengan kebutuhan perusahaan.</li>
										<li>Tim kami terdiri dari orang-orang yang berpengalaman di bidangnya masing-masing, terutama dalam lingkup Perdagangan Online(saham).</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
					
			<!-- End work-process Area -->

<?php echo View::make('includes/indFooter'); ?>
