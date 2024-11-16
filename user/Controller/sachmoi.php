<?php 
$action =isset($_GET['action'])?$_GET['action']:'sachmoi';

if ($action=='sachmoi')
{
   // echo 'trang chu';
    //load model-> lay data
  
    include './View/sachmoi.php';

}