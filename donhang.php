<?php
require "layout/slide.php";
require "layout/header.php";
require "database/database.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Fetch order statistics
$sql = "SELECT id, name, date, tatol FROM oders";
$result = $connect->query($sql);
?>

<div class="oders-statistics">
    <h1>Thống kê đơn hàng</h1>
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID Đơn hàng</th><th>Tên khách hàng</th><th>Ngày đặt hàng</th><th>Tổng tiền</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td>" . $row["tatol"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Không có đơn hàng nào.";
    }

    // Đóng kết nối
    $connect->close();
    ?>
</div>

<?php
require "layout/footer.php";
?>
