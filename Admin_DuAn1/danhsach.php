<?php
require "layout/header.php";
require "database/database.php";
require "layout/slide.php";

$search_term = '';
if (isset($_GET['search'])) {
    $search_term = $_GET['search'];
}

// Lấy dữ liệu sản phẩm
$sql = "SELECT * FROM products";
if (!empty($search_term)) {
    $sql .= " WHERE name LIKE '%" . $connect->real_escape_string($search_term) . "%'";
}
$result = $connect->query($sql);

// Lấy dữ liệu danh mục sản phẩm
$categories_sql = "SELECT * FROM categories";
$categories_result = $connect->query($categories_sql);

// Tạo một mảng để ánh xạ category_id đến tên danh mục
$categories = [];
if ($categories_result->num_rows > 0) {
    while ($cat_row = $categories_result->fetch_assoc()) {
        $categories[$cat_row['id']] = $cat_row['name'];
    }
}
?>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
/>
<style>
    .list-product .item .box-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<div class="container-fluid p-0 mt-3">
    <div class="row">
        <div class="col-12" style="padding-left: 300px;">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Danh Sách Sản Phẩm</h2>
                </div>
                <div class="card-body">
                    <!-- Search Form -->
                    <form method="GET" action="" class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Tìm kiếm sản phẩm..." value="<?php echo htmlspecialchars($search_term); ?>">
                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Ảnh sản phẩm</th>
                                    <th scope="col">Giá sản phẩm</th>
                                    <th scope="col">Số lượng sản phẩm</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Danh mục sản phẩm</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Hành động</th>
                                    <th scope="col">Xóa</th>
                                    <th scope="col">Sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        // Lấy tên danh mục từ mảng $categories
                                        $category_name = isset($categories[$row['categories_id']]) ? $categories[$row['categories_id']] : 'Không có danh mục';
                                        
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                        echo "<td><img src='assets/img/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' width='100' height='100'></td>";
                                        echo "<td>" . htmlspecialchars($row['price']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['stock_quantity']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['short_description']) . "</td>";
                                        echo "<td>" . htmlspecialchars($category_name) . "</td>";
                                        echo "<td>" . ($row['status'] ? 'Hiển thị' : 'Ẩn') . "</td>";
                                        echo "<td><a href='thaydoistatus.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-secondary btn-sm'>" . ($row['status'] ? 'Ẩn' : 'Hiển thị') . "</a></td>";
                                        echo "<td><a href='xoasp.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-danger btn-sm'>Xóa</a></td>";
                                        echo "<td><a href='suasp.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-warning btn-sm'>Sửa</a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='11' class='text-center'>Không có sản phẩm nào</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-primary mt-3" href="themsanpham.php">Thêm sản phẩm</a>
                </div>
            </div>
        </div>
    </div>
</div>  

<?php
require "layout/footer.php";
?>
