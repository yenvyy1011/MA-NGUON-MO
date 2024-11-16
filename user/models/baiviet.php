<?php 
class baiviet extends Db 
{
    //lay ra tat ca bai viet
    function all()
    {
        return $this->selectQuery('select * from news');
    }
}