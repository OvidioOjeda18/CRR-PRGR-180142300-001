<?php
require_once 'config.php';
date_default_timezone_set('America/Argentina/Jujuy');
$fecha_actual=("Y-m-d h:i:s");

if (!empty($_POST)) {
  	$dni = $_POST['dni'];
    $edad = $_POST['edad'];
    $ape = $_POST['ape'];
    $nom = $_POST['nom'];
    $sexo = $_POST['sexo'];
    $gs = $_POST['gs'];

  	$sql = 'INSERT INTO fichasp(dni, edad, ape, nom, sexo, gs) VALUES (:dni, :edad, :ape, :nom, :sexo, :gs)';
  	$query = $conn->prepare($sql);
  	$query->execute([
  		'dni' => $dni,
        'edad' => $edad,
        'ape' => $ape,
        'nom' => $nom,
        'sexo' => $sexo,
        'gs' => $gs
  	]);
  }  

  header('Location:estadisticas.php');
?>
