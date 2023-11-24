<?php
include "../models/bienthe.php";
include "../models/ql_san.php";
include "../models/pdo.php";
include "../models/tintuc.php";
include "../models/taikhoancl.php";
include "../models/danhmuc.php";


$listdm = loadAll();

include "../views/Client/layout/header.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangnhap':
            include '../views/Client/taikhoan/sign-in.php';
            break;

        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $ten_dang_nhap = $_POST['ten_dang_nhap'];
                $mat_khau = $_POST['mat_khau'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];

                insert_tai_khoan($ten_dang_nhap, $mat_khau, $sdt, $email);
                $thongbao = "Đã đăng kí thành công";
            }
            include '../views/Client/taikhoan/sign-up.php';
            break;
        case 'lienhe':
            include '../views/Client/lienhe.php';
            break;
        case 'listsan5':
            $listbienthe = ds_san_inner();
            include '../views/Client/listsan5.php';
            break;
        case 'listsan7':
            $listbienthe = ds_san_inner();
            include '../views/Client/listsan7.php';
            break;
        case 'listsan9':
            $listbienthe = ds_san_inner();
            include '../views/Client/listsan9.php';
            break;
        case 'listsan11':
            $listbienthe = ds_san_inner();
            include '../views/Client/listsan11.php';
            break;
        case 'chitietsan':
            if (isset($_GET['id_san']) && $_GET['id_san'] > 0) {
                $id_san = $_GET['id_san'];
                $chitietsan = loadone_SAN_BT($id_san);

            }
            include '../views/Client/chitietsan.php';
            break;
        case 'san':
            if (isset($_POST['listok'])) {
                $tukhoa = $_POST['tukhoa'];
                echo $tukhoa;
                $listsanClient = loadAll_sanClient($tukhoa);
                include '../views/Client/san.php';
                break;
            } else {
                $tukhoa = "";
            }

            $listsanClient = ds_san_inner();
            include '../views/Client/san.php';
            break;
        case 'sancungloai':
            if (isset($_GET['id_san']) && $_GET['id_san'] > 0) {
                $id_san = $_GET['id_san'];
                $listsan_cungloai = loadOne_SAN_CUNGLOAI($id_san, $id_danh_muc);

            }
            $listsanClient = ds_san_inner();
            include '../views/Client/chitietsan.php';
            break;
        case 'danhsachtintuc':
            if (isset($_POST['listok'])) {
                $tukhoa = $_POST['tukhoa'];
                $dstintuc = loadAll_tintuchaha($tukhoa);
                include '../views/Client/danhsachtintuc.php';
                break;
            }
            $dstintuc = loadall_tintuc();
            include '../views/Client/danhsachtintuc.php';
            break;
        case 'chitiettintuc':
            if (isset($_GET['id_tin_tuc']) && ($_GET['id_tin_tuc'] > 0)) {
                $id_tin_tuc = $_GET['id_tin_tuc'];
                $tt = loadOne_tin_tuc($id_tin_tuc);
            }
            include '../views/Client/chitiettintuc.php';
            break;

        default:
            include '../views/Client/layout/index.php';
            break;

    }
} else {
    include '../views/Client/layout/index.php';
}
include '../views/Client/layout/footer.php';
?>