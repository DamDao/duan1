<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $sp_img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "Ko có hình";
}
// echo "$id,$name,$price,$img,$mota,$iddm";
?>

<div class="">
    <div class=" frm_title">
    <a href="index.php?act=listsp"><i class="fa-solid fa-arrow-right fa-rotate-180 fa-2xl"></i></a>
        <h2 class="tieude">CẬP NHẬT SẢN PHẨM</h2>
    </div>

    <div class=" frm_content">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class=" mb10 ">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        // extract($danhmuc);
                        if ($dm_id == $danhmuc['dm_id']) $s="selected"; else $s="";
                        echo ' <option value="'.$danhmuc['dm_id'].'" '.$s.'>'.$danhmuc['dm_name'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class=" mb10">
                Tên Sản Phẩm <br>
                <input type="text" name="tensp" required value="<?php echo $sp_name ?>">
            </div>
            <div class=" mb10">
                Giá Sản Phẩm<br>
                <input type="text" name="giasp" required value="<?php echo $sp_price ?>">
            </div>
            <div class=" mb10">
                Hình Phẩm <br>
                <input type="file" name="hinh" value="<?php ?>">
                <?php echo $hinh ?>
            </div>
            <div class=" mb10">
                Mô tả Sản Phẩm <br>
                <textarea name="mota" cols="30" rows="10" value="<?php echo $sp_mota ?>"><?php echo $sp_mota ?></textarea>
            </div>
            <div class=" mb10">
                <input class="add_css" type="hidden" name="id" value="<?php echo $sp_id ?>" id="">
                <input class="add_css" type="submit" name="capnhat" value="Cập Nhật">
                <input class="add_css" type="reset" name="" value="Nhập Lại">
                <a href="index.php?act=listsp"><input class="add_css" type="button" name="" id="" value="Danh Sách"></a>
            </div>
        </form>
    </div>
    <?php if (isset($err)) {
    # code...
    echo $err;
}

?>
</div>
</div>