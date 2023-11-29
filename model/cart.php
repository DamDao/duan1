<?php

function viewcart($del)
{
  echo '
  <thead>
            <tr class="text-center">
                <th style="border-bottom: 2px solid green;" scope="col">STT</th>
                <th style="border-bottom: 2px solid green;" scope="col">Sản phẩm</th>
                <th style="border-bottom: 2px solid green;" scope="col">Đơn giá</th>
                <th style="border-bottom: 2px solid green;" scope="col">Số lượng</th>
                <th style="border-bottom: 2px solid green;" scope="col">Thành tiền</th>
            </tr>
        </thead>
        <tbody>
  ';
  $stt = 1;
  $cart_id = 0;
  $tong = 0;
  foreach ($_SESSION['my_cart'] as $value) {
    // var_dump($_SESSION['my_cart']);
    // var_dump($value[4] * $value[3]);
    // die();
    $thanhtien = $value[4] * $value[3];
    $tong += $thanhtien;
    if ($del == 1) {
      $btn_xoa = '<a href="index.php?act=delete_cart&cart_id=' . $cart_id . '"><i class="fa-solid fa-trash fa-fade fa-lg"></i>';
    } else {
      $btn_xoa = '';
    }
    echo '
            <tr class="text-center">
                        <td scope="row">' . $stt . '</td>
                        <td style="padding: 13px;">
                          <img
                            src="' . $value[2] . '"
                            alt=""
                            width="130px"
                          /><br />
                          <span class="font-weight-bold">' . $value[1] . '</span
                          >
                        </td>
                        <td style="padding: 13px;">' . number_format($value[3]) . ' VNĐ</td>
                        <td style="padding: 13px;">' . $value[4] . '</td>                        
                        <td style="padding: 13px;">' . number_format($thanhtien) . ' VNĐ</td>
                        <td style="padding: 13px;">' . $btn_xoa . '</td>
             </tr>';
    $stt += 1;
    $cart_id += 1;
  }
  echo '<tr>
              <td style="padding: 13px;" class="px-4" colspan="4">Tổng tiền sản phẩm: </td>
              <td style="padding: 13px;" class="text-center">' . number_format($tong) . ' VNĐ</td> 
              <td></td> 
          </tr>
          </tbody>';
}


function tongtien()
{
  $tong = 0;
  foreach ($_SESSION['my_cart'] as $value) {
    $thanhtien = $value[4] * $value[3];
    $tong += $thanhtien;
  }
  return $tong;
}

function insert_cart($idpro, $iduser, $idbill, $name, $price, $soluong, $thanhtien, $img)
{
  $sql = "insert into cart(sp_id, tk_id, bill_id, cart_name, cart_price, cart_soluong, cart_thanhtien, cart_img) 
  values($idpro, $iduser, $idbill, '$name', $price, $soluong, $thanhtien, '$img')";
  return pdo_execute($sql);
}
function loadall_cart($id)
{
  $sql = "select * from cart where bill_id=$id";
  $result = pdo_query($sql);
  // $result = pdo_query_all($sql);
  return $result;
}

function loadall_cart_count($id)
{
  $sql = "select * from cart where bill_id=$id";
  $result = pdo_query($sql);
  // $result = pdo_query_all($sql);
  return sizeof($result);
}



function insert_bill($name, $address, $tel, $email, $pttt, $tongdonhang, $ngaydathang, $tk_id)
{
  $sql = "insert into bill(bill_name, bill_diachi,bill_tel,	bill_email,	bill_pttt, bill_tongtien, bill_ngaydat, tk_id)
        values('$name','$address','$tel','$email','$pttt','$tongdonhang','$ngaydathang','$tk_id')";
  return pdo_execute_return_lastInsertId($sql);
}

function loadone_bill($id)
{
  $sql = "select * from bill where bill_id=$id";
  $result = pdo_query_one($sql);
  return $result;
}

function loadall_bill($iduser)
{
  $sql = "select * from bill where 1";
  if ($iduser > 0) {
    // var_dump($iduser);
    $sql .= " and tk_id=".$iduser['tk_id'];
  } else {
    $sql .= "";
  }
  $result = pdo_query($sql);
  // $result = pdo_query_all($sql);
  return $result;
}


// function loadall_bill($iduser)
// {
//   $sql = "SELECT * FROM bill 
//             INNER JOIN cart ON cart.bill_id = bill.bill_id 
//             WHERE 1";

//   if ($iduser > 0) {
//     $sql .= " AND tk_id=" . $iduser; // Chú ý: Sửa $iduser['tk_id'] thành $iduser nếu $iduser chứa giá trị tk_id.
//   } else {
//         $sql .= "";
//       }

//   $result = pdo_query($sql);
//   return $result;
// }


// function loadall_bill($iduser)
// {
//   if (is_array($iduser)) {
//   } else {
//     // Xử lý khi $iduser không phải là mảng
//     $sql = "SELECT * FROM bill WHERE 1";
//     if ($iduser > 0) {
//       $sql .= " AND tk_id=" . $iduser;
//     }

//     $result = pdo_query($sql);
//     // $result = pdo_query_all($sql);
//     return $result;
//   }
// }



// function search_bill($idbill)
// {
//   $sql = "select * from bill where bill_id like '%" . $idbill . "%' ";
//   $result = pdo_query_all($sql);
//   return $result;
// }


function bill_chitiet($listbill)
{
  echo '
  <thead>
            <tr class="text-center">
                <th scope="col">STT</th>
                <th scope="col">Sản phẩm</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Thành tiền</th>
            </tr>
        </thead>
        <tbody>
  ';
  $stt = 1;
  $tong = 0;
  foreach ($listbill as $value) {
    // var_dump($value);
    // die();
    $tong += $value['cart_thanhtien'];
    echo '
            <tr class="text-center">
                        <th scope="row">' . $stt . '</th>
                        <td>
                          <img
                            src="' . $value['cart_img'] . '"
                            alt=""
                            width="130px"
                          /><br />
                          <span class="font-weight-bold">' . $value['cart_name'] . '</span
                          >
                        </td>
                        <td>' . number_format($value['cart_price']) . ' VNĐ</td>
                        <td>' . $value['cart_soluong'] . '</td>
                        <td>' . number_format($value['cart_thanhtien']) . ' VNĐ</td>
                      </tr>';
    $stt += 1;
  }
  echo '<tr>
              <td class="px-4" colspan="4">Tổng tiền sản phẩm: </td>
              <td class="text-center">' . number_format($tong) . ' VNĐ</td> 
              <td></td> 
          </tr>
          </tbody>';
}

function trangthai($trangthai)
{
  switch ($trangthai) {
    case '0':
      $m_tt = "Đơn hàng chờ xác nhận";
      break;
    case '1':
      $m_tt = "Đơn hàng đã được xác nhận";
      break;
    case '2':
      $m_tt = "Đơn hàng đang được giao";
      break;
    case '3':
      $m_tt = "Đơn hàng giao thành công";
      break;
  }
  return $m_tt;
}

function update_dh($idbill, $trangthai)
{
  $sql = "update bill set bill_trangthai=$trangthai where bill_id=$idbill";
  pdo_execute($sql);
}

function delete_dh($idbill)
{
  $sql = "delete from bill where bill_id=$idbill";
  pdo_execute($sql);
}









// function insertcart($cart_name, $cart_img, $cart_price, $cart_soluong, $cart_thanhtien)
// {
//     $sql = "INSERT INTO cart(cart_name,cart_img,cart_price,cart_soluong	,cart_thanhtien) VALUES('$cart_name','$cart_img','$cart_price','$cart_soluong','$cart_thanhtien')";
//     pdo_execute($sql);
// }

// function tongdonhang()
// {
//     $tong = 0;

//     foreach ($_SESSION['my_cart'] as $cart) {
//         $thanhtien = $cart[3] * $cart[4];
//         $tong += $thanhtien;
//     }
//     return $tong;
// }


// function loadall_cart($id)
// {
//   $sql = "select * from cart where bill_id=$id";
//   $result = pdo_query_all($sql);
//   return $result;
// }

// function insert_bill($name, $email, $address, $tel, $ngaydathang, $tongdonhang)
// {
//     $sql = "INSERT INTO bill(bill_name,bill_email,bill_address,bill_tel,bill_ngaydat,bill_tongtien) VALUES('$name','$email','$address','$tel','$ngaydathang','$tongdonhang')";
//     pdo_execute($sql);
// }



?>