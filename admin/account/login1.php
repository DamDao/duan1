<?php
// include "../header.php";
?>
<div class="page">
    <div class="container">
        <!-- <?php
        
        ?> -->
        <h2>Đăng Nhập</h2>
        <form action="http://localhost/DUAN/DA1/admin/index.php" method="POST">
            <div class="form-group">
                <label for="">Tên Đăng Nhập:</label>
                <input type="text" name="user" required>
            </div>
            <div class="form-group">
                <label for="">Mật Khẩu:</label>
                <input type="password" name="pass" required>
            </div>
            <?php
            // if (isset($_SESSION['check_valid'])){
            //   $err=$_SESSION['check_valid'];
            //   echo "<p class='text-center text-danger'>$err</p>";
            // }
            // if (!isset($_SESSION['admin'])) {
            //   echo "<p class='text-center text-danger'>Vui lòng đăng nhập tài khoản!!!</p>";
            // }
            ?>
            <div class="form-group">
                <input class="int_sbm" name="dangnhap" type="submit" value="Đăng Nhập"></input>
                <button class="int_sbm" name="dangnhap" type="submit" value="">Đăng Nhập</button>
            </div>
            <!-- <div class="form-group">
                    <p>Chưa có tài khoản? <a href="index.php">Quay về trang chủ <a href="index.php?act=dangky">Đăng ký
                                ngay</a></p>
                </div> -->
        </form>
        <?php

        // }
        if (isset($error)) {
            echo $error;
        } else {
            echo 'lỗi';
        }
        ?>
    </div>
</div>