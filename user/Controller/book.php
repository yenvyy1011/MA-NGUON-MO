<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$sach = new Book();
if ($action=='index')
{
   
    $data = $sach->all();
    include 'View/index.php';

}

if ($action=='detail')
{
  //  echo 'chi tiet sach';
    
    //load model-> lay data 
    $masach = isset($_GET['id'])?$_GET['id']:'';
    $data =$sach->byId($masach);
    //gui data toi view: load view
    include 'View/detail.php';
}

if ($action=='search')
{
    $kw = isset($_GET['kw'])?$_GET['kw']:'';
    $data =$sach->search($kw);
    //gui data toi view: load view
    include 'View/index1.php';
}
if($action=='baiviet'){
    include '../View/baiviet.php';
}
if($action=='cart'){
    include '../View/giohang.php';
}

if ($action=='all')
{
    $data =$sach->all();
    //gui data toi view: load view
    include '../View/index.php';
}
