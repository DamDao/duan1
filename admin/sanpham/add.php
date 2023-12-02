<div class="row">
            <div class="row frm_title">
            <a href="index.php?act=listsp"><i class="fa-solid fa-arrow-right fa-rotate-180 fa-2xl"></i></a>
                <h2 class="tieude">THÊM SẢN PHẨM</h2>
            </div>
            <div class="row frm_content">
                <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                    <div class="row mb10">
                        Danh Mục <br>
                        <select name="iddm" id="">
                            <?php 
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo ' <option value="'.$dm_id.'">'.$dm_name.'</option>';
                                }
                            ?>      
                        </select>
                    </div>
                    <div class="row mb10">
                        Tên Sản Phẩm <br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        Giá Sản Phẩm<br>
                        <input type="text" name="giasp" >
                    </div>
                    <div class="row mb10">
                        Hình Sản Phẩm <br>
                        <input type="file" name="hinh" >
                    </div>
                    <div class="row mb10">
                        Tác Giả Sản Phẩm <br>
                        <input type="tex" name="tacgia" >
                    </div>
                    <div class="row mb10">
                       Số Lượng Sản Phẩm <br>   
                        <input type="tex" name="soluong" >
                    </div>
                    <div class="row mb10">
                        Mô tả Sản Phẩm <br>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input class="add_css" type="submit" name="themmoi" value="Thêm Mới">
                        <input class="add_css" type="reset" name="" value="Nhập Lại">
                        <a href="index.php?act=listsp"><input class="add_css" type="button" name="" value="Danh Sách"></a>
                    </div>
                </form>
                    <?php
                        if (isset($thongbao)) {
                            echo $thongbao;
                        }else if (isset($thongbaor)) {
                            # code...
                            echo $thongbaor;
                        }
                    ?>
            </div>
        </div>
    </div>