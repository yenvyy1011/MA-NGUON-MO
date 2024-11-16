<?php 
$action =isset($_GET['action'])?$_GET['action']:'baiviet';
$bv = new baiviet();
if ($action=='baiviet')
{
   // echo 'trang chu';
    //load model-> lay data
      $data = $bv->all();
    include './View/baiviet.php';

}