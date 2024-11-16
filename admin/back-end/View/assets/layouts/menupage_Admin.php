<?php
if(!isset($_SESSION)){
session_start();
}
?>
<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php?controller=index1"><img src="View/assets/images/logo/logo.png" alt="Logo" srcset="" style="height: 100px;"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title" style="color: red" align='center'>Tài Khoản</li>
                            <?php
                            if (!isset($_SESSION["username"])){
                             echo'<i class="bi bi-user"></i>';
                             echo' <a href="login.php" class="sidebar-link">
                                   <svg class="bi" width="1em" height="1em" fill="currentColor">
                                    <use
                                        xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#person-circle" />
                                    </svg>&nbsp Login</a>';
                            }else
                            echo'<li class="sidebar-item  has-sub">
                                    <a href="#" class="sidebar-link">
                                        <svg class="bi" width="1em" height="1em" fill="currentColor">
                                            <use
                                            xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#person-circle" />
                                        </svg>
                                        <span>&nbsp'.$_SESSION["username"].'</span>
                                    </a>
                                    <ul class="submenu ">
                                        <li class="submenu-item ">
                                            <a href="index.php">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </li>';      
                            ?>
                        <li class="sidebar-title" align="center" style="color: red">Bảng thông tin</li>

                        <li class="sidebar-item">
                            <a href="index.php?controller=index1" class='sidebar-link'>
                              <i class="bi bi-table"></i>
                                <span>Bảng Thông Tin</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            
                        </li>
                        <li class="sidebar-title" align="center" style="color: red">Bảng Quản Lý</li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                            <i class="bi bi-calendar"></i>
                                <span>Quản lý danh mục</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item ">
                                    <a href="index.php?controller=theloai"><i class="bi bi-card-list"></i> Danh Mục</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="index.php?controller=themtheloai"><i class="bi bi-plus-square"></i> Thêm danh mục</a>
                                </li>
                            </ul>
                        </li>
                        
                       <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-people"></i>
                                <span> Quản lý người dùng</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="index.php?controller=nguoidung"><i class="bi bi-person"></i> Người dùng</a>
                                </li>
                              
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-receipt"></i>
                                <span>Quản lý sản phẩm</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">

                                    <a href="index.php?controller=book"><i class="bi bi-receipt"></i> Sản phẩm</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="index.php?controller=book&action=them"><i class="bi bi-plus-square"></i> Thêm sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                               <i class="bi bi-cart-check"></i>
                                <span>Quản lý đơn hàng</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="index.php?controller=donhang"><i class="bi bi-list-ol"></i> Đơn hàng</a>
                                </li>
                            
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-newspaper"></i>
                                <span>Quản lý bài viết</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="index.php?controller=baiviet"><i class="bi bi-calendar"></i> Bài viết</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="index.php?controller=baiviet&action=thembaiviet"><i class="bi bi-file-earmark-plus"></i> Thêm bài viết</a>
                                </li>
                            </ul>
                        </li>
                          <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-credit-card-fill"></i>
                                <span>Quản lý nhà xuất bản</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="index.php?controller=nhaxuatban"><i class="bi bi-file-person-fill"></i> Nhà xuất bản </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="index.php?controller=themnhaxuatban"><i class="bi bi-patch-plus"></i> Thêm nhà xuất bản</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>