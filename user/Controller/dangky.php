<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$dangky=new dangkymodel();
if($action=='index'){
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$address = $_POST['address'];
 	$phone = $_POST['phone'];
 	$password = $_POST['password'];
 	$repassword = $_POST['repassword'];
 	$data=$dangky->insert($email,$password, $name, $address, $phone);
 	$data=$dangky->all();
 	var_dump($data);
    echo "<script type='text/javascript'>alert('$message');</script> Nhấn vào đây để <a href='index.php?controller=trangchu&action=login'>Login</a>";
}
?>
