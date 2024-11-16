
<?php
class dangnhapmodel extends Db{
	function getdangnhap($email,$password)
	{
		$sql='select * from users where email=? and password = ?';
		$arr=[$email,$matkhau];
		return $this->selectQuery($sql, $arr);
        
	}
	
    function dangnhap($email,$matkhau)
    {
    	$sql='select * from users where email=? and password = ?';
    	$arr=[$email,$password];
    	return $this->updateQuery($sql, $arr);
    }

}
?>
<?php
session_start();
if(isset($_POST['dangnhap'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

if($username=="111@gmail.com" && $password=="111"){
  $_SESSION['username']= $username;
    header('location:index.php?controller=trangchu');
    $_SESSION['username'] = $username;
    }
    else{
        echo '111@gmail.com && pass: 111';
    }
}
?>