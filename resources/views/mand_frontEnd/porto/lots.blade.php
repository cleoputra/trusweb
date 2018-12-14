<?php echo View::make('includes/mdheader_porto'); ?>

            <!-- start banner Area -->
            <section class="banner-area relative" id="home">    
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Portofolio                
                            </h1>   
                            <p class="text-white link-nav"><a href="{{route('md_frontEnd.index')}}">主页 </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('md_frontEnd.porto')}}"> 制品</a> <span class="lnr lnr-arrow-right"></span> <a href="{{route('md_frontEnd.p_lots')}}"> Lotus Securities Application</a></p>
                        </div>  
                    </div>
                </div>
            </section>
            <!-- End banner Area -->

                 <hr style="height: 30pt; visibility: hidden;">

                <div class="w3-content w3-display-container">
                    <h2 class="w3-center"> Lotus's Desktop Application</h2> <br>
                  <img class="mySlides" src="{{asset('img/cp/Lotus/lotus.png')}}" style="width:100%">
                  <img class="mySlides" src="{{asset('img/cp/Lotus/login.png')}}" style="width:75%">


                  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                </div>

                <hr style="height: 100pt; visibility: hidden;">

<?php echo View::make('includes/mdfooter_porto'); ?>
