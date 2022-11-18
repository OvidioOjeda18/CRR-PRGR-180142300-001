<?php

require_once 'config.php';
date_default_timezone_set('America/Argentina/Jujuy');
$fecha_actual=("Y-m-d h:i:s");

if (!empty($_POST)) {
	$quiro = $_POST ['quiro'];
	$btn1 = $_POST['btn1'];

  	$sql = 'INSERT INTO room(quiro, btn1) VALUES (:quiro,:btn1)';
  	$query = $conn->prepare($sql);
  	$query->execute([
		'quiro' => $quiro,
      'btn1' => $btn1

  	]);
  }  

  header('Location:emergencias.php');
?>
