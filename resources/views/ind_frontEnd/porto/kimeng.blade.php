<?php echo View::make('includes/idheader_porto'); ?>

            <!-- start banner Area -->
            <section class="banner-area relative" id="home">    
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Portofolio                
                            </h1>   
                            <p class="text-white link-nav"><a href="{{route('id_frontEnd.index')}}">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('id_frontEnd.porto')}}"> Portofolio</a> <span class="lnr lnr-arrow-right"></span> <a href="{{route('id_frontEnd.p_kimeng')}}"> Kim Eng Securities Application</a></p>
                        </div>  
                    </div>
                </div>
            </section>
            <!-- End banner Area -->

                 <hr style="height: 30pt; visibility: hidden;">

                <div class="w3-content w3-display-container">
                    <h2 class="w3-center"> Kim Eng's Desktop Application</h2> <br>
                  <img class="mySlides" src="{{asset('img/cp/Kim Eng/kimgeng.png')}}" style="width:100%">
                  <img class="mySlides" src="{{asset('img/cp/Kim Eng/login.png')}}" style="width:75%">


                  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                </div>

             <hr style="height: 10pt; visibility: hidden;">

                <div>
                    <div class="w3-content w3-display-container">
                        <h2 class="w3-center"> Kim Eng's Mobile Application</h2> <br>
                      <img class="mySlidess" src="{{asset('img/cp/Kim Eng/m_login.jpg')}}" style="width:30%">
                      <img class="mySlidess" src="{{asset('img/cp/Kim Eng/m_1.jpg')}}" style="width:30%">
                      <img class="mySlidess" src="{{asset('img/cp/Kim Eng/m_2.jpg')}}" style="width:30%">
                      <img class="mySlidess" src="{{asset('img/cp/Kim Eng/m_3.jpg')}}" style="width:30%">
                      <img class="mySlidess" src="{{asset('img/cp/Kim Eng/m_4.jpg')}}" style="width:30%">


                      <button class="w3-button w3-white w3-display-left" onclick="plusDivss(-1)">&#10094;</button>
                      <button class="w3-button w3-white w3-display-right" onclick="plusDivss(1)">&#10095;</button>
                    </div>
                </div>

                <div class="col-md-6">
                    <a href="https://play.google.com/store/apps/details?id=com.onlinetrading.ketrade" target="_blank">
                        <button class="button button1">DOWNLOAD HERE</button>
                    </a>
                </div>

                <hr style="height: 30pt; visibility: hidden;">

               
<?php echo View::make('includes/idfooter_porto'); ?>
