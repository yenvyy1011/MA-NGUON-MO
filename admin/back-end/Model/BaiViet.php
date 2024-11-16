<?php 
class BaiViet extends Db 
{
    //lấy ra tất cả bài viết
    function all()
    {
        return $this->selectQuery('select * from news');
    }

    function random($n)
    {
        return $this->selectQuery("select * from news order1 by rand() limit 0, $n");
    }
    function byId($id)
    {
        $data = $this->selectQuery('select * from news where id', [$id]);
        if (count($data)>0) return $data[0];

        return [];
    }
    function search($kw)
    {
        $sql="select * from news where title like ?";
        $arr=["%$kw%"];

        return $this->selectQuery($sql, $arr);
    }
    function delete($id)
    {
        $sql="Delete from news where id =?";
        $arr=[$id];
        return $this->updateQuery($sql , $arr);

    }
   function updateview($id)
    {
        $sql = "select * from news where id ='$_GET[id]'";
        $arr=[$id];
        return $this->selectQuery($sql , $arr);

    }
    function insert($id,$title,$img,$short_content,$content,$hot)
    {
    $sql = "insert into news(id,title,img,short_content,content,hot) values (?,?,?,?,?,?)";
    $arr = [$id,$title,$img,$short_content,$content,$hot];
    return $this->updateQuery($sql , $arr);

    }
     function view($id)
    {
        $sql = "select * from news where id ='$_GET[id]'";
        $arr=[$id];
        return $this->selectQuery($sql , $arr);

    }
     function suabaiviet($id,$title,$img,$short_content,$content,$hot)
    {
        $sql = "UPDATE news SET title='".$title."',img = '".$img."',short_content='".$short_content."',content = '".$content."' ,hot = '".$hot."' WHERE id= '$_GET[id]' ";
        $arr=[$id,$title,$img,$short_content,$content,$hot];
        return $this->updateQuery($sql , $arr);

    }
}