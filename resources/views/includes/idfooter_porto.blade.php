       <!-- start footer Area -->      
            <footer class="footer-area section-gap">
                <div class="container">
<div class="row">
                        <div class="col-lg-3  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>About TRUS</h6>
                                <p>
                                    PT Tri Ultima Solusindo (TRUS) is a Jakarta based software outsourcing company that focuses on developing Cost-Effective but Highly Performance Softwares, as well as Total Solution to serve all of your Company`s IT needs.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>Navigation Links</h6>
                                <div class="row">
                                    <div class="col">
                                       <ul>
                                            <li><a href="{{route('id_frontEnd.index')}}">Beranda</a></li>
                                            <li><a href="{{route('id_frontEnd.about')}}">Tentang Kami</a></li>
                                            <li><a href="{{route('id_frontEnd.service')}}">Servis</a></li>
                                            <li><a href="{{route('id_frontEnd.porto')}}">Portofolio</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li><a href="{{route('id_frontEnd.news')}}">Berita</a>   
                                            <li><a href="{{route('id_frontEnd.contact')}}">Kontak Kami</a></li>
                                        </ul>
                                    </div>                                      
                                </div>                          
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">                            
                            <div class="single-footer-widget">
                                <h6>Pilih Bahasa</h6>
                                <div class="row">
                                    <div class="col">
                                        <ul>
                                            <li><a href="{{route('frontEnd.index')}}">English</a></li>
                                            <li><a href="{{route('id_frontEnd.index')}}">Bahasa Indonesia</a></li>
                                            <li><a href="{{route('md_frontEnd.index')}}">普通话</a></li>
                                            <li><a href="{{route('frontEnd.m_Eng')}}">etc</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>Newsletter</h6>
                                <p>
                                    For business professionals caught between high OEM price and mediocre print and graphic output.                                 
                                </p>                                
                                <div id="mc_embed_signup">
                                    <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                                        <div class="input-group d-flex flex-row">
                                            <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>
                                            <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>      
                                        </div>                                  
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>                  
                    </div>


                    <div class="row footer-bottom d-flex justify-content-between align-items-center">
                        <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->    

            <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
            <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>         
            <script type="text/javascript" src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA')}}"></script>
            <script src="{{asset('js/easing.min.js')}}"></script>           
            <script src="{{asset('js/hoverIntent.js')}}"></script>
            <script src="{{asset('js/superfish.min.js')}}"></script>    
            <script src="{{asset('js/mn-accordion.js')}}"></script>
            <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
            <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>    
            <script src="{{asset('js/owl.carousel.min.js')}}"></script>                     
            <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>   
            <script src="{{asset('js/jquery.circlechart.js')}}"></script>                               
            <script src="{{asset('js/mail-script.js')}}"></script>  
            <script src="{{asset('js/main.js')}}"></script> 
            <script>
                var slideIndex = 1;
                showDivss(slideIndex);

                function plusDivss(n) {
                  showDivss(slideIndex += n);
                }

                function showDivss(n) {
                  var i;
                  var x = document.getElementsByClassName("mySlidess");
                  if (n > x.length) {slideIndex = 1}    
                  if (n < 1) {slideIndex = x.length}
                  for (i = 0; i < x.length; i++) {
                     x[i].style.display = "none";  
                  }
                  x[slideIndex-1].style.display = "block";  
                }
            </script>

            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                  showDivs(slideIndex += n);
                }

                function showDivs(n) {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  if (n > x.length) {slideIndex = 1}    
                  if (n < 1) {slideIndex = x.length}
                  for (i = 0; i < x.length; i++) {
                     x[i].style.display = "none";  
                  }
                  x[slideIndex-1].style.display = "block";  
                }
            </script>
        </body>
    </html>