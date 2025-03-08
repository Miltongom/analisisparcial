<?php
session_start(); // Start session

// Check if it is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']); // Remove whitespace
    $password = $_POST['password'];

    $passwordCorrecta = "mjgm2003**"; // Fixed password for login

    // 🛠️ Debugging: Check what data the server is receiving
    error_log("🔍 Received email: " . $email);
    error_log("🔍 Received password: " . $password);

    // ✅ Validate that the email has the correct format or belongs to the @miumg.edu.gt domain
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^[a-zA-Z0-9._%+-]+@miumg\.edu\.gt$/', $email)) {
        error_log("❌ Rejected email: " . $email); // Debugging
        echo json_encode(["success" => false, "message" => "Invalid email address"]);
        exit;
    }

    // ✅ Validate the password
    if ($password === $passwordCorrecta) {
        $_SESSION['loggedin'] = true;
        $_SESSION['usuario'] = $email;
        error_log("✅ Successful login"); // Debugging
        echo json_encode(["success" => true, "message" => "Login successful", "redirect" => "views/pages/login/welcome.php"]);
    } else {
        error_log("❌ Incorrect password for: " . $email); // Debugging
        echo json_encode(["success" => false, "message" => "Incorrect password"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Method not allowed"]);
}
