<?php
$show_success = isset($_GET['status']) && $_GET['status'] === 'success';
?>
<?php include 'includes/header.php'; ?>

<!-- Enhanced Hero Section with Moving Effects -->
<section class="hero-section" id="hero">
  <div class="video-container">
    <video class="hero-video" autoplay muted loop playsinline>
      <source src="https://videos.pexels.com/video-files/3045163/3045163-sd_640_360_24fps.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="video-overlay"></div>
    <!-- Floating particles effect -->
    <div class="floating-particles">
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
    </div>
  </div>
  
  <div class="container-fluid px-0">
    <div class="row g-0 align-items-center min-vh-100">
      <!-- Animated Text Content with Moving Effects -->
      <div class="col-lg-6 px-lg-5 px-4 py-5 hero-text hero-text-animated">
        <div class="animated-heading">
          <h1 class="display-3 fw-bold mb-3 hero-title-moving">
            <span class="text-line text-slide-in">Built for</span>
            <span class="text-line text-slide-in" style="animation-delay: 0.2s;">Restaurants,</span>
            <span class="text-line text-slide-in" style="animation-delay: 0.4s;">Built for</span>
            <span class="text-line text-slide-in text-highlight" style="animation-delay: 0.6s;">Speed.</span>
          </h1>
        </div>
        <p class="lead text-light mb-4 fade-in-text hero-subtitle-moving">The all-in-one POS platform designed to help you grow your business faster and smarter.</p>
        <div class="d-flex gap-3 flex-wrap fade-in-text fade-in-delay hero-cta-moving">
          <a href="#contact" class="btn btn-primary btn-lg rounded-pill px-5 btn-hover btn-pulse">Get Started</a>
          <button class="btn btn-outline-light btn-lg rounded-pill px-5 btn-hover-outline" onclick="openVideoFullscreen(event)">Watch Video</button>
        </div>
        <!-- Trust indicators -->
        <div class="hero-trust-indicators mt-4">
          <div class="d-flex gap-4 flex-wrap align-items-center">
            <div class="trust-item">
              <span class="trust-number">156K+</span>
              <span class="trust-label">Active Users</span>
            </div>
            <div class="trust-item">
              <span class="trust-number">4.9/5</span>
              <span class="trust-label">Rating</span>
            </div>
            <div class="trust-item">
              <span class="trust-number">24/7</span>
              <span class="trust-label">Support</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Enhanced Video Mockup with Image - Desktop Only -->
      <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center py-5 hero-image-wrapper">
        <div class="mockup-container">
          <div class="mockup-frame">
            <!-- Device Frame with Orange Border -->
            <div class="device-mockup tablet-mockup" onclick="openVideoFullscreen(event)" style="cursor: pointer;">
              <div class="device-frame">
                <video 
                  class="device-video" 
                  autoplay 
                  muted 
                  loop 
                  playsinline
                  preload="auto">
                  <source src="https://videos.pexels.com/video-files/5632370/5632370-hd_1920_1080_30fps.mp4" type="video/mp4">
                </video>
              </div>
              <!-- Device Notch (for tablet appearance) -->
              <div class="device-notch"></div>
              <!-- Play Button Overlay - Hidden on autoplay, shown on hover -->
              <div class="play-button-overlay play-overlay-hover">
                <div class="play-icon">
                  <svg width="60" height="60" viewBox="0 0 24 24" fill="white" stroke="white" stroke-width="1">
                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                  </svg>
                </div>
                <span class="play-text">Meet QuickPOS in 90 seconds</span>
              </div>
            </div>
          </div>
          <div class="mockup-shadow"></div>
          <div class="mockup-glow"></div>
          <!-- Additional Hero Image -->
          <div class="hero-side-image">
            <img src="https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=400" 
                 alt="Restaurant POS System" 
                 class="hero-decorative-image">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Full Screen Video Modal with black background - no autoplay, user must click play -->
<div id="videoFullscreen" class="video-fullscreen-modal">
  <div class="video-fullscreen-close" onclick="closeVideoFullscreen()">&times;</div>
  <div class="fullscreen-video-wrapper">
    <video 
      id="fullscreenVideoPlayer"
      class="fullscreen-video" 
      controls 
      playsinline>
      <source src="https://videos.pexels.com/video-files/5632370/5632370-hd_1920_1080_30fps.mp4" type="video/mp4">
    </video>
  </div>
</div>

<!-- Features Section -->
<section class="features-section py-5" id="features">
  <div class="container py-5">
    <div class="text-center mb-5 section-title">
      <h2 class="display-4 fw-bold mb-3">Everything you need to run your business</h2>
      <p class="lead text-muted">Comprehensive tools designed for modern restaurants and retail</p>
    </div>
    
    <div class="row g-4">
      <!-- Feature Card 1 -->
      <div class="col-md-4">
        <div class="feature-card h-100 card-slide-up">
          <div class="feature-icon mb-4">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
              <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
          </div>
          <h3 class="fw-bold mb-3">Inventory Management</h3>
          <p class="text-muted">Track stock levels in real-time and automate reordering to prevent stockouts and waste.</p>
        </div>
      </div>

      <!-- Feature Card 2 -->
      <div class="col-md-4">
        <div class="feature-card h-100 card-slide-up" style="animation-delay: 0.1s;">
          <div class="feature-icon mb-4">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="12" y1="2" x2="12" y2="22"></line>
              <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
            </svg>
          </div>
          <h3 class="fw-bold mb-3">Real-time Analytics</h3>
          <p class="text-muted">Get actionable insights into sales, profits, and customer trends to make smarter decisions.</p>
        </div>
      </div>

      <!-- Feature Card 3 -->
      <div class="col-md-4">
        <div class="feature-card h-100 card-slide-up" style="animation-delay: 0.2s;">
          <div class="feature-icon mb-4">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="1"></circle>
              <path d="M12 1v6m4-4l-4 4m4 0l-4-4"></path>
              <path d="M12 17v6m4-4l-4 4m4 0l-4-4"></path>
            </svg>
          </div>
          <h3 class="fw-bold mb-3">Contactless Payments</h3>
          <p class="text-muted">Accept all payment methods safely and securely with our integrated payment processing.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Platform Features Section -->
<section class="platform-features-section py-5" id="platform-features">
  <div class="container py-5">
    <div class="text-center mb-5">
      <h2 class="display-4 fw-bold mb-3">Built for Reliability</h2>
      <p class="lead text-muted">Enterprise-grade features that keep your business running smoothly</p>
    </div>
    
    <div class="row g-4 justify-content-center">
      <!-- Connected Platform -->
      <div class="col-lg-4 col-md-6">
        <div class="platform-feature-card">
          <div class="platform-feature-icon">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path>
              <path d="M16 16l-2-2 2-2"></path>
              <path d="M12 18h.01"></path>
            </svg>
            <div class="icon-checkmark">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
              </svg>
            </div>
          </div>
          <h3 class="fw-bold mb-3">Connected Platform</h3>
          <p class="text-muted">Accessible from the cloud, wherever you are.</p>
        </div>
      </div>

      <!-- 24/7 Support -->
      <div class="col-lg-4 col-md-6">
        <div class="platform-feature-card">
          <div class="platform-feature-icon">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
              <path d="M21 3v5h-5"></path>
              <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
              <path d="M3 21v-5h5"></path>
            </svg>
          </div>
          <h3 class="fw-bold mb-3">24/7 Support</h3>
          <p class="text-muted">Real people with real solutions, here when you need them.</p>
        </div>
      </div>

      <!-- Offline Mode -->
      <div class="col-lg-4 col-md-6">
        <div class="platform-feature-card">
          <div class="platform-feature-icon">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M1 1l22 22"></path>
              <path d="M16.72 11.06A10.94 10.94 0 0 1 19 12.55"></path>
              <path d="M5 12.55a10.94 10.94 0 0 1 5.17-2.39"></path>
              <path d="M10.71 5.05A16 16 0 0 1 22.58 9"></path>
              <path d="M1.42 9a15.91 15.91 0 0 1 4.7-2.88"></path>
              <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
              <line x1="12" y1="20" x2="12.01" y2="20"></line>
            </svg>
          </div>
          <h3 class="fw-bold mb-3">Reliable Offline Mode</h3>
          <p class="text-muted">Keeps your business running when the Wi-Fi isn't.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Business Types Section -->
<section class="business-types-section py-5" id="business-types">
  <div class="container-fluid px-0">
    <div class="business-types-hero">
      <div class="business-types-overlay"></div>
      <div class="container py-5">
        <div class="row align-items-center min-vh-75">
          <div class="col-lg-12 text-center">
            <h2 class="display-4 fw-bold mb-4 text-white business-types-title">Building customizable solutions for businesses of all flavors</h2>
            <p class="lead text-white-50 mb-5 business-types-subtitle">See how we personalize for any service model or scale.</p>
            
            <div class="row g-3 justify-content-center">
              <div class="col-lg-4 col-md-6">
                <a href="#contact" class="business-type-btn">
                  Full-Service Restaurants <span>→</span>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="#contact" class="business-type-btn">
                  Quick-Service Restaurants <span>→</span>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="#contact" class="business-type-btn">
                  Enterprise Businesses <span>→</span>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="#contact" class="business-type-btn">
                  Retail Businesses <span>→</span>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="#contact" class="business-type-btn">
                  Hybrid Businesses <span>→</span>
                </a>
              </div>
              <div class="col-lg-4 col-md-6">
                <a href="#contact" class="business-type-btn">
                  New Businesses <span>→</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Customer Success Section -->
<section class="customer-success-section py-5" id="customer-success">
  <div class="container py-5">
    <div class="text-center mb-5">
      <div class="section-badge mb-3">
        <span class="badge-pill">⭐ TRUSTED BY LEADERS</span>
      </div>
      <h2 class="display-4 fw-bold mb-3">
        <span class="locations-title-animated">locations and counting</span>
      </h2>
      <p class="lead text-muted">Join thousands of successful businesses using QuickPOS</p>
    </div>
    
    <div class="row g-4">
      <!-- Customer Card 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="customer-card">
          <div class="customer-image brewery-image">
            <video 
              class="customer-video" 
              autoplay 
              muted 
              loop 
              playsinline
              preload="auto">
              <source src="https://videos.pexels.com/video-files/3194518/3194518-sd_640_360_24fps.mp4" type="video/mp4">
            </video>
            <div class="customer-overlay"></div>
          </div>
          <div class="customer-content">
            <h4 class="customer-name">HARPOON</h4>
            <span class="customer-type">BREWERY</span>
          </div>
        </div>
      </div>

      <!-- Customer Card 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="customer-card">
          <div class="customer-image dining-image">
            <video 
              class="customer-video" 
              autoplay 
              muted 
              loop 
              playsinline
              preload="auto">
              <source src="https://videos.pexels.com/video-files/3194519/3194519-sd_640_360_24fps.mp4" type="video/mp4">
            </video>
            <div class="customer-overlay"></div>
          </div>
          <div class="customer-content">
            <h4 class="customer-name">odd duck</h4>
            <span class="customer-type">CASUAL DINING</span>
          </div>
        </div>
      </div>

      <!-- Customer Card 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="customer-card">
          <div class="customer-image housepitality-image">
            <video 
              class="customer-video" 
              autoplay 
              muted 
              loop 
              playsinline
              preload="auto">
              <source src="https://videos.pexels.com/video-files/3194520/3194520-sd_640_360_24fps.mp4" type="video/mp4">
            </video>
            <div class="customer-overlay"></div>
          </div>
          <div class="customer-content">
            <h4 class="customer-name">HOUSEPITALITY</h4>
            <span class="customer-type-small">FAMILY</span>
            <span class="customer-type">CASUAL DINING</span>
          </div>
        </div>
      </div>

      <!-- Customer Card 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="customer-card">
          <div class="customer-image taco-image">
            <video 
              class="customer-video" 
              autoplay 
              muted 
              loop 
              playsinline
              preload="auto">
              <source src="https://videos.pexels.com/video-files/3194521/3194521-sd_640_360_24fps.mp4" type="video/mp4">
            </video>
            <div class="customer-overlay"></div>
          </div>
          <div class="customer-content">
            <h4 class="customer-name">VELVET TACO</h4>
            <span class="customer-type">FAST CASUAL</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Locations Section - Enhanced -->
<section class="locations-section py-5" id="locations">
  <div class="container py-5">
    <!-- Section Header -->
    <div class="text-center mb-5 section-title">
      <div class="section-badge mb-3">
        <span class="badge-pill">🌍 TRUSTED GLOBALLY</span>
      </div>
      <h2 class="display-4 fw-bold mb-3 locations-title-animated">
        We're in a business near you
      </h2>
      <p class="lead text-muted locations-subtitle">
        Trusted by thousands of restaurants, cafes, and retail businesses worldwide
      </p>
      <div class="locations-stats mt-4">
        <div class="stat-item">
          <h3 class="stat-number">156,000+</h3>
          <p class="stat-label">Active Locations</p>
        </div>
      </div>
    </div>
    
    <!-- Location Cards Grid -->
    <div class="row g-4">
      <!-- Location Card 1: Brewery -->
      <div class="col-lg-6 col-md-6">
        <div class="location-card-enhanced">
          <div class="location-card-wrapper">
            <!-- Video Background -->
            <div class="location-video-container">
              <video 
                class="location-video-enhanced" 
                autoplay 
                muted 
                loop 
                playsinline
                poster="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 9'%3E%3C/svg%3E">
                <source src="https://cdn.pixabay.com/video/2017/10/19/12513-240358867_large.mp4" type="video/mp4">
              </video>
              <div class="video-overlay-enhanced"></div>
            </div>

            <!-- Content Overlay -->
            <div class="location-content">
              <div class="location-badge brewery-badge">
                🍺 BREWERY
              </div>
              <h3 class="location-title-enhanced">Brewery & Bar</h3>
              <p class="location-description">Perfect for craft beverage businesses with high-volume ordering</p>
              
              <div class="location-features">
                <div class="feature">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                  </svg>
                  <span>Multi-tap Management</span>
                </div>
                <div class="feature">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                  </svg>
                  <span>Event Scheduling</span>
                </div>
              </div>

              <a href="javascript:void(0)" class="btn-learn-more" onclick="playLocationVideo(event, 'brewery')">
                <span>Watch Demo</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Location Card 2: Casual Dining -->
      <div class="col-lg-6 col-md-6">
        <div class="location-card-enhanced">
          <div class="location-card-wrapper">
            <!-- Video Background -->
            <div class="location-video-container">
              <video 
                class="location-video-enhanced" 
                autoplay 
                muted 
                loop 
                playsinline
                poster="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 9'%3E%3C/svg%3E">
                <source src="https://cdn.pixabay.com/video/2022/11/24/140297-774837967_large.mp4 " type="video/mp4">
              </video>
              <div class="video-overlay-enhanced"></div>
            </div>

            <!-- Content Overlay -->
            <div class="location-content">
              <div class="location-badge dining-badge">
                🍽️ CASUAL DINING
              </div>
              <h3 class="location-title-enhanced">Casual Dining</h3>
              <p class="location-description">Streamline table management and order delivery</p>
              
              <div class="location-features">
                <div class="feature">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                  </svg>
                  <span>Table Reservations</span>
                </div>
                <div class="feature">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                  </svg>
                  <span>Server Management</span>
                </div>
              </div>

              <a href="javascript:void(0)" class="btn-learn-more" onclick="playLocationVideo(event, 'dining')">
                <span>Watch Demo</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Location Card 3: Cafe & Bakery -->
      <div class="col-lg-6 col-md-6">
        <div class="location-card-enhanced">
          <div class="location-card-wrapper">
            <!-- Video Background -->
            <div class="location-video-container">
              <video 
                class="location-video-enhanced" 
                autoplay 
                muted 
                loop 
                playsinline
                poster="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 9'%3E%3C/svg%3E">
                <source src=" https://cdn.pixabay.com/video/2024/12/12/246385_large.mp4" type="video/mp4">
              </video>
              <div class="video-overlay-enhanced"></div>
            </div>

            <!-- Content Overlay -->
            <div class="location-content">
              <div class="location-badge cafe-badge">
                ☕ CAFE & BAKERY
              </div>
              <h3 class="location-title-enhanced">Cafe & Bakery</h3>
              <p class="location-description">Manage pastries, baked goods, and specialty beverages</p>
              
              <div class="location-features">
                <div class="feature">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                  </svg>
                  <span>Batch Tracking</span>
                </div>
                <div class="feature">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                  </svg>
                  <span>Pre-orders</span>
                </div>
              </div>

              <a href="javascript:void(0)" class="btn-learn-more" onclick="playLocationVideo(event, 'cafe')">
                <span>Watch Demo</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Location Card 4: Fast Casual -->
      <div class="col-lg-6 col-md-6">
        <div class="location-card-enhanced">
          <div class="location-card-wrapper">
            <!-- Video Background -->
            <div class="location-video-container">
              <video 
                class="location-video-enhanced" 
                autoplay 
                muted 
                loop 
                playsinline
                poster="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 9'%3E%3C/svg%3E">
                <source src=" https://cdn.pixabay.com/video/2016/02/29/2339-157269920_tiny.mp4" type="video/mp4">
              </video>
              <div class="video-overlay-enhanced"></div>
            </div>

            <!-- Content Overlay -->
            <div class="location-content">
              <div class="location-badge fastcasual-badge">
                ⚡ FAST CASUAL
              </div>
              <h3 class="location-title-enhanced">Fast Casual</h3>
              <p class="location-description">Quick service with counter ordering and takeout focus</p>
              
              <div class="location-features">
                <div class="feature">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                  </svg>
                  <span>Quick Ordering</span>
                </div>
                <div class="feature">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                  </svg>
                  <span>Mobile Integration</span>
                </div>
              </div>

              <a href="javascript:void(0)" class="btn-learn-more" onclick="playLocationVideo(event, 'fastcasual')">
                <span>Watch Demo</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Location Video Modal -->
<div id="locationVideoModal" class="location-video-modal" style="display: none;">
  <div class="location-modal-close" onclick="closeLocationVideo()">&times;</div>
  <div class="location-modal-content">
    <video id="locationVideoPlayer" class="location-modal-video" controls playsinline>
      <source src="" type="video/mp4">
    </video>
  </div>
</div>

<!-- Pricing Section -->
<?php include 'sections/pricing.php'; ?>

<!-- Success Alert -->
<?php if ($show_success): ?>
<div class="alert alert-success alert-dismissible fade show mx-3 mt-3" role="alert">
  <strong>Thank you!</strong> Your demo has been scheduled. Check your email for confirmation details.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<!-- Success Banner - Green Alert (ONLY shows on successful form submission) -->
<div id="successBanner" class="alert alert-success alert-dismissible fade position-fixed top-0 start-0 end-0 m-3" role="alert" style="display: none !important; z-index: 9999; max-width: 600px; margin-left: auto !important; margin-right: auto !important; left: 50% !important; transform: translateX(-50%); border-radius: 12px;">
  <div class="d-flex align-items-center gap-2">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
      <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
    </svg>
    <div>
      <strong id="bannerTitle">Success!</strong>
      <span id="bannerMessage"> Your demo request has been received.</span>
    </div>
  </div>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<!-- Contact Section - Enhanced with Animations & Transitions -->
<section id="contact" class="contact-section-optimized py-0">
  <div class="container-fluid px-0">
    <div class="row g-0 align-items-stretch" style="min-height: 100vh;">
      <!-- Orange Left Side - Call to Action (Toast Style) -->
      <div class="col-lg-5 contact-left-side-toast px-lg-5 px-4 d-flex flex-column justify-content-center position-relative">
        <!-- Circuit Pattern Overlay -->
        <div class="toast-pattern-overlay"></div>
        
        <!-- Main Heading -->
        <h1 class="contact-main-heading text-white fw-bold mb-3" style="font-size: 2.5rem; position: relative; z-index: 2;">
          See QuickPOS in action
        </h1>

        <!-- Subheading -->
        <p class="contact-subheading text-white mb-5" style="font-size: 1.1rem; line-height: 1.6; position: relative; z-index: 2;">
          Want to know what QuickPOS can do for you? Get a personalized online demo, no credit card required.
        </p>
        
        <!-- Award Badges (Toast Style) -->
        <div class="toast-award-badges d-flex gap-3 flex-wrap mt-auto" style="position: relative; z-index: 2;">
          <!-- Badge 1: Grid Leader -->
          <div class="toast-award-badge badge-yellow">
            <div class="badge-g2-icon">G2</div>
            <div class="badge-content">
              <div class="badge-season">SUMMER 2025</div>
              <div class="badge-title">Grid Leader</div>
            </div>
          </div>

          <!-- Badge 2: Fastest Implementation -->
          <div class="toast-award-badge badge-blue">
            <div class="badge-g2-icon">G2</div>
            <div class="badge-content">
              <div class="badge-season">SUMMER 2025</div>
              <div class="badge-title">Fastest Implementation</div>
              <div class="badge-subtitle">MID-MARKET</div>
            </div>
          </div>

          <!-- Badge 3: Momentum Leader -->
          <div class="toast-award-badge badge-yellow">
            <div class="badge-g2-icon">G2</div>
            <div class="badge-content">
              <div class="badge-season">SUMMER 2025</div>
              <div class="badge-title">Momentum Leader</div>
            </div>
          </div>
        </div>
      </div>

      <!-- White Right Side - Contact Form (Toast Style) -->
      <div class="col-lg-7 px-lg-5 px-4 d-flex align-items-center justify-content-center position-relative" style="background: white; overflow-y: auto; max-height: 100vh;">
        <!-- Pattern Extension from Left -->
        <div class="toast-pattern-extension"></div>
        
        <div class="contact-form-wrapper w-100" style="max-width: 600px; position: relative; z-index: 2;">
          <!-- Form Header with Icons -->
          <div class="form-header-toast mb-4 d-flex justify-content-between align-items-start">
            <h2 class="fw-bold mb-0" style="font-size: 1.75rem; color: #1a1a1a;">Let's schedule your free demo</h2>
            <div class="form-control-icons d-flex gap-2">
              <button type="button" class="form-icon-btn" aria-label="Minimize" title="Minimize">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
              </button>
              <button type="button" class="form-icon-btn" aria-label="Close" title="Close">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <line x1="18" y1="6" x2="6" y2="18"></line>
                  <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
              </button>
            </div>
          </div>

          <!-- Error Alert -->
          <div id="errorAlert" class="alert alert-danger alert-dismissible fade" role="alert" style="display: none; margin-bottom: 1.5rem; border-radius: 8px; border: 1px solid #dc3545;">
            <div id="errorMessage" style="font-size: 0.9rem;"></div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

          <!-- Contact Form (Toast Style) -->
          <form method="POST" action="contact-handler.php" class="contact-form-toast" id="contactForm" novalidate>
            <!-- Full Name -->
            <div class="form-group-toast mb-3">
              <label for="name" class="form-label-toast">
                First and last name<span class="text-danger">*</span>
              </label>
              <input 
                type="text" 
                class="form-control-toast" 
                id="name" 
                name="name" 
                placeholder="First and last name"
                required
                autocomplete="name">
              <div class="invalid-feedback-toast" id="nameError"></div>
            </div>

            <!-- Email -->
            <div class="form-group-toast mb-3">
              <label for="email" class="form-label-toast">
                Email address<span class="text-danger">*</span>
              </label>
              <input 
                type="email" 
                class="form-control-toast" 
                id="email" 
                name="email" 
                placeholder="Email address"
                required
                autocomplete="email">
              <div class="invalid-feedback-toast" id="emailError"></div>
            </div>

            <!-- Phone -->
            <div class="form-group-toast mb-3">
              <label for="phone" class="form-label-toast">
                Phone number<span class="text-danger">*</span>
              </label>
              <input 
                type="tel" 
                class="form-control-toast" 
                id="phone" 
                name="phone" 
                placeholder="Phone number"
                required
                autocomplete="tel">
              <div class="invalid-feedback-toast" id="phoneError"></div>
            </div>

            <!-- Restaurant Name -->
            <div class="form-group-toast mb-3">
              <label for="business" class="form-label-toast">
                Restaurant name<span class="text-danger">*</span>
              </label>
              <input 
                type="text" 
                class="form-control-toast" 
                id="business" 
                name="business" 
                placeholder="Restaurant name"
                required>
              <div class="invalid-feedback-toast" id="businessError"></div>
            </div>

            <!-- ZIP Code -->
            <div class="form-group-toast mb-3">
              <label for="zipcode" class="form-label-toast">
                Primary restaurant location zip code<span class="text-danger">*</span>
              </label>
              <input 
                type="text" 
                class="form-control-toast" 
                id="zipcode" 
                name="zipcode" 
                placeholder="Primary restaurant location zip code"
                required
                pattern="[0-9]{5}">
              <div class="invalid-feedback-toast" id="zipcodeError"></div>
            </div>

            <!-- Role Dropdown -->
            <div class="form-group-toast mb-4">
              <label for="type" class="form-label-toast">
                Which best describes you?<span class="text-danger">*</span>
              </label>
              <select class="form-control-toast" id="type" name="type" required>
                <option value="" selected disabled>Which best describes you?</option>
                <option value="owner">Restaurant Owner</option>
                <option value="manager">Manager</option>
                <option value="operator">Operator</option>
                <option value="other">Other</option>
              </select>
              <div class="invalid-feedback-toast" id="typeError"></div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-toast-demo w-100 py-3 fw-bold mb-3">
              Get a Demo
            </button>
          </form>

          <!-- Success Message -->
          <div class="form-success-message" id="successMessage" style="display: none;">
            <div class="success-icon" style="width: 56px; height: 56px; margin: 0 auto 1rem;">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <h6 class="fw-bold mb-1" style="font-size: 1rem;">Demo Scheduled!</h6>
            <p class="mb-0" style="font-size: 0.9rem;">Redirecting to confirmation page...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
function openVideoFullscreen(event) {
  event.stopPropagation();
  const modal = document.getElementById('videoFullscreen');
  modal.style.display = 'flex';
  
  // Stop autoplay on small mockup video when fullscreen opens
  const mockupVideo = document.querySelector('.device-video');
  if (mockupVideo) {
    mockupVideo.pause();
  }
  
  const video = document.getElementById('fullscreenVideoPlayer');
  setTimeout(() => {
    // Fullscreen video does NOT autoplay - user must click play button
    video.currentTime = 0;
  }, 100);
}
function closeVideoFullscreen() {
  const modal = document.getElementById('videoFullscreen');
  modal.style.display = 'none';
  const video = document.getElementById('fullscreenVideoPlayer');
  video.pause();
  video.currentTime = 0;
  
  // Resume autoplay on small mockup video when fullscreen closes
  const mockupVideo = document.querySelector('.device-video');
  if (mockupVideo) {
    mockupVideo.play();
  }
}

// Close on outside click
document.getElementById('videoFullscreen')?.addEventListener('click', function(e) {
  if (e.target === this) closeVideoFullscreen();
});

// Close on ESC key
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeVideoFullscreen();
  }
});

// Contact Form Handler - ONLY show banner on SUCCESSFUL submission with ALL fields
document.getElementById('contactForm')?.addEventListener('submit', async function(e) {
  e.preventDefault();
  
  const form = this;
  const errorAlert = document.getElementById('errorAlert');
  const successMessage = document.getElementById('successMessage');
  const successBanner = document.getElementById('successBanner');
  const submitBtn = form.querySelector('button[type="submit"]');
  const originalBtnText = submitBtn.textContent;
  
  // ALWAYS hide all messages at start
  errorAlert.style.display = 'none';
  successMessage.style.display = 'none';
  if (successBanner) {
    successBanner.style.display = 'none';
  }
  
  // Disable submit button and show loading state
  submitBtn.disabled = true;
  submitBtn.textContent = 'Processing...';
  
  try {
    const formData = new FormData(form);
    const response = await fetch('contact-handler.php', {
      method: 'POST',
      body: formData
    });
    
    const data = await response.json();
    
    if (data.success) {
      // SUCCESS: Show both messages
      successMessage.style.display = 'block';
      
      // Show green banner ONLY on successful submission (when ALL fields are filled and validated)
      if (successBanner) {
        document.getElementById('bannerTitle').textContent = 'Success!';
        document.getElementById('bannerMessage').textContent = ' Your response has been stored.';
        successBanner.style.display = 'block';
        successBanner.classList.add('banner-success-animation');
        
        // Auto-hide banner after 5 seconds
        setTimeout(() => {
          if (successBanner) {
            successBanner.style.display = 'none';
          }
        }, 5000);
      }
      
      // Reset form
      form.reset();
      
      console.log('Demo scheduled for:', data.data.name, data.data.email);
      
      // Redirect after 2 seconds
      setTimeout(() => {
        window.location.href = 'thank-you.html';
      }, 2000);
    } else {
      // ERROR: Show ONLY error alert - NO green banner
      const errorList = data.errors.map(err => `
        <div class="d-flex gap-2 align-items-start">
          <span>✕</span>
          <span>${err}</span>
        </div>
      `).join('');
      
      document.getElementById('errorMessage').innerHTML = errorList;
      errorAlert.style.display = 'block';
      // Make sure banner stays hidden
      if (successBanner) {
        successBanner.style.display = 'none';
      }
      // Re-enable submit button
      submitBtn.disabled = false;
      submitBtn.textContent = originalBtnText;
      
      // Scroll to error
      errorAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
  } catch (error) {
    console.error('Error:', error);
    document.getElementById('errorMessage').innerHTML = `
      <div class="d-flex gap-2 align-items-start">
        <span>✕</span>
        <span>An error occurred. Please try again.</span>
      </div>
    `;
    errorAlert.style.display = 'block';
    // Make sure banner stays hidden
    if (successBanner) {
      successBanner.style.display = 'none';
    }
    
    submitBtn.disabled = false;
    submitBtn.textContent = originalBtnText;
    
    errorAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }
});

// Enhanced Form Validation (Toast Style)
const form = document.getElementById('contactForm');
if (form) {
  const fields = {
    name: {
      element: document.getElementById('name'),
      error: document.getElementById('nameError'),
      validate: (value) => {
        if (!value.trim()) return 'First and last name is required';
        if (value.trim().split(' ').length < 2) return 'Please enter your full name';
        return '';
      }
    },
    email: {
      element: document.getElementById('email'),
      error: document.getElementById('emailError'),
      validate: (value) => {
        if (!value.trim()) return 'Email address is required';
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) return 'Please enter a valid email address';
        return '';
      }
    },
    phone: {
      element: document.getElementById('phone'),
      error: document.getElementById('phoneError'),
      validate: (value) => {
        if (!value.trim()) return 'Phone number is required';
        const phoneClean = value.replace(/\D/g, '');
        if (phoneClean.length < 10) return 'Phone number must have at least 10 digits';
        return '';
      }
    },
    business: {
      element: document.getElementById('business'),
      error: document.getElementById('businessError'),
      validate: (value) => {
        if (!value.trim()) return 'Restaurant name is required';
        return '';
      }
    },
    zipcode: {
      element: document.getElementById('zipcode'),
      error: document.getElementById('zipcodeError'),
      validate: (value) => {
        if (!value.trim()) return 'ZIP code is required';
        const zipRegex = /^\d{5}(-\d{4})?$/;
        if (!zipRegex.test(value)) return 'ZIP code must be 5 digits (e.g., 12345)';
        return '';
      }
    },
    type: {
      element: document.getElementById('type'),
      error: document.getElementById('typeError'),
      validate: (value) => {
        if (!value || value === '') return 'Please select which best describes you';
        return '';
      }
    }
  };

  // Real-time validation on blur
  Object.values(fields).forEach(({ element, error, validate }) => {
    if (element) {
      element.addEventListener('blur', function() {
        const errorMsg = validate(this.value);
        if (errorMsg) {
          this.classList.add('is-invalid');
          this.classList.remove('is-valid');
          if (error) error.textContent = errorMsg;
        } else if (this.value.trim()) {
          this.classList.remove('is-invalid');
          this.classList.add('is-valid');
          if (error) error.textContent = '';
        }
      });

      element.addEventListener('input', function() {
        if (this.classList.contains('is-invalid')) {
          const errorMsg = validate(this.value);
          if (!errorMsg && this.value.trim()) {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
            if (error) error.textContent = '';
          }
        }
      });
    }
  });

  // Validate all fields before submit
  form.addEventListener('submit', function(e) {
    let isValid = true;
    Object.values(fields).forEach(({ element, error, validate }) => {
      if (element) {
        const errorMsg = validate(element.value);
        if (errorMsg) {
          element.classList.add('is-invalid');
          element.classList.remove('is-valid');
          if (error) error.textContent = errorMsg;
          isValid = false;
        } else if (element.value.trim()) {
          element.classList.remove('is-invalid');
          element.classList.add('is-valid');
        }
      }
    });

    if (!isValid) {
      e.preventDefault();
      // Scroll to first error
      const firstError = form.querySelector('.is-invalid');
      if (firstError) {
        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        firstError.focus();
      }
    }
  });
}
// Navbar scroll effect
let lastScroll = 0;
const navbar = document.querySelector('.navbar-glass');

window.addEventListener('scroll', () => {
  const currentScroll = window.pageYOffset;
  
  if (currentScroll > 50) {
    navbar?.classList.add('scrolled');
  } else {
    navbar?.classList.remove('scrolled');
  }
  
  lastScroll = currentScroll;
});
</script>

</body>
</html>
