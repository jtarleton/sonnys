<?php

use PDO;
$dbh = new PDO();
$stmt = $dbh->prepare('INSERT INTO order (id, order_no, created_date) VALUES (:id, :order_no, :created_date)');
$stmt->bindValue('id', $id);
$stmt->bindValue('order_no', $order_no);
$stmt->bindValue('created_date', $created_date);
$stmt->execute();

