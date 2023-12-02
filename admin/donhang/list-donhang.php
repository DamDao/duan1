<div class="col-md-12">
    <h3>DANH SÁCH ĐƠN HÀNG</h3>
    <!-- <form action="?act=donhang" method="post">
        <label for="name" class="form-label fs-4">Tìm kiếm đơn hàng</label>
        <div class="row mb-5">
            <div class="col-md-10">
                <input type="text" class="form-control" name="iddh" placeholder="Nhập mã đơn hàng để tìm kiếm!!">
            </div>
            <div class="col-md-2">
                <button type="submit" name="searchdh" class="btn btn-success">Tìm kiếm</button>
            </div>
        </div>
    </form> -->
    <div class="frm_dm">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th class="text-center" scope="col">MÃ ĐƠN HÀNG</th>
                    <th class="text-center" scope="col">TÊN SẢN PHẨM</th>
                    <th class="text-center" scope="col">KHÁCH HÀNG</th>
                    <th class="text-center" scope="col">SỐ LƯỢNG</th>
                    <th class="text-center" scope="col">GIÁ TRỊ ĐƠN HÀNG</th>
                    <th class="text-center" scope="col">NGÀY ĐẶT HÀNG</th>
                    <th class="text-center" scope="col">TÌNH TRẠNG ĐƠN HÀNG</th>
                    <th class="text-center" scope="col">TRẠNG THÁI</th>
                    <th class="text-center" scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!$listbill) {
                    $m_donhang = "Chưa có đơn hàng nào";
                } else {
                    foreach ($listbillct as $value):
                        extract($value);
                        // var_dump($value);
                        // die();
                        // $soluong = loadall_cart_count($bill_id);
                        $tt = trangthai($bill_trangthai);
                        // var_dump($tt);
                        // die;
                        ?>
                        <tr>
                            <td class="">
                                <?= "DH-$bill_id"; ?>
                            </td>
                            <td class="">
                                <?= "$cart_name"; ?>
                            </td>
                            <td class=" text-md-start">
                                Tên:<span>
                                    <?= $bill_name; ?>
                                </span> <br>
                                Địa chỉ:<span>
                                    <?= $bill_diachi; ?>
                                </span> <br>
                                Email:<span>
                                    <?= $bill_email; ?>
                                </span> <br>
                                SĐT:<span>
                                    <?= $bill_tel; ?>
                                </span>
                            </td>
                            <td class="">
                                <?= $cart_soluong; ?>
                            </td>
                            <td class="">
                                <?= number_format($bill_tongtien); ?> VND
                            </td>
                            <td class="">
                                <?= $bill_ngaydat; ?>
                            </td>
                            <td class="">
                                <?= $tt; ?>
                            </td>
                            <td class="">
                                <?php
                                if ($tt == 'Đơn hàng giao thành công') {
                                    echo 'Đã được thanh toán';

                                } else if ($tt == 'Hủy đơn hàng') {
                                    echo 'Đã hủy';
                                } else {
                                    echo 'Đơn hàng chưa được thanh toán';
                                } ?>
                            </td>
                            <td>
                                <a href="index.php?act=updatedh&iddh=<?= $bill_id; ?>"><i
                                        class="fa-regular fa-pen-to-square fa-fade fa-xl" style="color: #20365a;"></i></a>
                                <a onclick="return confirm('Bạn có muốn xoá không?')"
                                    href="index.php?act=deletedh&iddh=<?= $bill_id; ?>" class="btn btn-danger">
                                    <i class="fa-solid fa-trash fa-fade fa-xl" style="color: #020c1d;"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;
                } ?>
            </tbody>
        </table>
    </div>

    <?php
    if (isset($m_donhang) && $m_donhang != "") {
        echo $m_donhang;
    }
    ?>
</div>