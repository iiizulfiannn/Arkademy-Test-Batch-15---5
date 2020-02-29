<?php

$connect = new mysqli('localhost', 'root', '', 'posdb');
if (!$connect) {
    echo 'koneksi gagal';
    exit();
}

?>