<!-- dishes sectionl starts -->

<!-- dishes sectionl ends -->

<!-- about section starts -->


<!-- about section ends -->

<!-- menu setions starts -->

<setion class="menu" id="menu">

    <h3 class="sub-heading"> Danh Sách </h3>
    <h1 class="heading">
        <?php echo $tendm ?>
    </h1>

    <div class="box-container">
        <?php
        foreach ($dssp as $sp) {
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
                            <p>lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Sit natus dolor cumque?.</p>
                                <span class="price">' . $sp_price . '</span>
                            <a href="#" class="btn">Add to cart</a>
                        </div>
                    </div>';
        }
        ?>



    </div>
</setion>
<!-- </setion> -->
<!-- menu setions ends -->
<section class="about" id="about">

    <h3 class="sub-heading"> Sản Phẩm Được Yêu Thích Nhất </h3>
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
            echo  "<h3> $sp_name</h3>
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
            <a href="#" class="btn">Learn more</a>
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
                            <p>lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Sit natus dolor cumque?.</p>
                            <a href="#" class="btn">Add to cart</a>
                            <span class="price">' . $sp_price . '</span>
                        </div>
                    </div>';
        }
        ?>



    </div>

</setion>
<!-- menu setions ends -->



<!-- <section class="review" id="review"> -->

<h3 class="sub-heading"> Customer's review </h3>
<h1 class="heading"> What they say </h1>

<div class="swiper mySwiper review-slider">
    <div class="swiper-wrapper wrapper">
        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="image/home-img-1.jpg" alt="">
                <div class="user-info">
                    <h3>John deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i> <!--Ngôi sao-->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?lorem ipsum dolor
                sit amet consectetur adipisicing elit. Sit natus dolor cumque?.</p>
        </div>
        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="image/home-img-2.jpg" alt="">
                <div class="user-info">
                    <h3>John desh</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i> <!--Ngôi sao-->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?lorem ipsum dolor
                sit amet consectetur adipisicing elit. Sit natus dolor cumque?.</p>
        </div>
        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="image/home-img-3.jpg" alt="">
                <div class="user-info">
                    <h3>messi leo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i> <!--Ngôi sao-->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?lorem ipsum dolor
                sit amet consectetur adipisicing elit. Sit natus dolor cumque?.</p>
        </div>
        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="image/home-img-3.jpg" alt="">
                <div class="user-info">
                    <h3>messi leo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i> <!--Ngôi sao-->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?lorem ipsum dolor
                sit amet consectetur adipisicing elit. Sit natus dolor cumque?.</p>
        </div>
        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="image/home-img-2.jpg" alt="">
                <div class="user-info">
                    <h3>messi leo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i> <!--Ngôi sao-->
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?lorem ipsum dolor
                sit amet consectetur adipisicing elit. Sit natus dolor cumque?.</p>
        </div>
    </div>
</div>

<!-- </section> -->

<!-- review section ends -->

<!-- oder section starts -->

<!-- <section class="oder" id="oder"> -->

<h3 class="sub-heading"> Oder now </h3>
<h1 class="heading"> Free and fast </h1>

<form action="">

    <div class="inputBox">
        <div class="input">
            <span>Your name</span>
            <input type="text" name="" id="" placeholder="Enter your name">
        </div>
        <div class="input">
            <span>Your number</span>
            <input type="number" name="" id="" placeholder="Enter your number">
        </div>
    </div>

</form>

<!-- </section> -->

<!-- oder section ends -->