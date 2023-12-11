<div>
  <h3 style="text-align:center;">Cập Nhật Đơn Hàng</h3>
  <form action="?act=updatedh" method="post">
    <?php
    if (is_array($dh)) {
      extract($dh);
      // var_dump ($dh);
    }
    $tt = trangthai($bill_trangthai);
    $soluong = loadall_cart_count($bill_id);
    ?>
    <div class="mb10 edit_hh">
      <label for="name" class="form-label">Mã đơn hàng:
        <?= $bill_id; ?>
      </label><br>
      <input type="hidden" class="form-control" name="iddh" value="<?= $bill_id; ?>" readonly>
      <label for="name" class="form-label">Họ tên người nhận:
        <?= $bill_name; ?>
      </label><br>
      <!-- <input readonly type="text" name="" value=" " id=""> -->
      <label for="name" class="form-label">Địa chỉ:
        <?= $bill_diachi; ?>
      </label><br>
      <!-- <input readonly type="text" name="" value=" " id=""> -->
      <label for="name" class="form-label"> Email:
        <?= $bill_email; ?>
      </label><br>
      <!-- <input readonly type="text" name="" value=" " id=""> -->
      <label for="name" class="form-label"> Số điện thoại:
        <?= $bill_tel; ?>
      </label><br>
      <!-- <input readonly type="text" name="" value=" " id=""> -->
      <label for="name" class="form-label">Số lượng đơn:
        <?= $soluong; ?>
      </label><br>
      <!-- <input readonly type="text" name="" value=" " id=""> -->
      <label for="name" class="form-label">Tổng tiền:
        <?= number_format($bill_tongtien); ?> VND
      </label><br>
      <!-- <input readonly type="text" name="" value="" id=""> -->
      <label for="name" class="form-label"> Ngày đặt:
        <?= $bill_ngaydat; ?>
      </label><br>
      <!-- <input readonly type="text" name="" value="" id=""> -->
      <label for="name" class="form-label">Trạng thái:
        <?php
        if ($tt == 'Đơn hàng giao thành công') {
          echo 'Đã được thanh toán';

        } else if ($tt == 'Hủy đơn hàng') {
          echo 'Đã hủy';
        } else {
          echo 'Đơn hàng chưa được thanh toán';
        } ?>
      </label><br>

    </div>
    <div class="mb10 ">
      <label for="name" class="form-label">Tình trạng đơn hàng</label>
      <select style="width: 100%;" class="form-select" name="ttdh" aria-label="Default select example">
        <option value="0" <?php echo ($bill_trangthai == 0) ? "selected" : ""; ?>>
          Đơn hàng chờ xác nhận
        </option>
        <option value="1" <?php echo ($bill_trangthai == 1) ? "selected" : ""; ?>>
          Đơn hàng đã được xác nhận
        </option>
        <option value="2" <?php echo ($bill_trangthai == 2) ? "selected" : ""; ?>>
          Đơn hàng đang được giao
        </option>
        <option value="3" <?php echo ($bill_trangthai == 3) ? "selected" : ""; ?>>
          Đơn hàng giao thành công
        </option>
        <option value="4" <?php echo ($bill_trangthai == 4) ? "selected" : ""; ?>>
          Hủy đơn hàng
        </option>
      </select>
    </div>
    <button type="submit" name="updatedh" class="add_css">Cập Nhật</button>

  </form>
</div>