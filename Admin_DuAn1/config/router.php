<?php
$act = $_GET['act']??'';


// include "modules/product/index.php";

if (!empty($act)) {

    switch ($act) {
        case 'product':
$page = $_GET ['page']??'';
$id = $_GET ['id']?? '';
if (!empty($page) && $page === 'them') {
    include "modules/product/from.php";
}
else if (!empty($page) && $page === 'sua' ) {
    include "modules/product/from.php";
    if(sizeof($_POST)===0){

        // load giao dien;
    }else{
        // kiểm tra dữ liêu j
        // sửa dữ liệu
        // header locatin  danh sách
    }

} 
else if (!empty($page) && $page === 'xoa' && !empty($id)) {
    include "danhsach.php";
}else {
    echo 'load danh sách rz';
}
    
            break;
        case 'baiviet':
        $page = $_GET ['page']??'';
        $id = $_GET ['id']?? '';
        if (!empty($page) && $page === 'danhsach') {
            include "danhsach.php";

     }else if (!empty($page) && $page === 'danhsach') {
        include "danhsach.php";
     }
            break;
        case 'donhang':

            break;
            case 'khachhang':

                break;
                
 default:

 break;
 
    }
}