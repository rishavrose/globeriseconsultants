
             <!--=====Footer start=======-->
             
             <footer class="footer-area padding-top">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="single-footer mr50 hadding2">
                      <div class="site-logo home1-site-logo">
                        <a href="#">
                          <!--<img src="assets/img/logo/footer-logo2.svg" alt="" />-->
                          <h6>Globerise</h6>
                        </a>
                      </div>
                      <div class="space30"></div>
                     <div class="hadding1">
                      <p>
At Globerise Consultants, we believe that borders should never be a barrier to your dreams. Based in the heart of Delhi, we are a trusted travel and immigration consultancy committed to helping students, tourists, and professionals take confident steps toward their international goals.
                      </p>
                     </div>
                    </div>
                    <div class="space24"></div>
                    <div class="social social2">
                      <ul>
                        <li>
                          <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                      </ul>
                    </div>
        
                  </div>
                  <div class="col-lg col-sm-6 col-6 hadding2">
                    <div class="single-footer single-footer2">
                      <h3>
                        Explore
                      </h3>
                      <div>
                        <ul>
                          <li><a href="{{ route('about') }}"><span><i class="fa-solid fa-plane"></i></span> About</a></li>
                          <li><a href="#"><span><i class="fa-solid fa-plane"></i></span> Services</a></li>
                          <li><a href="{{ route('countries') }}"><span><i class="fa-solid fa-plane"></i></span>Country</a></li>
                          <li><a href="{{ route('testimonial') }}"><span><i class="fa-solid fa-plane"></i></span> Testimonial</a></li>
                          <li><a href="{{ route('contact') }}"><span><i class="fa-solid fa-plane"></i></span> Contact</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg col-sm-6 col-6 hadding2">
                    <div class="single-footer single-footer2">
                      <h3>
                        Visa
                      </h3>
                      <div>
                        <ul>
                          <li><a href="{{ route('studyvisa') }}"><span><i class="fa-solid fa-plane"></i></span> Study Visa</a></li>
                          <li><a href="{{ route('countries') }}"><span><i class="fa-solid fa-plane"></i></span> Country</a></li>
                          <li><a href="{{ route('touristvisa') }}"><span><i class="fa-solid fa-plane"></i></span> Tourist Visa</a></li>
                          <li><a href="{{ route('postlanding') }}"><span><i class="fa-solid fa-plane"></i></span>Post Landing Services</a></li>
                          <li><a href="{{ route('currencyexchange') }}"><span><i class="fa-solid fa-plane"></i></span>Currency Exchange</a></li>
                          <li><a href="{{ route('flightticket') }}"><span><i class="fa-solid fa-plane"></i></span>Flight Ticket Reservation</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 hadding2">
                    <div class="single-footer-contact single-footer single-footer2">
                      <h3>
                        Get in touch
                      </h3>
                      <div class="padding-left20">
                        <div class="hadding1">
                        <p style="color: #181A1C;">408,4th Floor,A-09 GD ITL Northex Tower,Netaji Subhash Place Delhi-110034</p>
                      </div>
        
                      <div class="contact-icon-box2 d-flex align-items-center mb-2">
                        <div class="contact-icon me-2">
                          <img src="assets/img/icons/page-contact-icon3.svg" alt="" style="width:24px; height:24px; object-fit:contain;">
                        </div>
                        <div class="contact-icon-h">
                          <a href="tel:7065195955/9318355539">7065195955/9318355539</a>
                        </div>
                      </div>

                      <div class="contact7-icon-box1 d-flex align-items-center">
                        <div class="contact-icon me-2">
                          <img src="assets/img/icons/page-contact-icon2.svg" alt="" style="width:24px; height:24px; object-fit:contain;">
                        </div>
                        <div class="contact-icon-h">
                          <a href="mailto:info@globeriseConsultants.com"><small>info@globeriseConsultants.com</small></a>
                        </div>
                      </div>               
                      </div>     
        
                    </div>
                  </div>
                </div>
                <div class="row align-items-center copyright2">
                  <div class="col-lg-12 text-center hadding1">
                    <p>
                      © <?=date('Y')?> Globerise Consultants. All Rights Reserved.
                    </p>
                  </div>
                </div>
              </div>
            </footer>
            <!--=====Footer end=======-->
<script>
                var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?10293';
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url;
                var options = {
                "enabled":true,
                "chatButtonSetting":{
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "marginLeft": "0",
                    "marginRight": "20",
                    "marginBottom": "20",
                    "ctaIconWATI":false,
                    "position":"left"
                },
                "brandSetting":{
                    "brandName":"Globerise Consultants",
                    "brandSubTitle":"undefined",
                    "brandImg":"https://test.globeriseConsultants.com/assets/img/logo/logo-black.png",
                    "welcomeText":"Hi there!\nHow can I help you?",
                    "messageText":"Hello, %0A",
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "autoShow":false,
                    "phoneNumber":"919318355539"
                }
                };
                s.onload = function() {
                    CreateWhatsappChatWidget(options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            </script>
        <!--=====JS=======-->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/fontawesome.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/slick-slider.js') }}"></script>
        <script src="{{ asset('assets/js/mobile-menu.js') }}"></script>
        <script src="{{ asset('assets/js/tilt.jquery.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.countup.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.lineProgressbar.js') }}"></script>
        <script src="{{ asset('assets/js/mobile-meanmenu.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- <script src="assets/js/modal-video.min.js"></script> -->
        <!-- <script src="assets/js/jquery.fittext.js"></script>
        <script src="assets/js/jquery.lettering.js"></script>
        <script src="assets/js/jquery.textillate.js"></script> -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
 </html>
