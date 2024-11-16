    <?php 
    include './config.php';
    function loadClass($className)
    {
        include "./Model/$className.php";
    }
    spl_autoload_register('loadClass');

  
    ?>
                <?php 
               $c = isset($_GET['controller'])?$_GET['controller']:'logincontroller';
                
                if ($c=='book')
                {
                    include './Controler/ConBook.php';
                }
                if ($c=='cart')
                {
                    include './Controler/cart.php';
                }
                 if ($c=='logincontroller')
                {
                    include './Controler/logincontroller.php';
                }
                 if ($c=='index1')
                {
                    include './Controler/trangthongtin.php';
                }
                if ($c=='theloai')
                {
                    include './Controler/ConTheLoai.php';
                }
                if ($c=='themtheloai')
                {
                    include './View/danhmuccreatepage.php';
                }
                if ($c=='nguoidung')
                {
                    include './Controler/ConNguoiDung.php';
                }
                 if ($c=='donhang')
                {
                    include './Controler/ConDonHang.php';
                }
                 if ($c=='baiviet')
                {
                    include './Controler/ConBaiViet.php';
                }
                 if ($c=='nhaxuatban')
                {
                    include './Controler/ConNhaXuatBan.php';
                }
                   if ($c=='themnhaxuatban')
                {
                    include './View/nhaxuatbancreatepage.php';
                }
                ?>
        