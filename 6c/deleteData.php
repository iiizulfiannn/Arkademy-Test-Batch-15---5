<?php

include 'connection.php';

$id = $_POST['id'];
$queryResult = $connect -> query("DELETE FROM product WHERE id=".$id);

if ($queryResult) {
    $result['message'] = 'Data '.$result['name'].' berhasil dihapus';
}

echo json_encode($result);

?>