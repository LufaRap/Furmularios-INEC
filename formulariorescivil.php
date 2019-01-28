<?php
  $mysqli = new mysqli('localhost', 'root', '', 'Formulario');
  $mysqli->set_charset("utf8");
  $result = $mysqli->query("SELECT id_prov, nombre_prov FROM PROVINCIA ORDER BY nombre_prov");
  
   if ($result->num_rows > 0){
        $combobit="";
        //llenar combobox
        while ($row = $result->fetch_assoc()) {
            $combobit .="<option  value='".$row["id_prov"]."'> &nbsp".$row["nombre_prov"]."</option>";
        }
    }
    else
    {
        echo "No hubo resultados";
    }



    $result1 = $mysqli->query("SELECT id_form, num_form FROM  formulario");


   if ($result1->num_rows > 0){
        $combobit1="";
        //llenar combobox
        while ($row = $result1->fetch_array(MYSQLI_ASSOC)) {
            $combobit1 .="<option  value='".$row["id_form"]."'>".$row["num_form"]."</option>";
        }
    }
    else
    {
        echo "No hubo resultados";
    }

?>



<html>
    <head>
       
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
    <title>Formulario</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet " type="text/css" href="estilos.css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>

</head>
    
<body background="imagenes/fondo2.png">
 
 <div style="padding-left: 100px">

        <tr>
          <td><img src="imagenes/enc22.png" width="300" height="200" style="margin-left: 70px">
          <img src="imagenes/enc33.png"  width="250" height="200" style="margin-left: 70px">
          <img src="imagenes/enc44.png"  width="300" height="200" style="margin-left: 30px"></td>
        
        </tr> 
 </div>
 
 
<div class="titulo">
  <h1 style="font-family: serif"> FORMULARIO DE NACIDO VIVO</h1>
</div>


<form action="datos_formu.php" method="POST">
  
<div class="form-group">
            <center><label style="font-size: 14pt; font-family:serif;font-size: 25px "><b>Formularios</b></label>
              <br>
            <SELECT NAME="id_formulario" SIZE=1 onChange="" required>
                <option value=""checked>Seleccione</option>
                <?php
                    echo $combobit1;
                ?>
            </SELECT><br><br><br><br><br><br><br><br><br><br><br>
            

            <input  class="btn btn-danger" type="submit" name="datos" value="Ver datos"/>

          </center>
        </div>
</form>

  <center><a href="loginusu.php"><input  class="btn btn-danger" type="submit" name="submit" value="Regresar"/>
  </a></center>
                                          
</body>
</html>