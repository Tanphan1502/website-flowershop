<?php
include_once "model/m_connect.php";
function account(){
   return pdo_query("SELECT * FROM khachhang ");
}
