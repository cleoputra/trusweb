<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('img/fav.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">

		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<link rel="icon" type="image" href="{{asset('img/icon_trus.png')}}" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">							
			<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('css/main.css')}}">
		<title>{{ $post->title }} | TRUS :: Integrated System Solution</title>
		</head>
		<body>	
			  <header id="header" id="home">
		  		<div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{route('frontEnd.m_Eng')}}"><img src="{{asset('img/small_trus.png')}}" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        
				      </nav>
			    	</div>
			    </div>
			  </header><!-- #header -->

			  <!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								News Page Content				
							</h1>	
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->			

			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
										<img class="img-fluid" src="{{ asset('storage/' . $post->photo) }}" alt="">
									</div>									
								</div>
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li><a href="#">Food,</a></li>
										<li><a href="#">Technology,</a></li>
										<li><a href="#">Politics,</a></li>
										<li><a href="#">Lifestyle</a></li>
									</ul>
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{ $post->user->name }}</a> <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{ $post->created_at }}</a> <span class="lnr lnr-calendar-full"></span></p>
																														
									</div>
								</div>
								<div class="col-lg-9 col-md-9">
									<a class="posts-title" href="#"><h3>{{ $post->title }}</h3></a>
									{!! $post->content !!}
								</div>
								
								</div>
							<div class="navigation-area">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="arrow">
											<a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
										</div>
										<div class="detials">
											<p>Back to Home</p>
											<a href="{{route('frontEnd.news')}}"><h4>Trading News Page</h4></a>
										</div>
									</div>
																		
								</div>
							</div>

							
						</div>
						@include('includes.widget')
						
					</div>
				</div>	
			</section>		  








<?php echo View::make('includes/footer'); ?>
