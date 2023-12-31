<style>
    .tdt {
        background: #fff;
        border-radius: 7px;
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);
        height: 160px;
        padding: 10px 20px;
    }

    .tdt a {
        text-decoration: none;
        float: right;
        color: black;
    }

    .tdt a:hover {
        font-weight: bold;

    }
</style>

<div class="col-md-8">

    <h2>THỐNG KÊ SẢN PHẨM</h2>
    <?php
    // Gọi function để lấy tổng doanh thu
    $totalRevenue = getTotalRevenue();
    ?>

    <div class="col-md-3 offset-md-1">
        <div class="card mt-5 tdt" style="width: 18rem">
            <div class="card-body">
                <h3 class="card-title">Tổng Doanh Thu</h3>
                <p class="card-text">
                    <?= number_format($totalRevenue) ?>VND
                </p>
                <a href="index.php?act=doanhthu">Xem chi tiết</a>

            </div>
        </div>
    </div>

</div>

<div class="row " style="text-align: center;">
    <div class="row frm_title">
        <h2>THÔNG TIN HÀNG HÓA</h2>
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
                                <td>' . $madm . '</td>
                                <td>' . $tendm . '</td>
                                <td>' . $countsp . '</td>
                                <td>' . number_format($maxprice) . '</td>
                                <td>' . number_format($minprice) . '</td>
                                <td>' . number_format($avgprice) . '</td>
                             </tr>';
                }

                ?>


            </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=bieudo"><input class="add_css" type="button" name="" id=""
                    value="THỐNG KÊ BIỂU ĐỒ"></a>
        </div>
    </div>
</div>