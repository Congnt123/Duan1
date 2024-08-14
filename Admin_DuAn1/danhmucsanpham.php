<?php
include "layout/header.php";
include "database/database.php";
include "layout/slide.php";

$sql = "SELECT * FROM categories";

$result = mysqli_query($connect, $sql);

?>

<div class="container container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-8 mx-auto">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-8" style="text-align: center;"> Danh mục sản phẩm</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên loại sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Thao tác</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['stock_quantity'] . "</td>";
                                echo "<td>" . $row['short_description'] . "</td>";
                         
                                echo "<td>" . $row['status'];
                                echo "<td><a href='suadm.php?categories_id=" . htmlspecialchars($row['id']) . "' class='btn btn-warning btn-sm'>Sửa</a></td>";
                                echo "<td><a href='#'" . htmlspecialchars($row['id']) . "' class='btn btn-danger btn-sm'>Xóa</a></td>";
                               
                       
                            }
                        } else {
                            echo "<tr><td colspan='3'>Không có danh mục nào.</td></tr>";
                        }
                        ?>
                    </tbody>
           
                </table>
                <a class="btn btn-primary mt-3" href="themdanhmuc.php">Thêm danh mục</a>
            </div>
        </div>
    </div>
</div>


<?php
include "layout/footer.php";
?>