<?php
require "database/database.php";
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Kết nối đến database
$connect = new mysqli($servername, $username, $password, $database);

$search_term = '';
if (isset($_GET['search'])) {
    $search_term = $_GET['search'];
}

// Truy vấn lấy tất cả sản phẩm hoặc theo từ khóa tìm kiếm
$sql = "SELECT * FROM products";
if (!empty($search_term)) {
    $sql .= " WHERE name LIKE '%" . $connect->real_escape_string($search_term) . "%'";
}

$result = $connect->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/client/style.css/style.css">
</head>

<body>
    <h3>Bộ Sưu Tập Đồng Hồ Mới</h3>
    <div class="container">
        <div class="logo">
            <img src="img/lg.png" alt="" style=" box-shadow: 5px 2px  rgba(255, 2, 2, 0.3);">
            <!-- Search Form -->
            <form method="GET" action="">
                <input type="text" name="search" placeholder="Tìm kiếm..." class="search-input" value="<?php echo htmlspecialchars($search_term); ?>">
                <button type="submit" class="search-button">Tìm</button>
            </form>
            <a href="login.html">Đăng nhập</a>
            <a href="dangky.php">Đăng ký</a>
            <a href="/client/thanhtoan.php">
                <img src="img/shopping-cart-icon-png-transparent-3.png" style="width: 35px; margin-left: 190px; " alt="/client/thanhtoan.php">
            </a>
        </div>
        <header>
            <ul class="nav">
                <li>
                    <strong><a href="main.php">Thương Hiệu</a></strong>
                    <a href="client/sanpham.php">Nam</a>
                    <a href="#">Nữ</a>
                    <a href="#">Cặp Đôi</a>
                    <a href="#">Trang Sức</a>
                    <a href="#">Phụ Kiện</a>
                    <a href="#">Liên Hệ</a>
                    <a href="#">Tin Tức</a>
                </li>
            </ul>
        </header>

        <hr>
        <div class="banner">
            <img src="img/citizen-tsuyosa-pc.jpg" alt="">
        </div>
        <div class="banner1">
            <div>
                <img src="img/1.avif" alt="">
                <h5><strong>Đồng hồ thời <br>trang xà cừ</strong></h5>
            </div>
            <div>
                <img src="img/2.avif" alt="">
                <h5><strong>Phiên bản giới <br>hạn</strong></h5>
            </div>
            <div>
                <img src="img/3.avif" alt="">
                <h5><strong>Mặt số siêu <br>mỏng</strong></h5>
            </div>
            <div>
                <img src="img/4.avif" alt="">
                <h5><strong>Đồng hồ <br>Skeleton siêu</strong></h5>
            </div>
            <div>
                <img src="img/5.avif" alt="">
                <h5><strong>Đồng hồ cao <br>cấp vàng 18K</strong></h5>
            </div>
            <div>
                <img src="img/6.avif" alt="">
                <h5><strong>Đá quý - Vật <br>liệu quý hiếm</strong></h5>
            </div>
        </div>

        <div class="banner1">
            <div>
                <img src="img/7.avif" alt="">
                <h5><strong> Dây da Hirsch</strong></h5>
            </div>
            <div>
                <img src="img/8.avif" alt="">
                <h5><strong> Đính kim cương</strong></h5>
            </div>
            <div>
                <img src="img/99.avif" alt="">
                <h5><strong> Kính Hải Triều</strong></h5>
            </div>
            <div>
                <img src="img/9.avif" alt="">
                <h5> <strong>Ví da thật</strong></h5>
            </div>
            <div>
                <img src="img/10.avif" alt="">
                <h5><strong> Dây da đồng hồ</strong></h5>
            </div>
            <div>
                <img src="img/11.avif" alt="">
                <h5><strong> Trang sức</strong></h5>
            </div>
        </div>

        <div class="container_swap">
            <div class="div_left">
                <img src="img/Saga.avif" alt="">
            </div>
            <div class="div_right">
                <img src="img/nhung.avif" alt="">
                <img src="img/nhung-22.avif" alt="">
                <div class="duoi">
                    <img src="img/dong-ho-doi-cap.avif" alt="">
                    <img src="img/bn.avif" alt="">
                </div>
            </div>
        </div>

        <hr>
        <h2 style="text-align: center;">ĐỒNG HỒ NAM BÁN CHẠY</h2>

        <div class="sanpham">
            <?php
            if ($result->num_rows > 0) {
                // Hiển thị từng sản phẩm
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='sanpham1'>";
                    echo "<h2>" . htmlspecialchars($row['name']) . "</h2>";
                    echo "<img src='assets/img/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' width='100' height='100'>";
                    echo "<p>" . htmlspecialchars($row['short_description']) . "</p>";
                    echo "<h4>" . htmlspecialchars($row['price']) . " VND</h4>";
                    echo "</div>";
                }
            } else {
                echo "<p>Không có sản phẩm nào.</p>";
            }

            $connect->close();
            ?>
        </div>

        <hr>
        <div class="tex">
            <h4 style="text-align: center;">CÁC DỊCH VỤ TẠI HẢI TRIỂU</h4>
            <div style="text-align: center;">
                <img src="img/s1.avif" style="padding:20px;" alt="">
                <img src="img/s2.avif" style="padding:20px;" alt="">
                <img src="img/s3.avif" style="padding:20px;" alt="">
            </div>
        </div>

        <footer>

            <div class="footer1">
                <div class="fo1">
                    <h3>
                        CHÍNH SÁCH <br>

                        Chính sách đổi hàng <br>
                        Chính sách bảo hành</h3>
                        <img src="img/p11.avif" style="width: 200px; margin-left: 65px;" alt="">
                    <img src="img/p12.avif"  style="width: 200px; margin-left: 65px;" alt="">
                    <img src="img/p13.avif"  style="width: 200px; margin-left: 65px;" alt="">
                    <img src="img/logo-kinh-2.avif"  style="width: 100px; margin-left: 65px;" alt="">
                    <img src="img/logo-hai-trieu-1.avif"  style="width: 100px; margin-left: 65px;" alt="">
                </div>
                <div class="fo1">
                    <h3>
                        HỆ THỐNG CỬA HÀNG<br>
                        TP. Hồ Chí Minh<br>
                        Hà Nội<br>
                        Hải Phòng<br>
                        Biên Hoà - Bình Dương<br>
                        Đà Nẵng<br>
                        Vũng Tàu<br>
                        Cần Thơ<br>
                        Long Xuyên<br>
                        Trung Tâm Bảo Hành</h3>
                </div>
                <div class="fo1">
                    <h3>
                        THÔNG TIN<br>
                        Thông tin liên hệ<br>
                        Thanh toán - Trả góp<br>
                        Liên hệ đối tác doanh nghiệp<br>
                        Vận chuyển & Giao nhận<br>
                        THAM KHẢO<br>
                        <br>
                        Điều khoản sử dụng<br>
                        Bảo mật thông tin<br>
                        Tra cứu đồng hồ bảo hành<br>
                        Thông tin liên hệ<br>
                        Thanh toán - Trả góp<br>
                        Liên hệ đối tác doanh nghiệp<br>
                        Vận chuyển & Giao nhận<br>
                        THAM KHẢO<br>

                        Điều khoản sử dụng<br>
                        Bảo mật thông tin<br>
                        Tra cứu đồng hồ bảo hành
                    </h3>
                </div>
                <div class="fo1">
                    <h3>Copyright by Đồng Hồ Hải Triều®<br> Since 1991
                        Công ty TNHH Hải Triều Việt Nam<br>
                        GPDKKD Số: 0315667679 do sở <br>KH & ĐT TP.HCM cấp ngày: 22/08/2022<br>
                        Góp ý & Khiếu nại: ceo@donghohaitrieu.com<br>
                        Địa chỉ trụ sở: 50/22 Gò Dầu, Phường Tân Quý,<br> Quận Tân Phú, TP. Hồ Chí MInh
                        Hotline: 1900 6777</h3>
                        
                    <img src="img/fb.avif" style="width: 50px; float: left; " alt="">
                    <img src="img/it.avif" style="width: 50px; float: left;" alt="">
                    <img src="img/yt.avif" style="width: 50px; float: left;" alt="">
                    <img src="img/tt.avif" style="width: 50px; float: left;" alt="">
                    <img src="img/tw.avif" style="width: 50px; float: left;" alt="">
                </div>

            </div>


        </footer>
    </div>
</body>

</html>