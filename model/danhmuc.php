<?php
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danh_muc(dm_name) VALUES('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = "DELETE FROM danh_muc WHERE dm_id=" . $id;
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "SELECT * FROM danh_muc ORDER BY dm_id DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id)
{
    // $iddm = $_GET['id'];
    $sql = "SELECT * FROM danh_muc WHERE dm_id=" . $id;
    $danhmuc = pdo_query_one($sql);
    return $danhmuc;
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT * FROM danh_muc WHERE dm_id=" . $iddm;
        $danhmuc = pdo_query_one($sql);
        extract($danhmuc);
        return $dm_name;
    } else {
        return "";
    }

}
function update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE danh_muc SET dm_name= '$tenloai' WHERE dm_id=" . $id;
    pdo_execute($sql);
}
?>