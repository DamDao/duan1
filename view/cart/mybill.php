<div class="row mt-4 main-web">
  <div class="col-md-12 pr-0 pl-0">
    <div class="card mt-5"><br>
          <h1>Đơn hàng</h1><br>
      <table class="frm_dm" style="width: 80%; font-size: 17px; margin-left: 10%;">
        <thead>
            <tr>
                <th style=" border-bottom:1px solid green; " class="text-center">Mã đơn hàng</th>
                <th style=" border-bottom:1px solid green; " class="text-center">Số lượng mặt hàng</th>
                <th style=" border-bottom:1px solid green; " class="text-center">Tổng giá trị đơn hàng</th>
                <th style=" border-bottom:1px solid green; " class="text-center">Ngày đặt</th>
                <th style=" border-bottom:1px solid green; " class="text-center">Tình trạng đơn hàng</th>
                <!-- <th style=" border-bottom:1px solid green" class="text-center">Bill Cỏmim</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listbill as $value):
                extract($value);
                // var_dump($value);
                $trangthai=trangthai($bill_trangthai);
                $soluong=loadall_cart_count($bill_id)
            ?>
            <tr>
                <td style="padding:10px" class="text-center">DA1-<?=$bill_id;?></td>
                <td style="padding:10px" class="text-center"><?=$soluong?></td>
                <td style="padding:10px" class="text-center"><?=number_format($bill_tongtien)?>vnd</td>
                <td style="padding:10px" class="text-center"><?=$bill_ngaydat;?></td>
                <td style="padding:10px" class="text-center"><?=$trangthai?></td>
                <td class="text-center"><a href="">Chi tiết </a></td> 
            </tr>
            <?php endforeach;?>
        </tbody>
        <?php
       
        ?>
      </table>
    </div>
  </div>
</div>
