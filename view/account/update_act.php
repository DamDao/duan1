<div class="page">
    <div class="container">
        <h2>Cập Nhật Tài Khoản</h2>
        <?php
        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
            extract($_SESSION['user']);
        }
        ?>
        <form action="index.php?act=update_act" method="POST">
            <div class="form-group">
                <label for="username">Tên Đăng Nhập:</label>
                <input type="text" name="user" id="" required placeholder="Nhập user" value="<?php echo $tk_name ?>">
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" name="pass" id="" required placeholder="Nhập password"
                    value="<?php echo $tk_pass ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="" required placeholder="Nhập email"
                    value="<?php echo $tk_email ?>">
            </div>
            <div class="form-group">
                <label for="phone">Số Điện Thoại:</label>
                <input type="text" name="tel" id="" required placeholder="Nhập tel" value="<?php echo $tk_tel ?>">

            </div>
            <div class="form-group">
                <label for="address">Địa Chỉ:</label>
                <input type="text" name="address" id="" required placeholder="Nhập address"
                    value="<?php echo $tk_address ?>">

            </div>
            <div class="form-group">
                <input class="int_sbm" name="capnhat" type="submit" value="Cập Nhật"></input>
                <input type="hidden" name="id" value="<?php echo $tk_id ?>">
            </div>
            <div class="form-group">

                <p>Đã có tài khoản? </p> <a href="index.php">Quay về trang chủ</a><a href="index.php?act=dangnhap"> Đăng
                    nhập ngay!</a>
            </div>
        </form>
        <?php
        if (isset($thongbao)) {
            echo $thongbao;
        }
        ?>
    </div>
</div>