<?php 
$action =isset($_GET['action'])?$_GET['action']:'trangchu';
$sach = new Book();
if ($action=='trangchu')
{
   $data = $sach->all();
  
    include './View/index.php';
}
if($action=='ttsanpham'){
    include './View/ttsanpham.php';
}
if($action=='ttsanpham2'){
    include './View/ttsanpham2.php';
}
if($action=='ttsanpham3'){
    include './View/ttsanpham3.php';
}