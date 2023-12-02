<?php

function loadall_thongke(){
    $sql= "SELECT danh_muc.dm_id as madm, danh_muc.dm_name as tendm, COUNT(san_pham.sp_id) as countsp,MIN(san_pham.sp_price) as minprice,MAX(san_pham.sp_price) as maxprice, AVG(san_pham.sp_price) as avgprice";
    $sql.= " FROM san_pham left JOIN danh_muc ON danh_muc.dm_id=san_pham.dm_id";
    $sql.= " GROUP BY danh_muc.dm_id ORDER BY danh_muc.dm_id DESC";
    $listtk=pdo_query($sql);
    return $listtk;
}

?>