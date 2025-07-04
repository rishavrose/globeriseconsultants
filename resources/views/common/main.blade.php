@include('common.header') 
      <!--=====hero area start=======-->
      <div class="hero-area2 _relative" style="background-image: url(assets/background.jpg); min-height: 800px; background-position: center; background-repeat: no-repeat; background-size: cover; display: flex; align-items: center;">
        <div class="container">
          <div class="space80"></div>
          <br><br>
          <div class="row align-items-center">
            <div class="col-lg-8">
              <div class="main-hadding2 font-f-7"> 
                <div class="main-span2">
                  <p class="main-span2">Welcome to Globerise Consultants</p>
                  <div class="space16"></div>
                  <h1>Elevate Your <span class="after tlt">Global Journey</span> with Trusted Visa <br>  & Immigration Expertise</h1>
                  <div class="space24"></div>
                  <p>Turn your dream of studying, traveling, or working abroad into reality with our expert-led, end-to-end support. Based in Delhi, Globerise offers personalized guidance, transparent processes, and reliable solutions to make your international move stress-free and successful.</p>
                  <div class="space32"></div>
                  <a href="#" class="theme-btn3 font-f-7">Claim Your Visa Journey!</a>
                  {{-- <a href="#" class="theme-btn4 font-f-7">Request Toure Guidance</a> --}}
                </div>
              </div>
            </div>

            <div class="col-lg-4"> 
                <div class="space80"></div>
                <div class="hero7-form-all">
                    <div class="hadding7">
                        <h3>Get in Touch</h3>
                        <div class="space16"></div>
                        <p>Enter Your Right Information</p>
                    </div>
                    <div class="space16"></div>
                    
                    <!-- Toast Container -->
                    <div id="toast-container" style="position: fixed; top: 20px; right: 20px; z-index: 9999;"></div>
                    
                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="hero7-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hero7-forrm-inputs">
                                        <input type="text" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="hero7-forrm-inputs">
                                        <input type="email" name="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="hero7-forrm-inputs">
                                        <input type="tel" name="phone" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="hero7-forrm-inputs">
                                        <select name="country" class="wide her07" required>
                                            <option value="">Select Country</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="USA">USA</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Australia">Australia</option>
                                            <option value="UK">United Kingdom</option>
                                            <option value="Germany">Germany</option>
                                            <option value="France">France</option>
                                            <option value="Dubai">Dubai</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="hero7-forrm-inputs">
                                        <select name="visa_type" class="wide her07" required>
                                            <option value="">Select Visa Type</option>
                                            <option value="Tourist Visa">Tourist Visa</option>
                                            <option value="Business Visa">Business Visa</option>
                                            <option value="Student Visa">Student Visa</option>
                                            <option value="Work Visa">Work Visa</option>
                                            <option value="Transit Visa">Transit Visa</option>
                                            <option value="Visit Visa">Visit Visa</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="space24"></div>

                            <button type="submit" class="theme-btn3 font-f-7" id="submitBtn">
                              <span class="btn-text">Apply Now</span>
                              <span class="btn-loading" style="display: none;">
                                <i class="fa fa-spinner fa-spin"></i> Sending...
                              </span>
                            </button>
                        </div>
                    </form>
                </div> 
            </div>

          </div>
        </div>
        <img class="element2-1 aniamtion-key-2" src="assets/img/shapes/element-2-1.svg" alt="">
        <img class="element2-2 aniamtion-key-2" src="assets/img/shapes/element-2-2.svg" alt="">
        <img class="element2-3 aniamtion-key-2" src="assets/img/shapes/element-2-3.svg" alt="">
        <img class="element2-4 aniamtion-key-2" src="assets/img/shapes/element-2-4.svg" alt="">
        <img class="element2-5 aniamtion-key-2" src="assets/img/shapes/element-2-5.svg" alt="">
        <img class="element2-6 aniamtion-key-2" src="assets/img/shapes/element-2-6.svg" alt="">
        <img class="element2-7 aniamtion-key-2" src="assets/img/shapes/element-2-7.svg" alt="">
      </div>

      <!--=====hero area end=======-->

      <!--=====about start=======-->
      <div class="about2 sp3">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="hero2-all-images text-end" data-aos="zoom-out" data-aos-duration="800">
                <div class="hero2-img1">
                  <img src="assets/bg-main-img.jpg" alt="">
                </div>
                <div class="hero2-img2 aniamtion-key-2">
                  <img src="assets/img/shapes/hero2-img-element.svg" alt="">
                </div>

                <div class="hero2-img3">
                  <img src="assets/img/shapes/hero2-img-element2.svg" alt="">
                </div>
              </div>
            </div>

            <div class="col-lg-7">
              <div class="hadding2 about2-hadding">
                <span data-aos="fade-left" data-aos-duration="700">About Globerise</span>
                <div class="space16"></div>
                <h1 data-aos="fade-left" data-aos-duration="800" >Welcome to Globerise Consultants – Your Gateway to a Global Future</h1>
                <div class="space24"></div>
                <p data-aos="fade-left" data-aos-duration="1000" >At Globerise Consultants, we believe that borders should never be a barrier to your dreams. Based in the heart of Delhi, we are a trusted travel and immigration consultancy committed to helping students, tourists, and professionals take confident steps toward their international goals.

Whether you’re planning to study at a top university, explore new destinations, or advance your career overseas, we provide end-to-end guidance to make your journey smooth, secure, and successful. From visa application assistance and documentation to expert counseling and country-specific advice, our experienced team is here to support you at every stage.</p>
                <div class="space20"></div>
                <p data-aos="fade-left" data-aos-duration="800">We understand that every client’s journey is unique. That’s why we offer personalized solutions tailored to your background, aspirations, and destination of choice. At Globerise, it’s not just about reaching a new country—it’s about building a new life with clarity, confidence, and care.

Your dreams deserve more than just paperwork—they deserve a partner. Let Globerise Consultants be that trusted partner in your global journey.</p>
                <div class="space32"></div>
                <div class="" data-aos="fade-left" data-aos-duration="900">
                  <a href="{{ route('about') }}" class="theme-btn5 font-f-7">Read More</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!--=====about end=======-->

      <!--=====service start=======-->

      <div class="service2 sp3 _relative" style="background-color: #F2F5F5;">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 m-auto text-center">
              <div class="hadding2">
                <span data-aos="fade-up" data-aos-duration="700">Service</span>
                <div class="space16"></div>
                <h1>Globerise Consultants: Simplifying Your Journey to Global Opportunities</h1>
              </div>
            </div>
          </div>
          <div class="space30"></div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="" data-aos="fade-up" data-aos-duration="700">
                <div class="service1-box">
                  <div class="service1-icon">
                    <img src="assets/img/icons/service2-icon1.svg" alt="">
                  </div>
                  <div class="space24"></div>
                  <div class="hadding2">
                    <h3><a href="#">Study Visa</a></h3>
                    <div class="space16"></div>
                    <p>Are you dreaming of studying in countries like Canada, the USA, the UK, Australia, or Europe? Our expert study visa services are here to guide you every step of the way — from choosing the right university to preparing your visa documentation.</p>
                  </div>
                  <div class="space16"></div>
                  <a class="learn-more2" href="#">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="" data-aos="fade-up" data-aos-duration="900">
                <div class="service1-box">
                  <div class="service1-icon">
                    <img src="assets/img/icons/service2-icon2.svg" alt="">
                  </div>
                  <div class="space24"></div>
                  <div class="hadding2">
                    <h3><a href="#">Tour Package</a></h3>
                    <div class="space16"></div>
                    <p>Discover affordable and customized tour packages that include travel, stay, sightseeing, and activities — all arranged for your perfect holiday. Book now for hassle-free travel experiences across top destinations!</p>
                    <div class="space16"></div>
                    <a class="learn-more2" href="#">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="" data-aos="fade-up" data-aos-duration="1000">
                <div class="service1-box">
                  <div class="service1-icon">
                    <img src="assets/img/icons/service2-icon3.svg" alt="">
                  </div>
                  <div class="space24"></div>
                  <div class="hadding2">
                    <h3><a href="#">Tourist Visa</a></h3>
                    <div class="space16"></div>
                    <p>A tourist visa allows you to visit another country for leisure, sightseeing, or short-term travel. We help you with hassle-free visa processing, document preparation, and travel planning so you can explore the world without stress.</p>
                    <div class="space16"></div>
                    <a class="learn-more2" href="#">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="" data-aos="fade-up" data-aos-duration="700">
                <div class="service1-box">
                  <div class="service1-icon">
                    <img src="assets/img/icons/service2-icon4.svg" alt="">
                  </div>
                  <div class="space24"></div>
                  <div class="hadding2">
                    <h3><a href="#">Post Landing Services </a></h3>
                    <div class="space16"></div>
                    <p>Globerise provides complete post landing support for students and travelers — including airport pickup, accommodation assistance, SIM cards, job search guidance, and local orientation for easy settlement abroad.

</p>
                    <div class="space16"></div>
                    <a class="learn-more2" href="#">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="" data-aos="fade-up" data-aos-duration="900">
                <div class="service1-box">
                  <div class="service1-icon">
                    <img src="assets/img/icons/service2-icon5.svg" alt="">
                  </div>
                  <div class="space24"></div>
                  <div class="hadding2">
                    <h3><a href="#">Currency Exchange</a></h3>
                    <div class="space16"></div>
                    <p>Globerise offers reliable currency exchange services with competitive rates for students, tourists, and business travelers. Get fast, secure, and hassle-free forex support for your international needs.

</p>
                    <div class="space16"></div>
                    <a class="learn-more2" href="#">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="" data-aos="fade-up" data-aos-duration="1000">
                <div class="service1-box">
                  <div class="service1-icon">
                    <img src="assets/img/icons/service2-icon6.svg" alt="">
                  </div>
                  <div class="space24"></div>
                  <div class="hadding2">
                    <h3><a href="#">Flight Ticket Reservation</a></h3>
                    <div class="space16"></div>
                    <p>Globerise offers affordable and flexible flight ticket reservations for students, tourists, and professionals. Get expert support for visa-compliant bookings, cancellations, and date changes — all in one place.</p>
                    <div class="space16"></div>
                    <a class="learn-more2" href="#">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div> 

          </div>
          <div class="space40"></div>
          <div class="row">
            <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-duration="900">
              <a href="#" class="theme-btn5 font-f-7">View All Services</a>
            </div>
          </div>
        </div>
        <img class="service2-shape1 aniamtion-key-2" src="assets/img/shapes/service2-shape2.svg" alt="">
        <img class="service2-shape2 aniamtion-key-2" src="assets/img/shapes/service2-shape1.svg" alt="">
      </div>
    
    <div class="media-mentions-section" style="background-color: #ffffff; padding: 60px 0;">
      <div class="container text-center">
        <h2 class="section-title"  data-aos="fade-up" data-aos-duration="700" style="font-weight: bold; margin-bottom: 40px;">Opportunities That Take You Places</h2>
        <div class="row justify-content-center" data-aos="fade-right" data-aos-duration="700">
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <div class="media-logo-wrapper">
              <img src="assets/img/media/media1.png" alt="Opportunities Mint" class="img-fluid media-logo">
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <div class="media-logo-wrapper">
              <img src="assets/img/media/media2.png" alt="Opportunities Mint" class="img-fluid media-logo">
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <div class="media-logo-wrapper">
              <img src="assets/img/media/media3.png" alt="Opportunities Chronicle" class="img-fluid media-logo">
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <div class="media-logo-wrapper">
              <img src="assets/img/media/media4.png" alt="Opportunities India" class="img-fluid media-logo">
            </div>
          </div> 
        </div>
      </div>
    </div>

    <style>
      .media-logo-wrapper {
        padding: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 120px;
        transition: all 0.3s ease;
      }

      .media-logo {
        max-width: 100%;
        max-height: 80px;
        width: auto;
        height: auto;
        border-radius: 50%;
        transition: all 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        object-fit: contain;
      }

      .media-logo-wrapper:hover {
        transform: translateY(-5px);
      }

      .media-logo-wrapper:hover .media-logo {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      }

      @media (max-width: 768px) {
        .media-logo {
          max-height: 60px;
        }
        
        .media-logo-wrapper {
          height: 100px;
          padding: 10px;
        }
      }
    </style>

      <!--=====service end=======-->
            <!--=====choose start=======-->
            <div class="choose2 sp3 _relative" style="background-color: #F2F5F5;">
              <div class="container">
                <div class="row">
                  <div class="col-lg-7 m-auto text-center">
                    <div class="hadding2">
                      <span data-aos="fade-up" data-aos-duration="700">Why Choose Us</span>
                      <div class="space16"></div>
                      <h1 data-aos="fade-up" data-aos-duration="900">Why Choose Globerise Consultants for Your Business Transformation</h1>
                    </div>
                  </div>
                </div>
                <div class="space30"></div>
                <div class="row align-items-center">
                  <div class="col-lg-4">
                    <div class="" data-aos="fade-right" data-aos-duration="700">
                      <div class="choose2-box choose2-left">
                        <div class="choose2-text-box">
                          <h4><a href="#">Initial Consultation</a></h4>
                          <div class="space12"></div>
                          <p>The journey begins with a personalized consultation. </p>
                        </div>
                        <div class="choose2-icon-box">
                          <img src="assets/img/icons/choose2-icon1.svg" alt="">
                        </div>
                      </div>
                    </div>


                    <div class="" data-aos="fade-right" data-aos-duration="900">
                      <div class="choose2-box choose2-right">
                        <div class="choose2-text-box">
                          <h4><a href="#">Application Submission</a></h4>
                          <div class="space12"></div>
                          <p>Once your application is prepared, we'll guide you through Globerise.</p>
                        </div>
                        <div class="choose2-icon-box">
                          <img src="assets/img/icons/choose2-icon2.svg" alt="">
                        </div>
                      </div>
                    </div>


                    <div class="" data-aos="fade-right" data-aos-duration="1100">
                      <div class="choose2-box choose2-left">
                        <div class="choose2-text-box">
                          <h4><a href="#">Customization</a></h4>
                          <div class="space12"></div>
                          <p>Based on the information gathered during the consultation,  </p>
                        </div>
                        <div class="choose2-icon-box">
                          <img src="assets/img/icons/choose2-icon3.svg" alt="">
                        </div>
                      </div>
                    </div>


                  </div>

                  <div class="col-lg-4">
                    <div class="choose2-main-image" data-aos="zoom-out" data-aos-duration="700">
                      <div class="choose2-image img50" >
                        <img src="assets/32ib_7b5g_220718.jpg" alt="">
                      </div>
                      <div class="choose2-img-shape aniamtion-key-2">
                        <img src="assets/img/shapes/hero2-img-element.svg" alt="">
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-4">
                    <div class="" data-aos="fade-left" data-aos-duration="700">
                      <div class="choose2-box2 choose2-right">
                        <div class="choose2-text-box2">
                          <h4><a href="#">Application Preparation</a></h4>
                          <div class="space12"></div>
                          <p>With the documents in hand, we'll meticulously prepare Your Globerise.</p>
                        </div>
                        <div class="choose2-icon-box2">
                          <img src="assets/img/icons/choose2-icon4.svg" alt="">
                        </div>
                      </div>
                    </div>


                    <div class="" data-aos="fade-left" data-aos-duration="900">
                      <div class="choose2-box2 choose2-left">
                        <div class="choose2-text-box2">
                          <h4><a href="#">Risk Management</a></h4>
                          <div class="space12"></div>
                          <p>With expertise in risk management and fraud prevention.  </p>
                        </div>
                        <div class="choose2-icon-box2">
                          <img src="assets/img/icons/choose2-icon5.svg" alt="">
                        </div>
                      </div>
                    </div>


                    <div class="" data-aos="fade-left" data-aos-duration="1100">
                      <div class="choose2-box2 choose2-right">
                        <div class="choose2-text-box2">
                          <h4><a href="#">Innovation</a></h4>
                          <div class="space12"></div>
                          <p>Globerise Consultants stays at the forefront of payment innovations  </p>
                        </div>
                        <div class="choose2-icon-box2">
                          <img src="assets/img/icons/choose2-icon6.svg" alt="">
                        </div>
                      </div>
                    </div>

                  </div>

                </div>

              </div>
              <img class="service2-shape1 aniamtion-key-2" src="assets/img/shapes/service2-shape2.svg" alt="">
        <img class="service2-shape2 aniamtion-key-2" src="assets/img/shapes/service2-shape1.svg" alt="">
            </div>

            <!--=====choose end=======-->

                  <!--=====countries start=======-->
      <div class="countries sp3 _relative">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 m-auto text-center">
              <div class="hadding2">
                <span data-aos="fade-up" data-aos-duration="700">Countries We Offer</span>
                <div class="space16"></div>
                <h1 data-aos="fade-up" data-aos-duration="1000">Globerise Consultants offers a range of services and expertise to help businesses.</h1>
              </div>
            </div>
          </div>
          <div class="space30"></div>
          <div class="row">

             <div class="col-lg-4">
                    <div class="countrie3-box">
                        <div class="countrie3-img img100 img5">
                            <img src="assets/img/image/countrie3-img1.png" alt="">
                        </div>
                        <div class="countrie3-hadding">
                            <h2><a href="#" class="weight-600">Dubai</a></h2>
                            <div class="space16"></div>
                            <p>Welcome to the Dubai, a harmonious blend of traditional Bedouin heritage and cosmopolitan modernity..</p>
                            <div class="space16"></div>
                            <a href="#" class="w-learn-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="countrie3-box">
                        <div class="countrie3-img img100 img5">
                            <img src="assets/img/image/countrie3-img2.png" alt="">
                        </div>
                        <div class="countrie3-hadding">
                            <h2><a href="#" class="weight-600">
                                Morisious</a></h2>
                                <div class="space16"></div>
                            <p>Welcome to the Morisious, a Seafood plays a central role, with dishes like octopus curry and grilled fish seasoned with island-grown herbs..</p>
                            <div class="space16"></div>
                            <a href="#" class="w-learn-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="countrie3-box">
                        <div class="countrie3-img img100 img5">
                            <img src="assets/img/image/countrie3-img3.png" alt="">
                        </div>
                        <div class="countrie3-hadding">
                            <h2><a href="#" class="weight-600">Europe</a></h2>
                            <div class="space16"></div>
                            <p>Welcome to the Europe, a historic center of Prague testify to Europe's rich historical tapestry.</p>
                            <div class="space16"></div>
                            <a href="#" class="w-learn-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="countrie3-box">
                        <div class="countrie3-img img100 img5">
                            <img src="assets/img/image/countrie3-img4.png" alt="">
                        </div>
                        <div class="countrie3-hadding">
                            <h2><a href="#" class="weight-600">
                                Canada</a></h2>
                                <div class="space16"></div>
                            <p>Welcome to the Canada ,embraces a multicultural identity, where people from all over the world live in harmony and celebrate their heritage.</p>
                            <div class="space16"></div>
                            <a href="#" class="w-learn-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="countrie3-box">
                        <div class="countrie3-img img100 img5">
                            <img src="assets/img/image/countrie3-img5.png" alt="">
                        </div>
                        <div class="countrie3-hadding">
                            <h2><a href="#" class="weight-600">Singapore</a></h2>
                            <div class="space16"></div>
                            <p>Welcome to the Singapore, multicultural identity is shaped by Chinese, Malay, Indian, and Eurasian communities living together in harmony..</p>
                            <div class="space16"></div>
                            <a href="#" class="w-learn-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="countrie3-box">
                        <div class="countrie3-img img100 img5">
                            <img src="assets/img/image/countrie3-img7.png" alt="">
                        </div>
                        <div class="countrie3-hadding">
                            <h2><a href="#" class="weight-600">
                                Australia</a></h2>
                                <div class="space16"></div>
                            <p>Welcome to the Australia, a blend of Indigenous heritage, British roots, and multicultural influences from around the world.</p>
                            <div class="space16"></div>
                            <a href="#" class="w-learn-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>


          </div>
          <div class="space50"></div>
          <div class="row">
            <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-duration="900">
              <a href="{{ route('countries') }}" class="theme-btn5 font-f-7">View All Countries</a>
            </div>
          </div>
        </div>
        
      </div>

      <!--=====countries end=======-->
 

      <!--=====testimonial start=======-->
      <div class="testimonial2 sp3">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="hadding2">
                <span data-aos="fade-right" data-aos-duration="700">Testimonials</span>
                <div class="space16"></div>
                <h1 data-aos="fade-right" data-aos-duration="900">Globerise Consultants: Hear From Our haapy Clients</h1>
                <div class="space16"></div>
                <p data-aos="fade-right" data-aos-duration="1100">Globerise Consultants doesn't just handle the paperwork; they genuinely care about their clients' success. My Consultants not only helped with the application but also gave me valuable tips for the interview.</p>
                <div class="space32"></div>
                <div class="" data-aos="fade-right" data-aos-duration="700">
                  <a href="#" class="theme-btn5 font-f-7">Read Our All Reviews </a>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="all-testimonial2" data-aos="fade-up-left" data-aos-duration="700">
                <div class="tes2-slider owl-carousel">

                  <div class="tes2-slider-single">
                    <div class="tes2-images">
                      <div class="tes2-img1 img50">
                        <img src="assets/namelogo/Rakshit.png" alt="">
                      </div>
                      <div class="tes2-img2">
                        <img src="assets/img/icons/tes2-icon.svg" alt="">
                      </div>
                      <div class="tes2-img3">
                        <img src="assets/img/shapes/tes2-shape.svg" alt="">
                      </div>
                    </div>
                      <div class="space24"></div>
                      <div class="tes2-hadding tes2-hadding2">
                        <p>“I was overwhelmed by the complexities of the visa application process, but Globerise Consultants turned it into a breeze. Their expert Consultants guided me through every step, ensuring all my documents were in order. </p>
                        <div class="space24"></div>
                        <ul class="tes2-review">
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="space16"></div>
                        <h6><a href="#">Rakshit Banta</a></h6>
                        <div class="space4"></div>
                        <span>10 month ago</span>
                      </div>
                  </div>

                  <div class="tes2-slider-single">
                    <div class="tes2-images">
                      <div class="tes2-img1 img50">
                        <img src="assets/namelogo/Akanchha.png" alt="">
                      </div>
                      <div class="tes2-img2">
                        <img src="assets/img/icons/tes2-icon.svg" alt="">
                      </div>
                      <div class="tes2-img3">
                        <img src="assets/img/shapes/tes2-shape.svg" alt="">
                      </div>
                    </div>
                      <div class="space24"></div>
                      <div class="tes2-hadding">
                        <p>“I was overwhelmed by the complexities of the visa application process, but Globerise Consultants turned it into a breeze. Their expert Consultants guided me through every step, ensuring all my documents were in order. </p>
                        <div class="space24"></div>
                        <ul class="tes2-review">
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="space16"></div>
                        <h6><a href="#">Akanchha Gupta</a></h6>
                        <div class="space4"></div>
                        <span>2 weeks ago</span>
                      </div>
                  </div>

                  <div class="tes2-slider-single">
                    <div class="tes2-images">
                      <div class="tes2-img1 img50">
                        <img src="assets/namelogo/krush.png" alt="">
                      </div>
                      <div class="tes2-img2">
                        <img src="assets/img/icons/tes2-icon.svg" alt="">
                      </div>
                      <div class="tes2-img3">
                        <img src="assets/img/shapes/tes2-shape.svg" alt="">
                      </div>
                    </div>
                      <div class="space24"></div>
                      <div class="tes2-hadding">
                        <p>“I was overwhelmed by the complexities of the visa application process, but Globerise Consultants turned it into a breeze. Their expert Consultants guided me through every step, ensuring all my documents were in order. </p>
                        <div class="space24"></div>
                        <ul class="tes2-review">
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="space16"></div>
                        <h6><a href="#">Krush Sharma</a></h6>
                        <div class="space4"></div>
                        <span>10 month ago</span>
                      </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--=====testimonial end=======--> 


      <!--=====cta start=======-->
 
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold">Our Presence</h2>
    <div class="row g-4">
      <!-- Mumbai -->
      <!--<div class="col-md-4">-->
      <!--  <div class="card h-100 border-0 shadow">-->
      <!--    <div class="card-header bg-danger text-white text-center fw-bold">Mumbai</div>-->
      <!--    <div class="card-body">-->
      <!--      <p><i class="bi bi-geo-alt-fill"></i> Cabin no: C7, 603, 1st Floor, A block, Trade Link Building, Kamala Mills Compound, Senapati Bapat Marg, Lower Parel, Mumbai - 400013</p>-->
      <!--      <p><i class="bi bi-telephone-fill"></i> +91-92 92 92 92 81</p>-->
      <!--      <p><i class="bi bi-envelope-fill"></i> info@nationwidevisas.com</p>-->
      <!--      <iframe src="https://www.google.com/maps?q=Trade+Link+Building+Mumbai&output=embed" width="100%" height="200" style="border:0;" allowfullscreen=""></iframe>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->

      <!-- Hyderabad -->
      <div class="col-md-6">
        <div class="card h-100 border-0 shadow" data-aos="fade-up-left" data-aos-duration="500">
          <div class="card-header bg-custome text-white text-center fw-bold">Delhi</div>
          <div class="card-body">
            <p><i class="bi bi-geo-alt-fill"></i> 408, 4th Floor, A-09 GD ITL Northex Tower Netaji Subhash Place, Delhi - 110034</p>
            <p><i class="bi bi-telephone-fill"></i> +91-7065195955 ,+91-9318355539</p>
            <p><i class="bi bi-envelope-fill"></i> info@globeriseConsultants.com</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6999.9057670837365!2d77.149731!3d28.691056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0233444361b5%3A0xef2dea9ab6276ee!2sNetaji%20Subhash%20Place%2C%20Shakurpur%2C%20Delhi%2C%20110034!5e0!3m2!1sen!2sin!4v1751547161624!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>

      <!-- Dubai -->
      <div class="col-md-6">
        <div class="card h-100 border-0 shadow" data-aos="fade-up-right" data-aos-duration="700">
          <div class="card-header bg-custome text-white text-center fw-bold">Dubai</div>
          <div class="card-body">
            <p><i class="bi bi-geo-alt-fill"></i> Al Owais building 2, floor M office no. M06 Al Rigga road, Deira Dubai</p>
            <p><i class="bi bi-telephone-fill"></i>+91-7065195955 ,+91-9318355539</p>
            <p><i class="bi bi-envelope-fill"></i>info@globeriseConsultants.com</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28865.42041995206!2d55.320888000000004!3d25.264612!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d9c3f9f0499%3A0x80bda852330a3ad!2sAl%20Owais%20building%20E%20block!5e0!3m2!1sen!2sin!4v1751547210689!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 

      <!--=====cta end=======-->

        @include('common.footer')
<div id="loaderOverlay" style="
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  background-color: rgba(255, 255, 255, 0.8);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1056; /* higher than modal */
  display: none;">
  <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
<script>
    $(document).ready(function() {
        // Toast function
         const loader = document.getElementById('loaderOverlay');
        function showToast(message, type = 'success') {
            const toastId = 'toast-' + Date.now();
            const iconClass = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle';
            const bgColor = type === 'success' ? '#d4edda' : '#f8d7da';
            const borderColor = type === 'success' ? '#c3e6cb' : '#f5c6cb';
            const textColor = type === 'success' ? '#155724' : '#721c24';
            
            const toast = `
                <div id="${toastId}" class="toast-notification" style="
                    background: ${bgColor};
                    border: 1px solid ${borderColor};
                    color: ${textColor};
                    padding: 12px 16px;
                    margin-bottom: 10px;
                    border-radius: 5px;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                    min-width: 300px;
                    max-width: 400px;
                    position: relative;
                    animation: slideInRight 0.3s ease-out;
                    font-size: 14px;
                    line-height: 1.4;
                ">
                    <i class="fa ${iconClass}" style="margin-right: 8px; font-size: 16px;"></i>
                    ${message}
                    <button type="button" class="toast-close" style="
                        position: absolute;
                        top: 8px;
                        right: 10px;
                        background: none;
                        border: none;
                        font-size: 16px;
                        cursor: pointer;
                        color: ${textColor};
                        opacity: 0.7;
                        padding: 0;
                        width: 20px;
                        height: 20px;
                    " onclick="closeToast('${toastId}')">×</button>
                </div>
            `;
            
            $('#toast-container').append(toast);
            
            // Auto remove after 5 seconds
            setTimeout(() => {
                closeToast(toastId);
            }, 5000);
        }
        
        // Close toast function
        window.closeToast = function(toastId) {
            const toast = $('#' + toastId);
            if (toast.length) {
                toast.css('animation', 'slideOutRight 0.3s ease-in');
                setTimeout(() => {
                    toast.remove();
                }, 300);
            }
        }
        
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            
            const form = $(this);
            const submitBtn = $('#submitBtn');
            const btnText = $('.btn-text');
            const btnLoading = $('.btn-loading');
            const loader = document.getElementById('loaderOverlay');
            
            // Show loading state and disable button
            submitBtn.prop('disabled', true);
            btnText.hide();
            btnLoading.show();
            
            // Prepare form data
            const formData = new FormData(this);
            
            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                       loader.style.display = 'none'; // Hide loader
                        //showToast(response.message, 'success');
                         alert("✅ " + response.message );
                        form[0].reset();
                        
                        // Reset nice-select dropdowns if they exist
                        if (typeof $.fn.niceSelect !== 'undefined') {
                            form.find('select').niceSelect('update');
                        }
                    }
                },
                error: function(xhr) {
                    let errorMessage = 'An error occurred. Please try again.';
                    
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    loader.style.display = 'none'; // Hide loader
                    alert("❌ Error: "+ response.message );
                    //showToast(errorMessage, 'error');
                },
                complete: function() {
                    // Reset button state - enable button after success or error
                    submitBtn.prop('disabled', false);
                    btnText.show();
                    btnLoading.hide();
                }
            });
        });
    });
    </script>

    <style>
    /* Toast Animations */
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOutRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
    
    /* Toast Styles */
    .toast-notification {
        transition: all 0.3s ease;
    }
    
    .toast-notification:hover {
        transform: translateX(-5px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.2) !important;
    }
    
    .toast-close:hover {
        opacity: 1 !important;
        background-color: rgba(0,0,0,0.1);
        border-radius: 50%;
    }
    
    .btn-loading {
        color: #ffffff;
    }
    
    .fa-spinner {
        animation: fa-spin 2s infinite linear;
    }
    
    @keyframes fa-spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    /* Responsive toast styles */
    @media (max-width: 768px) {
        #toast-container {
            top: 10px !important;
            right: 10px !important;
            left: 10px !important;
        }
        
        .toast-notification {
            min-width: auto !important;
            max-width: none !important;
            font-size: 13px !important;
        }
    }
    </style>
