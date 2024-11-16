

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
                                <use
                                    xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#reply-all" />
                                </svg>
                            Quay về trang</a>
                        </div>
                    
                        <div class="col-12 col-md-6 order-md-2 order-first">
                        <br>
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Bảng Điều khiển</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Thêm Sách</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

               

                <!-- Contextual classes start -->
                <section class="section">
                    <div class="col-md-6 col-12">
                            <div class="card">
                                
                                <div class="card-header">
                                    <h4 class="card-title" style="text-align: center;">Thêm Sách</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="index.php?controller=book&action=xulythem" method=post enctype='multipart/form-data'>
                                            <div class="form-body">
                                                <div class="row">
                                                 <div class="col-md-4">
                                                        <label>Mã Sách</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Mã sách" name="book_id" required="required">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tên Sách</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Tên sách" name="book_name" required="required">
                                                                
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
                                                                    placeholder="Giá" name="price" required="required">
                                                    <?php 
                                                    if(isset($errors['price']))
                                                    {
                                                    ?>
                                                    <script>
                                                    window.alert("<?php echo $errors['price']?>");
                                                    </script>
                                                    <?php
                                                    }
                                                    ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="mb-3">
                                                            <label for="formFile" class="form-label">Hình</label>
                                                            <input class="form-control" name="img" type="file" id="formFile">

                                                      </div>
                                                    <div class="col-md-4">
                                                        <label>Mô tả</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                            <script src="editor/ckeditor/ckeditor.js" ></script>
                                                               <textarea name="description" cols="50" rows="8"> </textarea>
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
                                                            class="btn btn-primary me-1 mb-1" onclick="return confirm('Bạn muốn thêm không ?')" style="background-color: #CDCDB4;color: black"> <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                      <use
                                                       xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#plus-circle" />
                                                     </svg> Thêm Sách</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Làm mới</button>
                                                    </div>
                                                </div>
                                            </div>
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