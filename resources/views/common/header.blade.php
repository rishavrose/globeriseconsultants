<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Title -->
  <title>@yield('title', setting('site_title')) - {{ setting('site_tagline', 'Your Global Immigration Partner') }}</title>
  <meta name="description" content="@yield('meta_description', 'Globerise Consultants helps individuals and businesses achieve global success through expert consulting in education, immigration, business expansion, and career development.')" />
  <meta name="keywords" content="@yield('meta_keywords', 'Globerise Consultants, immigration, global education, study abroad, business consulting, career development, overseas opportunities')" />
  <meta name="author" content="Globerise Consultants" />
  <meta name="robots" content="index, follow" />

  <!-- Canonical -->
  <link rel="canonical" href="{{ url()->current() }}" />

  <!-- Open Graph (Facebook, LinkedIn) -->
  <meta property="og:title" content="@yield('og_title', setting('site_title') . ' - ' . setting('site_tagline', 'Your Global Immigration Partner'))" />
  <meta property="og:description" content="@yield('og_description', 'Expert consulting for education, immigration, business, and career success abroad.')" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:image" content="{{ asset('assets/img/logo/favicon.ico') }}" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="@yield('twitter_title', setting('site_title') . ' - ' . setting('site_tagline', 'Your Global Immigration Partner'))" />
  <meta name="twitter:description" content="@yield('twitter_description', 'Consulting services for study abroad, immigration, business setup and career growth internationally.')" />
  <meta name="twitter:image" content="{{ asset('assets/img/logo/favicon.ico') }}" />

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/logo/favicon.ico') }}" type="image/x-icon" />
  <link rel="apple-touch-icon" href="{{ asset('assets/img/logo/favicon.ico') }}" />

  <!-- Structured Data for SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Globerise Consultants",
    "url": "{{ config('app.url') }}",
    "logo": "{{ asset('assets/img/logo/Group-logo.png') }}",
    "contactPoint": [{
      "@type": "ContactPoint",
      "telephone": "+91-7065195955",
      "contactType": "customer service",
      "areaServed": "IN"
    }],
    "sameAs": [
      "https://www.facebook.com/",
      "https://www.linkedin.com/",
      "https://www.instagram.com/",
      "https://www.youtube.com/"
    ]
  }
  </script>
 <!--=====CSS=======-->
 <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
 <link rel="stylesheet" href="{{asset('assets/css/font-awesome-pro.css')}}"/>
 <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css') }}"/>
 <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/slick-slider.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/mobile-menu.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/header.css?v=1') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/blog-page.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/modal-video.min.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/comon.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/animation.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/visafast-unit.css') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/visafast-core.css?v=1') }}"/>
 <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>
 <style>
    .modal-content {
      border-radius: 1rem;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    .modal-title {
      font-weight: 600;
    }
    .form-control {
      border-radius: 0.5rem;
    }
    .btn-warning {
      background-color: #f6a903;
      border-color: #f6a903;
      color: white;
    }
    .btn-warning:hover {
      background-color: #d88a00;
      border-color: #d88a00;
    }
    .bg-custome{
            background-color: #f6a903;
    }
    
    
    .media-mentions-section img {
  max-height: 140px;
  object-fit: contain;
  /*filter: grayscale(100%);*/
  transition: filter 0.3s ease;
}
.media-mentions-section img:hover {
  filter: grayscale(0%);
}

  </style>
    <!--=====JQUERY=======-->
  <script src="{{asset('assets/js/jquery-3-6-0.min.js')}}"></script>
  </head>
  <body class="font-f-7">
  <!--=====progress START=======-->

    <!-- Preloader -->
     <section>
  <div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader ctn-preloader1">
      <div class="animation-preloader">
        <div class="spinner"></div>

        <!-- First Line: GLOBERISE -->
        <div class="txt-loading txt-main">
          <span data-text-preloader="G" class="letters-loading">G</span>
          <span data-text-preloader="L" class="letters-loading">L</span>
          <span data-text-preloader="O" class="letters-loading">O</span>
          <span data-text-preloader="B" class="letters-loading">B</span>
          <span data-text-preloader="E" class="letters-loading">E</span>
          <span data-text-preloader="R" class="letters-loading">R</span>
          <span data-text-preloader="I" class="letters-loading">I</span>
          <span data-text-preloader="S" class="letters-loading">S</span>
          <span data-text-preloader="E" class="letters-loading">E</span>
        </div>

        <!-- Second Line: CONSULTING --> 
        <div class="txt-loading txt-sub">
          <span data-text-preloader="C" class="letters-loading">C</span>
          <span data-text-preloader="O" class="letters-loading">O</span>
          <span data-text-preloader="N" class="letters-loading">N</span>
          <span data-text-preloader="S" class="letters-loading">S</span>
          <span data-text-preloader="U" class="letters-loading">U</span>
          <span data-text-preloader="L" class="letters-loading">L</span>
          <span data-text-preloader="T" class="letters-loading">T</span>
          <span data-text-preloader="A" class="letters-loading">A</span>
          <span data-text-preloader="N" class="letters-loading">N</span>
          <span data-text-preloader="T" class="letters-loading">T</span>
          <span data-text-preloader="S" class="letters-loading">S</span>
        </div>
      </div>

      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>
</section>

    


<!--=====progress END=======-->

<div class="paginacontainer"> 

  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
  </div>

</div> 

    <!--=====HEADER START=======-->
    <header>
      <div class="header-area header-area-all header-area-all2 d-none d-lg-block" id="header">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="header-elements _relative">
                <div class="site-logo home1-site-logo">
                  <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/img/logo/Group-logo.png') }}" class="logoimg" />
                  </a>
                </div>



                <div class="main-menu-ex main-menu-ex2">
                  <ul>
                    <li class="mega-dropdawn"><a href="{{ route('index') }}">Home</a> 
                      
                  </li>

                    <li class="has-dropdown"><a href="#">Service  <i class="fa-solid fa-angle-down"></i></a> 
                      <ul class="sub-menu">
                        <li  class="has-dropdown has-dropdown1"><a href="{{ route('studyvisa') }}">Study Visa</a>
                        
                        </li>
                        
                        <!--<li  class="has-dropdown has-dropdown1"><a href="{{ route('tourpackage') }}">Tour Packages</a>-->
                        <!--<li  class="has-dropdown has-dropdown1"><a href="{{ route('countries') }}">Country</a>-->
                         
                        <!--</li>-->
                        
                        <li  class="has-dropdown has-dropdown1"><a href="{{ route('touristvisa') }}">Tourist Visa</a>
                         
                        </li>
                        <li  class="has-dropdown has-dropdown1"><a href="{{ route('postlanding') }}">Post Landing Services</a>
                         
                        </li>
                        <li  class="has-dropdown has-dropdown1"><a href="{{ route('currencyexchange') }}">Currency Exchange</a>
                         
                        </li>
                          <li  class="has-dropdown has-dropdown1"><a href="{{ route('flightticket') }}">Flight Ticket Reservation</a>
                         
                        </li>

                      </ul>
                  </li>
                   <li class="has-dropdown"><a href="{{ route('countries') }}">Country</a> 
              
                      </li>
                    <li class=""><a href="{{ route('about') }}">About</a> 
              
                    </li>

                  <li  class="has-dropdown has-dropdown1"><a href="{{ route('testimonial') }}">Testimonial<span></span></a> 
                  </li> 
                   <li  class="has-dropdown has-dropdown1"><a href="{{ route('contact') }}">Contact<span></span></a>
                   
                  </li>

                 
          
                    </ul>
                </li>

            


                  
                      
                  </ul>
                </div>





                <div class="home2-header-buttons">
                  <div class="button2-all">
                    <!--<a href="{{ route('contact') }}" class="theme-btn3 font-f-7">Consult Our Experts</a>-->
                    
                    <button type="button" class="btn theme-btn5 cta2-button font-f-7" data-bs-toggle="modal" data-bs-target="#inquiryModal"> Consult Our Experts</button>
                  </div>
                </div>
                <div class="mobile-menu-bar d-lg-none">
                  <i class="fas fa-bars"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
<!--=====Mobile header start=======-->
           <div class="mobile-header mobile-header-4 d-block d-lg-none ">
            <div class="container-fluid">
              <div class="col-12">
                <div class="mobile-header-elements">
                  <div class="mobile-logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/img/logo/Group-logo.png') }}" alt="Globerise Consultants"></a>
                  </div>
                  <div class="mobile-nav-icon">
                    <i class="fa-solid fa-bars"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="mobile-sidebar d-block d-lg-none">
            <div class="menu-close-logo">
              <a href="{{ route('index') }}"><img src="{{ asset('assets/img/logo/Group-logo.png') }}" alt="Globerise Consultants"></a>
            </div>
            <div class="menu-close">
              <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="mobile-nav">
        
             <li class="mega-dropdawn"><a href="{{ route('index') }}">Home</a> 
                      
                  </li>
            
                   <li class="has-dropdown"><a href="#">Service  <i class="fa-solid fa-angle-down"></i></a> 
                      <ul class="sub-menu">
                        <li  class="has-dropdown has-dropdown1"><a href="{{ route('studyvisa') }}">Study Visa<span></span></a>
                        
                        </li>
                         
                        
                        <li  class="has-dropdown has-dropdown1"><a href="{{ route('touristvisa') }}">Tourist Visa<span></span></a>
                         
                        </li>
                        <li  class="has-dropdown has-dropdown1"><a href="#">Post Landing Services<span></span></a>
                         
                        </li>
                        <li  class="has-dropdown has-dropdown1"><a href="#">Currency Exchange<span></span></a>
                         
                        </li>
                          <li  class="has-dropdown has-dropdown1"><a href="#">Flight Ticket Reservation<span></span></a>
                         
                        </li>

                      </ul>
                  </li>
                  <li  class="has-dropdown has-dropdown1"><a href="{{ route('countries') }}">Country</a>
                         
                        </li>
                    <li class=""><a href="{{ route('about') }}">About</a> 
              
                    </li>

                  <li  class="has-dropdown has-dropdown1"><a href="{{ route('testimonial') }}">Testimonial<span></span></a> 
                  </li> 
                   <li  class="has-dropdown has-dropdown1"><a href="{{ route('contact') }}">Contact<span></span></a>
                   
                  </li>
              <li><a class="mobile-menu-button" href="{{ route('contact') }}">Get Started</a></li>
    
    
              
            </div>
    
            <div class="mobile-menu-social">
              <h3>Contact Info</h3>
              <div class="footer4-contact-info">
                <div class="mobile-menu-icon-box">
                  <div class="mobile-menu-icon">
                    <img src="assets/img/icons/mobile-menu-icon1.svg" alt="">
                  </div>
                  <div class="mobile-menu-a">
                    <a href="tel:7065195955">7065195955</a>
                  </div> 
                </div>
                   <div class="mobile-menu-icon-box">
                  <div class="mobile-menu-icon">
                    <img src="assets/img/icons/mobile-menu-icon1.svg" alt="">
                  </div>
                 <div class="mobile-menu-a">
                    <a href="tel:9318355539">9318355539</a>
                  </div>
                </div>
                

                <div class="mobile-menu-icon-box">
                  <div class="mobile-menu-icon">
                    <img src="assets/img/icons/mobile-menu-icon2.svg" alt="">
                  </div>
                  <div class="mobile-menu-a">
                    <a href="mailto:info@globeriseConsultants.com">info@globeriseConsultants.com</a>
                  </div>
                </div>
    
                <div class="mobile-menu-social">
                  <h3>Our Location</h3>
                  
                  <div class="mobile-menu-icon-box">
                    <div class="mobile-menu-icon">
                      <img src="assets/img/icons/mobile-menu-icon3.svg" alt="">
                    </div>
                    <div class="mobile-menu-a">
                      <a href="mailto:info@globeriseConsultants.com">408,4th Floor,A-09 GD ITL Northex Tower,Netaji Subhash Place Delhi-110034</a>
                    </div>
                  </div>
    
                </div>
    
                <div class="mobile-menu-social">
                  <h3>Social Links</h3>
                  
                  <div class="mobile-menu-social-icon">
                    <ul>
                      <li>
                        <a data-bs-toggle="tooltip" title="Linked in" href="#"><i class="fa-brands fa-facebook"></i></a>
                      </li>
                      <li>
                        <a data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a data-bs-toggle="tooltip" title="Instagram" href="#"><i class="fa-brands fa-youtube"></i></a>
                      </li>
                      <li>
                        <a data-bs-toggle="tooltip" title="TikTok" href="#"><i class="fa-brands fa-twitter"></i></a>
                      </li>
                    </ul>
                  </div>
    
                </div>
    
              </div>
    
            </div>
          </div>
          <!--=====Mobile header end=======-->

   
   
<!-- Modal -->
<div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <form id="inquiryForm" class="modal-content p-3">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title" id="inquiryModalLabel">📩 Inquiry Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pt-0">
        <div class="mb-3">
          <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
        </div>
        <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email Address*" required>
        </div>
        <div class="mb-3">
          <textarea name="message" class="form-control" placeholder="Write a Message*" rows="4" required></textarea>
        </div>
      </div>
      <div class="modal-footer border-0 pt-0">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Save changes</button>
      </div>
    </form>
  </div>
</div>
<!-- Loader (hidden by default) -->
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
document.getElementById('inquiryForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const form = this;
  const formData = new FormData(form);
  const loader = document.getElementById('loaderOverlay');

  loader.style.display = 'flex'; // Show loader

  fetch('send_mail.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    loader.style.display = 'none'; // Hide loader

    if (data.includes("Message sent successfully")) {
      const modal = bootstrap.Modal.getInstance(document.getElementById('inquiryModal'));
      modal.hide();
      alert("✅ Thank you! Your message has been sent.");
      form.reset();
    } else {
      alert("❌ Error: " + data);
    }
  })
  .catch(err => {
    loader.style.display = 'none'; // Hide loader
    console.error(err);
    alert("❌ Something went wrong.");
  });
});
</script>

    