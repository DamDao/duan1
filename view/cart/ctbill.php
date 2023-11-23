<div class="row mt-4 main-web">
    <div class="col-md-12">
        <div class="card mt-5">
            <div class="card-header">CẢM ƠN</div>
            <table class="table">
                <p class="text-center mt-4">Cảm ơn quý khách đã đặt hàng!!!</p>
            </table>
        </div>
    </div>
    <?php
    if (isset($bill) && is_array($bill)) {
        extract($bill);
        // var_dump($bill);
        // die();
    }
    ?>
    <div class="col-md-12">
        <div class="card mt-5">
            <div class="card-header">THÔNG TIN ĐƠN HÀNG</div>
            <table class="table">
                <tr>
                    <td>Mã đơn hàng</td>
                    <td>DAM-<?= $idbill ?> </td>
                </tr>
                <tr>
                    <td>Ngày đặt hàng</td>
                    <td><?= $ngaydathang ?></td>
                </tr>
                <tr>
                    <td>Tổng đơn hàng</td>
                    <td><?= number_format($bill_tongtien).' VNĐ' ?></td>
                </tr>
                <tr>
                    <td>Phương thức thanh toán</td>
                    <td>
                        <?php
                        if ($bill_pttt==0) {
                            echo "Trả tiền khi nhận hàng";
                        }
                        if ($bill_pttt==1) {
                            echo "Chuyển khoản ngân hàng";
                        }
                        if ($bill_pttt==2) {
                            echo "Thanh toán online";
                        }                        
                        ?>
                    </td>
                </tr>

            </table>
        </div>
    </div>
    <form action="?act=ctbill" method="post">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">Thông tin đặt hàng</div>
                <table class="table">
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?php echo $name; ?></td>
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
        </div>
        <div class="row mt-4 main-web">
            <div class="col-md-12 pr-0 pl-0">
                <div class="card mt-5">
                    <div class="card-header">Xem thêm sản phẩm khác</div>
                    <table class="table">
                        <?php
                        bill_chitiet($billct);
                        // viewcart(0);
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>