<?php

include 'connection.php';

/////////////// GET Tabel Halaman Utama
$queryResultProduct = $connect -> query('SELECT product.id AS productId, product.name AS productName, product.price AS productPrice, cashier.name AS cashierName, category.name AS categoryName FROM product INNER JOIN cashier ON product.id_cashier = cashier.id INNER JOIN category ON product.id_category = category.id ORDER BY product.id ASC');
$resultProduct = array();
//pecah data array
while ($fetchData = $queryResultProduct -> fetch_assoc()) {
    $resultProduct[] = $fetchData;
}
//data result akan tertampung ke client
echo json_encode($resultProduct);

?>