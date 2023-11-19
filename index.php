<?php
ob_start();
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
// include "model/cart.php";


include "view/header.php";
// include "view/sanpham.php";
include "global.php";

if (!isset($_SESSION['my_cart']))
    $_SESSION['my_cart'] = [];


$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dsspyt = loadall_spyt();
$onespyt = loadone_spyt();
if (isset($_GET['act']) && ($_GET['act'] != 0)) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        // case 'sanphamct':
        //     if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
        //         $id = $_GET['idsp'];
        //         $onesp = loadone_sanpham($id);
        //         extract($onesp);
        //         $sp_cung_loai = load_sanpham_cungloai($id, $dm_id);
        //         include "view/sanphamct.php";
        //     } else {
        //         include "view/home.php";
        //     }
        //     break;
        case 'spyt':

            include "view/spyt.php";
            break;

        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                if ($check_user = check_user($user, $pass)) {
                    echo "Tài khoản đã tồn tại";
                }
                else {
                    
                
                insert_taikhoan($user, $pass, $email, $tel, $address);
                $thongbao = "Đã đăng ký thành công vui lòng đăng nhập để thực hiện các chức năng";
                header("Location:index.php");
                }
            }
            include "view/regis_login/register.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_user = check_user($user, $pass);
                if (is_array($check_user) && ($check_user['tk_role'] == 0)) {
                    $_SESSION['user'] = $check_user;
                    header('Location:index.php');
                } else if (is_array($check_user) && ($check_user['tk_role'] != 0)) {
                    header('Location:admin/index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra lại user or pass";
                    # code...
                }
            }
            include "view/regis_login/login.php";

            break;
        case 'dangxuat':
            session_destroy();
            header('Location:index.php');
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    # code...
    include "view/home.php";
}
include "view/footer.php";


?>