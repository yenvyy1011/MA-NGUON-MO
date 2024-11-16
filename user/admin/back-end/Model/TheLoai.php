<?php 
class TheLoai extends Db 
{
    //lay ra tat ca the loai
    function all()
    {
        return $this->selectQuery('select * from category');
    }

    function random($n)
    {
        return $this->selectQuery("select * from category order by rand() limit 0, $n");
    }
    function byId($manxb)
    {
        $data = $this->selectQuery('select * from category where cat_id=?', [$manxb]);
        if (count($data)>0) return $data[0];

        return [];
    }
    function search($kw)
    {
        $sql="select * from category where cat_name like ?";
        $arr=["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }
   function updatetheloai($cat_id)
    {
      $sql = " Select * from category where cat_id= '$_GET[id]'" ;
        $arr=[$cat_id];
        return $this->selectQuery($sql , $arr);

    }
    function updatelen($cat_name)
    {
    	$sql = " update category SET cat_name = '".$cat_name."' where cat_id= '$_GET[id]'" ;
    	$arr=[$cat_name];
    	return $this->updateQuery($sql,$arr);
    }
    function insertlen($cat_id,$cat_name)
    {
        $sql = "insert into category (cat_id,cat_name) value (?,?)";
        $arr=[$cat_id,$cat_name];
        return $this->updateQuery($sql,$arr);
    }
    function deletetheloai($cat_id)
    {
        $sql="Delete from category where cat_id=?";
        $arr=[$cat_id];
        return $this->updateQuery($sql , $arr);

    }
 }
