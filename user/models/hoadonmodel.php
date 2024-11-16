<?php 
class hoadonmodel extends Db{


    function insert($order_id,$email, $consignee_name, $consignee_add, $consignee_phone, $status='1')
	{
		$sql="INSERT INTO `order1` (`order_id`, `email`, `order_date`, `consignee_name`, `consignee_add`, `consignee_phone`, `status`) VALUES ('$order_id', '$email', CURRENT_TIMESTAMP, ' $consignee_name ', '$consignee_add', '$consignee_phone', '$status')";
		
		return $this->updateQuery($sql);

    }
}