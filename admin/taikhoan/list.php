<div class="row">
    <div class="row frm_title">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frm_content">
        <div class="row mb10 frm_dm">
            <table>
                <tr>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <!-- <th>THAO TÁC</th> -->
                </tr>
                <?php
                    foreach ($list_taikhoan as $taikhoan) {
                        extract($taikhoan);
                        $edit_tk="index.php?act=edit_tk&id=".$tk_id;
                        $delete_tk="index.php?act=deleted_tk&id=".$tk_id;
                echo         
                '<tr>
                    <td>'.$tk_id.'</td>
                    <td>'.$tk_name.'</td>
                    <td>'.$tk_pass.'</td>
                    <td>'.$tk_email.'</td>
                    <td>'.$tk_address.'</td>
                    <td>'.$tk_tel.'</td>
                    <td>'.$tk_role.'</td>
                </tr>';
                    }
                ?>
             <!-- <td> <a href="'.$edit_tk.'"><input type="button" value="Sửa"></a> | <a href="'.$delete_tk.'"> <input type="button" value="Xóa"></a> </td> -->
            </table>
        </div>
        <!-- <div class="row mb10">
            <input type="button" name="" id="" value="Chọn tất cả">
            <input type="button" name="" id="" value="Bỏ chọn tất cả">
            <input type="button" name="" id="" value="Xóa các mục đã chọn">
            <a href="#"><input type="button" name="" id="" value="Nhập Thêm"></a>
        </div> -->
    </div>
</div>