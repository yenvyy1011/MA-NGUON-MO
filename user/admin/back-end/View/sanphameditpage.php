
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'View/assets/layouts/headerpage_Admin.php' ?>
</head>

<body>
    <div id="app">
        <?php include 'View/assets/layouts/menupage_Admin.php' ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <a href="index.php?controller=book" class="btn btn-primary btn-round ml-auto" style="background-color: #CDCDB4;color: black">
                            <svg class="bi" width="1em" height="1em" fill="currentColor" >
                                      <use xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#reply-all" /> </svg>
                            Quay về trang</a>
                        </div>
                        
                        <div class="col-12 col-md-6 order-md-2 order-first">
                        <br>
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Bảng Điều khiển</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cập Nhật Sản Phẩm</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

               

                <!-- Contextual classes start -->
                <section class="section">
                    <div class="col-md-6 col-12">
                            <div class="card" style="width: 1000px">
                                
                                <div class="card-header">
                                    <h4 class="card-title" align="center">Cập Nhật Sản Phẩm</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="index.php?controller=book&action=xulysua&id=<?php echo $_GET['id'] ?>" method="POST" enctype='multipart/form-data'>
                                        <?php  
                                        foreach ($data as $a) {    
                                            ?>
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Tên Sản Phẩm</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                     name="book_name" value="<?php echo $a['book_name'] ?>">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Giá</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                     name="price" value="<?php echo $a['price'] ?>">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                            <label for="formFile" class="form-label" >Hình</label>
                                                            <input type="hidden" name="hinh" value="<?php echo $a['img'] ?>" >
                                                            <td><input type="file" name="img" value="<?php echo $a['img'] ?>"><img src="View/assets/upload/<?php echo $a['img']; ?>" width="200px" height="200px"></td>
                                                          
                                                      </div>
                                                    <div class="col-md-4">
                                                        <label>Mô tả</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                            <script src="editor/ckeditor/ckeditor.js" ></script>
                                                               <textarea name="description" cols="50" rows="8"> <?php echo $a['description'] ?> </textarea>
                                                                <script type="text/javascript">CKEDITOR.replace( 'description'); </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-4">
                                                        <label>Thể Loại</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                          <select name="cat_id" id="">
                                                           <option value="<?php echo $a['cat_id']?>"><?php echo $a['cat_name']?></option>
                                                          <?php
                                                          foreach ($datatheloai as $r) {
                                                               ?>
                                                               <option value="<?php echo $r['cat_id']?>"><?php echo $r['cat_name']?></option>
                                                               <?php
                                                           } 
                                                          ?>

                                                      </select>
                                                       </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Nhà xuất bản</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                     <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                      <select name="pub_id" id=""> 
                                                        <option value="<?php echo $a['pub_id']?>"><?php echo $a['pub_name']?></option>
                                                          <?php
                                                          foreach ($datanxb as $r) {
                                                               ?>
                                                               <option value="<?php echo $r['pub_id']?>"><?php echo $r['pub_name']?></option>
                                                               <?php
                                                           } 
                                                          ?>
                                                      </select>
                                                           </div>
                                                        </div>
                                                    </div>
                                                     
                                                    <div class="col-12 d-flex justify-content-end">

                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" style="background-color: #CDCDB4;color: black;width: 120pt" onclick="return confirm('Bạn muốn sửa sản phẩm này không ?')"> <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                      <use
                                                       xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#arrow-up-circle" />
                                                     </svg> Sửa Sản Phẩm</button>

                                                        
                                                </div>
                                            </div>
                                            <?php 
                                            } 
                                            ?> 
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </section>
                <!-- Contextual classes end -->

                
            </div>

            <footer>
                <?php include 'View/assets/layouts/footerpage_Admin.php' ?>
            </footer>
        </div>
    </div>
    
</body>

</html>