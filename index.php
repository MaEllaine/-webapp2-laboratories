<?php

$host = 'localhost'; 
$db = 'hospital_database'; 
$user = 'root'; 
$password = ""; 

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

    if ($pdo) {
        echo "Connected to the $db database successfully!";

        $sql = 'SELECT * FROM patient_table';
        $statement = $pdo->query($sql);
        $patient_table = $statement->fetchAll(PDO::FETCH_ASSOC);

        echo '<pre>';
        var_dump($patient_table);
        echo '</pre>';
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}