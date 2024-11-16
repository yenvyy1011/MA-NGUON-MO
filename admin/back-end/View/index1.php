

<!DOCTYPE html>
<html lang="en">

<head>
     <?php include 'View/assets/layouts/headerpage_Admin.php' ?>
</head>


<body>
    <div id="app">
        <?php include 'View/assets/layouts/menupage_Admin.php' ?>
        <div id="main" style="background-color: #B5EAD7">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3 align="center">Bảng thông tin</h3>
            </div>
            <div class="page-content" >
                <section class="row">
                    <div class="col-12 col-lg-9" align="center">
                        <div class="row" >
                            <div class="col-6 col-lg-3 col-md-6" >
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Người xem</h6>
                                                <h6 class="font-extrabold mb-0">112.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Người theo dõi</h6>
                                                <h6 class="font-extrabold mb-0">183.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Đang theo dõi</h6>
                                                <h6 class="font-extrabold mb-0">80.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                           
                        </div>
                        
                        <div class="row">
                            
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 align="center">Nhận xét mới nhất</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Tên </th>
                                                        <th>Bình luận</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="View/assets/images/faces/16.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0" style="width: 100px">Chú bán dầu</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Hello</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="View/assets/images/faces/15.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Con lele</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">hi </p>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="card">
                            <div class="card-header">
                                <h4>Tin nhắn gần đây</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="View/assets/images/faces/17.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Meo Meo</h5>
                                        <h6 class="text-muted mb-0">@meomeo</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="View/assets/images/faces/18.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Toto</h5>
                                        <h6 class="text-muted mb-0">@toto</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="View/assets/images/faces/19.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Grrrrr</h5>
                                        <h6 class="text-muted mb-0">@khunglong</h6>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                      
                    </div>
                </section>
            </div>

            <footer>
                <?php include 'View/assets/layouts/footerpage_Admin.php' ?>
            </footer>
        </div>
    </div>
    
</body>

</html>