<?php
require __DIR__ . '/parts/__connect_db.php';

$stmt = $pdo->query('SELECT*FROM address_book');
// $row =  $stmt->fetch();
// echo json_encode($row);

while ($row = $stmt->fetch()) {
    echo "{$row['sid']} -- {$row['address']}<br>";
}
