<?php

include 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$id_category = $_POST['id_category'];
$id_cashier = $_POST['id_cashier'];
$result['message'] = '';

if ($name == '') {
    $result['message'] = 'Nama masih kosong';
} elseif ($price == ''){
    $result['message'] = 'Nama masih kosong';
} else {
    $queryResult = $connect -> query("UPDATE product SET name='".$name."', price='".$price."', id_category='".$id_category."', id_cashier='".$id_cashier."' WHERE id='".$id."'");
}

if ($queryResult) {
    $result['message'] = 'Data berhasil di ubah';
} else {
    $result['message'] = 'Gagal di tambahkan';
}

echo json_encode($result);

?>