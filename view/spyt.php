<section class="dishes" id="dishes">

    <h3 class="sub-heading"> SẢN PHẨM YÊU THÍCH </h3>
    <h1 class="heading"> ... </h1>

    <div class="box-container">
        <?php
        // include("../model/sanpham.php");
        $dstop10 = loadall_sanpham_top10();
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $sp_id;
            $sp_img = $img_path . $sp_img;
            echo ' <div class="box">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="' . $linksp . '"><img src="' . $sp_img . '" alt=""></a>
                        <h3><a href="' . $linksp . '">' . $sp_name . '</a></h3>
                      <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                        <span>$' . $sp_price . '</span>
                        <a href="#" class="btn">add to card</a>
                     </div>';
        }
        ?>
    </div>

</section>