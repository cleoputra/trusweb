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
        <title>TRUS :: Integrated System Solution</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
            <link rel="stylesheet" href="{{asset('css/style.css')}}">
        </head>
        <body style="background-color:  #FFF5EE;">  
              <header id="header" id="home">
                
                <div class="container main-menu">
                    <div class="row align-items-center justify-content-between d-flex">
                      <div id="logo">
                        <a href="{{route('frontEnd.index')}}"><img src="img/small_trus.png" alt="" title="" /></a>
                      </div>
                      <nav id="nav-menu-container">
                       <ul class="nav-menu">
                        <li class="menu-active"><a href="{{route('md_frontEnd.index')}}">主页</a></li>
                        <li><a href="{{route('md_frontEnd.about')}}">关于</a></li>
                        <li><a href="{{route('md_frontEnd.service')}}">服务</a></li>
                       <li><a href="{{route('md_frontEnd.porto')}}">制品</a></li>
                        <li><a href="{{route('frontEnd.news')}}">新闻</a>   
                        <li><a href="{{route('md_frontEnd.contact')}}">联系信息</a></li>
                      </ul>
                      </nav><!-- #nav-menu-container -->                    
                    </div>
                </div>
              </header><!-- #header -->