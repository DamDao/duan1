<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
    $sql = "INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) VALUES('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro)
{
    $sql = "SELECT * FROM binhluan WHERE 1";
    if ($idpro > 0) {
        $sql .= " AND idpro='$idpro'";
    }
    $sql .= "ORDER BY id DESC";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}
// function loadall_binhluan($idpro)
// {
//     $sql = "SELECT binhluan.*, tai_khoan.tk_name 
//     FROM binhluan 
//     LEFT JOIN tai_khoan ON binhluan.iduser = tai_khoan.tk_id 
//     WHERE 1";
//         if ($idpro > 0) {
//         $sql .= " AND idpro='$idpro'";
//     }
//     $sql .= "ORDER BY id DESC";
//     $list_binhluan = pdo_query($sql);
//     return $list_binhluan;
// }
function delete_binhluan($id)
{
    $sql = "DELETE FROM binhluan WHERE id=" . $id;
    pdo_execute($sql);
}
// function get_all_binhluan()
// {
//     $sql = "select distinct binhluan.idpro, sanpham.sp_name, binhluan.noidung, taikhoan.tk_name, binhluan.ngaybinhluan from sanpham 
//     join binhluan on binhluan.idpro=sanpham.sp_id
//     join taikhoan on binhluan.iduser=taikhoan.tk_id GROUP BY sanpham.sp_name";
//     $result = pdo_query_all($sql);
//     return $result;
// }

?>