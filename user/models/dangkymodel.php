<?php
class dangkymodel extends Db{

    function insert($email,$password, $name, $address, $phone)
	{
		$sql="INSERT INTO users (email, password,name, address, phone) values (?,?,?,?,?)";
		$arr=[$email,$password,$name,$address,$phone];
		return $this->updateQuery($sql, $arr);  
	}
	function update($email,$password, $name, $address, $phone)
    {
        $sql = "UPDATE users SET email='".$email."',password='".$password."',name='".$name."',address='".$address."',phone='".$phone."' WHERE email='$_GET[email]'";
        $a=[$email,$password, $name, $address, $phone];
        return $this->updateQuery($sql, $a);
    }
    function all()
    {
    	return this->selectQuery('SELECT * FROM users');
    }
}
?>