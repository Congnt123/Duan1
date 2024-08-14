<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "database/database.php";
function searchProducts($keyword) {
    // Kết nối tới cơ sở dữ liệu
    $conn = new mysqli('localhost', 'username', 'password', 'database');
    
    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    // Câu truy vấn tìm kiếm sản phẩm
    $sql = "SELECT * FROM products WHERE name LIKE ? OR description LIKE ? OR price LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%".$keyword."%";
    $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
    
    // Thực thi câu truy vấn
    $stmt->execute();
    $result = $stmt->get_result();

    // Xử lý kết quả tìm kiếm
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Price: " . $row["price"]. "<br>";
        }
    } else {
        echo "Không tìm thấy sản phẩm nào.";
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();
}
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="assets/img/4e7c9974efd67fa30b52515f49653a85.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="index.php" class="d-block">Nguyễn Thành Công</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <form method="GET" action="search.php" class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" name="search" placeholder="Tìm Kiếm Sản Phẩm" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </form>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/index.php" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
         
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Sản Phẩm
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">6</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="themsanpham.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Sản Phẩm</p>
                  </a>
                </li>
               
                <li class="nav-item">
                  <a href="danhmucsanpham.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh mục sản phẩm</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="danhsach.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách sản phẩm</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>

          <ul class="nav nav-treeview">
         
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
             <p>
               Khách hàng
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right">6</span>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="khachhang.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Danh sách kháng hàng</p>
               </a>
             </li>
            
             <li class="nav-item">
               <a href="donhang.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Đơn hàng</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="thongke.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Thống kê</p>
               </a>
             </li>
           </ul>
         </li>
       </ul>
        </li>
        <!-- Add Register and Login links -->
        <li class="nav-item">
          <a href="logout.php" class="nav-link">
            <i class="nav-icon fas fa-sign-in-alt"></i>
            <p>
              Đăng xuất
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

