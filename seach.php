<?php
require "layout/header.php"; // Including the header
require "database/database.php"; // Including the database connection

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['keyword']) && isset($_GET['type'])) {
    $keyword = $_GET['keyword'];
    $type = $_GET['type'];

    switch ($type) {
        case 'product':
            searchProducts($keyword, $connect);
            break;
        default:
            echo "Loại tìm kiếm không hợp lệ.";
            break;
    }
}

function searchProducts($keyword, $connect) {
    $keyword = $connect->real_escape_string($keyword); // Prevent SQL injection
    $sql = "SELECT id, name, description, price FROM products WHERE name LIKE ? OR description LIKE ? OR price LIKE ?";
    $stmt = $connect->prepare($sql);
    $searchTerm = "%".$keyword."%";
    $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
    
    // Thực thi câu truy vấn
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<div class='search-results'>";
    echo "<h1>Kết quả tìm kiếm sản phẩm</h1>";
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID Sản phẩm</th><th>Tên sản phẩm</th><th>Mô tả</th><th>Giá</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Không tìm thấy sản phẩm nào.";
    }
    echo "</div>";

    // Đóng kết nối
    $stmt->close();
    $connect->close();
}

include "layout/footer.php"; // Including the footer
?>
