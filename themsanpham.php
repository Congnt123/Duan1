<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/dist/css/styles.css">
</head>
<body></body>
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
    $price = str_replace(',', '.', mysqli_real_escape_string($connect, $_POST['price']));
    $stock_quantity = mysqli_real_escape_string($connect, $_POST['stock_quantity']);
    $short_description = mysqli_real_escape_string($connect, $_POST['short_description']);
    $categories_id = mysqli_real_escape_string($connect, $_POST['categories_id']);
    $status = (int)mysqli_real_escape_string($connect, $_POST['status']); // Chuyển đổi sang số nguyên
    $image_url = '';

    // Check if an image is uploaded
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "asset/img/";
        
        // Check if the directory exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $target_file = $target_dir . basename($_FILES['image']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image
        if (getimagesize($_FILES['image']['tmp_name']) === false) {
            echo "<script>alert('File không phải là hình ảnh.');</script>";
            $uploadOk = 0;
        }

        // Check file size (5MB maximum)
        if ($_FILES['image']['size'] > 5000000) {
            echo "<script>alert('Xin lỗi, tệp của bạn quá lớn.');</script>";
            $uploadOk = 0;
        }

        // Allow certain file formats
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        if (!in_array($imageFileType, $allowedExtensions)) {
            echo "<script>alert('Chỉ cho phép tải lên các tệp JPG, JPEG, PNG và GIF.');</script>";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                $image_url = basename($_FILES['image']['name']);
            } else {
                echo "<script>alert('Có lỗi xảy ra khi di chuyển tệp.');</script>";
                $uploadOk = 0;
            }
        }
    }

    // Insert the new product into the database
    $sql = "INSERT INTO products (name, short_description, price, stock_quantity, categories_id, status, image) VALUES (
        '$name', 
        '$short_description', 
        '$price', 
        '$stock_quantity', 
        '$categories_id', 
        '$status', 
        '$image_url'
    )";

    if (mysqli_query($connect, $sql)) {
        echo "<script>
                alert('Thêm sản phẩm thành công.');
                window.location.href = 'danhsach.php';
              </script>";
        exit();
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
    }
}
?>

<div class="container float-right">
    <div class="row">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4 w-100" style="float: right; margin-left:100px;">
                <h2 class="mb-4" style="text-align: center;">Thêm sản phẩm</h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock_quantity" class="form-label">Số lượng</label>
                        <input type="text" class="form-control" id="stock_quantity" name="stock_quantity" required>
                    </div>
                    <div class="mb-3">
                        <label for="short_description" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="short_description" name="short_description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="1">Hiển thị</option>
                            <option value="0">Ẩn</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="categories_id" class="form-label">Danh mục sản phẩm</label>
                        <select class="form-control" id="categories_id" name="categories_id" required>
                            <option value="">Chọn danh mục</option>
                            <?php
                            while ($row_categories = mysqli_fetch_assoc($result_categories)) {
                                echo "<option value='" . htmlspecialchars($row_categories['id']) . "'>" . htmlspecialchars($row_categories['name']) . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "layout/footer.php";
?>
