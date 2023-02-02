<?php
    session_start();
    // Souvent on identifie cet objet par la variable $conn ou $db
    $mysqlConnection = new PDO(
        'mysql:host=localhost;dbname=the_sense;charset=utf8',
        'root',
        'root'
    );
    $mysqlConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>