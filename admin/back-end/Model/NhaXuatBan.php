<?php 
class NhaXuatBan extends Db 
{
    //lay ra tat ca nha xuat ban
    function all()
    {
        return $this->selectQuery('select * from publisher');
    }

    function random($n)
    {
        return $this->selectQuery("select * from publisher order by rand() limit 0, $n");
    }
    function byId($manxb)
    {
        $data = $this->selectQuery('select * from publisher where pub_id=?', [$manxb]);
        if (count($data)>0) return $data[0];

        return [];
    }
    function search($kw)
    {
        $sql="select * from publisher where pub_name like ?";
        $arr=["%$kw%"];

        return $this->selectQuery($sql, $arr);
    }
    function updatedulieu($pub_id)
    {
      $sql = " Select * from publisher where pub_id= '$_GET[id]'" ;
        $arr=[$pub_id];
        return $this->selectQuery($sql , $arr);

    }
    function updatenhaxuatban($pub_name)
    {
        $sql = " update publisher SET pub_name = '".$pub_name."' where pub_id= '$_GET[id]'" ;
        $arr=[$pub_name];
        return $this->updateQuery($sql,$arr);
    }
    function insertnhaxuatban($pub_id,$pub_name)
    {
        $sql = "insert into publisher (pub_id,pub_name) value (?,?)";
        $arr=[$pub_id,$pub_name];
        return $this->updateQuery($sql,$arr);
    }
    function deletenhaxuatban($pub_id)
    {
        $sql="Delete from publisher where pub_id=?";
        $arr=[$pub_id];
        return $this->updateQuery($sql , $arr);

    }
 }