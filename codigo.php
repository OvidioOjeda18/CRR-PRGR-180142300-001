<?php
include ('laycults/header.php');
require_once 'config.php';
$queryResult = $conn->query('SELECT * FROM form');
?>
<div class="azul">
<a id="boton" class="boton" href="emergencias.php" onclick="myFunction()">BOTÓN AZUL</a>

<script>
function myFunction() {
  alert("CÓDIGO AZUL se solicita el Quirófano N°2!!!");
}
</script>
</div>
<?php
include ('laycults/footer.php');
?>