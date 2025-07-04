<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', setting('site_title')) - {{ setting('site_tagline', 'Your Global Immigration Partner') }}</title>
    <meta name="description" content="{{ setting('site_description', 'Globe Rise Consultants provides comprehensive immigration and visa services.') }}">
    <meta name="keywords" content="{{ setting('meta_keywords', 'immigration, visa, consultants') }}">
    
    @if(setting('favicon'))
        <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . setting('favicon')) }}">
    @endif
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: {{ setting('primary_color', '#3498db') }};
            --secondary-color: {{ setting('secondary_color', '#2c3e50') }};
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .text-primary {
            color: var(--primary-color) !important;
        }
        
        .bg-primary {
            background-color: var(--primary-color) !important;
        }
        
        .navbar-brand img {
            max-height: 50px;
        }
        
        .footer {
            background-color: var(--secondary-color);
            color: white;
        }
        
        .social-links a {
            color: white;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }
        
        .social-links a:hover {
            color: var(--primary-color);
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                @if(setting('site_logo'))
                    <img src="{{ asset('storage/' . setting('site_logo')) }}" alt="{{ setting('site_title') }}" class="me-2">
                @endif
                <span>{{ setting('site_title', 'Globe Rise Consultants') }}</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>{{ setting('site_title', 'Globe Rise Consultants') }}</h5>
                    <p>{{ setting('site_description', 'Your trusted immigration partner.') }}</p>
                </div>
                
                <div class="col-md-4">
                    <h5>Contact Info</h5>
                    @if(setting('contact_email'))
                        <p><i class="fas fa-envelope me-2"></i> {{ setting('contact_email') }}</p>
                    @endif
                    @if(setting('contact_phone'))
                        <p><i class="fas fa-phone me-2"></i> {{ setting('contact_phone') }}</p>
                    @endif
                    @if(setting('contact_address'))
                        <p><i class="fas fa-map-marker-alt me-2"></i> {{ setting('contact_address') }}</p>
                    @endif
                </div>
                
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <div class="social-links">
                        @if(setting('facebook_url'))
                            <a href="{{ setting('facebook_url') }}" target="_blank"><i class="fab fa-facebook"></i></a>
                        @endif
                        @if(setting('twitter_url'))
                            <a href="{{ setting('twitter_url') }}" target="_blank"><i class="fab fa-twitter"></i></a>
                        @endif
                        @if(setting('instagram_url'))
                            <a href="{{ setting('instagram_url') }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        @endif
                        @if(setting('linkedin_url'))
                            <a href="{{ setting('linkedin_url') }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                        @endif
                        @if(setting('youtube_url'))
                            <a href="{{ setting('youtube_url') }}" target="_blank"><i class="fab fa-youtube"></i></a>
                        @endif
                    </div>
                    
                    @if(setting('business_hours'))
                        <div class="mt-3">
                            <h6>Business Hours</h6>
                            <small>{!! nl2br(e(setting('business_hours'))) !!}</small>
                        </div>
                    @endif
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">{{ setting('footer_text', '© 2024 Globe Rise Consultants. All rights reserved.') }}</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    @if(setting('google_analytics_id'))
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('google_analytics_id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ setting('google_analytics_id') }}');
        </script>
    @endif
    
    @stack('scripts')
</body>
</html>
