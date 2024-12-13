<?php
     $db_host = "localhost"; 
     $db_user = "root";
     $db_password = ""; 
     $db_base = 'use';
     $db_table = "users"; 
    try {
        $connection = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>