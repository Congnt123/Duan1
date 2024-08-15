<?php
include  "../database/database.php";
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
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
    <link rel="stylesheet" href="/client/style.css/style2.css">
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
        <ul>
            <li>
                <a href="../main.php">Thương Hiệu</a>
                <strong><a href="">Nam</a></strong>
                <a href="">Nữ</a>
                <a href="">Cặp Đôi</a>
                <a href="">Trang Sức</a>
                <a href="">Phụ Kiện</a>
                <a href="">Liên Hệ</a>
                <a href="">Tin Tức</a>
              
            </li>
        </ul>




    </header>

    <hr>
    <h5 class="te">Trang chủ/ <P>Đồng Hồ Nam</P></h5>
    <div class="body">
<h3>
    Đồng hồ nam đẹp chính hãng, cao cấp, mẫu mới 2024, góp 0%
</h3>
<div class="hinh1">
    <img src="img/nhung.avif" alt="client/ctsanpham.php">
    <h4>Những mẫu đồng hồ nam đẹp luôn là món phụ kiện thời trang hoàn hảo cho tất cả các dịp, giúp nam giới tự tin hơn – khẳng định phong cách. Đặc biệt khi mà <br>
     nhiều thương hiệu đồng hồ nam thời trang quốc tế du nhập vào Việt Nam, việc mua sắm chiếc đồng hồ đeo tay nam phù hợp rất dễ dàng bởi sự đa dạng về <br>
      mẫu mã, màu sắc, tính năng và kiểu dáng. Shop Đồng Hồ Hải Triều hiện là đại lý ủy quyền của gần 30 thương hiệu, mang cả thế giới đồng hồ về trưng bày tại <br>
       hơn 25 chi nhánh trên toàn quốc.

    </h4>
    <hr style="width: 80%;">
    <h3>BỘ SƯ TẬP</h3>
    <div class="hinh2">
        
        <img src="img/x1.avif" alt="">
        <img src="img/x2.avif" alt="">
        <img src="img/x3.avif" alt=""> 
        <img src="img/x4.avif" alt="">
        <img src="img/x5.avif" alt="">
        <img src="img/x6.avif" alt="">

  </div>
    <div class="hinh2">
        <img src="img/x7.avif" alt="">
        <img src="img/x8.avif" alt="">
        <img src="img/x9.avif" alt=""> 
        <img src="img/x10.avif" alt="">
        <img src="img/x11.avif" alt="">
        <img src="img/x12.avif" alt="">

    </div>
    <hr>


<div class="table">
    <table>
        <tr>
            <th>Nam dây da</th>
        </tr>
        
        <tr>
            <th>Dây nam kim loại</th>
        </tr>
       <tr>
            <th>Nam Mặt Vuông</th>
        </tr>
        <tr>
            <th>Nam Automatic</th>
        </tr>
        <tr>
            <th>Nam đính đá</th>
        </tr>
        <tr>
            <th>Nam đính kim cương</th>
        </tr>
        <tr>
            <th>Casio nam</th>
        </tr>
        <tr>
            <th>Orient nam</th>
        </tr>
        <tr>
            <th>Citizen nam</th>
        </tr> 
        <tr>
            <th>Seiko nam</th>
        </tr>
        <tr>
            <th>Tissot nam</th>
        </tr>
        <tr>
            <th>Longines nam</th>
        </tr>
        <tr>
            <th>DW nam</th>
        </tr>
        <tr>
            <th>Đồng hồ điện tử nam</th>
        </tr>
        <tr>
            <th>Nam màu xanh</th>
        </tr>
        <tr>
            <th>Nam màu vàng</th>
        </tr>
        <tr>
            <th>Nam màu đen</th>
        </tr>
         <tr>
            <th>Nam màu trắng</th>
        </tr>
        <tr>
            <th>Nam màu xám</th>
        </tr>
        <tr>
            <th>Nam màu nâu</th>
        </tr>
        <tr>
            <th>Đồng hồ nam Nhật Bản</th>
        </tr>
        <tr>
            <th>Dồng hồ nam Thụy Sỹ</th>
        </tr>
       
    </table>
</div>

<hr>
<table class="thutu">
    <tr>
        <th>Thứ tự theo điểm đánh giá ></th>
    </tr>
</table>
<br>
<br>
<br>
<br>

<div class="sanpham">

<?php
            if ($result->num_rows > 0):
                // Hiển thị từng sản phẩm
                while ($row = $result->fetch_assoc()) :?>
                    <div class="sanpham1">
                    <h2> <?= htmlspecialchars($row['name']) ?> </h2>
                     <img src="../assets/img/<?= htmlspecialchars($row['image'])?>" alt='" <?= htmlspecialchars($row['name'])?> " width='100' height='100'>
                     <p> <?= htmlspecialchars($row['short_description'])?>  </p>
                     <h4><?= htmlspecialchars (number_format($row['price']) )?> VND</h4>
                     <h4> <?= htmlspecialchars (number_format($row['sale_price']) )?> VND</h4>
                    </div>
          <?php endwhile; 
          
          else:
          "không tìm thấy sản phẩm";
          endif;
          ?>
<?php
            $connect->close();
            ?>
    


  
<strong><p class="tl">Không cần vòng tay, dây chuyền lấp lánh như quý cô, một chiếc đồng hồ phù hợp sẽ giúp tôn lên phong cách cá nhân và khẳng định <br>
     địa vị của đấng mày râu. Bài viết dưới đây sẽ mang đến thông tin về những dòng đồng hồ nam xu hướng dành cho quý ông và tư vấn <br> chọn mua chuẩn xác.</p></strong>



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
     
    
</body>
</html>