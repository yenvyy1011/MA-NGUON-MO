
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giỏ hàng</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="View/css/giohangcss.css" />
    <link rel="stylesheet" href="View/css/reponsive.css" />
    <script src="View/js/giohang11.js"></script>
<style>
.button {
  background-color: SeaGreen;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: LightSalmon;}
.button3 {background-color: SeaGreen;} 
.button4 {background-color: MidnightBlue;} 
.button5 {background-color: Indigo;}
</style>
</head>

<body>
    <!-- header -->

    <header>
        <nav>
            <div class="img-nav">
                <img src="View/img/logo.png" alt="" />
            </div>
           <a href="index.php"> <button id="cart">
                <i class="fa fa-reply" aria-hidden="true"></i>
                Trở về
            </button></a>
            <!-- The Modal -->
            <button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button>
            
        </nav>
<!-- content --><center>
    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                
            </div>
            <h1 class="text-center">Giỏ hàng</h1>
            <div class="row">
                <div class="col col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                                <th>Ảnh đại diện&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                                <th>Tên sản phẩm&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                                <th>Số lượng&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                                <th>Đơn giá&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                                <th>Thành tiền&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                                <th>Hành động&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                            </tr>
                        </thead>
                        <tbody id="datarow">
                            
                        <form class="form form-horizontal"  method ="POST" action="index.php?controller=cart&action=submit">
                        <?php
                        if(!empty($_SESSION["cart"])){
                        
                        $i=0;
                         foreach($data as $value)
                         {
                             $i++;
                             ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td>
                                <img src="admin/back-end/View/assets/upload/<?php echo $value['img']?>" class="hinhdaidien" width="200px" height="150px">
                                </td>
                                <td><?php echo $value['book_name'] ?></td>
                                <td class="text-right">&emsp;&emsp;<?php echo $_SESSION['cart'][$value['book_id']] ?></td>
                                <td class="text-right"><?php echo $value['price'] ?> VND</td>
                                <td class="text-right"><?php echo $_SESSION['cart'][$value['book_id']] * $value['price'] ?> VND</td>
                                <td>
                                    <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                    <a href="index.php?controller=cart&action=delete&id=<?php echo $value['book_id'] ?>" id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham">
                                        <i class="fa fa-trash" aria-hidden="true">Xóa</i> 
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        }
                         ?>
                          
                        </tbody>
                    </table>
                    

                    <a href="index.php?controller=trangchu" class="btn btn-warning btn-md"><i class="fa fa-arrow-left"
                            aria-hidden="true"></i>&nbsp;Quay lại mua hàng</a>
                        <button type="submit" name="submit" class="btn btn-primary btn-md"><i
                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Thanh toán</button>
                            </form> 
                            
                        </tbody>

                    </table>
</center>
                </div>
                
            
        </div>
    </body>
</header>