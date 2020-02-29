<?php

include 'connection.php';

// /////////////// GET Category <select> Modal ADD, EDIT
$queryResultCategory = $connect -> query('SELECT * FROM category');
$resultCategory = array();
//pecah data array
while ($fetchData = $queryResultCategory -> fetch_assoc()) {
    $resultCategory[] = $fetchData;
}
//data result akan tertampung ke client
echo json_encode($resultCategory);


?>