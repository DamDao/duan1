

<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
// include "model/taikhoan.php";
// include "model/cart.php";


include "view/header.php";
// include "view/sanpham.php";
include "global.php";

if (!isset($_SESSION['my_cart']))
    $_SESSION['my_cart'] = [];


$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
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
            case 'spyt':
            
                include "view/spyt.php";
                break;
        // case 'sanphamct':

        //     if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
        //         $id = $_GET['idsp'];
        //         $onesp = loadone_sanpham($id);
        //         extract($onesp);
        //         $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
        //         include "view/sanphamct.php";
        //     } else {
        //         include "view/home.php";
        //     }
        //     break;
        // case 'dangky':
        //     if (isset($_POST['dangky']) && ($_POST['dangky'])) {
        //         $email = $_POST['email'];
        //         $user = $_POST['user'];
        //         $pass = $_POST['pass'];
        //         insert_taikhoan($user, $pass, $email);
        //         $thongbao = "Đã đăng ký thành công vui lòng đăng nhập để thực hiện các chức năng";

        //     }
        //     include "view/taikhoan/dangky.php";
        //     break;
        // case 'dangnhap':
        //     if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        //         $user = $_POST['user'];
        //         $pass = $_POST['pass'];
        //         $check_user = check_user($user, $pass);

        //         if (is_array($check_user) && ($check_user['role'] == 0)) {
        //             $_SESSION['user'] = $check_user;
        //             header('Location:index.php');
        //             // $thongbao = "Bạn đã đăng nhập thành công";
        //         } else if (is_array($check_user) && ($check_user['role'] != 0)) {
        //             header('Location:admin/index.php');
        //         } else {
        //             $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra lại user or pass";
        //             # code...
        //         }
        //     }
        //     include "view/taikhoan/dangky.php";
        //     break;
        // case 'edit_taikhoan':
        //     if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        //         $user = $_POST['user'];
        //         $pass = $_POST['pass'];
        //         $email = $_POST['email'];
        //         $address = $_POST['address'];
        //         $tel = $_POST['tel'];
        //         $id = $_POST['id'];

        //         update_taikhoan($id, $user, $pass, $email, $address, $tel);
        //         $_SESSION['user'] = check_user($user, $pass);
        //         header('Location:index.php');
        //     }
        //     include "view/taikhoan/edit_taikhoan.php";
        //     break;
        // case 'quenmk':
        //     if (isset($_POST['gui_email']) && ($_POST['gui_email'])) {
        //         $email = $_POST['email'];
        //         $check_email = check_email($email);
        //         if (is_array($check_email)) {
        //             $thongbao = "Mật khẩu của bạn là" . $check_email['pass'];
        //         } else {
        //             $thongbao = "Email này không tồn tại";
        //         }
        //     }
        //     include "view/taikhoan/quenmk.php";
        //     break;

        // case 'dangxuat':
        //     session_unset();
        //     header('Location:index.php');
        //     break;
        // case 'gioithieu':
        //     include "view/gioithieu.php";
        //     break;
        // case 'add_cart':

        //     if (isset($_POST['add_cart']) && ($_POST['add_cart'])) {
        //         if (isset($_SESSION['user']) && ($_SESSION['user'])) {
        //             $id = $_POST['id'];
        //             $name = $_POST['name'];
        //             $img = $_POST['img'];
        //             $price = $_POST['price'];
        //             $soluong = 1;
        //             $thanhtien = $price * $soluong;
        //             $sp_add = [$id, $name, $img, $price, $soluong, $thanhtien];
        //             array_push($_SESSION['my_cart'], $sp_add);
        //         } else {
        //             echo "<h1>Đăng nhập để đặt hàng</h1>";
        //             include "view/cart/viewcart.php";
        //         }

        //     }
        //     include "view/cart/viewcart.php";
        //     break;
        // case 'delete_cart':
        //     if (isset($_GET['idcart'])) {
        //         array_splice($_SESSION['my_cart'], $_GET['idcart'], 1);

        //     } else {
        //         $_SESSION['my_cart'] = [];
        //     }
        //     // include "view/cart/viewcart.php";
        //     header("Location:index.php?act=add_cart");
        //     break;
        // case 'bill':
        //     if (isset($_SESSION['user']) && ($_SESSION['my_cart'] != [])) {

        //         include "view/cart/bill.php";
        //     } else {
        //         echo "<h1>Đăng nhập và thêm sản phẩm vào giỏ hàng để tiếp tục thanh toán</h1>";
        //         include "view/cart/viewcart.php";
        //     }
        //     break;

        // case 'dongydathang':
        //     if (isset($_POST['dongydathang'])) {

        //         header("Location:index.php");
        //     }
        //     echo "ĐƠN HÀNG CỦA BẠN ĐÃ ĐƯỢC TẠO THÀNH CÔNG MỜI BẠN TIẾP TỤC MUA SẮM";
        //     include "view/gioithieu.php";
        //     break;
        // case 'gioithieu':
        //     include "view/gioithieu.php";
        //     break;
        // case 'lienhe':
        //     include "view/gopy.php";
        //     break;
        // case 'gopy':
        //     if (isset($_POST['btn_gopy']) && ($_POST['btn_gopy'])) {
        //         if (($_POST['gopy']) != '') {
        //             $thongbao = "Cảm ơn đã góp ý giúp chúng tôi phát triển hơn";
        //         } else {
        //             $thongbao = "Mời nhập ý kiến của để gửi đến chúng tôi";
        //         }
        //     }
        //     // var_dump($_POST['btn_gopy']);
        //     include "view/gopy.php";
        //     break;
        // case 'hoidap':
        //     include "view/gopy.php";
        //     break;

        default:
            # code...
            break;
    }
} else {
    # code...
    include "view/home.php";
}
include "view/footer.php";


?>