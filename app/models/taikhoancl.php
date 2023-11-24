<?php
function insert_tai_khoan($ten_dang_nhap, $mat_khau, $sdt, $email){
    $sql = "INSERT INTO `tb_tai_khoan`(`ten_dang_nhap`, `mat_khau`, `sdt`, `email`) VALUES
     ('$ten_dang_nhap', '$mat_khau', '$sdt', '$email');";
    pdo_execute($sql);
}
?>