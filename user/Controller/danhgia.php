<?php 
$action =isset($_GET['action'])?$_GET['action']:'danhgia';

if ($action=='danhgia')
{
   // echo 'trang chu';
    //load model-> lay data
  
    include './View/danhgia.php';

}