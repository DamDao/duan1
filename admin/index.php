<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/cart.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "header.php";
// controller

if (!isset($_SESSION['user'])) {
    header("Location:account/login.php");
    // header("Location:index.php");
}
if (isset($_SESSION['user'])) {
    // var_dump($_SESSION['user']);
    if (check_role($_SESSION['user']['tk_name']) == 1) {
        header("location:/index.php");
        die;
    }
}

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // kiểm tra ng dùng có ấn vào add ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                if ($_POST['tenloai'] != '') {
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    // header("Location:index.php?act=listdm");
                    $thongbaor = "Thêm thành công";
                } else {
                    $thongbaor = 'Mời nhập tên danh mục';
                }
            }
            include "danhmuc/add.php";
            break;

        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'deletedm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();

            include "danhmuc/list.php";
            break;
        case 'editdm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $danhmuc = loadone_danhmuc($_GET['id']);
            }
            // $listdanhmuc = loadall_danhmuc();
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat']) && ($_POST['tenloai'] != ' ')) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "cập nhật thành công";
            } else {
                $thongbaor = 'tên rỗng';
            }
            // $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;


        // controller sản phẩm
        // controller sản phẩm

        case 'addsp':
            // kiểm tra ng dùng có ấn vào add ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                if (($_POST['tensp'] != "") && ($_POST['giasp'] != "")) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $soluong = $_POST['soluong'];
                    $tacgia = $_POST['tacgia'];
                    $hinh = $_FILES['hinh']['name'];
                    $dir = "../upload/";
                    $target_file = $dir . basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {

                    } else {

                    }
                    insert_sanpham($tensp, $giasp, $hinh, $tacgia, $mota, $soluong, $iddm);
                    $thongbao = "Thêm thành công";
                } else {
                    $thongbaor = 'Vui lòng nhập tên và giá sản phẩm';

                }

            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $tendm = load_ten_dm($iddm);

            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;

        case 'deletesp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();

            include "sanpham/list.php";
            break;
        case 'editsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $tacgia = $_POST['tacgia'];
                $hinh = $_FILES['hinh']['name'];
                $dir = "../upload/";
                $target_file = $dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file))
                    ;
                $listdanhmuc = loadall_danhmuc();
                // var_dump($_POST);
                update_sanpham($id, $tensp, $giasp, $hinh, $tacgia, $mota, $iddm);
                $thongbao = "cập nhật thành công";

            } else {
                $err = "lỗi";
            }
            $listsanpham = loadall_sanpham("", 0);
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/list.php";
            break;

        case 'dskh':
            $list_taikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;


        case 'dsbl':
            $binh_luan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'delete_binhluan':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $binh_luan = loadall_binhluan(0);
            include "binhluan/list.php";
            // header("Location:list.php");
            break;

        case 'delete_tk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_tk($_GET['id']);
            }
            $list_taikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        // DON HANG
        case 'donhang':
            $listbill = loadall_bill(0);
            $listbillct = loadall_billct(0,0);
            include 'donhang/list-donhang.php';
            break;

        case 'updatedh':
            if (isset($_GET['iddh'])) {
                $dh = loadone_bill($_GET['iddh']);
            }
            if (isset($_POST['updatedh'])) {
                $id = $_POST['iddh'];
                $tt = $_POST['ttdh'];
                update_dh($id, $tt);
                header("location:index.php?act=donhang");
            }
            include 'donhang/edit-donhang.php';
            break;

        case 'deletedh':
            if (isset($_GET['iddh'])) {
                delete_dh($_GET['iddh']);
                header("location:index.php?act=donhang");
            }
            break;

        case 'thongke':
            $list_thongke = loadall_thongke();
            include "thongke/list.php";
            // header("Location:list.php");
            break;

        case 'bieudo':

            $list_thongke = loadall_thongke();
            include "thongke/bieudo.php";
            // header("Location:list.php");
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_user = check_user($user, $pass);
                // if (is_array($check_user) && ($check_user['tk_role'] == 0)) {
                //     $_SESSION['user'] = $check_user;
                //     header('Location:index.php');
                // } 
                if (is_array($check_user) && ($check_user['tk_role'] != 0)) {
                    header('Location:index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra lại user or pass";
                    # code...
                }
            }
            include "account/login.php";
            break;


        case 'dangxuat':
            unset($_SESSION['adm']);
            unset($_SESSION['check_valid']);
            header('Location:../index.php');
            break;
        default:
            include "home.php";
            break;

    }
} else {
    include "home.php";
}

include "footer.php";
?>