<?php
class dangnhapmodel extends Db{
	function getdangnhap($email,$password)
	{
		$sql='select * from users where email=? and password = ?';
		$arr=[$email,$password];
		return $this->selectQuery($sql, $arr);
        
	}
	
    function dangnhap($email,$password)
    {
    	$sql='select * from users where email=? and password = ?';
    	$arr=[$email,$password];
    	return $this->updateQuery($sql, $arr);
    }
    function insert($email,$password, $name, $address, $phone)
	{
		$sql="insert into users (email, password,name, address, phone) values (?,?,?,?,?)";
		$arr=[$email,$password, $name, $address, $phone];
		return $this->updateQuery($sql, $arr);
	}
	function all()
	{
		return $this->selectQuery('select * from users');
	}
	function khachhang($email)
	{
	   $sql="select * from users WHERE email=?";
       $a=[$email,$password, $name, $address, $phone];
       return $this->selectQuery($sql, $a);
	}
	function update($email, $name, $address, $phone)
    {
        $sql = "update users set name = '".$name."',address = '".$address."',phone = '".$phone."' WHERE email= '".$email."' ";
        return $this->updateQuery($sql);
    }
	function byId($email)
    {
       $sql="select * from users WHERE email='$_GET[id]'";
       $a=[$email];
       return $this->selectQuery($sql, $a);
    }
	function khachhangcoemail($email)
    {
    	$sql='select * from users where email=?';
    	$arr=[$email];
    	return $this->selectQuery($sql, $arr);
    }
}
?>