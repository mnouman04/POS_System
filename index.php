<?php
// Display success message if form was submitted
$show_success = isset($_GET['status']) && $_GET['status'] === 'success';
?>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
  <div class="container-fluid px-0">
    <div class="row g-0 align-items-center min-vh-100">
      <!-- Text Content -->
      <div class="col-lg-6 px-lg-5 px-4 py-5 hero-text">
        <h1 class="display-3 fw-bold mb-3">Built for Restaurants, Built for Speed.</h1>
        <p class="lead text-muted mb-4">The all-in-one POS platform designed to help you grow your business faster and smarter.</p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="#contact" class="btn btn-primary btn-lg rounded-pill px-5">Get Started</a>
          <button class="btn btn-outline-dark btn-lg rounded-pill px-5">Watch Video</button>
        </div>
      </div>
      
      <!-- Hero Image -->
      <div class="col-lg-6 d-none d-lg-block hero-image-container">
        <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?w=600&h=700&fit=crop" alt="POS Terminal" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="features-section py-5">
  <div class="container py-5">
    <div class="text-center mb-5">
      <h2 class="display-4 fw-bold mb-3">Everything you need to run your business</h2>
      <p class="lead text-muted">Comprehensive tools designed for modern restaurants and retail</p>
    </div>
    
    <div class="row g-4">
      <!-- Feature Card 1 -->
      <div class="col-md-4">
        <div class="feature-card h-100">
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
        <div class="feature-card h-100">
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
        <div class="feature-card h-100">
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

<!-- Pricing Section -->
<section class="pricing-section py-5 bg-light">
  <div class="container py-5">
    <div class="text-center mb-5">
      <h2 class="display-4 fw-bold mb-3">Simple, Transparent Pricing</h2>
      <p class="lead text-muted">Choose the plan that fits your business needs</p>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Basic Plan -->
      <div class="col-lg-4">
        <div class="pricing-card">
          <h4 class="fw-bold mb-3">Basic</h4>
          <div class="price-tag mb-4">
            <span class="display-5 fw-bold">$29</span>
            <span class="text-muted">/month</span>
          </div>
          <ul class="list-unstyled mb-4">
            <li class="py-2 border-bottom"><strong>✓</strong> Basic POS Features</li>
            <li class="py-2 border-bottom"><strong>✓</strong> Single Location</li>
            <li class="py-2 border-bottom"><strong>✓</strong> Email Support</li>
            <li class="py-2"><strong>✓</strong> Manual Reports</li>
          </ul>
          <button class="btn btn-outline-dark w-100 py-2">Get Started</button>
        </div>
      </div>

      <!-- Pro Plan (Highlighted) -->
      <div class="col-lg-4">
        <div class="pricing-card pricing-card-featured">
          <div class="badge bg-danger position-absolute top-0 start-50 translate-middle-x">RECOMMENDED</div>
          <h4 class="fw-bold mb-3">Pro</h4>
          <div class="price-tag mb-4">
            <span class="display-5 fw-bold">$79</span>
            <span class="text-muted">/month</span>
          </div>
          <ul class="list-unstyled mb-4">
            <li class="py-2 border-bottom"><strong>✓</strong> All Basic Features</li>
            <li class="py-2 border-bottom"><strong>✓</strong> Multi-Location</li>
            <li class="py-2 border-bottom"><strong>✓</strong> Priority Support</li>
            <li class="py-2"><strong>✓</strong> Advanced Analytics</li>
          </ul>
          <button class="btn btn-primary w-100 py-2">Get Started</button>
        </div>
      </div>

      <!-- Enterprise Plan -->
      <div class="col-lg-4">
        <div class="pricing-card">
          <h4 class="fw-bold mb-3">Enterprise</h4>
          <div class="price-tag mb-4">
            <span class="display-5 fw-bold">Custom</span>
            <span class="text-muted">/month</span>
          </div>
          <ul class="list-unstyled mb-4">
            <li class="py-2 border-bottom"><strong>✓</strong> Everything in Pro</li>
            <li class="py-2 border-bottom"><strong>✓</strong> Unlimited Locations</li>
            <li class="py-2 border-bottom"><strong>✓</strong> Dedicated Support</li>
            <li class="py-2"><strong>✓</strong> Custom Integration</li>
          </ul>
          <button class="btn btn-outline-dark w-100 py-2">Contact Sales</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Success Alert -->
<?php if ($show_success): ?>
<div class="alert alert-success alert-dismissible fade show mx-3 mt-3" role="alert">
  <strong>Thank you!</strong> Your demo has been scheduled. Check your email for confirmation details.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<!-- Contact Section -->
<section id="contact" class="contact-section py-5">
  <div class="container py-5">
    <div class="row align-items-center">
      <!-- Contact Info -->
      <div class="col-lg-6 mb-4 mb-lg-0 contact-info">
        <h2 class="display-4 fw-bold mb-4">Let's schedule your free demo</h2>
        <p class="lead text-muted mb-4">Want to know what QuickPOS can do for you? Get a personalized online demo, no credit card required.</p>
        <div class="d-flex gap-4 flex-column">
          <div>
            <h5 class="fw-bold mb-2">See QuickPOS in action</h5>
            <p class="text-muted">Watch our product experts walk through features tailored to your business.</p>
          </div>
          <div>
            <h5 class="fw-bold mb-2">Personalized consultation</h5>
            <p class="text-muted">Get recommendations based on your specific business needs and operations.</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-6">
        <form method="POST" action="contact-handler.php" class="contact-form">
          <div class="mb-3">
            <label for="name" class="form-label">First and Last Name</label>
            <input type="text" class="form-control form-control-lg" id="name" name="name" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control form-control-lg" id="email" name="email" required>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control form-control-lg" id="phone" name="phone" required>
          </div>

          <div class="mb-3">
            <label for="business" class="form-label">Restaurant Name</label>
            <input type="text" class="form-control form-control-lg" id="business" name="business" required>
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

          <button type="submit" class="btn btn-primary btn-lg w-100 py-3 rounded-pill">Schedule Demo</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
