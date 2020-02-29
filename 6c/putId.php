<?php

include 'connection.php';

$id = $_POST['id'];
$result = array();

$queryResult = $connect -> query('SELECT * FROM product WHERE id = '.$id);

$fetchData = $queryResult -> fetch_assoc();

$result = $fetchData;

echo json_encode($result);

?>