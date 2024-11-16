<?php 
class NguoiDung extends Db 
{
    //lay ra tat ca nguoi dung 
    function all()
    {
        return $this->selectQuery('select * from users');
    }

    function random($n)
    {
        return $this->selectQuery("select * from users order by rand() limit 0, $n");
    }
    function byId($email)
    {
        $data = $this->selectQuery('select * from users where email=?', [$email]);
        if (count($data)>0) return $data[0];

        return [];
    }
    function search($kw)
    {
        $sql="select * from users where email like ?";
        $arr=["%$kw%"];

        return $this->selectQuery($sql, $arr);
    }
    function deleteuser($email)
    {
        $sql="Delete from users where email=?";
        $arr=[$email];
        return $this->updateQuery($sql , $arr);

    }
   function updateview($email)
    {
        $sql = "select * from users where email ='$_GET[id]'";
        $arr=[$email];
        return $this->selectQuery($sql , $arr);

    }
  /*   function suane($book_name,$description,$price,$img,$cat_id,$pub_id)
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

    }*/
}
