<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$theloai = new TheLoai();
if ($action=='index')
{
    $data =$theloai->all();
    include './View/danhmuc.php';
}


if ($action=='search')
{
    $kw = isset($_GET['kw'])?$_GET['kw']:'';
    $data =$theloai->search($kw);
    include './View/danhmuc.php';
}
  if ($action=='deletetheloai')
  {
      $cat_id = isset($_GET['id'])?$_GET['id']:'';
  if($cat_id != '')
  {
     $data = $theloai->deletetheloai($cat_id);
     header('location:./index.php?controller=theloai'); 
  }
}
if ($action=='updatetheloai')
{
    $cat_id = isset($_GET['id'])?$_GET['id']:'';
    $data = $theloai->updatetheloai($cat_id);
    include './View/danhmuceditpage.php';
}
if($action == 'xulysuatheloai')
{
  $cat_name = $_POST['cat_name'];
  $data = $theloai->updatelen($cat_name);
  header('location:./index.php?controller=theloai'); 
}
if($action == 'xulythemtheloai')
{
   $cat_id = $_POST['cat_id'];
    $cat_name = $_POST['cat_name'];
    $data = $theloai->insertlen($cat_id,$cat_name);
  header('location:./index.php?controller=theloai'); 
}

