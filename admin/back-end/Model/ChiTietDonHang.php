<?php 
class ChiTietDonHang extends Db 
{
    //lay ra tat ca don hang
    function all()
    {
        return $this->selectQuery('select * from order_detail');
    }

    function random($n)
    {
        return $this->selectQuery("select * from order order_detail by rand() limit 0, $n");
    }
    function byId($order_id)
    {
        $data = $this->selectQuery('select * from order_detail where order_id=?', [$order_id]);
        if (count($data)>0) return $data[0];

        return [];
    }
    function updateview($order_id)
    {
        $sql = "select * from order_detail join book on order_detail.book_id = book.book_id join order1 on order1.order_id = order_detail.order_id where order_id ='$_GET[id]'";
        $arr=[$order_id];
        return $this->selectQuery($sql , $arr);

    }
    function search($kw)
    {
        $sql="select * from order_detail where order_id like ?";
        $arr=["%$kw%"];

        return $this->selectQuery($sql, $arr);
    }
    function delete($order_id)
    {
        $sql="Delete from order_detail where order_id=?";
        $arr=[$order_id];
        return $this->updateQuery($sql , $arr);

    }

}