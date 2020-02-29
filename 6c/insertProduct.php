<?php

include 'connection.php';

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
    $queryResult = $connect -> query("INSERT INTO product (name,price,id_category,id_cashier) VALUES ('".$name."','".$price."','".$id_category."','".$id_cashier."')");
}

if ($queryResult) {
    $result['message'] = 'Data '+$name+' berhasil di tambahkan';
} else {
    $result['message'] = 'Gagal di tambahkan';
}

echo json_encode($result);

?>