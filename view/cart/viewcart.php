<div class="row mt-4 main-web">
  <div class="col-md-12 pr-0 pl-0">
    <div class="card mt-5">
      <div class="card-header" style="margin: 150px 0 20px 0;"><h1>Trang Giỏ Hàng</h1></div>
      <table class="table_bill">
        <?php
        viewcart(1);
        ?>
      </table>
      <div class="text-right">
        <a href="?act=sanpham" class="btn btn-success w-25 mb-3 mx-3">Tiếp tục mua hàng</a>
        <a href="?act=bill" class="btn btn-success w-25 mb-3 mx-3">Tiến hành đặt hàng</a>
      </div>
    </div>
  </div>
</div>
<!-- <script>
    let amountElement = document.getElementById('amount');
    let amount = amountElement.value;
    // console.log(amount);
    let render = (amount) => {
        amountElement.value = amount
    }
    //HandelPlus
    let handlePlus = () => {
        amount++;
        render(amount);
    }
    //handel Minus
    let handleMinus = () => {
        if (amount > 1)
            amount--;
        render(amount);
    }
    amountElement.addEventListener('input', () => {
        amount = amountElement.value;
        amount = parseInt(amount);
        amount = (isNaN(amount) || amount == 0) ? 1 : amount;
        render(amount);

    });
</script> -->