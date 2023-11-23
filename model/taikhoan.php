<?php
function insert_taikhoan($user, $pass, $email, $tel, $address)
{
    $sql = "INSERT INTO `tai_khoan` (`tk_name`, `tk_pass`, `tk_email`, `tk_tel`, `tk_address`) VALUES('$user','$pass','$email', '$tel', '$address')";
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "SELECT * FROM tai_khoan ORDER BY tk_id DESC";
    $list_tk = pdo_query($sql);
    return $list_tk;
}

function check_user($user, $pass)
{
    $sql = "SELECT * FROM tai_khoan WHERE tk_name='$user' AND tk_pass='$pass'";
    $check = pdo_query_one($sql);
    
    return $check;
}
function login_admin($user, $pass)
{
    $sql = "select * from tai_khoan where tk_name='$user' and tk_pass='$pass' and role = 1";
    $result = pdo_query_one($sql);
    if ($result) {
        $_SESSION['useradmin'] = $user;
        header("location:index.php");
    } else {
        // $_SESSION['valid_tkmk'] = 'Tài Khoản Hoặc Mật Khẩu Không Đúng';
    }
}
function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "UPDATE `tai_khoan` SET  `tk_name`= '$user', `tk_pass`= '$pass', `tk_email`= '$email', `tk_address`= '$address', `tk_tel`= '$tel' WHERE `tk_id`=" . $id;
    pdo_execute($sql);
}
 ?>