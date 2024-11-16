<?php
$action = isset($_GET['action'])?$_GET['action']:'index';
$dangnhap = new DangNhapmodel();
if($action == 'index')
{
  include './View/index.php';
}

if($action == 'login')
{
if(!isset($_SESSION)){
    session_start();
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = MD5($_POST["password"]);
    $data = $dangnhap->dangnhap1($username,$email,$password);
    if($data > 0){
      
       $_SESSION["username"]=$username;
       header("location: index.php?controller=index1&action=index");
         echo ' Đăng nhập thành công';
       exit();
     }else{
      echo 'Bạn đăng nhập thất bại ';
      include './View/index.php';
     }
     exit();
      }
  }

?>

