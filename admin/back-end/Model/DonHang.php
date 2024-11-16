<?php 
class DonHang extends Db 
{
    //lay ra tat ca don hang
    function all()
    {
        return $this->selectQuery('select * from order1');
    }

    function random($n)
    {
        return $this->selectQuery("select * from order order1 by rand() limit 0, $n");
    }
    function byId($order_id)
    {
        $data = $this->selectQuery('select * from order1 where order_id=?', [$order_id]);
        if (count($data)>0) return $data[0];

        return [];
    }
    function search($kw)
    {
        $sql="select * from order1 where order_id like ?";
        $arr=["%$kw%"];

        return $this->selectQuery($sql, $arr);
    }
    function delete($order_id)
    {
        $sql="Delete from order1 where order_id=?";
        $arr=[$order_id];
        return $this->updateQuery($sql , $arr);

    }
   function updateview($order_id)
    {
        $sql = "select * from order1 where order_id ='$_GET[id]'";
        $arr=[$order_id];
        return $this->selectQuery($sql , $arr);

    }
}