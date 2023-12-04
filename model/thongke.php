<?php

function loadall_thongke()
{
    $sql = "SELECT danh_muc.dm_id as madm, danh_muc.dm_name as tendm, COUNT(san_pham.sp_id) as countsp,MIN(san_pham.sp_price) as minprice,MAX(san_pham.sp_price) as maxprice, AVG(san_pham.sp_price) as avgprice";
    $sql .= " FROM san_pham left JOIN danh_muc ON danh_muc.dm_id=san_pham.dm_id";
    $sql .= " GROUP BY danh_muc.dm_id ORDER BY danh_muc.dm_id DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}
// Function để lấy tổng doanh thu
function getTotalRevenue()
{
    try {
        // Truy vấn SQL để tính tổng doanh thu từ bảng cart
        $sql = "SELECT SUM(cart_thanhtien) AS total_revenue FROM cart";

        // Thực thi truy vấn và lấy kết quả
        $result = pdo_query_one($sql);

        return $result['total_revenue']; // Trả về tổng doanh thu
    } catch (PDOException $e) {
        // Xử lý lỗi nếu có
        return 0;
    }
}

function getRevenueByProduct()
{
    $sql = "SELECT san_pham.sp_id, san_pham.sp_name, SUM(cart_thanhtien) AS total_revenue, COUNT(*) AS total_purchases
            FROM cart
            JOIN san_pham ON cart.sp_id = san_pham.sp_id
            GROUP BY sp_id, sp_name";

    return pdo_query_all($sql);
}

function getRevenueByCategory()
{
    $sql = "SELECT danh_muc.dm_id, danh_muc.dm_name, SUM(cart_thanhtien) AS total_revenue
            FROM cart
            JOIN san_pham ON cart.sp_id = san_pham.sp_id
            JOIN danh_muc ON san_pham.dm_id = danh_muc.dm_id
            GROUP BY dm_id, dm_name";

    return pdo_query_all($sql);
}
?>