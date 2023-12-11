<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="shortcut icon" href="upload/mau-logo-nha-sach.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./view/css/style2.css">
    <link rel="stylesheet" href="./view/css/spct.css">
    <link rel="stylesheet" href="./view/css/cart.css">
    <link rel="stylesheet" href="./view/css/fo.css">
    <link rel="stylesheet" href="./view/css/account.css">
    <!-- <link rel="stylesheet" href="./view/css/style_login.css"> -->
    <style>
     
    </style>
</head>

<body>
    <!-- header section starts -->
    <!-- <marquee behavior="" direction="">
        hello
    </marquee> -->
    <header>

        <a href="index.php" class="logo_book"> <img src="upload/mau-logo-nha-sach.jpg" alt=""></a>

        <!-- menu sách -->
        <nav class="nav_menu">
            <ul class="ul_menu">
                <li class="li_menu">
                    <a href="#"><i class="fa-solid fa-list-ul fa-lg"></i> Danh mục sách</a>
                    <div class="book-categories">
                        <h2>Danh Mục</h2>
                        <ul>
                            <?php
                            $dsdm = loadall_danhmuc();
                            foreach ($dsdm as $dm) {

                                extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=" . $dm_id;
                                echo '<a href="' . $linkdm . '">' . $dm_name . '</a>';
                            }
                            ?>
                            <!-- Thêm các danh mục sách khác tùy theo nhu cầu -->
                        </ul>
                    </div>
                </li>

                <!-- Thêm các mục menu khác tùy theo nhu cầu -->
            </ul>
        </nav>
        <!-- end menu sách -->


        <nav class="navbar">

            <nav class="navbar">
                <a class="active" href="index.php?act=index.php"><i class="fa-solid fa-house fa-lg"></i> Trang Chủ</a>
                <a href="index.php?act=sanpham"><i class="fa-solid fa-book fa-lg"></i>  Sản Phẩm</a>
                <a class="nav-link" href="index.php?act=mybill"><i class="fa-solid fa-book fa-lg"></i> Đơn hàng</a>
                <!-- <a href="index.php"><i class="fa-solid fa-blog fa-lg"></i>  Blog</a> -->
                <!-- <a href="#menu">menu</a>
                <a href="#review">review</a>
                <a href="#order">order</a> -->
            </nav>

        </nav>


        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="index.php?act=spyt" class="fas fa-heart"></a>
            <a href="index.php?act=addtocart" class="fas fa-shopping-cart"></a>
        </div>
        <?php
        // include 'model/taikhoan.php';
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            echo ' <div class="user-menu">
            <button id="user-button">User: '.$tk_name.'</button>
            <div class="user-links" id="user-links">
                <a  href="index.php?act=dangnhap">Thông tin tài khoản</a> <!--Chèn link dẫn đến file đăng nhập vào đây -->
                <a  href="index.php?act=dangky">Đăng ký</a> <!--Chèn link dẫn đến file đăng ký vào đây -->
                <a  href="index.php?act=dangxuat">Đăng xuất</a>
            </div>
        </div>';
        } else {
            echo '<div class="user-menu">
            <button id="user-button">Đăng nhập/Đăng ký</button>
            <div class="user-links" id="user-links">
                <a  href="index.php?act=dangnhap">Đăng nhập</a> <!--Chèn link dẫn đến file đăng nhập vào đây -->
                <a  href="index.php?act=dangky">Đăng ký</a> <!--Chèn link dẫn đến file đăng ký vào đây -->
                <a  href="index.php?act=dangxuat">Đăng xuất</a>
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
            </div>
        </div>';
       }
       ?>
        
    </header>

    <!-- header section ends -->

    <!-- search form -->

    <form action="index.php?act=sanpham" id="search-form" method="POST">
        <input type="search" placeholder="search here ..." name="kyw" id="search-box">
        <label for="search-box"  class="fas fa-search"></label>
        <i class="fas fa-times" id="close" name="timkiem"></i>
    </form>

    <!-- search form -->

    <!-- home section starts -->



    <!-- home section ends -->