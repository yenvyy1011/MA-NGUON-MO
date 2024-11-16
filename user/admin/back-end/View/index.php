<!DOCTYPE html>
<html lang="en">
<style type="/text/css">
    #mydiv {
    position:fixed;
    top: 50%;
    left: 50%;
    width:30em;
    height:18em;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em; /*set to a negative number 1/2 of your width*/
    border: 1px solid #ccc;
    background-color: #f3f3f3;
}
</style>
<head>
    <?php include 'View/assets/layouts/headerpage_Admin.php' ?>
</head>

<body>
   
    <div id="app" style="background-image: url('View/assets/images/bg/dep.PNG');">

        <div id="main">
          

           &emsp;<div class="page-heading" >
                <!-- Contextual classes start -->
                <section class="section" >
                    <div class="col-md-6 col-12">
                        <form action="index.php?controller=logincontroller&action=login" method="POST" >
                            <div class="card">
                                <div class="card-header" style="background-color: #C0C0C0">
                                 <img src="View/assets/images/logo/logo.png" height="50px">
                                    <h4 class="card-title" align="center">ĐĂNG NHẬP</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Tên đăng Nhập :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Tên" name="username" required="required">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email : </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Email" name="email" required="required">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <label>Mật Khẩu : </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Mật Khẩu" name="password" required="required">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-8 offset-md-4">
                                                        <div class='form-check'>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="checkbox2"
                                                                    class='form-check-input' checked>
                                                                <label for="checkbox2">Nhớ tài khoản</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" style="background-color: red">Đăng Nhập</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Làm Mới</button>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    
                </section>
                <!-- Contextual classes end -->

                
            </div>

           
        </div>
    </div>
    
</body>

</html>