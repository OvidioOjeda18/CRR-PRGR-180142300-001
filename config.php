<?php

$host = 'mysql:host=localhost;dbname=olimp';
$user = 'root';
$password = '';
try {
  $conn = new PDO($host, $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo"Falló en la conexión : ". $e->getMessage();
}

?>

