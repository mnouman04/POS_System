<?php
session_start();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $business = trim($_POST['business'] ?? '');
    $zipcode = trim($_POST['zipcode'] ?? '');
    $type = trim($_POST['type'] ?? '');

    $errors = [];

    // Validate empty fields
    if (empty($name)) $errors[] = 'Full name is required';
    if (empty($email)) $errors[] = 'Email is required';
    if (empty($phone)) $errors[] = 'Phone is required';
    if (empty($business)) $errors[] = 'Restaurant name is required';
    if (empty($zipcode)) $errors[] = 'ZIP code is required';
    if (empty($type)) $errors[] = 'Role is required';

    // If any field is empty, return errors
    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }

    // Sanitize inputs
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $business = htmlspecialchars($business, ENT_QUOTES, 'UTF-8');
    $zipcode = htmlspecialchars($zipcode, ENT_QUOTES, 'UTF-8');
    $type = htmlspecialchars($type, ENT_QUOTES, 'UTF-8');

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'errors' => ['Invalid email address']]);
        exit;
    }

    // Validate phone (10+ digits)
    $phone_clean = preg_replace('/\D/', '', $phone);
    if (strlen($phone_clean) < 10) {
        http_response_code(400);
        echo json_encode(['success' => false, 'errors' => ['Phone must have at least 10 digits']]);
        exit;
    }

    // Validate zipcode (5 digits)
    if (!preg_match('/^\d{5}(-\d{4})?$/', $zipcode)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'errors' => ['ZIP code must be 5 digits (e.g., 12345)']]);
        exit;
    }

    // Validate role
    $valid_types = ['owner', 'manager', 'operator', 'other'];
    if (!in_array($type, $valid_types)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'errors' => ['Invalid role selected']]);
        exit;
    }

    // Store session data
    $_SESSION['demo_name'] = $name;
    $_SESSION['demo_email'] = $email;
    $_SESSION['demo_business'] = $business;
    $_SESSION['demo_phone'] = $phone;
    $_SESSION['demo_type'] = $type;

    // TODO: In production
    // 1. Send confirmation email to user
    // 2. Store data in database
    // 3. Send notification to sales team

    http_response_code(200);
    echo json_encode(['success' => true, 'message' => 'Demo scheduled successfully']);
    exit;
} else {
    http_response_code(405);
    echo json_encode(['success' => false, 'errors' => ['Method not allowed']]);
    exit;
}
?>
