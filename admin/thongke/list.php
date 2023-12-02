<div class="row " style="text-align: center;">
    <div class="row frm_title">
        <h1>THÔNG TIN HÀNG HÓA</h1>
    </div>
    <div class="row box_content ">
        <div class="frm_dm">

            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG SẢN PHẨM</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                
                <?php

                    foreach ($list_thongke as $thongke) {
                       extract($thongke);
                       echo '<tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'. number_format( $maxprice).'</td>
                                <td>'. number_format($minprice).'</td>
                                <td>'. number_format($avgprice).'</td>
                             </tr>';
                    }
               
                ?>

            
            </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=bieudo"><input class="add_css" type="button" name="" id="" value="THỐNG KÊ BIỂU ĐỒ"></a>
        </div>
    </div>
</div>