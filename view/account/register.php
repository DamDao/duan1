

<div class="page">
    <div class="container">
        <h2>Đăng Ký Tài Khoản</h2>
        <form action="index.php?act=dangky" method="POST">
            <div class="form-group">
                <label for="username">Tên Đăng Nhập:</label>
                <input type="text" name="user" required>
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" name="pass" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Số Điện Thoại:</label>
                <input type="text" name="tel" >
            </div>
            <div class="form-group">
                <label for="address">Địa Chỉ:</label>
                <input type="text" name="address" >
            </div>
            <div class="form-group">
                <input class="int_sbm" name="dangky" type="submit" value="Đăng Ký"></input>
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
