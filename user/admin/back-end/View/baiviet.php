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
                            <h3>Bảng Bài Viết</h3>
                            
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Bảng Điều Khiển</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bài Viết</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Danh Sách Bài Viết
                        </div>
                        <div class="card-header">
                        <a href="index.php?controller=baiviet&action=thembaiviet" class="btn btn-primary btn-round ml-auto" style="background-color: #CDCDB4;color: black"><svg class="bi" width="1em" height="1em" fill="currentColor">
                                                      <use
                                                       xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#plus-circle" />
                                                     </svg>
                        Thêm Bài Viết</a>
                        
                        </div>
                         <form method=get action="index.php">
                        <input type="hidden" name='controller' value='baiviet'>
                         <input type="hidden" name='action' value='search'>
                            <input type="text" name="kw" style="margin-left: 50px;" ><input type="submit" style="margin-left: 20px" value="Tìm kiếm">
                        </form>
                        <br>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                <tr>
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Hình</th>
                                <th>Nội dung ngắn</th>
                                <th>Nội dung</th>
                                <th>Hot</th>
                                </tr>
                                </thead>
                                     <tbody>
                                      <?php
                                       foreach ($data as $r) {
                                    ?>
                                    <tr>
                                <td><?php echo $r['id']?></td>
                                <td><?php echo $r['title']?></td>
                                <td><img src="View/assets/upload/<?php echo $r["img"] ?>" style="height: 100px"></td>
                                <td><?php echo $r['short_content']?></td>
                                <td><?php echo $r['content']?></td>
                                <td><?php echo $r['hot']?></td>
                        
                                <td>
                                  <a href="index.php?controller=baiviet&action=delete&id=<?php echo $r['id'] ?>" type="submit" data-toggle="tooltip" title="" class="btn btn-primary btn-round ml-auto" data-original-title="Remove"  onclick="return confirm('Bạn muốn xóa bài viết <?php echo $r['id']?> không ?')" style="background-color: #CDCDB4;color: black">
                                
                                                     <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                      <use
                                                       xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#trash-fill" />
                                                     </svg>
                                                    Xóa
                                                </a>
                            <a href="index.php?controller=baiviet&action=update&id=<?php echo $r['id'] ?>" type="submit" data-toggle="tooltip" title="" class="btn btn-primary btn-round ml-auto" data-original-title="Edit Task" style="background-color: #CDCDB4;color: black">
                                                     <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                      <use
                                                       xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#pencil-square" />
                                                     </svg>
                                                    Sửa
                                                </a>
                                </td>
                                </tr>
                                <?php
                            }
                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <footer>
                 <?php include 'View/assets/layouts/footerpage_Admin.php' ?>
            </footer>
        </div>
    </div>
    <script src="View/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="View/assets/js/bootstrap.bundle.min.js"></script>

    <script src="View/assets/js/main.js"></script>
</body>

</html>