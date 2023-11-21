<h1>sản phẩm 1</h1>
<div class="row mb">
    <div class="box_trai mr">
        <div class="row mb">

            <div class="box_title">GIỎ HÀNG </div>
            <div class="row box_content cart">
                <table>

                    <?php
            //   include "../../model/cart.php";
                    if (isset($_SESSION['user'])) {
                        # code...
                    }
                    //  view_cart(1);
                    $i=0;
                 $tong=0;
                    echo ' <tr>
                <th>Hình</th>
                <th>Sản Phẩm</th>
                <th>Đơn Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Thao Tác</th>
            </tr>';
                    foreach ($_SESSION['my_cart'] as $cart) {
                        extract($_SESSION['my_cart']);
                        // var_dump($_SESSION['my_cart']);
                        //  die();
                        $hinh = $img_path . $cart_img;
                        $hinh =  $cart_img;
                        $thanhtien = $cart_price * $cart_soluong;
                        $tong += $thanhtien;
     echo    '
                <tr>
                                   
                   <td><img src="' . $hinh . '" alt="" height="80px"></td>
                   <td>' . $cart_name . '</td>
                   <td>' . $cart_price . '</td>
                   <td>' . $cart_soluong . '</td>
                   <td>' . $thanhtien . '</td>
                   <td class="frm_content"><a href="index.php?act=delete_cart&idcart=' . $i . '">xóa</a></td>
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
            <div class="row mb frm_content">
                <!-- row form_dk mb bill    -->
                <a href="index.php?act=bill"><input type="submit" name="" id="" value="Tiếp tục đặt hàng"> </a> <a
                    href="index.php?act=delete_cart"><input type="button" name="" id="" value="Xóa giỏ hàng"> </a>

            </div>


        </div>
    </div>
</div>