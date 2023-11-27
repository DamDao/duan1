<div class="col-md-8">
  <h3>Bình luận của sản phẩm: <?php echo $bl1['namesp']; ?></h3>
  <table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Nội dung</th>
        <th scope="col">Người bình luận</th>
        <th scope="col">Ngày bình luận</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      $stt=1;
      foreach ($bl as $value) :
        if (is_array($value)) {
          extract( $value);
        }
      ?>
        <tr>
          <th scope="row">
            <?php echo $stt; ?>
          </th>
          <td>
            <?php echo $noidung; ?>
          </td>
          <td>
            <?php echo $user; ?>
          </td>
          <td>
            <?php echo $ngaybinhluan; ?>
          </td>
          <td>
            <a onclick="return confirm('Bạn có muốn xoá không?')" href="?act=deletebl&idbl=<?php echo $id; ?>" class="btn btn-danger">Xoá</a>
          </td>
        </tr>
        
      <?php $stt+=1; endforeach; ?>
    </tbody>
  </table>
</div>