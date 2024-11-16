<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'View/assets/layouts/headerpage_Admin.php' ?>
</head>

<body>
    <div id="app" style="background-color: #F5F5F5">
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
                            <a href="index.php?controller=nhaxuatban" class="btn btn-primary btn-round ml-auto" style="background-color: #CDCDB4;color: black">
                            <svg class="bi" width="1em" height="1em" fill="currentColor" >
                                      <use xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#reply-all" /> </svg>
                            Quay về trang</a>
                        </div>

                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Bảng Điều khiển</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Thêm Nhà Xuất Bản</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                  <br>
                <!-- Contextual classes start -->
                <section class="section">
                    <div class="col-md-6 col-12" >
                            <div class="card" >
                                <div class="card-header" >
                                    <h4 class="card-title" style="text-align: center; color: #D2691E">Thêm Nhà Xuất Bản</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="index.php?controller=nhaxuatban&action=xulythemnhaxuatban" method=post>
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>ID Nhà Xuất Bản</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="ID Nhà Xuất Bản" name="pub_id" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tên Nhà Xuất Bản</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Tên Nhà Xuất Bản" name="pub_name" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" name="themnhaxuatban" onclick="return confirm('Bạn muốn thêm nhà xuất bản không ?')" style="background-color: #CDCDB4;color: black">Thêm nhà xuất bản</button>
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