<?php 
$action =isset($_GET['action'])?$_GET['action']:'lienhe';

if ($action=='lienhe')
{
   // echo 'trang chu';
    //load model-> lay data
  
    include './View/lienhe.php';

}