<div class="row mt-4 main-web">
  <div class="col-md-12 pr-0 pl-0">
    <div class="card mt-5"><br>
          <h1>Đơn hàng</h1><br>
      <table class="frm_dm" style="width: 80%; font-size: 17px; margin-left: 10%;">
        <thead>
            <tr>
                <th style=" border-bottom:1px solid green; " class="text-center">Mã đơn hàng</th>
                <th style=" border-bottom:1px solid green; " class="text-center">Số lượng đơn hàng</th>
                <th style=" border-bottom:1px solid green; " class="text-center">Tổng giá trị đơn hàng</th>
                <th style=" border-bottom:1px solid green; " class="text-center">Ngày đặt</th>
                <th style=" border-bottom:1px solid green; " class="text-center">Tình trạng đơn hàng</th>
                <th style=" border-bottom:1px solid green; " class="text-center">Trạng thái</th>
                <!-- <th style=" border-bottom:1px solid green" class="text-center">Bill Cỏmim</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listbill as $value):
                extract($value);
                $huydh = "index.php?act=huydh&id=" . $bill_id;
                $lsbill="index.php?act=ls_bill&id=".$bill_id;
                // var_dump($value);
                $trangthai=trangthai($bill_trangthai);
                $soluong=loadall_cart_count($bill_id)
            ?>
            <tr>
                <td style="padding:10px" class="text-center">DH-<?=$bill_id;?></td>
                <td style="padding:10px" class="text-center"><?=$soluong?></td>
                <td style="padding:10px" class="text-center"><?=number_format($bill_tongtien)?>vnd</td>
                <td style="padding:10px" class="text-center"><?=$bill_ngaydat;?></td>
                <td style="padding:10px" class="text-center"><?=$trangthai?></td>
                <td><a href="<?= $huydh ?>" class="btn2 btn-success">Hủy đơn</a></td>
                <td class="text-center"><a href="<?=$lsbill?>">Chi tiết </a></td> 

            </tr>
            <?php endforeach;?>
        </tbody>
        <?php
       
        ?>
      </table>
    </div>
  </div>
</div>
