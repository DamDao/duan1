

<div class="page">
    <div class="container">
        <h2>QUÊN MẬT KHẨU</h2>
        
        <form action="index.php?act=quenmk" method="POST">
  
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="" required placeholder="Nhập email">
            </div>
            
            <div class="form-group">
            <input type="submit" name="gui_email" value="Gửi">
            </div>
            
        </form>
        <?php
        if (isset($thongbao)) {
            echo $thongbao;
        }
        ?>
    </div>
</div>