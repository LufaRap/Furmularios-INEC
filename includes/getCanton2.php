<?php
  $mysqli = new mysqli('localhost', 'root', '', 'Formulario');
   $mysqli->set_charset("utf8");
  $provge = $_POST['provincia2'];
  $result = $mysqli->query("SELECT id_canton, nombre_canton FROM CANTON WHERE id_prov = '$provge' ORDER BY nombre_canton");


	echo '<option value="0">Seleccione</option>';
  
   
    
    while ($row = $result->fetch_assoc()) 
    {
        echo '<option value="' . $row['id_canton']. '">' . $row['nombre_canton'] . '</option>' . "\n";
    }
   

?>





