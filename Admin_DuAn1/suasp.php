
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/dist/css/styles.css">
</head>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "layout/header.php";
require "database/database.php";
require "layout/slide.php";


// Fetch the product details to populate the form
if (isset($_GET['id'])) {
    $product_id = $connect->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM products WHERE id='$product_id'";
    $result = $connect->query($sql);
    $product = $result->fetch_assoc();

    // Fetch categories for the dropdown
    $sql_categories = "SELECT * FROM categories";
    $result_categories = $connect->query($sql_categories);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
    $product_id = $connect->real_escape_string($_POST['product_id']);
    $product_name = $connect->real_escape_string($_POST['name']);
    $short_description = $connect->real_escape_string($_POST['short_description']);
    $price = $connect->real_escape_string($_POST['price']);
    $stock_quantity = $connect->real_escape_string($_POST['stock_quantity']);
    $categories_id = $connect->real_escape_string($_POST['categories_id']);
    $status = $connect->real_escape_string($_POST['status']);
    $image_url = $product['image']; // Keep existing image by default

    // Check if a new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "dist/img/";
        $target_file = $target_dir . basename($_FILES['image']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image
        if (getimagesize($_FILES['image']['tmp_name']) === false) {
            echo "File không phải là hình ảnh.";
            $uploadOk = 0;
        }

        // Check file size (5MB maximum)
        if ($_FILES['image']['size'] > 5000000) {
            echo "Xin lỗi, tệp của bạn quá lớn.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        if (!in_array($imageFileType, $allowedExtensions)) {
            echo "Chỉ cho phép tải lên các tệp JPG, JPEG, PNG và GIF.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                $image_url = basename($_FILES['image']['name']);
            } else {
                echo "Có lỗi xảy ra khi di chuyển tệp.";
                $uploadOk = 0;
            }
        }
    }

    // Update the product details in the database
    $sql = "UPDATE products SET 
        name='$product_name', 
        short_description='$short_description', 
        price='$price', 
        stock_quantity='$stock_quantity', 
        categories_id='$categories_id', 
        status='$status', 
        image='$image_url' 
        WHERE id='$product_id'";

    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Sửa sản phẩm thành công.');</script>";
        echo "<script>window.location.href = 'danhsach.php';</script>";
        exit();
    } else {
        echo "Lỗi: " . $sql . "<br>" . $connect->error;
    }
}
?>
<style>
    body {
    font-family: Arial, sans-serif; /* Font chữ cơ bản */
    background-color: #f4f4f4; /* Màu nền tổng thể */
    margin: 0; /* Xóa margin mặc định */
    padding: 20px; /* Thêm padding cho body */
}

.container {
    width: 1000px; /* Giới hạn chiều rộng của container */
    margin: 0; /* Căn giữa container */
    float: right;
    
}

.bg-secondary {
    background-color: #ffffff; /* Màu nền trắng cho khung */
    border-radius: 8px; /* Bo góc cho khung */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Thêm bóng đổ */
margin-left: -20%;
}

h2 {
    text-align: center; /* Căn giữa tiêu đề */
    color: #333; /* Màu chữ tiêu đề */
    margin-bottom: 20px; /* Khoảng cách dưới tiêu đề */
}


.form-control {
    border: 1px solid #ced4da; /* Đường viền cho ô nhập liệu */
    border-radius: 5px; /* Bo góc cho ô nhập liệu */
    padding: 20px; 
    width: 100%;
    height: 47px;
}

.btn-primary {
    background-color: #007bff; /* Màu nền cho nút */
    border-color: #007bff; /* Màu viền cho nút */
    color: white; /* Màu chữ cho nút */
    padding: 10px 20px; /* Thêm padding cho nút */
    border-radius: 5px; /* Bo góc cho nút */
    cursor: pointer; /* Thay đổi con trỏ khi hover */
}

.btn-primary:hover {
    background-color: #0056b3; /* Màu nền khi hover */
    border-color: #0056b3; /* Màu viền khi hover */
}


</style>
<div class="container ">
    <div class="row">
        <div class="col-sm- col-xl-12 ">
            <div class="bg-secondary rounded h-80 p-6 w-100">
                <h2 class="mb-4">Sửa sản phẩm</h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($product['name']); ?>">
                    </div>
                    <div class="mb-3" ">
                        <label for="image" class="form-label">Hình ảnh mới</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($product['price']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="stock_quantity" class="form-label">Số lượng tồn kho</label>
                        <input type="text" class="form-control" id="stock_quantity" name="stock_quantity" value="<?php echo htmlspecialchars($product['stock_quantity']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="short_description" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="short_description" name="short_description" rows="3"><?php echo htmlspecialchars($product['short_description']); ?></textarea>
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
                        <select class="form-control" id="categories_id" name="categories_id">
                            <option value="">Chọn danh mục</option>
                            <?php
                            while ($row = $result_categories->fetch_assoc()) {
                                $selected = ($row['id'] == $product['categories_id']) ? "selected" : "";
                                echo "<option value='" . htmlspecialchars($row['id']) . "' $selected>" . htmlspecialchars($row['name']) . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "layout/footer.php";
?>
