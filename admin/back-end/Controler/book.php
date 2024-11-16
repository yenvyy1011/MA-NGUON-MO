<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$sach = new Book();
if ($action=='index')
{
    $data =$sach->random(6);
    include './View/sanpham.php';

}
if ($action=='detail')
{
    $masach = isset($_GET['id'])?$_GET['id']:'';
    $data =$sach->byId($masach);
    include './views/book/detail.php';
}

if ($action=='search')
{
    $kw = isset($_GET['kw'])?$_GET['kw']:'';
    $data =$sach->search($kw);
    include './views/book/index.php';
}
if ($action=='all')
{
    $data =$sach->all();
    include './views/book/index.php';
}
