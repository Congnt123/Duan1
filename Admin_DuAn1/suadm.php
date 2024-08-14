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

// Check if categories ID is provided
if (!isset($_GET['categories_id']) || empty($_GET['categories_id'])) {
    die("ID danh mục không hợp lệ.");
}

$categories_id = intval($_GET['categories_id']); // Ensure it's an integer

// Fetch category details from the database
$sql_fetch = "SELECT * FROM categories WHERE id='$categories_id'";
$result_fetch = $connect->query($sql_fetch);

if ($result_fetch->num_rows === 0) {
    die("Danh mục không tồn tại.");
}

$categories = $result_fetch->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $stock_quantity = mysqli_real_escape_string($connect, $_POST['stock_quantity']);
    $short_description = mysqli_real_escape_string($connect, $_POST['short_description']);
    $status = (int)mysqli_real_escape_string($connect, $_POST['status']); // Chuyển đổi sang số nguyên

    // Update the category details in the database
    $sql = "UPDATE categories SET 
        name='$name', 
        short_description='$short_description', 
        stock_quantity='$stock_quantity', 
        status='$status'
        WHERE id='$categories_id'";

    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Sửa danh mục thành công.');</script>";
        echo "<script>window.location.href = 'danhmucsanpham.php';</script>";
        exit();
    } else {
        echo "Lỗi: " . $sql . "<br>" . $connect->error;
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
        margin-left: -20%;
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
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-80 p-6 w-100">
                <h2 class="mb-4">Sửa danh mục</h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" name="categories_id" value="<?php echo htmlspecialchars($categories['id']); ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($categories['name']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock_quantity" class="form-label">Số lượng</label>
                        <input type="text" class="form-control" id="stock_quantity" name="stock_quantity" value="<?php echo htmlspecialchars($categories['stock_quantity']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="short_description" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="short_description" name="short_description" rows="3" required><?php echo htmlspecialchars($categories['short_description']); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="1" <?php echo $categories['status'] == 1 ? 'selected' : ''; ?>>Hiển thị</option>
                            <option value="0" <?php echo $categories['status'] == 0 ? 'selected' : ''; ?>>Ẩn</option>
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
