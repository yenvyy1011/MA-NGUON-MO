<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$sach = new Book();
$nhaxuatban = new NhaXuatBan();
$theloai = new TheLoai();
if ($action=='index')
{
    $data =$sach->all();
    include './View/sanpham.php';
}
if ($action=='search')
{
    $kw = isset($_GET['kw'])?$_GET['kw']:'';
    $data =$sach->search($kw);
    include './View/sanpham.php';
}
  if ($action=='delete')
  {
      $book_id = isset($_GET['id'])?$_GET['id']:'';
  if($book_id != '')
  {
     
     $data = $sach->delete($book_id);
     header('location:./index.php?controller=book'); 
  }
}
if ($action=='update')
{
    $book_id = isset($_GET['id'])?$_GET['id']:'';
    $data = $sach->updateview($book_id);
    $datanxb = $nhaxuatban->all();
    $datatheloai = $theloai->all();
    include './View/sanphameditpage.php';
}
if($action == 'xulysua')
{
    $price = $_POST['price'];
    if($price < 0)
        {
          echo '<script language="javascript">alert("Giá sửa bị số âm không cho sửa"); </script>' ;
          $book_id = isset($_GET['id'])?$_GET['id']:'';
          $data = $sach->updateview($book_id);
          $datanxb = $nhaxuatban->all();
          $datatheloai = $theloai->all();
          include './View/sanphameditpage.php';
        }
        else{  
          $book_name = $_POST['book_name'];
          $price = $_POST['price'];
          $description = $_POST['description'];
          $cat_id = $_POST['cat_id'];
          $pub_id = $_POST['pub_id'];
          $hinh=$_POST['hinh'];
          $imghinh =$_FILES['img']['name'];
          if($imghinh!='')
          {
            $img=$_FILES['img']['name'];
            move_uploaded_file($_FILES['img']['tmp_name'],"./View/assets/upload/$img");
          }else{
            $img=$hinh;
          }
          $data = $sach->suane($book_name,$description,$price,$img,$cat_id,$pub_id);
          header('location:./index.php?controller=book');    
   } 
}
if ($action=='them')
{ 
    $datanxb = $nhaxuatban->all();
    $datatheloai = $theloai->all();
    include './View/sanphamcreatepage.php';
}
if($action == 'xulythem')
{
  $price = $_POST['price'];
    if($price < 0)
        {
          echo '<script language="javascript">alert("Thêm giá số âm nên không thêm được"); </script>' ;
          $book_id = isset($_GET['id'])?$_GET['id']:'';
          $datanxb = $nhaxuatban->all();
          $datatheloai = $theloai->all();
          include './View/sanphamcreatepage.php';
        }
        else{
            $book_id = $_POST['book_id'];
            $book_name = $_POST['book_name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $cat_id = $_POST['cat_id'];
            $pub_id = $_POST['pub_id'];
            $img =time().'-'.$_FILES['img']['name'];
            move_uploaded_file($_FILES['img']['tmp_name'],"View/assets/upload/$img");
            $data = $sach->insert($book_id,$book_name,$description,$price,$img,$cat_id,$pub_id);
             echo '<script language="javascript">window.location="./index.php?controller=book";alert("Thêm thành công"); </script>';
            exit(); 
        }
}
