<?php
include ('laycults/header.php');

date_default_timezone_set('America/Argentina/Jujuy');
$fecha_actual=date("d-m-Y  h:i:s");
?> 

        <div class="semaforo">
            <spam id="quiro1" class="luces green" color="red"></spam>
            <spam class="luces red" color="green"></spam>
            <spam class="luces green" color="green"></spam>
            <spam class="luces green" color="green"></spam>
        </div>
    <div class="hospital">
            <h3>Quirófano N°1</h3><br>
            <h3>Quirófano N°2</h3><br>
            <h3>Quirófano N°3</h3><br>
            <h3>Quirófano N°4</h3><br>
            <img src="img/HospitalUOCRA.png" alt="Hospital"> 
    </div>
    
<form action="add.php"	method="POST" enctype="multipart/form-data">
    <table class="table">
            <input class ="btn" id="btn" value="Actualizar" type="submit">
        <thead>
            <tr>
                 <th>Quirófanos</th>
                <th>Habilitado</th>
             
            </tr>
        </thead>
            <tr>
                <th>
                    <select value="quiro" id="quiro" name="quiro">
                            <option>---</option>
                            <option value="1">N°1</option>
                            <option value="2">N°2</option>
                            <option value="3">N°3</option>
                            <option value="4">N°4</option>

                </select>
                </th>
                <th>
                <div class="boton">
                    
                    <select name="btn1" >
                            <option>---</option>
                            <option value="si">SI</option>
                            <option value="no">NO</option>
                    </select>
                </div>
                    </th>
     </table>
</form>
    <form action="add_per.php" method="POST" enctype="multipart/form-data" class="formulario">
        <h2>Formulario de emergencia</h2>
        <label>Situación del Pacientes</label>
        <input type="text" name="sp" require><br>   
        <label >Fecha de emisión:</label>
        <input type="datetime" name="fecha" value="<?= $fecha_actual?>" disabled><br>
        <label >Tipo de llamado:</label>
        <select name="tll">
            <option value="Normal">Normal</option>
            <option value="Emergencia">Emergencia</option>
        </select><br>
        <input type="submit" name="submit" value="Cargar Registro">
    </form>
<?php
include ('laycults/footer.php');
?>
