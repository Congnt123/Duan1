<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/client/style.css/style4.css">

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
                        <a href="./main.php">Thương Hiệu</a>
                        <a href="client/sanpham.php">Nam</a>
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
            <!-- <div class="cart-checkout-page">
                <div class="page1">
                    <div class="sanpham1">
                        <a href="ctsanpham.html"><img src="img/sp1.avif" alt=""></a>
                        <p>Casio World Time AE- <br> 1200WHD-1AVDF – Nam – <br> Quartz (Pin) – Mặt số thiên <br>hướng không quân đương 
                        <h4>1.506.000 ₫</h4></p>
                   
                    </div>

                </div>

            </div> -->
            <div class="cart-checkout-page">



                <div class="product-info">
                    <h2>Thông Tin Sản Phẩm</h2>
                    <div class="sanpham1">
                        <a href="client/ctsanpham.php"><img src="img/sp1.avif" alt=""></a>
                        <p>Casio World Time AE- 1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt số thiên hướng không quân đương
                        <h4 class="price">1.506.000 ₫</h4>
                        </p>
                        <div class="quantity-controls">
                            <button class="minus">
                                <div style="margin-top: -5px;">-</div>
                            </button>
                            <input type="text" class="quantity" value="1" readonly>
                            <button class="plus">
                                <div style="margin-top: -5px;">+</div>
                            </button>
                        </div>
                      <div class="tong">
                        <p class="total-">Tổng tiền: <span class="total-price-value"> <span class="total"></span>₫
                      </div>


                    </div>
  <p style="font-family: Arial, Helvetica, sans-serif;"><img src="img/thungrac.jpg" alt=""  style="width: 25px;"> Xóa</p>

                  
                </div>


                <form class="payment-form">
                    <h2>Thông Tin Người Mua</h2>
                    <label for="name">Họ và Tên</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="address">Địa Chỉ</label>
                    <input type="text" id="address" name="address" required>

                    <label for="phone">Số Điện Thoại</label>
                    <input type="tel" id="phone" name="phone" required>

                    <h2>Phương Thức Thanh Toán</h2>
                    
                    <label for="card">Số Thẻ Tín Dụng</label>
                    <input type="text" id="card" name="card" required>

                    <label for="expiry">Ngày Hết Hạn</label>
                    <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>

                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" required>

                  <a href="main.php"> <button type="submit"style="    margin-left: 0px;">Thanh Toán</button></a> 
                </form>
           
            
         </div>

            <script src="/plugins/js/thanhtoan.js"></script>
    </body>

</html>