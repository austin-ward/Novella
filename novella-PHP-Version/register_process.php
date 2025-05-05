<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($username) || empty($password)) {
        echo "Username and password are required.";
        exit;
    }

    $checkStmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $checkStmt->execute([$username]);

    if ($checkStmt->fetch()) {
        echo "Username already taken. Please choose another.";
        exit;
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $insertStmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

    if ($insertStmt->execute([$username, $hashedPassword])) {
        echo "Registration successful! <a href='login.php'>Log in here</a>";
    } else {
        echo "Error during registration. Please try again.";
    }
}
?>
