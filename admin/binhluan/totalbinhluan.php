<div class="col-md-8">
  <h3>Danh sách bình luận sản phẩm</h3>
  <h4>Tổng số sản phẩm được bình luận là: <?php echo " ".count($totalbl); ?></h4>
  <table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Bình luận </th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($totalbl as $key => $value) :
      ?>
        <tr>
          <th scope="row">
            <?php echo $key + 1; ?>
          </th>
          <td>
            <?php echo $value['namesp']; ?>
          </td>
          <td>
            <a href="?act=chitietbl&idsp=<?php echo $value['idpro']; ?>" class="btn btn-success">Xem chi tiết</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>