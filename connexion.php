<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=test2',
    'root',
    'root',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    )
);

?>