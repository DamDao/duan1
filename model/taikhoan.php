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

// function check_role($user) {
//     $sql = "SELECT * FROM tai_khoan WHERE tk_name='$user'";
//     $result = pdo_query_one($sql);
//     // var_dump($result);die;
//     if ($result !== false) {
//         return $result['tk_role'];
//     } else {
//         // Trả về một giá trị mặc định hoặc thông báo lỗi
//         return "Role not found";
//     }
// }


function check_role($username)
{
    $sql = "select * from tai_khoan where tk_name='$username'";
    $result = pdo_query_one($sql);
    // var_dump($result);die;
    return $result['tk_role'];
}

function check_user($user, $pass)
{
    $sql = "SELECT * FROM tai_khoan WHERE tk_name='$user' AND tk_pass='$pass'";
    $check = pdo_query_one($sql);
    return $check;
}

function check_email($email)
{
    // $iddm = $_GET['id'];
    $sql = "SELECT * FROM tai_khoan WHERE tk_email='$email'";
    $check = pdo_query_one($sql);
    return $check;
}
// function account_adm($user, $pass)
// {
//     $sql = "SELECT * FROM `tai_khoan` where `tk_name`='$user' and `tk_pass`='$pass'and `tk_role`=1";
//     $result = pdo_query_one($sql);
//     if ($result) {
//         $_SESSION['admin'] = $user;
//         header("location:index.php");
//     } else {
//         $_SESSION['check_valid'] = 'Tài Khoản Hoặc Mật Khẩu Không Đúng';
//     }
//     // return $result;
// }
function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "UPDATE `tai_khoan` SET  `tk_name`= '$user', `tk_pass`= '$pass', `tk_email`= '$email', `tk_address`= '$address', `tk_tel`= '$tel' WHERE `tk_id`=" . $id;
    pdo_execute($sql);
}
function delete_tk($tk_id)
{
    $sql = "DELETE FROM tai_khoan WHERE `tai_khoan`.`tk_id` = $tk_id";
    pdo_execute($sql);
}
?>