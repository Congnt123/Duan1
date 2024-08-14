<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();

// Tài khoản cứng "admin"
$admin_username = "admin";
$admin_password = "123";  // Bạn nên mã hóa mật khẩu này nếu sử dụng thực tế

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra tài khoản cứng "admin"
    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['user_id'] = 1;  // Bạn có thể đặt ID cố định cho admin
        $_SESSION['username'] = $admin_username;
        header("Location: index.php");
        exit();
    } else {
       require "main.php";
    }
}
?>
