<div>
  <h3 style="text-align:center;">Cập Nhật Đơn Hàng</h3>
  <form action="?act=updatedh" method="post">
    <?php
    if (is_array($dh)) {
      extract($dh);
      // var_dump ($dh);
    }
    $soluong = loadall_cart_count($bill_id);
    ?>
    <div class="mb10 edit_hh">
      <label for="name" class="form-label">Mã đơn hàng</label>
      <input type="text" class="form-control" name="iddh" value=" <?= $bill_id; ?>" readonly> 
      <label for="name" class="form-label">Họ tên người nhận:</label>
      <input readonly type="text" name="" value="  <?= $bill_name; ?>" id="">
      <label for="name" class="form-label">Địa chỉ:</label>
      <input readonly type="text" name="" value=" <?= $bill_diachi; ?>" id="">
      <label for="name" class="form-label"> Email:</label>
      <input readonly type="text" name="" value="   <?= $bill_email; ?>" id="">
      <label for="name" class="form-label"> Số điện thoại:</label>
      <input readonly type="text" name="" value=" <?= $bill_tel; ?>" id="">
      <label for="name" class="form-label">Số lượng đơn:</label>
      <input readonly type="text" name="" value=" <?= $soluong; ?>" id="">
      <label for="name" class="form-label">Tổng tiền: </label>
      <input readonly type="text" name="" value="<?= number_format($bill_tongtien); ?>" id="">
      <label for="name" class="form-label"> Ngày đặt: </label>
      <input readonly type="text" name="" value="<?= $bill_ngaydat; ?>" id="">


    </div>
    <div class="mb10 ">
      <label for="name" class="form-label">Tình trạng đơn hàng</label>
      <select  style="width: 100%;"  class="form-select" name="ttdh" aria-label="Default select example">
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
      </select>
    </div>
    <button type="submit" name="updatedh" class="add_css">Cập Nhật</button>

  </form>
</div>