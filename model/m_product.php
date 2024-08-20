<?php 
   include_once "model/m_connect.php";
   // hiển thị  danh mục gym trang  chủ
   function listdanhmuc(){
      return pdo_query("SELECT * FROM danhmuc
      WHERE gimtrangchu = 'co'
      ORDER BY rand()");
   }
   // hiển thị sản phẩm theo danh mục random 
   function listsanphamindanhmuc(){
      return pdo_query("SELECT
      hoa.id,
      hoa.tenhoa,
      hoa.anhhoa,
      hoa.giaban,
      hoa.giakm,
      hoa.soluongtonkho,
      hoa.id_danhmuc
    FROM hoa
    JOIN danhmuc
        ON hoa.id_danhmuc = danhmuc.id
    WHERE danhmuc.gimtrangchu = 'co'
    ORDER BY hoa.id_danhmuc DESC;
    ");
   }
   // show sản phẩm có danh mục được ưu tiên
   function flowerKM(){
      return pdo_query("SELECT
      hoa.id,
      hoa.tenhoa,
      hoa.anhhoa,
      hoa.giaban,
      hoa.giakm,
      hoa.soluongtonkho,
      hoa.id_danhmuc
    FROM hoa
    JOIN danhmuc
        ON hoa.id_danhmuc = danhmuc.id
    WHERE danhmuc.gimtrangchu = 'uutien'
    ORDER BY hoa.id_danhmuc DESC;
      limit 2");
   }
   // chi tiết sản phẩm
   function details($id){
      return pdo_query_one("SELECT * FROM hoa WHERE id = ?" ,$id);
   }
   // show sản phẩm liên quan để chi tiết của nó
   function sanphamlienquan($id_danhmuc){
      return pdo_query("SELECT * FROM hoa WHERE id_danhmuc = ?",$id_danhmuc);
   }
   // show danhmuc 
   function danhmuc(){
      return pdo_query("SELECT * FROM danhmuc");
   }
  // show san pham
  function sanpham(){
   return pdo_query("SELECT * FROM hoa");
  }
  // tìm kiếm sản phẩm
  function search($noidung){
    return pdo_query("SELECT * FROM hoa WHERE tenhoa LIKE ?" , '%'.$noidung.'%');
  }
  function search_danhmuc($id_danhmuc){
   return pdo_query("SELECT * FROM hoa WHERE id_danhmuc = ?", $id_danhmuc);
  }
  // show comment 
  function hienthicomment($id_hoa){
   return pdo_query("SELECT c.*, kh.hoten
   FROM comment c
   JOIN khachhang kh ON c.id_khachhang = kh.id
   WHERE c.id_hoa = ?" , $id_hoa);
  }
  function themcomment($id_hoa,$id_khachhang,$ngaycomment,$noidung){
   pdo_execute("INSERT INTO comment(id_hoa,id_khachhang,ngay_comment,noi_dung)
   value(?,?,?,?)",$id_hoa,$id_khachhang,$ngaycomment,$noidung);
  }
?>