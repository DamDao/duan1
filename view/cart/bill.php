<div class="row mt-4 main-web">
    <form action="?act=confirmbill" method="post">
        <div class="col-md-12">
            <div class="card mt-5">
                <?php
                if (!isset($_SESSION['user'])) {
                    $name = "";
                    $address = "";
                    $email = "";
                    $tel = "";
                } else {
                    $name = $_SESSION['user']['tk_name'];
                    $address = $_SESSION['user']['tk_address'];
                    $email = $_SESSION['user']['tk_email'];
                    $tel = $_SESSION['user']['tk_tel'];
                }
                ?>
                <div class="card-header">Thông tin đặt hàng</div>
                <table class="table">
                    <tr>
                        <td>Người đặt hàng</td>
                        <td> <input class="w-100" type="text" name="userbuy" value="<?php echo $name; ?>"> </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td> <input class="w-100" type="text" name="diachi" value="<?php echo $address; ?>"> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <input class="w-100" type="text" name="email" value="<?php echo $email; ?>"> </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td> <input class="w-100" type="text" name="std" value="<?php echo $tel; ?>"> </td>
                    </tr>
                    <tr>
                        <td>Thông tin thanh toán</td>
                        <td>
                            <input type="radio" name="pttt" value="0" checked> <span class="mx-2">Trả tiền khi nhận hàng</span>
                            <input type="radio" name="pttt" value="1"> <span class="mx-2"> Chuyển khoản ngân hàng </span>
                            <input type="radio" name="pttt" value="2"> <span class="mx-2"> Thanh toán online</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mt-4 main-web">
            <div class="col-md-12 pr-0 pl-0">
                <div class="card mt-5">
                    <div class="card-header">Xem thêm sản phẩm khác</div>
                    <table class="table">
                        <?php
                        viewcart(0);
                        ?>
                    </table>
                    <div class="text-right">
                        <button name="gui" class="btn btn-success w-25 mb-3 mx-3">Đồng ý đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>