<?php
ob_start();
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
include "../../model/taikhoan.php";

$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
$list_taikhoan = loadall_taikhoan();

// var_dump($idpro);
// die;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
    .binhluan table {
        width: 90%;
        margin-left: 5%;
    }

    .binhluan table td:nth-child(1) {
        width: 50%;
    }

    .binhluan table td:nth-child(2) {
        width: 20%;
    }

    .binhluan table td:nth-child(3) {
        width: 30%;
    }
</style>

<body>

    <div class="frm_bl">
        <div class="box_title">
            <h3>BÌNH LUẬN</h3>
        </div>
        <div class="box_content2 menu_doc binhluan">
            <table>

                <?php
                echo ' <tr>
                <th>Nội dung</th>
                <th>User</th>
                <th>Thời gian</th>
        
            </tr>';
            $dsbl = loadall_binhluan($idpro);
            foreach ($dsbl as $bl) {
                    extract($bl);
                    // var_dump($bl);
                    // die();
                    if (isset($_SESSION['user'])) {
                        $idusere = $tk_name;
                        echo '<tr><td>' . $noidung . '</td>';
                        echo '<td>' . $idusere . '</td>';
                        echo '<td>' . $ngaybinhluan . '</td></tr>';
                    }else {
                        $idusere = $tk_name;
                        echo '<tr><td>' . $noidung . '</td>';
                        echo '<td>' . $idusere . '</td>';
                        echo '<td>' . $ngaybinhluan . '</td></tr>';
                        // echo "Đăng nhập để bình luận";
                    }
                }
                ?>
            </table>
        </div>
        <div class="box_footer sear_box">
            <form class="box_bl" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<input type="text" name="noidung" id="" placeholder="Nhập nội dung bình luận">
                        <input type="submit" name="gui_bl" value="Gửi bình luận" id="">';
                } else {
                    echo "Đăng nhập để bình luận sản phẩm";
                }
                ?>
            </form>
        </div>

        <?php

        if (isset($_POST['gui_bl']) && $_POST['gui_bl']) {
            if ($_POST['noidung'] !='') {
                $noidung = $_POST['noidung'];
                $idpro = $_POST['idpro'];
                $iduser = $_SESSION['user']['tk_id'];
                $ngaybinhluan = date('h:i:sa d/m/Y');
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                header("Location:" . $_SERVER['HTTP_REFERER']);
            }
            else {
                header("Location:" . $_SERVER['HTTP_REFERER']);
            }
        }
        ?>
    </div>

</body>

</html>