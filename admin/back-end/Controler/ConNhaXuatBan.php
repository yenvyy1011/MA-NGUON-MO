<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$nhaxuatban = new NhaXuatBan();
if ($action=='index')
{
    $data =$nhaxuatban->all();
    include './View/nhaxuatban.php';
}
if ($action=='search')
{
    $kw = isset($_GET['kw'])?$_GET['kw']:'';
    $data =$nhaxuatban->search($kw);
    include './View/nhaxuatban.php';
}
  if ($action=='deletenhaxuatban')
  {
      $pub_id = isset($_GET['id'])?$_GET['id']:'';
  if($pub_id != '')
  {
     $data = $nhaxuatban->deletenhaxuatban($pub_id);
     header('location:./index.php?controller=nhaxuatban'); 
  }
}
if ($action=='updatenhaxuatban')
{
    $pub_id = isset($_GET['id'])?$_GET['id']:'';
    $data = $nhaxuatban->updatedulieu($pub_id);
    include './View/nhaxuatbaneditpage.php';
}
if($action == 'xulysuanhaxuatban')
{

  $pub_name = $_POST['pub_name'];
  
  $data = $nhaxuatban->updatenhaxuatban($pub_name);
  header('location:./index.php?controller=nhaxuatban'); 
}
if($action == 'xulythemnhaxuatban')
{
   $pub_id = $_POST['pub_id'];
    $pub_name = $_POST['pub_name'];
    $data = $nhaxuatban->insertnhaxuatban($pub_id,$pub_name);
  header('location:./index.php?controller=nhaxuatban'); 
}