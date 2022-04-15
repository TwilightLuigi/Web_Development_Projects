<?php
    $servername = 'localhost';
    $username = 'sprungl';
    $password = 'LkT6H';
    $dbname = 'sprungl';
    
    try {
        $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }
?>