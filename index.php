<?php
$show_success = isset($_GET['status']) && $_GET['status'] === 'success';
?>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section" id="hero">
  <div class="video-container">
    <video class="hero-video" autoplay muted loop playsinline>
      <source src="https://videos.pexels.com/video-files/3045163/3045163-sd_640_360_24fps.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="video-overlay"></div>
  </div>
  
  <div class="container-fluid px-0">
    <div class="row g-0 align-items-center min-vh-100">
      <!-- Animated Text Content -->
      <div class="col-lg-6 px-lg-5 px-4 py-5 hero-text hero-text-animated">
        <div class="animated-heading">
          <h1 class="display-3 fw-bold mb-3">
            <span class="text-line">Built for</span>
            <span class="text-line">Restaurants,</span>
            <span class="text-line">Built for</span>
            <span class="text-line">Speed.</span>
          </h1>
        </div>
        <p class="lead text-light mb-4 fade-in-text">The all-in-one POS platform designed to help you grow your business faster and smarter.</p>
        <div class="d-flex gap-3 flex-wrap fade-in-text fade-in-delay">
          <a href="#contact" class="btn btn-primary btn-lg rounded-pill px-5 btn-hover">Get Started</a>
          <button class="btn btn-outline-light btn-lg rounded-pill px-5 btn-hover-outline" onclick="openVideoFullscreen(event)">Watch Video</button>
        </div>
      </div>

      <!-- Video Mockup - Desktop Only with Device Frame -->
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
                  playsinline>
                  <source src="https://videos.pexels.com/video-files/5632370/5632370-hd_1920_1080_30fps.mp4" type="video/mp4">
                </video>
              </div>
              <!-- Device Notch (for tablet appearance) -->
              <div class="device-notch"></div>
              <!-- Play Button Overlay -->
              <div class="play-button-overlay">
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

<!-- Locations Section -->
<section class="locations-section py-5" id="locations">
  <div class="container py-5">
    <div class="text-center mb-5 section-title">
      <h2 class="display-4 fw-bold mb-3">We're in a business near you. 156,000* locations and counting.</h2>
      <p class="lead text-muted">Trusted by thousands of restaurants, cafes, and retail businesses worldwide</p>
    </div>
    
    <div class="row g-4">
      <!-- Location Card 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="location-card">
          <video class="location-video" autoplay muted loop playsinline>
            <source src="https://videos.pexels.com/video-files/3194518/3194518-sd_640_360_24fps.mp4" type="video/mp4">
          </video>
          <div class="location-overlay">
            <h5 class="location-title fw-bold">BREWERY</h5>
          </div>
        </div>
      </div>

      <!-- Location Card 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="location-card" style="animation-delay: 0.1s;">
          <video class="location-video" autoplay muted loop playsinline>
            <source src="https://videos.pexels.com/video-files/3194519/3194519-sd_640_360_24fps.mp4" type="video/mp4">
          </video>
          <div class="location-overlay">
            <h5 class="location-title fw-bold">CASUAL DINING</h5>
          </div>
        </div>
      </div>

      <!-- Location Card 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="location-card" style="animation-delay: 0.2s;">
          <video class="location-video" autoplay muted loop playsinline>
            <source src="https://videos.pexels.com/video-files/3194520/3194520-sd_640_360_24fps.mp4" type="video/mp4">
          </video>
          <div class="location-overlay">
            <h5 class="location-title fw-bold">CAFE & BAKERY</h5>
          </div>
        </div>
      </div>

      <!-- Location Card 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="location-card" style="animation-delay: 0.3s;">
          <video class="location-video" autoplay muted loop playsinline>
            <source src="https://videos.pexels.com/video-files/3194521/3194521-sd_640_360_24fps.mp4" type="video/mp4">
          </video>
          <div class="location-overlay">
            <h5 class="location-title fw-bold">FAST CASUAL</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
      <!-- Orange Left Side - Call to Action -->
      <div class="col-lg-5 contact-left-side-compact px-lg-4 px-3 d-flex flex-column justify-content-center">
        <!-- Animated Icon Badge -->
        <div class="contact-icon-badge mb-4">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
          </svg>
        </div>

        <!-- Professional Main Heading -->
        <h1 class="contact-main-heading text-white fw-bold mb-4">
          Schedule Your Free Demo
        </h1>

        <!-- Professional Subheading -->
        <p class="contact-subheading text-white mb-5">Experience how QuickPOS can transform your restaurant operations with our personalized walkthrough tailored to your business needs.</p>
        
        <!-- Animated Benefits -->
        <div class="contact-benefits d-flex gap-3 flex-column mb-5">
          <div class="benefit-item benefit-item-1 py-3 px-4">
            <div class="benefit-icon" style="width: 40px; height: 40px; min-width: 40px;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <div>
              <h6 class="fw-bold mb-1 text-white" style="font-size: 0.95rem;">Live Product Demo</h6>
              <p class="text-white-50 mb-0" style="font-size: 0.8rem;">See real-world features in action with our product specialists.</p>
            </div>
          </div>

          <div class="benefit-item benefit-item-2 py-3 px-4">
            <div class="benefit-icon" style="width: 40px; height: 40px; min-width: 40px;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <div>
              <h6 class="fw-bold mb-1 text-white" style="font-size: 0.95rem;">Custom Strategy Session</h6>
              <p class="text-white-50 mb-0" style="font-size: 0.8rem;">Get personalized recommendations based on your unique requirements.</p>
            </div>
          </div>

          <div class="benefit-item benefit-item-3 py-3 px-4">
            <div class="benefit-icon" style="width: 40px; height: 40px; min-width: 40px;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <div>
              <h6 class="fw-bold mb-1 text-white" style="font-size: 0.95rem;">No Commitment Required</h6>
              <p class="text-white-50 mb-0" style="font-size: 0.8rem;">Explore at your own pace with our 14-day free trial.</p>
            </div>
          </div>
        </div>

        <!-- Trust Indicators -->
        <div class="trust-indicators mt-auto">
          <div class="d-flex gap-3 align-items-center trust-badges flex-wrap">
            <span class="trust-badge-item">⭐ 4.9/5 Rating</span>
            <span class="trust-badge-item">✓ 500+ Reviews</span>
            <span class="trust-badge-item">🚀 156K+ Users</span>
          </div>
        </div>
      </div>

      <!-- White Right Side - Contact Form -->
      <div class="col-lg-7 px-lg-5 px-4 d-flex align-items-center justify-content-center" style="background: white; overflow-y: auto; max-height: 100vh;">
        <div class="contact-form-wrapper w-100">
          <!-- Form Header -->
          <div class="form-header mb-5">
            <h2 class="form-title-animated fw-bold mb-3" style="font-size: 2.2rem;">Get Started Today</h2>
            <p class="form-subtitle-animated text-muted" style="font-size: 0.95rem; line-height: 1.6;">Complete the form below and our team will reach out within 24 hours to schedule your personalized demo.</p>
          </div>

          <!-- Error Alert -->
          <div id="errorAlert" class="alert alert-danger alert-dismissible fade" role="alert" style="display: none; margin-bottom: 1.5rem; border-radius: 10px;">
            <div id="errorMessage" style="font-size: 0.9rem;"></div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

          <!-- Contact Form -->
          <form method="POST" action="contact-handler.php" class="contact-form" id="contactForm" novalidate>
            <!-- Row 1: Name & Email -->
            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <label for="name" class="form-label fw-bold form-label-animated" style="font-size: 0.9rem;">Full Name <span class="text-danger">*</span></label>
                <div class="input-wrapper">
                  <span class="input-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </span>
                  <input type="text" class="form-control form-input-custom" 
                    id="name" name="name" placeholder="John Doe" required>
                </div>
                <small class="form-helper text-muted d-block">Your full name</small>
              </div>

              <div class="col-md-6">
                <label for="email" class="form-label fw-bold form-label-animated" style="font-size: 0.9rem;">Email <span class="text-danger">*</span></label>
                <div class="input-wrapper">
                  <span class="input-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                      <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg>
                  </span>
                  <input type="email" class="form-control form-input-custom" 
                    id="email" name="email" placeholder="john@example.com" required>
                </div>
                <small class="form-helper text-muted d-block">We'll never spam you</small>
              </div>
            </div>

            <!-- Row 2: Phone & Business -->
            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <label for="phone" class="form-label fw-bold form-label-animated" style="font-size: 0.9rem;">Phone <span class="text-danger">*</span></label>
                <div class="input-wrapper">
                  <span class="input-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                  </span>
                  <input type="tel" class="form-control form-input-custom" 
                    id="phone" name="phone" placeholder="(123) 456-7890" required>
                </div>
                <small class="form-helper text-muted d-block">10+ digits</small>
              </div>

              <div class="col-md-6">
                <label for="business" class="form-label fw-bold form-label-animated" style="font-size: 0.9rem;">Restaurant Name <span class="text-danger">*</span></label>
                <div class="input-wrapper">
                  <span class="input-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                      <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                  </span>
                  <input type="text" class="form-control form-input-custom" 
                    id="business" name="business" placeholder="Your Restaurant Name" required>
                </div>
                <small class="form-helper text-muted d-block">Business name</small>
              </div>
            </div>

            <!-- Row 3: Zipcode & Role -->
            <div class="row g-3 mb-4">
              <div class="col-md-6">
                <label for="zipcode" class="form-label fw-bold form-label-animated" style="font-size: 0.9rem;">ZIP Code <span class="text-danger">*</span></label>
                <div class="input-wrapper">
                  <span class="input-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </span>
                  <input type="text" class="form-control form-input-custom" 
                    id="zipcode" name="zipcode" placeholder="12345" required>
                </div>
                <small class="form-helper text-muted d-block">5 digits</small>
              </div>

              <div class="col-md-6">
                <label for="type" class="form-label fw-bold form-label-animated" style="font-size: 0.9rem;">Your Role <span class="text-danger">*</span></label>
                <div class="select-wrapper">
                  <span class="select-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M7 10l5 5 5-5z"></path>
                    </svg>
                  </span>
                  <select class="form-select form-select-custom" id="type" name="type" required>
                    <option value="" selected disabled>Select your role...</option>
                    <option value="owner">🏪 Restaurant Owner</option>
                    <option value="manager">👔 Manager</option>
                    <option value="operator">⚙️ Operator</option>
                    <option value="other">💼 Other</option>
                  </select>
                </div>
                <small class="form-helper text-muted d-block">Helps us tailor the demo</small>
              </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-submit-custom w-100 py-3 fw-bold rounded-pill mb-3">
              <span class="btn-text">Schedule My Free Demo</span>
              <span class="btn-arrow ms-2">→</span>
            </button>

            <!-- Privacy Notice -->
            <p class="text-center text-muted" style="font-size: 0.8rem;">
              By submitting, you agree to our <a href="#" class="text-decoration-none text-primary fw-500">Terms of Service</a> and <a href="#" class="text-decoration-none text-primary fw-500">Privacy Policy</a>
            </p>
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
  const originalBtnText = submitBtn.innerHTML;
  
  // ALWAYS hide all messages at start
  errorAlert.style.display = 'none';
  successMessage.style.display = 'none';
  if (successBanner) {
    successBanner.style.display = 'none';
  }
  
  // Disable submit button and show loading state
  submitBtn.disabled = true;
  submitBtn.innerHTML = '<span class="btn-text">Processing...</span>';
  
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
      
      // Show green banner ONLY on successful submission
      if (successBanner) {
        document.getElementById('bannerTitle').textContent = '✓ Success!';
        document.getElementById('bannerMessage').textContent = ' Your demo request has been received. We\'ll contact you within 24 hours.';
        successBanner.style.display = 'block';
        successBanner.classList.add('banner-success-animation');
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
      submitBtn.innerHTML = originalBtnText;
      
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
    submitBtn.innerHTML = originalBtnText;
    
    errorAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }
});

// Form validation on blur
document.getElementById('contactForm')?.querySelectorAll('input, select').forEach(field => {
  field.addEventListener('blur', function() {
    if (!this.value.trim()) {
      this.classList.add('is-invalid');
    } else {
      this.classList.remove('is-invalid');
    }
  });
  
  field.addEventListener('input', function() {
    if (this.value.trim()) {
      this.classList.remove('is-invalid');
    }
  });
});
</script>

</body>
</html>
