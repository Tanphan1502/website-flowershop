<?php
switch ($_GET['act']) {
   case 'capnhap':
      include_once "model/m_order.php";
         capnhap($_POST['cn_donhangmoi'],$_POST['id_donhang']);
         header("location:?admin=page&act=order"); 
      break;
   case 'xemdonhang':
      include_once "model/m_order.php";
      $tenkhachhang = hienthitenkhachhang($_GET['id_khachhang']);
      $hienthithanhtoan =  showthanhtoancuakhachhang($_GET['id_khachhang'], $_GET['id_donhang']);
      $tongtien = 0;
      $_GET['act'] = "order";
      $view_name = "order_donhang";
      break;
   default:
      break;
}
include_once "view/v_layout.php";
