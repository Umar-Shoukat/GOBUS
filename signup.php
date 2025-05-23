<?php
include 'includes/db_connect.php';

$registration_successful = false; // Track if registration was successful

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Generate a unique recharge code
    $recharge_code = strtoupper(bin2hex(random_bytes(4))); // Example: 8 characters code

    // Default balance for new users
    $balance = 0.00;

    $query = "INSERT INTO users (username, email, password, recharge_code, balance) VALUES ('$username', '$email', '$password', '$recharge_code', '$balance')";
    if ($conn->query($query) === TRUE) {
        $registration_successful = true;
        // Automatically log in the user after registration
        session_start();
        $_SESSION['user_id'] = $conn->insert_id;
        $_SESSION['username'] = $username;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - GOBusBus</title>
    <link rel="stylesheet" href="assets/css/signup.css">
    <script src="assets/js/signup.js" defer></script>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <div class="signup-card">
            <section class="signup-card-header">
                <img src="assets/images/logo.png" alt="GOBus Logo" class="signup-logo">
                <h2 class="signup-title">Create Your Account</h2>
                <p class="signup-subtitle">Join  GOBusBus for a seamless travel experience</p>
            </section>
            <?php if ($registration_successful): ?>
                <div id="success-popup" class="popup">
                    <div class="popup-content">
                        <h3>Registration Successful!</h3>
                        <p>Your account has been created successfully.</p>
                        <button onclick="window.location.href='index.php';">Go to Dashboard</button>
                        <button onclick="window.location.href='logout.php';">Logout and Login</button>
                    </div>
                </div>
            <?php else: ?>
                <form action="signup.php" method="POST" class="signup-form" autocomplete="off">
                    <div class="form-group signup-input-group">
                        <span class="signup-icon"><?php include 'assets/svg/user.svg'; ?></span>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group signup-input-group">
                        <span class="signup-icon"><?php include 'assets/svg/contact.svg'; ?></span>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group signup-input-group">
                        <span class="signup-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </span>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary signup-btn">Sign Up</button>
                </form>
            <?php endif; ?>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
