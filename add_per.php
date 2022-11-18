<?php

require_once 'config.php';
date_default_timezone_set('America/Argentina/Jujuy');
$fecha_actual=("Y-m-d h:i:s");

if (!empty($_POST)) {
  	$sp = $_POST['sp'];
        $tll = $_POST['tll'];

  	$sql = 'INSERT INTO form(sp, tll) VALUES (:sp, :tll)';
  	$query = $conn->prepare($sql);
  	$query->execute([
  		'sp' => $sp,
  		'tll' => $tll
  	]);
  }  

  header('Location:emergencias.php');
?>