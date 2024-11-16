<?php 
class DangNhapmodel extends Db 
{
	function getdangnhap($username,$email,$password){
        $sql='select * from admin where username=? and email =? and password=?';
        $arr=[$username,$email,$password];
        return $this->select($sql, $arr);
    }
    function dangnhap1($username,$email,$password){
        $sql='select * from admin where username=? and email=? and password=?';
        $arr=[$username,$email,$password];
        return $this->updateQuery($sql, $arr);
    }
}
