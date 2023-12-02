<?php
ob_start();
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/cart.php";


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
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                // var_dump($onesp);
                $spcl = load_spcl($id, $dm_id);

                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
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
                    $thongbao = "Tài khoản đã tồn tại";
                } else {
                    insert_taikhoan($user, $pass, $email, $tel, $address);
                    $thongbao = "Đã đăng ký thành công vui lòng đăng nhập để thực hiện các chức năng";
                    header("Location:index.php?act=index.php");
                }
            }
            include "view/account/register.php";
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
            include "view/account/login.php";
            break;
        case 'update_act':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($tk_id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = check_user($user, $pass);
                header("Location:index.php?act=dangnhap");
            }
            include "view/account/update_act.php";
            break;

            case 'addtocart':
                if (isset($_POST['addtocart'])) {
                    if (isset($_SESSION['user'])) {
                        $idsp = $_POST['idsp'];
                        $namesp = $_POST['namesp'];
                        $img = $_POST['img'];
                        $price = $_POST['price'];
                        $soluong = $_POST['amount'];
            
                        // Kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
                        $product_exists = false;
                        foreach ($_SESSION['my_cart'] as &$item) {
                            if ($item[0] == $idsp) {
                                $item[4] += $soluong; // Tăng số lượng
                                $item[5] = $item[4] * $item[3]; // Cập nhật thành tiền
                                $product_exists = true;
                                break;
                            }
                        }
            
                        // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới
                        if (!$product_exists) {
                            $thanhtien = $price * $soluong;
                            $spadd = [$idsp, $namesp, $img, $price, $soluong, $thanhtien];
                            array_push($_SESSION['my_cart'], $spadd);
                        }
            
                        // echo "<pre>";
                        // var_dump($_SESSION['my_cart']);
                        // die;
                    } else {
                        echo "<h2>Vui lòng đăng nhập trước nhập để thêm sản phẩm vào giỏ hàng - <a href='?act=dangnhap'>Đăng nhập ngay!!!</a></h2>";
                    }
                }
            include 'view/cart/viewcart.php';
                break;
            

        // case 'addtocart':
        //     if (isset($_POST['addtocart'])) {
        //         if (isset($_SESSION['user'])) {
        //             $idsp = $_POST['idsp'];
        //             $namesp = $_POST['namesp'];
        //             $img = $_POST['img'];
        //             $price = $_POST['price'];
        //             $soluong = $_POST['amount'];
        //             // $sp_soluong = $_POST['soluong']-$_POST['amount'];
        //             $thanhtien = $price * $soluong;
        //             $spadd = [$idsp, $namesp, $img, $price, $soluong, $thanhtien];
        //             array_push($_SESSION['my_cart'], $spadd);
        //             // echo "<pre>";
        //             // var_dump($_SESSION['my_cart']);
        //             // die;
        //         } else {
        //             echo "<h2> Vui lòng đăng nhập trước nhập để thêm sản phẩm vào giỏ hàng - " . "<a href='?act=dangnhap'>Đăng nhập ngay!!!</a></h2>";
        //         }
        //     }

        //     include 'view/cart/viewcart.php';

        //     break;

        case 'delete_cart':
            if (isset($_GET['cart_id'])) {
                // unset($_SESSION['cart']);
                // if (isset($_SESSION['my_cart'][$_GET['cart_id']])) {
                // unset($_SESSION['my_cart'][$_GET['cart_id']]);
                array_splice($_SESSION['my_cart'], $_GET['cart_id'], 1);
                // }
                include "view/cart/viewcart.php";
            }
            header("location:index.php?act=addtocart");
            break;

        case 'bill':
            if (isset($_SESSION['user']) && ($_SESSION['my_cart'] != [])) {

                include "view/cart/bill.php";
            } else {
                echo "<h2>Đăng nhập và thêm sản phẩm vào giỏ hàng để tiếp tục thanh toán</h2>";
                include "view/cart/viewcart.php";
            }
            break;

        case 'confirmbill':
            if (isset($_POST['gui']) && ($_POST['gui'])) {
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['tk_id'];
                } else {
                    $id = 0;
                }
                $name = $_POST['userbuy'];
                $email = $_POST['email'];
                $address = $_POST['diachi'];
                $tel = $_POST['std'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongtien();

                // tao bill
                $idbill = insert_bill($name, $address, $tel, $email, $pttt, $tongdonhang, $ngaydathang, $tk_id);

                foreach ($_SESSION['my_cart'] as $cart) {
                    // echo "<pre>";
                    // var_dump ($cart);
                    // die;
                    insert_cart($cart[0], $_SESSION['user']['tk_id'], $idbill, $cart[1], $cart[3], $cart[4], $cart[5], $cart[2]);
                }
                $_SESSION['my_cart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            // var_dump($billct);
            // die;
            include 'view/cart/ctbill.php';
            break;

        case 'mybill':
            if (isset($_SESSION['user'])) {
                $listbill = loadall_bill($_SESSION['user']);
                // $listbillct = loadall_bill(0);
                // echo '<pre>';
                // var_dump($listbillct);
                //    die;
                include 'view/cart/mybill.php';
            } else {
                echo "   <h2>Bạn chưa có đơn hàng nào!</h2>";
            }
            break;

        case 'ls_bill':
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $idbill = $_GET['id'];
                $listbillct = loadall_billct($idbill,1);
            }
            include "view/cart/lsbill.php";
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