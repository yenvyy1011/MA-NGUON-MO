<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$ctdonhang = new ChiTietDonHang();
if ($action=='index')
{
    $data =$ctdonhang->all();
    include './View/chitietdonhang.php';

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
    $data = $ctdonhang->updateview($order_id);
    include './View/chitietdonhang.php';


}