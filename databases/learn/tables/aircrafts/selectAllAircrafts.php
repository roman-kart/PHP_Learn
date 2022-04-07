<?php
    $pdo = require_once '../../../../connect.php';
    $sql = $pdo->prepare("SELECT * FROM aircrafts");
    $sql->execute();
    $result = $sql->fetchAll();
?>