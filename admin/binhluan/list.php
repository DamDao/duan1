<div class="row">
    <div class="row frm_title">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row frm_content">
        <div class=" frm_dm">
            <table>
                <tr>
                    <th>ID</th>
                    <th>NỘI DUNG BÌNH LUẬN</th>
                    <th>USER</th>
                    <th>SẢN PHẨM</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                    foreach ($list_binhluan as $binhluan) {
                        extract($binhluan);
                        // var_dump($binhluan);
                        $delete_binhluan="index.php?act=delete_binhluan&id=".$id;
                echo         
                '<tr>
                    <td>'.$id.'</td>
                    <td>'.$noidung.'</td>
                    <td>'.$iduser.'</td>
                    <td>'.$idpro.'</td>
                    <td>'.$ngaybinhluan.'</td>
                    <td> <a href="'.$delete_binhluan.'"> <i class="fa-solid fa-trash fa-fade fa-xl" style="color: #020c1d;"></i></a> </td>
                </tr>';
                    }
                ?>
            
            </table>
        </div>
        <!-- <div class="row mb10">
            <input type="button" name="" id="" value="Chọn tất cả">
            <input type="button" name="" id="" value="Bỏ chọn tất cả">
            <input type="button" name="" id="" value="Xóa các mục đã chọn">
        </div> -->
    </div>
</div>