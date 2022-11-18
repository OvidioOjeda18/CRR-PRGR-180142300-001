<?php
    include ('laycults/header.php');
    include ('config.php');
    date_default_timezone_set('America/Argentina/Jujuy');
    $fecha_actual=date("d-m-Y  h:i:s");
?>
<h2>Datos de los pacientes</h2>
<?php
  if (!empty($dni = $_POST))
  if (!empty($_POST['dni']))
  {
  if  ($dni = $_POST['dni']) 
      $sql = 'SELECT * FROM  fichasp WHERE dni = :dni';
      $query = $conn->prepare($sql);
      $query->execute([
            'dni' => $dni
        ]);
      $result = $query->fetchAll();   
       
      }
?>
<form action="estadisticas.php" method="POST" class="formulario">
                        <input require name="dni" aria-label="Search" placeholder="Ingrese el DNI del paciente" type="search">
                            <button require class="boton2" type="submit">
                                Buscar
                            </button>
                        </input>
                    </form>
                </div>
            </nav>
        </header>
        <div>
      	<ul>

<?php
        if (!empty($result)) { 
        echo '<li>DNI:' .$result[0]['dni'] . '</li>';
        echo '<li>Edad:' .$result[0]['edad'] . '</li>';
        echo '<li>Apellido:' .$result[0]['ape'] . '</li>';
        echo '<li>Nombre:' .$result[0]['nom'] . '</li>';
        echo '<li>Sexo:' .$result[0]['sexo'] . '</li>';
        echo '<li>Grupo Sangúineo:' .$result[0]['gs'] . '</li>';
        echo '<li>Fecha de Emisión:' .$result[0]['fecha_actual'] . '</li>';


    }
        else {
        echo'<table class="formulario">
            <li>DNI</li>
            <li>Edad</li>
            <li>Apellido</li>
            <li>Nombre</li>
            <li>Sexo</li>
            <li>Grupo Sangúineo</li>
            <li>Fecha de emisión</li>
            </table>';              
        }
?>
		</ul>
        </div>
    </tbody>
    </table>
<form action="add_paci.php" method="POST" enctype="multipart/form-data">
<h2>Ficha del paciente</h2>
<label>DNI:</label><br>
<input type="text" name="dni" require><br><br>
<label>Edad:</label><br>
<input type="text" name="edad" require><br><br>
<label>Apellido:</label><br>
<input type="text" name="ape" require><br><br>
<label>Nombre:</label><br>
<input type="text" name="nom" require><br><br>
<label>Sexo:</label><br>
<select name="sexo">
            <option value="Masculinoi">---</option>
            <option value="Masculinoi">Masculino</option>
            <option value="Fenenimo">Femenimo</option>
        </select><br><br>
<label >Tipo de llamado:</label><br>
        <select name="gs">
            <option value="A">---</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select><br><br>
<label >Fecha de emisión:</label><br>
<input type="datetime" name="fecha" value="<?= $fecha_actual?>" disabled><br><br>
<input type="submit" name="submit" value="Envíar"> 
</form>
<br>


<?php
    include ('laycults/footer.php');
?>