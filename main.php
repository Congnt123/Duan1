<?php
require "database/database.php";
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// Kết nối đến database
$connect = new mysqli($servername, $username, $password, $database);

// Truy vấn lấy tất cả sản phẩm
$sql = "SELECT * FROM products";
$result = $connect->query($sql);


// Kết nối đến database

if ($result->num_rows > 0) {
    // Hiển thị từng sản phẩm
    while($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<p>Giá: " . $row['price'] . " VND</p>";
        echo "<p>" . $row['short_description'] . "</p>";
        echo "<td><img src='assets/img/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' width='100' height='100'></td>";
        echo "</div>";
    }
} else {
    echo "Không có sản phẩm nào.";
}

$connect->close();

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
            <img src="img/logo.avif" alt="">
            <input type="text" placeholder="Tìm kiếm..." class="search-input">
            <button class="search-button">Tìm</button>
            <a href="/client/thanhtoan.php">
                <img src="img/shopping-cart-icon-png-transparent-3.png" style="width: 35px; margin-left: 150px;" alt="">
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
                    <a href="login.php">Đăng nhập</a>
                    <a href="dangky.php">Đăng ký</a>
                </li>
            </ul>
        </header>

        <!-- Rest of your HTML content -->
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

        <!-- Rest of your content continues here... -->
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
<div class="dươi">
<img src="img/dong-ho-doi-cap.avif" alt="">
</div>

</div>

</div>









 

 

 <hr>
 <h2 style="text-align: center;">ĐỒNG HỒ NAM BÁN CHẠY</h2>

<div class="sanpham">

    <div class="sanpham1">
        <img src="img/sp1.avif" alt="client/ctsanpham.php">
        <p>Casio World Time AE- <br> 1200WHD-1AVDF – Nam – <br> Quartz (Pin) – Mặt số thiên <br>hướng không quân đương 
        <h4>1.506.000 ₫</h4></p>
   
    </div>
    <div class="sanpham1">
        <img src="img/ap2.avif" alt="">
        <p>Orient SK RA-AA0B02R19B <br> – Nam – Automatic (Tự<br> Động) – Mặt Số 41.7mm,<br> Trữ Cót 40 Giờ, Hacking
            <h4>8.000.000 ₫</h4></p>
   
    </div> <div class="sanpham1">
        <img src="img/sp3.avif" alt="">
        <p>Tissot Le Locle <br> Powermatic 80 <br>T006.407.22.033.00 – Nam<br> – Automatic – Mạ Vàng
            <h4>22.750.000 ₫</h4></p>
   
    </div> <div class="sanpham1">
        <img src="img/sp4.avif" alt="">
        <p>Tissot Le Locle<br> Powermatic 80<br> T006.407.16.033.00 – Nam <br>– Automatic – Mặt Số 
            <h4>17.500.000 ₫</h4></p>
   
    </div>
    
    
 </div>
 <div class="sanpham">

    <div class="sanpham1">
        <img src="img/sp5.avif" alt="">
        <p>Doxa Noble D173TCM –<br> Nam – Kính Sapphire – <br>Đính 8 Viên Kim Cương –<br> Sellita SW240 Automatic
            <h4>49.240.000 ₫</h4></p>
   
    </div>
    <div class="sanpham1">
        <img src="img/ps6.avif" alt="">
        <p>Titoni Airmaster 83743 S-<br>682 – Nam – Kính Sapphire<br> – Automatic – Mặt Số<br> 39mm, Đính Đá Pha Lê,
            <h4>35.350.000 ₫</h4> </p>
   
    </div> <div class="sanpham1">
        <img src="img/sp7.avif" alt="">
        <p>Tissot PRX Powermatic <br> 80 T137.407.11.351.00 –<br> Nam – Automatic – Mặt Số Ice <br>Blue 40mm, Trữ 
            <h4>21.000.000 ₫</h4></p>
   
    </div> <div class="sanpham1">
        <img src="img/sp8.avif" alt="">
        <p>Seiko 5 Sports<br> – SRPK41K1 – Nam – <br>Hardlex Cong – <br>Bản Kỷ Niệm 110 Năm – Giới Hạn
            <h4>12.500.000 ₫</h4> </p>
   
    </div>
    
    
 </div>
 <hr>
 <h2 style="text-align: center;">ĐỒNG HỒ NỮ BÁN CHẠY</h2>
 <div class="sanpham">

    <div class="sanpham1">
        <img src="img/n1.avif" alt="">
        <p>Daniel Wellington Quadro<br> DW00100431 – Nữ<br> – Quartz (Pin) – Mặt số <br>20mm, kính cứng, 
        <h4>4.906.000 ₫</h4></p>
   
    </div>
    <div class="sanpham1">
        <img src="img/n22.avif" alt="">
        <p>Saga Stella 53555-SVMWSV<br>-2 – Nữ – Kính Cứng<br> – Quartz (Pin) –<br> Mặt Số 22.5mm, Đính Đá 
            <h4>8.180.000 ₫</h4></p>
   
    </div> <div class="sanpham1">
        <img src="img/n3.avif" alt="">
        <p>Casio World Time AE-<br> 
            1200WHD-1AVDF – Nam –<br> 
            Quartz (Pin) – Mặt số thiên<br> 
            hướng không quân đương
            <h4>6.380.000 ₫</h4></p>
   
    </div> <div class="sanpham1">
        <img src="img/n4.avif" alt="">
        <p>Saga Long Xing Da Da<br>  53111-SVGERD-2LH –<br>  Nữ – Phiên Bản Giới Hạn<br>  999 Chiếc Toàn Cầu – Đính 73
            <h4>4.760.000 ₫</h4></p>
   
    </div>
    
    
 </div>
 <div class="sanpham">

    <div class="sanpham1">
        <img src="img/n5.avif" alt="">
        <p>Tissot Lovely Square  <br>T058.109.33.456.00 <br> – Nữ – Quartz (Pin) – 12  <br>viên Kim Cương – Kính Sapphir
            <h4>40.606.000 ₫</h4></p>
   
    </div>
    <div class="sanpham1">
        <img src="img/n6.avif" alt="">
        <p>Titoni Cosmo Queen <br>729 G-DB-541 – Nữ – <br>Kính Sapphire – Automatic<br> – Mặt Số 27mm, Mạ Vàng 
         <h4>4.050.000 ₫</h4></p>
   
    </div> <div class="sanpham1">
        <img src="img/n7.jpg" alt="">
        <p>Saga Stella 71836-<br>SVWHBL-2 – Nữ – Kính <br>Cứng – Quartz (Pin)<br> – Mặt Số 20x37mm, Đá
            <h4>12.750.000 ₫</h4> </p>
   
    </div> <div class="sanpham1">
        <img src="img/n8.avif" alt="">
        <p>Saga 53767-SVLGLG-2 <br>– Nữ – Quartz (Pin) – <br>Giọt nắng long lanh trên<br> nền nước yên ả – Vẻ đẹp độc
            <h4>7.310.000 ₫</h4> </p>
   
    </div>
    
    
 </div>

<div class="tex">
<h4 style="text-align: center;">CÁC DỊCH VỤ TẠI HẢI TRIỂU</h4>
<div style="text-align: center;">
<img src="img/s1.avif"style="padding:20px;" alt="">
<img src="img/s2.avif"style="padding:20px;" alt="">
<img src="img/s3.avif"style="padding:20px;" alt="">
</div>
</div>













</div>      
<footer>
<div class="footer1">
<div>
<h3>
CHÍNH SÁCH <br>

Chính sách đổi hàng <br>
Chính sách bảo hành</h3>
<img src="img/p11.avif"style width="200px" alt="">
<img src="img/p12.avif"style width="200px" alt="">
<img src="img/p13.avif"style width="200px" alt="">
<img src="img/logo-kinh-2.avif"style width="100px" alt="">
<img src="img/logo-hai-trieu-1.avif"style width="100px" alt="">
</div>
<div>
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
<div>
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
Tra cứu đồng hồ bảo hành</h3>
</div>
<div>
<h3>Copyright by Đồng Hồ Hải Triều®<br> Since 1991
Công ty TNHH Hải Triều Việt Nam<br>
GPDKKD Số: 0315667679 do sở <br>KH & ĐT TP.HCM cấp ngày: 22/08/2022<br>
Góp ý & Khiếu nại: ceo@donghohaitrieu.com<br>
Địa chỉ trụ sở: 50/22 Gò Dầu, Phường Tân Quý,<br> Quận Tân Phú, TP. Hồ Chí MInh
Hotline: 1900 6777</h3>
<img src="img/fb.avif" style="width: 50px; float: left; " alt="">
<img src="img/it.avif" style="width: 50px; float: left;" alt="">
<img src="img/yt.avif"  style="width: 50px; float: left;"alt="">
<img src="img/tt.avif"  style="width: 50px; float: left;"alt="">
<img src="img/tw.avif"  style="width: 50px; float: left;"alt="">
</div>

</div>
</footer>

    </div>
</body>
</html>
