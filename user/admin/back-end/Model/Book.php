<?php 
class Book extends Db 
{
    //lay ra tat ca sach
    function all()
    {
        return $this->selectQuery('select * from book');
    }

    function random($n)
    {
        return $this->selectQuery("select * from book order by rand() limit 0, $n");
    }
    function byId($masach)
    {
        $data = $this->selectQuery('select * from book where book_id=?', [$masach]);
        if (count($data)>0) return $data[0];

        return [];
    }
    function search($kw)
    {
        $sql="select * from book where book_name like ?";
        $arr=["%$kw%"];

        return $this->selectQuery($sql, $arr);
    }
    function delete($book_id)
    {
        $sql="Delete from book where book_id=?";
        $arr=[$book_id];
        return $this->updateQuery($sql , $arr);

    }
    function updateview($book_id)
    {
        $sql = "select * from book join category on book.cat_id = category.cat_id join publisher on publisher.pub_id = book.pub_id where book_id ='$_GET[id]'";
        $arr=[$book_id];
        return $this->selectQuery($sql , $arr);

    }
    function suane($book_name,$description,$price,$img,$cat_id,$pub_id)
    {
        $sql = "UPDATE book SET book_name='".$book_name."',description = '".$description."',price='".$price."',img = '".$img."' ,cat_id = '".$cat_id."', pub_id = '".$pub_id."' WHERE book_id= '$_GET[id]' ";
        $arr=[$book_name,$description,$price,$img,$cat_id,$pub_id];
        return $this->updateQuery($sql , $arr);

    }
    function insert($book_id,$book_name,$description,$price,$img,$cat_id,$pub_id)
    {
    $sql = "insert into book(book_id,book_name,description,price,img,pub_id,cat_id) values (?,?,?,?,?,?,?)";
    $arr = [$book_id,$book_name,$description,$price,$img,$pub_id,$cat_id];
    return $this->updateQuery($sql , $arr);

    }
}
