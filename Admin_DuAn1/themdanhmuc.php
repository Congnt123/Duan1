<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "layout/header.php";
require "database/database.php";
require "layout/slide.php";

// Check database connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Fetch categories for the dropdown
$sql_categories = "SELECT * FROM `categories`";
$result_categories = mysqli_query($connect, $sql_categories);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $stock_quantity = mysqli_real_escape_string($connect, $_POST['stock_quantity']);
    $short_description = mysqli_real_escape_string($connect, $_POST['short_description']);
    $status = (int)mysqli_real_escape_string($connect, $_POST['status']); // Chuyển đổi sang số nguyên

    // Insert the new category into the database
    $sql = "INSERT INTO categories (name, short_description, stock_quantity, status) VALUES (
        '$name', 
        '$short_description', 
        '$stock_quantity', 
        '$status'
    )";
  echo "<p>SQL: $sql</p>";
    if (mysqli_query($connect, $sql)) {
        echo "<script>
                alert('Thêm danh mục thành công.');
                window.location.href = 'danhmucsanpham.php';
              </script>";
        exit();
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
    }
}
?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    .container {
        width: 1000px;
        margin: 0;
        float: right;
    }

    .bg-secondary {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .form-control {
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 20px;
        width: 100%;
        height: 47px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/dist/css/styles.css">
</head>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4 w-100" style="float: right; margin-left:100px;">
                <h2 class="mb-4">Thêm danh mục</h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock_quantity" class="form-label">Số lượng</label>
                        <input type="text" class="form-control" id="stock_quantity" name="stock_quantity" required>
                    </div>
                    <div class="mb-3">
                        <label for="short_description" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="short_description" name="short_description" rows="3" required></textarea>
                    </div>
                    <div class="mb-5">
                        <label for="status" class="form-label">Trạng thái</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="1">Hiển thị</option>
                            <option value="0">Ẩn</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<?php 
include "layout/footer.php";
?>
