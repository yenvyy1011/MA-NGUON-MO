<?php 
$action =isset($_GET['action'])?$_GET['action']:'sachgiaokhoa';

if ($action=='sachgiaokhoa')
{
   // echo 'trang chu';
    //load model-> lay data
  
    include './View/sachgiaokhoa.php';

}