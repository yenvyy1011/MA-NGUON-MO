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
                            <a href="index.php?controller=baiviet" class="btn btn-primary btn-round ml-auto" style="background-color: #CDCDB4;color: black">
                            <svg class="bi" width="1em" height="1em" fill="currentColor" >
                                      <use xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#reply-all" /> </svg>
                            Quay về trang</a>
                        </div>
                        
                        <div class="col-12 col-md-6 order-md-2 order-first">
                        <br>
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Bảng Điều khiển</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cập Nhật Bài Viết</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

               

                <!-- Contextual classes start -->
                <section class="section">
                    <div class="col-md-12 col-12">
                            <div class="card">
                                
                                <div class="card-header">
                                    <h4 class="card-title" style="text-align: center;">Cập Nhật Bài Viết</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="index.php?controller=baiviet&action=xulysuabaiviet&id=<?php echo $_GET['id'] ?>" method="POST" enctype='multipart/form-data'>
                                          <?php  
                                        foreach ($data as $a) {
                                            ?>
                                            <div class="form-body">
                                                <div class="row">
                                                <div class="col-md-4">
                                                        <label>ID</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Mã bài viết" name="id" required="required" value="<?php echo $a['id'] ?>">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tiêu đề</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Tên bài viết" name="title" required="required" value="<?php echo $a['title'] ?>"> 
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="mb-3">
                                                            <label for="formFile" class="form-label" >Hình</label>
                                                            <input type="hidden" name="hinh" value="<?php echo $a['img'] ?>" >
                                                            <td><input type="file" name="img" value="<?php echo $a['img'] ?>"><img src="View/assets/upload/<?php echo $a['img']; ?>" width="200px" height="200px"></td>
                                                          
                                                      </div>
                                                    <div class="col-md-4">
                                                        <label>Nội dung ngắn</label>
                                                    </div>
                                                         <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                            <script src="ckeditor/ckeditor.js" ></script>
                                                               <textarea name="short_content" cols="50" rows="8"> <?php echo $a['short_content'] ?> </textarea>
                                                                <script type="text/javascript">CKEDITOR.replace( 'short_content'); </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                               
                                                    
                                                    <div class="col-md-4">
                                                        <label>Nội dung</label>
                                                    </div>
                                                     <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                            <script src="ckeditor/ckeditor.js" ></script>
                                                               <textarea name="content" cols="50" rows="8"> <?php echo $a['content'] ?> </textarea>
                                                                <script type="text/javascript">CKEDITOR.replace( 'content'); </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Hot</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Hot" name="hot" required="required" value="<?php echo $a['hot'] ?>">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                     
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" onclick="return confirm('Bạn chắc muốn sửa bài viết không ?')" style="background-color: #CDCDB4;color: black"><svg class="bi" width="1em" height="1em" fill="currentColor">
                                                      <use
                                                       xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#arrow-up-circle" />
                                                     </svg> Sửa Bài Viết</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Làm Mới</button>
                                                    </div>
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