<div class="">
    <div class=" frm_title">
    <a href="index.php?act=listdm"><i class="fa-solid fa-arrow-right fa-rotate-180 fa-2xl"></i></a>
        <h2 class="tieude">THÊM MỚI DANH MỤC</h2>
    </div>
    <div class=" frm_content">
        <form action="index.php?act=adddm" method="POST">
            <div class=" mb10">
                Mã loại <br>
                <input type="text" name="maloai" id="" placeholder="Auto..." disabled>
            </div>
            <div class=" mb10">
                Tên loại <br>
                <input type="text" name="tenloai" id="">
            </div>
            <div class=" mb10">
                <input class="add_css" type="submit" name="themmoi" id="" value="Thêm Mới">
                <input class="add_css" type="reset" name="" id="" value="Nhập Lại">
                <a href="index.php?act=listdm"><input class="add_css" type="button" name="" id="" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongbaotc)) {
                echo $thongbaotc;

            } else if (isset($thongbaor)) {
                echo $thongbaor;
            }
            ?>
        </form>
    </div>
</div>
