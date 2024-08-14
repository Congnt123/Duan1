<style>
    .oders-statistics {
    margin: 20px;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 78%;
    float:right;
}

h1 {
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

h3 {
    text-align: center;
    color: #555;
    margin-top: 20px;
}
</style>
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

// Khởi tạo biến để lưu tổng tiền và số lượng đơn hàng
$totalOrders = 0;
$totalAmount = 0;
?>

<div class="oders-statistics">
    <h1>Thống kê đơn hàng</h1>
  
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID Đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Ngày đặt hàng</th>
        <th>Tổng tiền</th></tr>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td>" . $row["tatol"] . "</td>";
            echo "</tr>";

            // Cộng dồn tổng số đơn hàng và tổng tiền
            $totalOrders++;
            $totalAmount += $row["tatol"];
        }
        echo "</table>";

        // Hiển thị thống kê tổng
        echo "<h3>Tổng số đơn hàng: " . $totalOrders . "</h3>";
        echo "<h3>Tổng tiền thu được: " . number_format($totalAmount, 2) . " VNĐ</h3>";
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