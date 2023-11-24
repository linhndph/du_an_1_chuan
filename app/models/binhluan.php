<?php
function loadAllBL()
{
    $sql = "SELECT * FROM tb_binh_luan ORDER BY id_binh_luan ";
    $listbl = pdo_query($sql);
    return $listbl;
}
function ds_bl_inner()
{

    $sql = "SELECT * FROM tb_binh_luan
    join tb_tai_khoan on tb_binh_luan.id_tai_khoan=tb_tai_khoan.id_tai_khoan
    join tb_san on tb_binh_luan.id_san=tb_san.id_san";
    $listtk = pdo_query($sql);
    return $listtk;
}

?>
