<?php 
class chitiethoadonmodel extends Db{


    function insert($order_id, $book_id, $quantity, $price)
	{
		$sql="INSERT INTO `order_detail` VALUES ('$order_id', '$book_id', '$quantity', '$price')";
	
		return $this->updateQuery($sql);

    }
}