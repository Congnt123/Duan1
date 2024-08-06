<?php
include "database/database.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Lấy trạng thái hiện tại của sản phẩm
    $sql = "SELECT status FROM products WHERE id = $id";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $current_status = $row['status'];

        // Thay đổi trạng thái sản phẩm
        $new_status = $current_status ? 0 : 1;
        $update_sql = "UPDATE products SET status = $new_status WHERE id = $id";
        
        if ($connect->query($update_sql) === TRUE) {
            echo "<script>
                    alert('Cập nhật trạng thái sản phẩm thành công.');
                    window.location.href = 'danhsach.php';
                  </script>";
        } else {
            echo "Lỗi: " . $connect->error;
        }
    } else {
        echo "Không tìm thấy sản phẩm.";
    }
} else {
    echo "ID sản phẩm không hợp lệ.";
}

$connect->close();
?>
