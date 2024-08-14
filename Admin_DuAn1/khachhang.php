
<style>
    .container-fluid {
    padding: 20px; /* Tăng padding cho container */
}

.bg-secondary {
    background-color:azure; /* Màu nền nhẹ nhàng */
    border-radius: 8px; /* Bo góc cho khung */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Thêm bóng đổ */
}

.table {
    width: 100%;
    margin: 20px 0; /* Thêm khoảng cách trên và dưới bảng */
    border-collapse: collapse;
}

.table th, .table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.table th {
    background-color: brown; /* Màu nền cho tiêu đề bảng */
    color: white; /* Màu chữ tiêu đề */
}

.table tr:hover {
    background-color: #e9ecef; /* Màu nền khi hover */
}

.table td {
    color: #333; /* Màu chữ cho các ô dữ liệu */
}

.table td:nth-child(2), .table td:nth-child(3) {
    word-wrap: break-word; /* Đảm bảo nội dung không bị tràn ra ngoài */
}

h6 {
    color: #333; /* Màu chữ cho tiêu đề */
    font-weight: bold; /* Đậm chữ tiêu đề */
    margin-bottom: 20px; /* Khoảng cách dưới tiêu đề */
    text-align: center;
}
</style>
<?php
require "layout/header.php";
require "database/database.php";
require "layout/slide.php";
?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-8 mx-auto">
                        <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Danh sách khách hàng</h6>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Tên Tài Khoản</th>
                            <th scope="col">Mật Khẩu</th>
                            
                           
                   
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM users";
                        $result = mysqli_query($connect, $query);

                  
                        if (mysqli_num_rows($result) > 0) {
                      
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['password'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8'>Không có dữ liệu</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require "layout/footer.php";?>