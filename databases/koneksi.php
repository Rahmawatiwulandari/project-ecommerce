<?php
        $host='localhost';
        $user='root';
        $pass='';
        $db  ='db_kitchentools';

        $koneksi = mysqli_connect($host, $user, $pass, $db);
// if ($koneksi) {
//     echo 'berhasil';
// }else{
//     echo $koneksi;
// }
mysqli_select_db($koneksi, $db);
?>