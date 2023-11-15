<div class="row">
    <div class="row ">
        <h2 class="tieude">DANH MỤC SẢN PHẨM</h2>
    </div>
    <div class="row frm_content">
        <div class="frm_dm">
            <table>
                <tr>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $editdm = "index.php?act=editdm&id=" . $dm_id;
                    $deletedm = "index.php?act=deletedm&id=" . $dm_id;
                    echo
                        '<tr>
                    <td>' . $dm_id . '</td>
                    <td>' . $dm_name . '</td>
                    <td> <a href="' . $editdm . '"><i class="fa-regular fa-pen-to-square fa-fade fa-xl" style="color: #20365a;"></i></a> | <a href="' . $deletedm . '"><i class="fa-solid fa-trash fa-fade fa-xl" style="color: #020c1d;"></i></a> </td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb10">
         
            <a href="index.php?act=adddm"><input class="add_css" type="button" name="" id="" value="Nhập Thêm"></a>
        </div>
    </div>
</div>


