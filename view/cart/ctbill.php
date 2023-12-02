<div class="row mt-4 main-web">
    <div class="col-md-12">
        <!-- <div class="card-header"><h2></h2>CẢM ƠN</div> -->
        <h1>Cảm ơn quý khách đã đặt hàng!!!</h1>
    </div>
    <?php
    if (isset($bill) && is_array($bill)) {
        extract($bill);
        // var_dump($bill);
        // die();
    }
    ?>
    <form action="?act=ctbill" method="post">

        <div class="row mt-4 main-web">
            <div class="col-md-12 pr-0 pl-0">
                <div class="card mt-5">
                    <!-- <div class="card-header">Xem thêm sản phẩm khác</div> -->
                    <table class="table" style="width: 80%; margin: 5% 10%;  font-size: 16px;">
                        <?php
                        bill_chitiet($billct);
                        // viewcart(0);
                        ?>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-md-12"
            style="display: grid; grid-template-columns: 1fr 1fr; width: 80%; margin-left: 10%; font-size: 15px;">
            <div class="card mt-5">
                <!-- <div class="card-header"> -->
                <h3>Thông tin đặt hàng</h3>
                <!-- </div> -->
                <table class="table" style=" margin: 25px 100px; width: 69%;">
                    <!-- <table class="table" style="  width: 50%; margin: 5% 26%; font-size: 16px;"> -->
                    <tr>
                        <td>Người đặt hàng</td>
                        <td>
                            <?php echo $name; ?>
                        </td>
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
                </table>
            </div>
            <div class="card_ctbill mt-5">
                <!-- <div class="card-header"> -->
                <h3>Thông tin đơn hàng</h3>
                <!-- </div> -->
                <table class="table_ctbill frm_dm" style=" margin: 25px 100px; width: 69%;">
                    <!-- <table class="table_ctbill" style="width: 50%; margin: 5% 26%; font-size: 16px;"> -->
                    <tr>
                        <td>Mã đơn hàng</td>
                        <td>DH-
                            <?= $idbill ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày đặt hàng</td>
                        <td>
                            <?= $ngaydathang ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tổng đơn hàng</td>
                        <td>
                            <?= number_format($bill_tongtien) . ' VNĐ' ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Phương thức thanh toán</td>
                        <td>
                            <?php
                            if ($bill_pttt == 0) {
                                echo "Trả tiền khi nhận hàng";
                            }
                            if ($bill_pttt == 1) {
                                echo "Chuyển khoản ngân hàng";
                            }
                            if ($bill_pttt == 2) {
                                echo "Thanh toán online";
                            }
                            ?>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
        <a href="?act=sanpham" class="btn btn-success w-25 mb-3 mx-3">Tiến tục mua sắm</a>
        <a href="?act=mybill" class="btn btn-success w-25 mb-3 mx-3">Kiểm tra đơn hàng</a>
    </form>
</div>