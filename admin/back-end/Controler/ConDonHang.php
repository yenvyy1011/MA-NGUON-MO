<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$donhang = new DonHang();
if ($action=='index')
{
    $data =$donhang->all();
    include './View/donhang.php';

}
if ($action=='search')
{
    $kw = isset($_GET['kw'])?$_GET['kw']:'';
    $data =$donhang->search($kw);
    include './View/donhang.php';
}
if ($action=='update')
{
    $order_id = isset($_GET['id'])?$_GET['id']:'';
    $data = $donhang->updateview($order_id);
    include './View/donhang.php';
}
if ($action=='deletedonhang')
  {
      $order_id = isset($_GET['id'])?$_GET['id']:'';
  if($order_id != '')
  {
     $data = $donhang->delete($order_id);
     header('location:./index.php?controller=donhang'); 
  }
}