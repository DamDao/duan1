<div class="row mb">
    <div class="box_trai mr">
        <div class="row mb">
            <div class="row mb">

                <div class="box_title">THÔNG TIN GIỎ HÀNG </div>
                <div class="row box_content cart">
                    <table>
                        <?php
                        echo ' <tr>
                                    <th>Hình</th>
                                    <th>Sản Phẩm</th>
                                    <th>Đơn Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Thành Tiền</th>
                                    <th>Thao Tác</th>
                                </tr>';
                                $i=0;
                                $tong=0;
                        foreach ($_SESSION['my_cart'] as $cart) {
                            $hinh = $img_path . $cart[2];
                            // $hinh =  $cart[2];
                            $thanhtien = $cart[3] * $cart[4];
                            $tong += $thanhtien;
                            echo ' 
                                    <tr>
                                                       
                                       <td><img src="' . $hinh . '" alt="" height="80px"></td>
                                       <td>' . $cart[1] . '</td>
                                       <td>' . $cart[3] . '</td>
                                       <td>' . $cart[4] . '</td>
                                       <td>' . $thanhtien . '</td>
                                       <td class="frm_content"><a href="index.php?act=delete_cart&idcart=' . $i . '"><input type="button" name="" id="" value="Xóa"></a></td>
                                     </tr>';
                        }
                        echo '<tr>
                                 <td colspan="4" >Tổng hóa đơn</td>                                
                                 <td>' . $tong . '</td>
                                 <td><td>
                              </tr>';
                        ?>
                    </table>
                </div>
            </div>
            <div class="frm_bill" style="width: 100%;   display: flex;">
                <div class="row mb">
                    <div class="box_title">THÔNG TIN ĐẶT HÀNG</div>
                    <div class="row box_content form_dk">
                        <form action="">
                            <table>
                                <?php
                                if (isset($_SESSION['user'])) {
                                    $name = $_SESSION['user']['tk_name'];
                                    $address = $_SESSION['user']['tk_address'];
                                    $email = $_SESSION['user']['tk_email'];
                                    $tel = $_SESSION['user']['tk_tel'];
                                    // var_dump($_SESSION['user']);
                                } else {
                                    $name = '';
                                    $address = '';
                                    $email = '';
                                    $tel = '';
                                }
                                ?>
                                <tr>
                                    <td>Người đặt hàng</td>
                                    <td><input type="text" required value="<?php echo $tk_name ?>" name="name" id=""></td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td><input type="text" required value="<?php echo $tk_address ?>" name="address" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" value="<?php echo $tk_email ?>" name="email" id=""></td>
                                </tr>
                                <tr>
                                    <td>Điện thoại</td>
                                    <td><input type="text" required value="<?php echo $tk_tel ?>" name="tel" id=""></td>
                                </tr>

                            </table>
                        </form>
                    </div>
                </div>
                <div class="row mb">
                    <div class="box_title">PHƯƠNG THỨC THANH TOÁN</div>
                    <div class="row box_content">
                        <table class="table_bill" style="padding: 18px;">
                            <tr>
                                <td><input type="radio" name="ptt" id="" checked>Thanh toán khi nhận hàng</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px;"><input type="radio" name="ptt" id="">Chuyển khoản ngân
                                    hàng</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="ptt" id="">Thanh toán online</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row form_dk bill">
                <a href="index.php?act=dongydathang"> <input type="submit" name="dongydathang" id=""
                        value="Đồng ý đặt hàng"></a>
            </div>

        </div>
    </div>
</div>