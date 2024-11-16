<?php 
include './config.php';
function loadClass($className)
{
    include "./models/$className.php";
}
spl_autoload_register('loadClass');
?>

            <?php 
            $c = isset($_GET['controller'])?$_GET['controller']:'book';
            if ($c=='book')
            {
                include './Controller/book.php';
            }
            if ($c=='cart')
            {
                include './Controller/cart.php';
            }
            if ($c=='baiviet')
            {
                include './Controller/baiviet.php';
            }
            if ($c=='sachthieunhi')
            {
                include './Controller/sachthieunhi.php';
            }
            if ($c=='sachgiaokhoa')
            {
                include './Controller/sachgiaokhoa.php';
            }
            if ($c=='sachmoi')
            {
                include './Controller/sachmoi.php';
            }
            if ($c=='lienhe')
            {
                include './Controller/lienhe.php';
            }
            if ($c=='danhgia')
            {
                include './Controller/danhgia.php';
            }
            if ($c=='thongtincanhan')
            {
                include './Controller/thongtincanhan.php';
            }
            if ($c=='dangnhap')
            {
                include './Controller/dangnhap.php';
            }
            
            if ($c=='trangchu')
            {
                include './Controller/trangchu.php';
            }

            ?>
