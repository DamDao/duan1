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