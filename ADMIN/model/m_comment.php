<?php 
include_once "model/m_connect.php";
function comment(){
   return pdo_query("SELECT c.noi_dung,c.id, kh.hoten, h.tenhoa
   FROM comment c
   JOIN khachhang kh ON c.id_khachhang = kh.id
   JOIN hoa h ON c.id_hoa = h.id;");
}
function xoacmt($id_cmt){
   pdo_execute("DELETE FROM comment
   WHERE id = ?",$id_cmt);
}
?>