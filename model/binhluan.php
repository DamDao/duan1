<?php
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan)
    {
        $sql = "INSERT INTO binh_luan(bl_noidung,tk_id,sp_id,bl_ngaybl) VALUES('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadall_binhluan($idpro)
{
    $sql = "SELECT * FROM binh_luan WHERE 1";
    if ($idpro>0) {
        $sql.=" AND sp_id='$idpro'";
    }
    $sql.=" ORDER BY bl_id DESC";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}
function delete_binhluan($id)
{
    $sql = "DELETE FROM binh_luan WHERE bl_id=" . $id;
    pdo_execute($sql);
}

?>