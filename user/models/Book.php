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
       $sql="select * from book  WHERE book_id='$_GET[id]'";
       $a=[$masach];
       return $this->selectQuery($sql, $a);
    }
    function search($kw)
    {
        $sql="select * from book where book_name like ?";
        $arr=["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }
    function sptrongcart()
    {
      if(!empty($_SESSION["cart"])){
        $sql ="select * from book where book_id  IN ('".implode("','", array_keys($_SESSION["cart"]))."')";
        return $this->selectQuery($sql);
      }
  }


}