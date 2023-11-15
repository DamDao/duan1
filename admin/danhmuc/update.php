<?php
if (is_array($danhmuc)) {
    extract($danhmuc);
}
?>

<div class="row">
    <div class="frm_title">
        <a href="index.php?act=listdm"><i class="fa-solid fa-arrow-right fa-rotate-180 fa-2xl"></i></a>
        <h2 class="tieude">CẬP NHẬT DANH MỤC</h2>
    </div>
    <div class="frm_content">
        <form action="index.php?act=updatedm" method="POST">
            <div class="mb10">
                Mã loại <br>
                <input type="text" name="maloai" id="" placeholder="Auto..." disabled>
            </div>
            <div class="mb10">
                Tên loại <br>
                <input type="text" name="tenloai" id="" required value="<?php if (isset($dm_name) && ($dm_name != '')) {
                    echo $dm_name;
                } ?>">
            </div>
            <div class="mb10">
                <input type="hidden" name="id" id="" value="<?php if (isset($dm_id) && ($dm_id > 0)) {
                    echo $dm_id;
                } ?>">
                <input class="add_css" type="submit" name="capnhat" id="" value="CẬP NHẬT">
                <input class="add_css" type="reset" name="" id="" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input class="add_css" type="button" name="" id="" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongbaor)) {
                echo $thongbao;
                echo $thongbaor;
            }
            ?>
        </form>
    </div>
</div>