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



function check_role($username)
{
    $sql = "select * from tai_khoan where tk_name='$username'";
    $result = pdo_query_one($sql);
    // var_dump($result);die;
    return $result['tk_role'];
}

function check_user($user, $pass,$email)
{
    $sql = "SELECT * FROM tai_khoan WHERE tk_name='$user' AND tk_pass='$pass'";
    if ($email!="") {
        $sql.= " AND tk_email='$email'";
    }
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