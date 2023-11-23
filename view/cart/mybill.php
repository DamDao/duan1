<div class="row mt-4 main-web">
  <div class="col-md-12 pr-0 pl-0">
    <div class="card mt-5">
      <div class="card-header">Đơn hàng của tôi</div>
      <table class="table">
        <thead>
            <tr>
                <th class="text-center">Mã đơn hàng</th>
                <th class="text-center">Ngày đặt</th>
                <th class="text-center">Số lượng mặt hàng</th>
                <th class="text-center">Tổng giá trị đơn hàng</th>
                <th class="text-center">Tình trạng đơn hàng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listbill as $value) :
                extract($value);
                $trangthai=trangthai($bill_trangthai);
                $soluong=loadall_cart_count($bill_id)
            ?>
            <tr>
                <td class="text-center">DAM-<?=$bill_id?></td>
                <td class="text-center"><?=date("d/m/Y", strtotime($ngaydathang));?></td>
                <td class="text-center"><?=$soluong?></td>
                <td class="text-center"><?=number_format($bill_tongtien)?>vnd</td>
                <td class="text-center"><?=$trangthai?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
        <?php
       
        ?>
      </table>
    </div>
  </div>
</div>