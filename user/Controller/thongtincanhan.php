<?php 
if(!isset($_SESSION))
{
    session_start();               
}
$action =isset($_GET['action'])?$_GET['action']:'thongtincanhan';
$kh= new dangnhapmodel();
if ($action=='thongtincanhan')
{
   
    if(!isset($_SESSION['email'])){
        header('location:index.php?controller=dangnhap');
    }else{
   
    $khachhang = $kh->khachhangcoemail($_SESSION["email"]);
               $email = $_SESSION["email"];                                 
                $password = $khachhang[0]['password'];   
                $name = $khachhang[0]['name'];      
                $address = $khachhang[0]['address'];
                $phone = $khachhang[0]['phone'];             
  include './View/thongtincanhan.php';
   }
}
if ($action== 'suathongtin'){
   $email = $_SESSION["email"];
   $name = $_POST['name'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
    $data = $kh->update($email, $name, $address, $phone);
    $message = "Thay đổi thành công.";
    echo "<script type='text/javascript'>alert('$message');</script> Nhấn vào đây để <a href='index.php?controller=thongtincanhan'>Tiếp tục </a>";
}