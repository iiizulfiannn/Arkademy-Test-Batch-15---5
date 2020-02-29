<?php

include 'connection.php';

// /////////////// GET Cashier <select> Modal ADD, EDIT
$queryResultCashier = $connect -> query('SELECT * FROM cashier');
$resultCashier = array();
//pecah data array
while ($fetchData = $queryResultCashier -> fetch_assoc()) {
    $resultCashier[] = $fetchData;
}
//data result akan tertampung ke client
echo json_encode($resultCashier);


?>