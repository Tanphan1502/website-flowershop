<?php 
switch ($_GET['act']) {
   case 'xoacomment':
      include_once "model/m_comment.php";
      xoacmt($_GET['id_comment']);
      header("location:?admin=page&act=warning");
      break;
   default:
      break;
}
include_once "view/v_layout.php";
