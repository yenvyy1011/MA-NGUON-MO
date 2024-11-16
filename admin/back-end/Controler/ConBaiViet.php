<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$baiviet = new BaiViet();
if ($action=='index')
{
    $data =$baiviet->all();
    include './View/baiviet.php';

}
if ($action=='thembaiviet')
{ 
    
    include './View/baivietcreatepage.php';
}

if ($action=='search')
{
    $kw = isset($_GET['kw'])?$_GET['kw']:'';
    $data =$baiviet->search($kw);
    include './View/baiviet.php';
}
if ($action=='delete')
  {
      $id = isset($_GET['id'])?$_GET['id']:'';
  if($id != '')
  {
     
     $data = $baiviet->delete($id);
     header('location:./index.php?controller=baiviet'); 
  }
}
if($action == 'xulythembaiviet')
{
  $id = $_POST['id'];
  $title= $_POST['title'];
  $img =time().'-'.$_FILES['img']['name'];
  move_uploaded_file($_FILES['img']['tmp_name'],"View/assets/upload/$img");
  $short_content = $_POST['short_content'];
  $content = $_POST['content'];
  $hot = $_POST['hot'];
  $data = $baiviet->insert($id,$title,$img,$short_content,$content,$hot);
  header('location:./index.php?controller=baiviet'); 
}
if ($action=='update')
{
    $id = isset($_GET['id'])?$_GET['id']:'';
    $data = $baiviet->view($id);
    include './View/baivieteditpage.php';
}
if($action == 'xulysuabaiviet')
{
  $id = $_POST['id'];
  $title = $_POST['title'];
  $hinh=$_POST['hinh'];
          $img1 =$_FILES['img']['name'];
          if($img1!='')
          {
            $img=$_FILES['img']['name'];
            move_uploaded_file($_FILES['img']['tmp_name'],"./View/assets/upload/$img");
          }else{
            $img=$hinh;
          }
  $short_content = $_POST['short_content'];
  $content = $_POST['content'];
  $hot = $_POST['hot'];
  $data = $baiviet->suabaiviet($id,$title,$img,$short_content,$content,$hot);
  header('location:./index.php?controller=baiviet'); 
}