<?php
session_start();
include_once "warning.php";
if (isset($_SESSION['quyen'])) {
   if ($_SESSION['quyen'] == 'admin') {
      if (isset($_GET['admin'])) {
         switch ($_GET['admin']) {
            case 'page':
               $ctrl = "page";
               break;
            case 'category':
               $ctrl = "category";
               break;
            case 'product':
               $ctrl = "product";
               break;
            case 'order':
               $ctrl = "order";
               break;
               case 'comment':
                  $ctrl = "comment";
                  break;
            default:
               break;
         }
         include_once "controller/c_$ctrl.php";
      } else {
         echo "Trang Dành cho quản trị Vui Lòng đăng nhập";
         echo "quay về trang chủ";
         echo '<a href="../index.php?mod=page&act=home">tại đây</a>';
      }
   } else {
      echo "Trang Dành cho quản trị";
      echo "quay về trang chủ";
      echo '<a href="../index.php?mod=page&act=home">tại đây</a>';
   }
} else {
   echo "Trang Dành cho quản trị Vui Lòng đăng nhập";
   echo "quay về trang chủ";
   echo '<a href="../index.php?mod=page&act=home">tại đây</a>';
}

?>
<a href="./index.php"></a>