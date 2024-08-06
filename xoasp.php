<?php
// require "layout/header.php";
require "database/database.php";
// require "layout/slide.php";

// Kiểm tra xem có ID sản phẩm không
if (isset($_GET['id'])) {
    $product_id = $connect->real_escape_string($_GET['id']);

    // Xóa sản phẩm khỏi cơ sở dữ liệu
    $sql = "DELETE FROM products WHERE id='$product_id'";

    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Xóa sản phẩm thành công.');</script>";
        echo "<script>window.location.href = 'danhsach.php';</script>"; // Chuyển hướng về trang danh sách sản phẩm
    } else {
        echo "Lỗi: " . $connect->error;
    }
} else {
    echo "<script>alert('ID sản phẩm không được cung cấp.');</script>";
    echo "<script>window.location.href = 'danhsach.php';</script>"; // Chuyển hướng về trang danh sách sản phẩm
}

// Đóng kết nối cơ sở dữ liệu
$connect->close();
?>