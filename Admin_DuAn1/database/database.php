<?php
$servername = "localhost"; 
$username = "root"; 
$password = "mysql"; 
$database = "duan1_kysau"; 

$connect = new mysqli($servername, $username, $password, $database);


if ($connect->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $connect->connect_error);
}

?>