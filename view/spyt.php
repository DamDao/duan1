<section class="dishes" id="dishes">

    <h3 class="sub-heading"> SẢN PHẨM YÊU THÍCH </h3>
    <h1 class="heading"> </h1>

    <div class="box-container">
        <?php
        // include("../model/sanpham.php");
        $dsspyt = loadall_spyt();
        foreach ($dsspyt as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $sp_id;
            $sp_img = $img_path . $sp_img;
            echo ' <div class="box">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="' . $linksp . '"><img src="' . $sp_img . '" alt=""></a>
                        <h3><a href="' . $linksp . '">' . $sp_name . '</a></h3>
                        <p>Tác Giả: ' . $sp_tacgia . '</p>
                      <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                        <span> ' . number_format($sp_price) . ' VND</span>
                        <form action="?act=addtocart" method="POST">
                            <input type="hidden" name="amount" id="amount" value="1">
                             <input type="hidden" name="idsp" value="' . $sp_id . '">
                             <input type="hidden" name="namesp" value="' . $sp_name . '">
                             <input type="hidden" name="img" value="' . $sp_img . '">
                             <input type="hidden" name="price" value="' . $sp_price . '">
                             <button type="submit" name="addtocart" class="btn btn-success ">Thêm vào giỏ hàng</button>
                             </form>
                     </div>';
        }
        ?>
    </div>

</section>
<!-- menu setions ends -->
<section class="about" id="about">

    <h3 class="sub-heading"> SẢN PHẨM ĐƯỢC YÊU THÍCH NHẤT </h3>
    <h1 class="heading"> </h1>

    <div class="row">
        <?php
        $onespyt = loadone_spyt();
        foreach ($onespyt as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $sp_id;
            $sp_img = $img_path . $sp_img;
            echo '
                <div class="image">
                    <a href="' . $linksp . '"><img src="' . $sp_img . '" alt=""></a>
                </div>';
        }
        ?>
        <div class="content">
            <?php
            echo "<h3> $sp_name</h3>
                    <p>Tác giả: $sp_tacgia</p>
            <p>$sp_mota</p>";
            ?>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="<?= $linksp ?>" class="btn">Xem Chi Tiết</a>
        </div>

    </div>

</section>

<!-- review section starts -->

<!-- menu setions starts -->

<setion class="menu" id="menu">

    <h3 class="sub-heading">TẤT CẢ SẢN PHẨM </h3>
    <h1 class="heading"> ... </h1>

    <div class="box-container">
        <?php
        $spnew = loadall_sanpham_home();
        foreach ($spnew as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $sp_id;
            $sp_img = $img_path . $sp_img;
            echo ' <div class="box">
                        <div class="image img2">
                            <img src="' . $sp_img . '" alt="">
                            <a href="#" class="fas fa-heart"></a> <!--Trái tim-->
                        </div>

                        <div class="content">
                            <div class="stars">
                                <i class="fas fa-star"></i> <!--Ngôi sao-->
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <h3><a href="' . $linksp . '">' . $sp_name . '</a></h3>
                            <p>Tác Giả: ' . $sp_tacgia . '</p>
                            <span class="price"> ' . number_format($sp_price) . ' VND</span>
                            <form action="?act=addtocart" method="POST">
                            <input type="hidden" name="amount" id="amount" value="1">
                             <input type="hidden" name="idsp" value="' . $sp_id . '">
                             <input type="hidden" name="namesp" value="' . $sp_name . '">
                             <input type="hidden" name="img" value="' . $sp_img . '">
                             <input type="hidden" name="price" value="' . $sp_price . '">
                             <button type="submit" name="addtocart" class="btn btn-success ">Thêm vào giỏ hàng</button>
                             </form>
                        </div>
                    </div>';
        }
        ?>



    </div>

</setion>
<!-- menu setions ends -->