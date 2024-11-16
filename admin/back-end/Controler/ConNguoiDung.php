<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$nguoidung = new NguoiDung();
if ($action=='index')
{
    $data =$nguoidung->all();
    include './View/user.php';
}
if ($action=='search')
{
    $kw = isset($_GET['kw'])?$_GET['kw']:'';
    $data =$nguoidung->search($kw);
    include './View/user.php';
}
if ($action=='update')
{
    $email = isset($_GET['id'])?$_GET['id']:'';
    $data = $nguoidung->updateview($email);
    include './View/user.php';
}
 if ($action=='deletenguoidung')
  {
      $email = isset($_GET['id'])?$_GET['id']:'';
  if($email != '')
  {
     $data = $nguoidung->deleteuser($email);
     header('location:./index.php?controller=nguoidung'); 
  }
}
/*
if($action == 'xulysua')
{
  $book_name = $_POST['book_name'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $cat_id = $_POST['cat_id'];
  $pub_id = $_POST['pub_id'];
  $img =time().'-'.$_FILES['img']['name'];
  move_uploaded_file($_FILES['img']['tmp_name'],"./View/assets/upload/$img");
  $data = $sach->suane($book_name,$description,$price,$img,$cat_id,$pub_id);
  header('location:./index.php?controller=book'); 
}
if ($action=='them')
{ 
    $datanxb = $nhaxuatban->all();
    $datatheloai = $theloai->all();
    include './View/sanphamcreatepage.php';
}
if($action == 'xulythem')
{
    $book_id = $_POST['book_id'];
  $book_name = $_POST['book_name'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $cat_id = $_POST['cat_id'];
  $pub_id = $_POST['pub_id'];
  $img =time().'-'.$_FILES['img']['name'];
  move_uploaded_file($_FILES['img']['tmp_name'],"View/assets/upload/$img");
  $data = $sach->insert($book_id,$book_name,$description,$price,$img,$cat_id,$pub_id);
  header('location:./index.php?controller=book'); 
}*/
