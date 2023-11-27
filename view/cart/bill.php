<div class="row mt-4 main-web" style="text-align: center;">
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
                <div class="card-header"><h1>Thông tin đặt hàng</h1></div>
                <table class="table" style="    width: 50%; margin: 30px 33%; font-size: 15px;">
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
                    <div class="card-header"><h2>Thông Tin Đơn hàng</h2></div>
                    <table class="table" style="width: 80%; font-size: 17px; margin-left: 10%">
                        <?php
                        viewcart(0);
                        ?>
                    </table>
                    <div class="text-right">
                        <input type="submit" name="gui" class="btn btn-success w-25 mb-3 mx-3" value="Đồng ý đặt hàng"></input>
                        <!-- <input class="btn btn-success w-25 mb-3 mx-3" value="Đồng ý đặt hàng" readonly></input> -->
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>