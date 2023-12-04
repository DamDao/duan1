<section class="home" id="home">

    <div class="swiper mySwiper home-slider">

        <!-- slider -->

        <div class="swiper-wrapper wrapper">
            <?php
            include "global.php";
            $spnew = loadall_sanpham_home();
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $sp_id;
                $hinh = $img_path . $sp_img;
                echo '<div class="swiper-slide slider">
                    <div class="content">
                      
                        <h3>    <a href="' . $linksp . '">' . $sp_name . '</a></h3>
                        <p>' . $sp_mota . '</p>
                        <a href="' . $linksp . '" class="btn">Xem Chi Tiết</a>
                    </div>
                    <div class="image">
                    <img src="' . $hinh . '" alt="">
                    </div>
                </div>';
            }
            ?>
            <!-- </div> -->
            <!-- <div class="swiper-slide slider">
</div> -->
        </div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</section>

<!-- dishes sectionl starts -->

<!-- dishes sectionl ends -->

<!-- about section starts -->


<!-- about section ends -->

<!-- menu setions starts -->

<setion class="menu" id="menu">

    <h3 class="sub-heading"> DANH SÁCH SẢN PHẨM </h3>
    <h5 class="heading">
        <?php echo $tendm ?>
    </h5>

    <div class="box-container">
        <?php
        foreach ($dssp as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $sp_id;
            $sp_img = $img_path . $sp_img;
            echo ' <div class="box">
                        <div class="image img2">
                            <a href="' . $linksp . '"><img src="' . $sp_img . '" alt=""></a>
                            <a href="" class="fas fa-heart"></a> <!--Trái tim-->
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
                                <span class="price">' . number_format($sp_price) . ' VND</span>
                                <form action="?act=addtocart" method="POST">
                               <input type="hidden" name="amount" id="amount" value="1">
                                <input type="hidden" name="idsp" value="' . $sp_id . '">
                                <input type="hidden" name="namesp" value="' . $sp_name . '">
                                <input type="hidden" name="img" value="' . $sp_img . '">
                                <input type="hidden" name="price" value="' . $sp_price . '">
                                <input type="hidden" name="soluong" value="' . $sp_soluong . '">';
                            if (isset($sp_soluong) && ($sp_soluong > 0)) {
                                // echo 'còn'.$sp_soluong.'sản phẩm';
                                echo '<div class="dathang">
                                        <button type="submit" name="addtocart" class="btn btn-success ">Thêm giỏ hàng</button>
                                    </div>';
                            } else {
                                // echo $sp_soluong;
                                echo 'hết hàng
                                    <div class="dathang">
                                    <button type="button" class="btn btn-success ">Hết hàng</button>
                                        
                                    </div>
                                    ';
                             }
                                echo '
                                </form>
                        </div>
                    </div>';
        }
        ?>

    </div>
</setion>
<!-- </setion> -->
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
                            <span class="price">' . number_format($sp_price) . ' VND</span>
                            <form action="?act=addtocart" method="POST">
                            <input type="hidden" name="amount" id="amount" value="1">
                             <input type="hidden" name="idsp" value="' . $sp_id . '">
                             <input type="hidden" name="namesp" value="' . $sp_name . '">
                             <input type="hidden" name="img" value="' . $sp_img . '">
                             <input type="hidden" name="price" value="' . $sp_price . '">
                             <input type="hidden" name="soluong" value="' . $sp_soluong . '">';
                             if (isset($sp_soluong)&&($sp_soluong>0)) {
                                // echo 'còn'.$sp_soluong.'sản phẩm';
                                echo'<div class="dathang">
                                    <button type="submit" name="addtocart" class="btn btn-success ">Thêm giỏ hàng</button>
                                </div>';
                              }else {
                                // echo $sp_soluong;
                                echo 'hết hàng
                                <div class="dathang">
                                <button type="button" class="btn btn-success ">Hết hàng</button>
                                </div>
                                ';
                              }
                              echo '
                             </form>
                        </div>
                    </div>';
        }
        ?>



    </div>

</setion>
<!-- menu setions ends -->





<!-- </section> -->

<!-- oder section ends -->