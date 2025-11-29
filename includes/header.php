
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="QuickPOS - The all-in-one POS platform for restaurants and retail">
    <meta name="theme-color" content="#ff6200">
    <title>QuickPOS - Restaurant POS System</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        /* Heading animation */
        @keyframes slideInFade {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .hero-heading-animate {
            animation: slideInFade 1s ease-out forwards;
        }
    </style>
</head>
<body>
    <!-- Enhanced Navbar with Glass Effect -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-glass">
        <div class="container-fluid px-lg-5 px-4">
            <a class="navbar-brand fw-bold fs-4 logo-link" href="index.php">
                <div class="d-flex align-items-center gap-2">
                    <div class="logo-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </div>
                    <span class="brand-logo">QuickPOS</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-3">
                    <li class="nav-item">
                        <a class="nav-link nav-link-hover" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-hover" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-hover" href="#locations">Locations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-hover" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-nav text-white rounded-pill px-4 py-2 ms-lg-2" href="#contact">Get Started</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>