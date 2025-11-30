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

<!-- Contact Section -->
<section id="contact" class="contact-section py-5">
  <div class="container-fluid px-0">
    <div class="row g-0 align-items-stretch">
      <!-- Orange Left Side - Call to Action -->
      <div class="col-lg-6 contact-left-side px-lg-5 px-4 py-5 d-flex flex-column justify-content-center">
        <h2 class="display-5 fw-bold mb-4 text-white">Let's schedule your free demo</h2>
        <p class="lead text-white mb-4">Want to know what QuickPOS can do for you? Get a personalized online demo, no credit card required.</p>
        
        <div class="d-flex gap-4 flex-column">
          <div>
            <h5 class="fw-bold mb-2 text-white">See QuickPOS in action</h5>
            <p class="text-white-50">Watch our product experts walk through features tailored to your business.</p>
          </div>
          <div>
            <h5 class="fw-bold mb-2 text-white">Personalized consultation</h5>
            <p class="text-white-50">Get recommendations based on your specific business needs and operations.</p>
          </div>
        </div>
      </div>

      <!-- White Right Side - Contact Form -->
      <div class="col-lg-6 px-lg-5 px-4 py-5 d-flex align-items-center">
        <form method="POST" action="contact-handler.php" class="contact-form w-100">
          <div class="mb-3">
            <label for="name" class="form-label">First and last name*</label>
            <input type="text" class="form-control form-control-lg" id="name" name="name" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email address*</label>
            <input type="email" class="form-control form-control-lg" id="email" name="email" required>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone number*</label>
            <input type="tel" class="form-control form-control-lg" id="phone" name="phone" required>
          </div>

          <div class="mb-3">
            <label for="business" class="form-label">Restaurant name*</label>
            <input type="text" class="form-control form-control-lg" id="business" name="business" required>
          </div>

          <div class="mb-3">
            <label for="zipcode" class="form-label">Primary restaurant location zip code*</label>
            <input type="text" class="form-control form-control-lg" id="zipcode" name="zipcode" required>
          </div>

          <div class="mb-4">
            <label for="type" class="form-label">Which best describes you?</label>
            <select class="form-select form-select-lg" id="type" name="type" required>
              <option value="">Select an option</option>
              <option value="owner">Restaurant Owner</option>
              <option value="manager">Manager</option>
              <option value="operator">Operator</option>
              <option value="other">Other</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary btn-lg w-100 py-3 rounded-pill fw-bold">Get a Demo</button>
        </form>
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
</script>
