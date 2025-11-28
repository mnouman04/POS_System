<?php
// Handle contact form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $business = $_POST['business'] ?? '';
    $type = $_POST['type'] ?? '';

    // Validate that all fields are filled
    if (empty($name) || empty($email) || empty($phone) || empty($business) || empty($type)) {
        header('Location: index.php?status=error&message=Please fill in all fields');
        exit;
    }

    // Sanitize inputs
    $name = htmlspecialchars(trim($name), ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars(trim($email), ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars(trim($phone), ENT_QUOTES, 'UTF-8');
    $business = htmlspecialchars(trim($business), ENT_QUOTES, 'UTF-8');
    $type = htmlspecialchars(trim($type), ENT_QUOTES, 'UTF-8');

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: index.php?status=error&message=Please enter a valid email address');
        exit;
    }

    // In a production environment, you would:
    // 1. Send a confirmation email to the user
    // 2. Store the data in a database
    // 3. Send a notification to your sales team
    
    // For this demo, we'll just simulate success and redirect
    // Simulate processing (in production, send email here)
    // mail($email, "Demo Scheduled - QuickPOS", "Thank you for scheduling a demo!");

    // Redirect back to index.php with success status
    header('Location: index.php?status=success');
    exit;
} else {
    // If accessed directly, redirect to home
    header('Location: index.php');
    exit;
}
