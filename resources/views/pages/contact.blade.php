 @include('common.header') 
 <!--=====pages hero start=======-->

      <div class="page-hero-area _relative glob_col" style="background-image: url(assets/img/bg/page-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>Contact</h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="{{ route('index') }}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Contact</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="page-hero-element1 aniamtion-key-2" src="assets/img/shapes/page-header-element1.svg" alt="">
        <img class="page-hero-element2 aniamtion-key-3" src="assets/img/shapes/page-header-element2.svg" alt="">
        <img class="page-hero-element3 aniamtion-key-1" src="assets/img/shapes/page-header-element1.svg" alt="">
        <img class="page-hero-element4 aniamtion-key-2" src="assets/img/shapes/page-header-element2.svg" alt="">
      </div>

      <!--=====pages hero end=======-->
      

            <!--=====contact start=======-->

            <div class="contact7" style="background-color: #F3F6F6;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="hadding2 contact7-hadding">
                                <span class="span">Contact Us</span>
                                <div class="space16"></div>
                                <h1>Write Message to Our Globerise Consulting Company</h1>
                                <div class="space16"></div>
                                <p>Whether you have questions about our services, want to book a consultation </p>
                                <div class="space8"></div>
                                <form action="#">
                                    <div class="contact7-form">
                                        <div class="contact7-input">
                                            <input type="text" placeholder="Your Name*">
                                        </div>
                                        <div class="contact7-input">
                                            <input type="email" placeholder="Email Address*">
                                        </div>
                                        <div class="contact7-input">
                                            <textarea cols="30" rows="3" placeholder="Write a Message*"></textarea>
                                        </div>
                                        <div class="space32"></div>
                                        <button class="theme-btn5 font-f-7">Claim Your Tour Journey!</button>
                                    </div>
                                </form>
                            </div>
                        </div>
        
                        <div class="col-lg-6">
                            <div class="contact-map contact-map2">
                                <div class="img100 img5" style="z-index: 9; position: relative;">
                                    <img src="assets/img/image/contact-page.png" alt="">
                                </div>
                              </div>
                        </div>
                    </div>
        
                     <div class="row">
    <!-- India Office Address -->
    <div class="col-lg-4">
        <div class="contact7-icon-box contact7-icon-box2">
            <div class="contact7-icon">
                <img src="assets/img/icons/page-contact-icon1.svg" alt="">
            </div>
            <div class="contact7-iocn-hadding">
                <h4><a href="#">India Office</a></h4>
                <div class="space6"></div>
                <a href="#">408, 4th Floor, A-09 GD ITL Northex Tower</a>
                <a href="#">Netaji Subhash Place, Delhi - 110034</a>
            </div>
        </div>
    </div>

    <!-- Dubai Office Address -->
    <div class="col-lg-4">
        <div class="contact7-icon-box contact7-icon-box2">
            <div class="contact7-icon">
                <img src="assets/img/icons/page-contact-icon1.svg" alt="">
            </div>
            <div class="contact7-iocn-hadding">
                <h4><a href="#">Dubai Office</a></h4>
                <div class="space6"></div>
                <a href="#">Al Owais building 2, floor M office no.</a>
                <a href="#">M06 Al Rigga road, Deira Dubai</a>
            </div>
        </div>
    </div>

    <!-- Contact Numbers -->
    <div class="col-lg-4">
        <div class="contact7-icon-box contact7-icon-box2">
            <div class="contact7-icon">
                <img src="assets/img/icons/page-contact-icon2.svg" alt="">
            </div>
            <div class="contact7-iocn-hadding">
                <h4><a href="#">Contact Number</a></h4>
                <div class="space6"></div>
                <a href="tel:7065195955">7065195955</a><br>
                <a href="tel:9318355539">9318355539</a>
            </div>
        </div>
    </div>

    <!-- Email Addresses -->
    <div class="col-lg-4 mt-4">
        <div class="contact7-icon-box contact7-icon-box2">
            <div class="contact7-icon">
                <img src="assets/img/icons/page-contact-icon3.svg" alt="">
            </div>
            <div class="contact7-iocn-hadding">
                <h4><a href="#">Email Address</a></h4>
                <div class="space6"></div>
                <a href="mailto:info@globeriseConsultants.com">info@globeriseConsultants.com</a><br>
                <a href="mailto:support@globeriseConsultants.com">support@globeriseConsultants.com</a>
            </div>
        </div>
    </div>
</div>

                </div>
              </div>
              
              <div class="contact-map-selector mb-4">
    <!--<label for="office-location">Select Office Location:</label>-->
    <select id="office-location" class="form-control" onchange="updateMap()">
        <option value="india">India Office</option>
        <option value="dubai">Dubai Office</option>
    </select>
</div>

<div class="contact-map-page">
    <iframe
        id="office-map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.635768679894!2d77.15024437527492!3d28.61047338493951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02f2e926cf4b%3A0x4e406a4f569e5939!2sNetaji%20Subhash%20Place%2C%20Delhi%2C%20110034%2C%20India!5e0!3m2!1sen!2sin!4v1688367359220!5m2!1sen!2sin"
        width="100%"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

              <!--<div class="contact-map-page">-->
              <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196064.65881483705!2d88.93201515862421!3d24.061083775097945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39febca82f6a21ed%3A0x4040980d7c6874f8!2sKushtia%20District!5e0!3m2!1sen!2sbd!4v1673751720794!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
              <!--</div>-->
        
              <!--=====contact end=======-->

  <!--=====cta start=======-->

      <div class="cta2" style="background-color: #f6a903;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="cta2-hadding2">
                <h1>We're Committed to Making your Globerise Application Process</h1>
                <div class="space16"></div>
                <p>Visa Consulting doesn't just handle the paperwork; they genuinely care about their clients' success. My Consultants not only helped with the application visa consulting.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="cta2-form">
                <div class="cta2-input">
                  <input type="email" placeholder="Enter Your Email">
                </div>
                  <button class="theme-btn5 cta2-button font-f-7">Subscribe Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
<script>
    function updateMap() {
        const location = document.getElementById("office-location").value;
        const iframe = document.getElementById("office-map");

        const mapLinks = {
            india: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.8735377668036!2d77.1483739259341!3d28.69342932563162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02338ca45e49%3A0x18a72560f3928a5a!2sA9%20GDITL%20Northex%20Tower%20Netaji%20Subhash%20Place!5e0!3m2!1sen!2sin!4v1751368218700!5m2!1sen!2sin",
            dubai: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14432.748960036406!2d55.30920946108729!3d25.264286042682496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d9c3f9f0499%3A0x80bda852330a3ad!2sAl%20Owais%20building%20E%20block!5e0!3m2!1sen!2sin!4v1751368153785!5m2!1sen!2sin"
        };

        iframe.src = mapLinks[location];
    }
</script>
      <!--=====cta end=======-->
@include('common.footer')
