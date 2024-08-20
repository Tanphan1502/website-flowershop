<?php 
if(isset($_GET['act'])){
   switch ($_GET['act']) {
      case 'details':
         include_once "model/m_product.php";
         $details = details($_GET['id']);
         $showcomment = hienthicomment($_GET['id']);
         $main;
         $sanphamlienquan = sanphamlienquan($_GET['id_danhmuc']);
         $view_name = "product_details";
         break;
         case 'productAll':
         include_once "model/m_product.php";
         $nhomsanpham_product = danhmuc();
        if(isset($_GET['id_danhmuc'])){
         if($_GET['id_danhmuc']){
            // $sanphamlienquan = sanphamlienquan($_GET['id_danhmuc']);
            $tatcahoa = sanphamlienquan($_GET['id_danhmuc']);
         }
        }
        else{
         $tatcahoa = sanpham();
      }
         // làm show comment
         $view_name ="product_productAll";
         break;
         case 'comment':
            if($_SESSION['dangnhap'] == false){
               header("location:?mod=product&act=details&id=".$_GET['id']."&id_danhmuc=".$_GET['id_danhmuc']."&comment=false");
            }
            else{
               include_once "model/m_product.php";
               date_default_timezone_set('Asia/Ho_Chi_Minh');
               themcomment($_GET['id'],$_SESSION['id_khachhang'],date("Y:m:d:h:i:s"),$_POST['comment']);
               header("location:?mod=product&act=details&id=".$_GET['id']."&id_danhmuc=".$_GET['id_danhmuc']."");
            }
            break;
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}

?>