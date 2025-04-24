<?php
session_start();
require_once '../config/db_connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .error-message {
            color: red;
            margin-bottom: 10px;
            text-align: center;
        }
        .register-link {
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="admin-form">
        <h2>Admin Login</h2>
        <?php if(isset($_GET['error']) && $_GET['error'] == 'invalid'): ?>
            <div class="error-message">
                Incorrect username or password!
            </div>
        <?php endif; ?>
        <form action="process_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="register-link">
            <p>Haven't registered yet? <a href="register.php">Click here to register</a></p>
        </div>
        <a href="../index.php">Back to Home</a>
    </div>
</body>
</html>