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

function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}
 



?>



 





<htm>
    <head>
       
	    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
	     <title>Formulario</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
    <link rel="stylesheet " type="text/css" href="css/estilos_tabla.css"/>

    <script>
     $( function() {
        $( "#fecha" ).datepicker({
      numberOfMonths: [ 1, 1],
      minDate:new Date(1940,01,01)
      });
    });

     $( function() {
        $( "#fecha1" ).datepicker({
      numberOfMonths: [ 1, 1],
      minDate:new Date(1940,01,01)
      });
    });
 </script>
    
     <script language="javascript">
      $(document).ready(function(){
        $("#prov_regis").change(function () {

          $("#prov_regis option:selected").each(function () {
            var prov = $(this).val();
            $.post("includes/getCanton.php", { provincia: prov }, function(data){
              $("#canton_regis").html(data);
            });            
          });
        })
      });
            
      
    </script>
    
      <script language="javascript">
      $(document).ready(function(){
        $("#prov_lugar").change(function () {


            
      $("#prov_lugar option:selected").each(function () {
            var provlugar = $(this).val();
            $.post("includes/getCanton1.php", { provincia1: provlugar }, function(data){
              $("#canton_lugar").html(data);
            });            
          });
        })
      });
      
    </script>
    
    <script language="javascript">
      $(document).ready(function(){
        $("#prov_m").change(function () {


            
      $("#prov_m option:selected").each(function () {
            var provge = $(this).val();
            $.post("includes/getCanton2.php", { provincia2: provge }, function(data){
              $("#canton_m").html(data);
            });            
          });
        })
      });
      
    </script>
    
    
<script >
   function soloLetras(e) {
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toLowerCase();
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
        especiales = [8, 37, 39, 46];

        tecla_especial = false
        for(var i in especiales) {
            if(key == especiales[i]) {
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla) == -1 && !tecla_especial)
            return false;
    }

    function limpia() {
        var val = document.getElementById("miInput").value;
        var tam = val.length;
        for(i = 0; i < tam; i++) {
            if(!isNaN(val[i]))
                document.getElementById("miInput").value = '';
        }
    }
  </script>

   <script type="text/javascript">
        // Solo permite ingresar numeros.
        function soloNumeros(e){
          var key = window.Event ? e.which : e.keyCode
          return (key >= 48 && key <= 57)
        }
    </script>
    <script type="text/javascript">
    function limitar(e, contenido, caracteres)
        {
            // obtenemos la tecla pulsada
            var unicode=e.keyCode? e.keyCode : e.charCode;
 
            // Permitimos las siguientes teclas:
            // 8 backspace
            // 46 suprimir
            // 13 enter
            // 9 tabulador
            // 37 izquierda
            // 39 derecha
            // 38 subir
            // 40 bajar
            if(unicode==8 || unicode==46 || unicode==13 || unicode==9 || unicode==37 || unicode==39 || unicode==38 || unicode==40)
                return true;
 
            // Si ha superado el limite de caracteres devolvemos false
            if(contenido.length>=caracteres)
                return false;
 
            return true;
        }
      </script>

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
  <h1 style="font-family: georgia; font-size: 28px;"> FORMULARIO DE NACIDO VIVO</h1>
</div>

<form method="POST" action="">


             <center><div class="form-group">
                <?php
                    $conexion = mysqli_connect('localhost','root','','formulario');
                    $sql = "SELECT ID_FORM FROM `formulario`";
                    $result = mysqli_query($conexion,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                        $num_form = $mostrar["ID_FORM"]+1;

                    }
                  ?>    
               
     

                <label><h5 style="font-family: times; color: darkred; font-size: 20px;">Formulario: 
                  <input type="text" style="width: 100px; height: 35px; border-radius: 20px; font:bold 20px serif; color: red"  class="form-control" id="numero_form" name="numero_form" placeholder="" onKeyPress="return soloNumeros(event)" value="<?php echo $num_form ?>"</h5></label>   
    </div></center>

      <table>
        <!-- Primera Fila -->
        <tr>
          <td scope="col" colspan="7">
            <h7><i>La información de este recuadro deberá ser llenados por funcionarios 
            de las oficinas del Registro Civil, en el momento de la inscripción</i></hr7>
          </td>
        </tr>

        <tr>
          <td scope="row" colspan="2">
        
            <div class="form-group">
                <label><h5>1) OFICINA DE REGISTRO CIVIL DE: <input type="text" class="form-control" id="nom_oficina" name="nom_oficina" placeholder="" required></h5></label>    
            </div>

          </td>

          <td colspan="6">
            <div class="form-group">  
                <label><h5><strong>USO INEC </strong><input type="text" class="form-control" onKeyPress="return soloNumeros(event)" id="inec_oficina" name="inec_oficina" placeholder="" value="<?php echo generarCodigo(6);?>" readonly></h5></label>
            </div>

            <div class="form-group">

                <label><h5>3) FECHA DE INSCRIPCIÓN: <input type="date" id="fecha" name ="fecha_ins" class="form-control" required ><h5></label>
              </div>
          </td>

        </tr>

        <!-- Segunda Fila -->

        <tr>
          <td colspan="2">

            <div class="form-group">
              <label><h5>PROVINCIA:  <select class="form-control" id="prov_regis" name="prov_regis" >
              <option value=""checked>----Seleccione Provincia----</option>
              <?php
              echo $combobit;
              ?>
              </select></h5></label>
                            
            </div> 

            <div class="form-group">

              <label><h5>CANTÓN: <select class="form-control" id="canton_regis" name="canton_regis" >
              <option value=""checked>----Seleccione Cantón----</option>
                  </select> </h5></label>          
            </div> 
 

            <div class="form-group">
                <label><h5>PARROQUIA URBANA o RURAL: <input type="text" class="form-control" id="parroquia_regis" name="parroquia_regis" placeholder="" onkeypress="return soloLetras(event)" onblur="limpia()" id="miInput"></h5></label>    
            </div>

            </td>

          <td colspan="7">

            <div class="form-group">
              <label><h5>4) ACTA DE INSCRIPCIÓN: <input type="number" class="form-control" id="acta_regis" name="acta_regis" placeholder="" onkeypress="return soloNumeros(event)" min="1"  max="31" onKeyUp="return limitar(event,this.value,2)" onKeyDown="return limitar(event,this.value,2)" required></h5></label></div>
          </td>

        </tr>

        <!-- Tercera Fila -->

        <tr>
          <th abbr="DATOS DEl NACIDO VIVO" scope="col" colspan="7" >
            <hr4><strong>(A) DATOS DEl NACIDO VIVO</strong></hr4> 
          </th>
         
        </tr

        <tr>
          <tr><th colspan="7">5)</th>
        </tr>

        <tr>
          <!-- Cuarta Fila -->
          <td colspan="1"> 

            <div class="form-group">
              <label><h5>NOMBRES: <input type="text" class="form-control" id="nombre_nv" name="nombre_nv" placeholder="" onkeypress="return soloLetras(event)" onblur="limpia()" id="miInput"></h5></label>  
            </div>

          </td>

          <td colspan="3"> 

            <div class="form-group">
              <label><h5>APELLIDOS: <input type="text" class="form-control" id="apellido_nv" name="apellido_nv" placeholder="" onkeypress="return soloLetras(event)" onblur="limpia()" id="miInput" ></h5></label>   
            </div>
          </td>

          <td colspan="5"> 

            <div class="form-group">
              <label for="txt_nombre"><h5>No. Cédula de ciudadania: <input type="text" class="form-control" id="ced_nv" name="ced_nv" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,10)" pattern=".{10,10}"  ></h5></label>
            </div>

          </td>      
        </tr>

        <tr>
           <td scope="row" colspan="1">
            <h5>6)SEXO<h5>
            <div class="form-group">

              <input type="radio" value="Hombre" name="sexo" required>Hombre<br> 
              <input type="radio" value="Mujer" name="sexo"> Mujer<br>

            </div> 

           </td>

           <td scope="row" colspan="2"><h5><strong>13) PRODUCTO DEL EMBARAZO<strong><h5></td>
           <td scope="row" colspan="4"><h5><strong>14) LUGAR DONDE OCURRIO EL NACIMIENTO<strong><h5></td> 
       
        </tr>
        <!-- Quinta Fila -->
        
        <tr>
         <td colspan="1">
            <div class="form-group">
              <h5>7) Fecha de Nacimiento:</h5>
              <label><input type="date" id="fecha1" name ="fecha_nac_nv" class="form-control"></label>
            </div>

            <div class="form-group">
              <label><h5>8) TALLA <br><input type="number" class="form-control" id="talla_nv" name="talla_nv" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,2)" min="38" max="52" ></h5></label>
                  
            </div>

            <div class="form-group">
              <label><h5>9) PESO <br><br><input type="number" class="form-control" id="peso_nv" name="peso_nv" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,4)" min="500" max"5000"></h5></label>
          
            </div>

            <div class="form-group">
              <label><h5>10) SEMANAS DE GESTACION <br><br><input type="number" class="form-control" id="gestacion_nv" name="gestacion_nv" placeholder=""  onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,2)" min="22" max="42" ></h5></label>
                  
            </div>

            

            <div class="form-group">
              <h5>11) TIPO DE PARTO</h5>

              <input type="radio" value="Normal" name="tipoP" required>Normal<br> 
              <input type="radio" value="Cesarea" name="tipoP"> Cesarea<br>


            </div>

            <div class="form-group">
              <h5>12) APGAR</h5>
             <label>1 min<input type="number" class="form-control" id="apgar_1" name="apgar_1" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,2)" onKeyDown="return limitar(event,this.value,2)" min="1" max="10"></label>

              <label>5 min<input type="number" class="form-control" id="apgar_2" name="apgar_2" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,2)" onKeyDown="return limitar(event,this.value,2)" min="1" max="10"></label>
            </div>
        </td>

        <td colspan="2">

          <div class="form-group">


            <input type="radio" value="Simple" name="prodEmb" required>Simple<br> 
            <input type="radio" value="Doble" name="prodEmb"> Doble<br>
            <input type="radio" value="Triple" name="prodEmb" required>Triple<br> 
            <input type="radio" value="Cuadruple" name="prodEmb"> Cuadruple o mas<br>


            <br><br><br><br>
            <div>
              <p>En el caso de no ser <br>  simple se debe <br>considerar que para <br>cada nacido <br>vivo corresponde <br>llenar un formulario <br>de forma independiente</p>
            </div>
                
          </div>


         </td>

         <td colspan="3">

          <div class="form-group">

          <input type="radio" value="Establecimiento del minesterio" name="respuestas" required  onclick="lugar_esp.disabled = true">Establecimiento del minesterio<br> 
          <input type="radio" value="Establecimiento del IESS" name="respuestas"  onclick="lugar_esp.disabled = true"> Establecimiento del IESS<br>
          <input type="radio" value="Establecimiento de la junta de beneficencia " name="respuestas"  onclick="lugar_esp.disabled = true">Establecimiento de la junta de beneficencia <br> 
          <input type="radio" value="Otro establecimiento público "  name="respuestas"  onclick="lugar_esp.disabled = true">Otro establecimiento público   <br> 
          <input type="radio" value="Hospital, clinica o consultorio"  name="respuestas"  onclick="lugar_esp.disabled = true">Hospital, clinica o consultorio<br>
         <input type="radio" value="Casa"  name="respuestas"  onclick="lugar_esp.disabled = true">Casa<br> 
          <input type="radio" value="Otro"  name="respuestas" onclick="lugar_esp.disabled = false">Otro<br> 
        

          <br><br> 
              <div class="form-group">
                   <label for="txt_nombre"><i>Especificique <input type="text" class="form-control" id="lugar_esp" name="lugar_esp" disabled="disabled" placeholder="" onkeypress="return soloLetras(event)" onblur="limpia()" >
                   </i></label>   
              </div>
                  
          </div>

          <div class="form-group">
            <h5> 15) Asistido por:  <strong>RESPUESTA ÚNICA</strong></h5>
          </div>

          <input type="radio" value="Médico"  name="respuesta" onclick="asistido_esp.disabled = true" required>Médico &nbsp 1<br> 
          <input type="radio" value="Obstetriz/Obstetra" name="respuesta" onclick="asistido_esp.disabled = true">Obstetriz/Obstetra &nbsp 2<br>
          <input type="radio" value="Enfermero/a" name="respuesta" onclick="asistido_esp.disabled = true">Enfermero/a &nbsp 3<br> 
          <input type="radio" value="Auxiliar de enfermería"  name="respuesta" onclick="asistido_esp.disabled = true"> Auxiliar de enfermería &nbsp 4<br> 
          <input type="radio" value="Partero/a calificada"  name="respuesta" onclick="asistido_esp.disabled = true">Partero/a calificada &nbsp 5<br>
          <input type="radio" value="Partero/a no calificada"  name="respuesta" onclick="asistido_esp.disabled = true">Partero/a no calificada &nbsp 6<br> 
          <input type="radio" value="Otro"  name="respuesta" onclick="asistido_esp.disabled = false">Otro &nbsp 7 <br> 

            <br><br>

            <div class="form-group">
                  <label for="txt_nombre"><i>Especificique <input type="text" class="form-control" id="asistido_esp" name="asistido_esp" disabled="disabled" placeholder="" onkeypress="return soloLetras(event)" onblur="limpia()">
                   </i></label> 
            </div>

          </div>
           
        </td>

        <td colspan="4">
          <div class="form-group">
            <h5 style="text-align: center;"><strong>USO INEC</strong><br>
            <i>Codigo del establecimiento de salud</i><br><br>

            <label><input type="text" class="form-control" id="inec_nv" name="inec_nv" placeholder="" onKeyPress="return soloNumeros(event)" value="<?php echo generarCodigo(6);?>" readonly></label></h5>
          </div>

          <div class="form-group">
            <label><h5>14.1) Nombre del Lugar <br> (Establecimiento de Salud) <input type="text"class="form-control" id="nom_lugar" name="nom_lugar" placeholder="" onkeypress="return soloLetras(event)" onblur="limpia()" id="miInput" ></h5>
            </label>  
          </div>

          <div class="form-group">
            <label><h5>14.2) Provincia: <select class="form-control" id="prov_lugar" name="prov_lugar" >
           <option value=""checked>----Seleccione Provincia----</option>
              <?php
              echo $combobit;
              ?>
                </select> </h5></label>                
          </div> 

          <div class="form-group">

            <label><h5>14.3) Cantón: <select class="form-control" id="canton_lugar" name="canton_lugar" >
            <option value=""checked>----Selecciones Cantón----</option>
            
            </select> </h5></label>
                            
          </div> 

          <div class="form-group">
            <label><h5>14.4) Parroquía urbana o rural:</h5><input type="text" id="parro_lugar" name="parro_lugar" class="form-control" onkeypress="return soloLetras(event)" onblur="limpia()" id="miInput" required></label> 
          </div>

          <div class="form-group">
            <label><h5>14.5) Localidad: <input type="text" id="localidad_lugar"  name="localidad_lugar" class="form-control" onkeypress="return soloLetras(event)" onblur="limpia()" id="miInput" required>
          </div></h5></label> 

          <div class="form-group">
            <label><h5>14.6) Dirección: <input type="text" id="dir_lugar" name="dir_lugar" class="form-control" required>
          </div></h5></label> 

          <div class="form-group">
            <label><h5>14.7) Teléfono: <input type="text" id="tel_lugar" name="tel_lugar" class="form-control" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,10)" pattern=".{10,10}" required>
          </div></h5></label> 

          <div class="form-group">

          <h5 style="text-align: center;"><strong>USO INEC</strong><br>
              <i>DPA</i><br><br></h5>

        <label for="txt_loc"><input type="text" class="form-control" id="txt_loc1" name="txt_loc1" placeholder="" onKeyPress="return soloNumeros(event)" value="<?php echo generarCodigo(6);?>" readonly >
        </label> 
              
          </div>
            

         </td>
       </tr>
         
         
         <tr>
           <th abbr="DATOS DE LA MADRE" scope="col" colspan="7" >
           <hr4><strong>(B) DATOS DE LA MADRE</strong></hr4>
           </th>
        </tr>
         
         <tr>
          <th scope="row" abbr="Madre"><h5>16)NOMBRE<h5>
              <div class="form-group"><label for="txt_nombremadre"><input type="text" class="form-control" id="txt_nombremadre" name="txt_nombremadre" placeholder="" onkeypress="return soloLetras(event)" onblur="limpia()" id="miInput"></label>
              </div>

              <div class="form-group"><label><h5>APELLIDO</h5><input type="text" class="form-control" id="txt_apemadre" name="txt_apemadre" placeholder="" onkeypress="return soloLetras(event)" onblur="limpia()" id="miInput"></label>
              </div>
          </th>
          
          <td colspan="3"><h5><strong>17)NACIONALIDAD<strong><h5>
                 <div class="form-group">
                      <input type="radio" value="Ecuatoriana "  name="nacionalidad" onclick="txt_extranjera.disabled = true">Ecuatoriana &nbsp 1<br> 
                      <input type="radio" value="Extranjera" name="nacionalidad" onclick="txt_extranjera.disabled = false">Extranjera &nbsp 2<br>
                      
                     <label for="txt_extranjera"><h6>Nombre del País</h6><input type="text" class="form-control" id="txt_extranjera" name="txt_extranjera" placeholder="" disabled>
                      </label>

                 </div>
           </td>
           
           <td colspan="7"><h5><strong>18)CÉDULA DE CIUDADANÍA O PASAPORTE<strong><h5>
              <div class="form-group">
                   <label for="txt_cedulamad"><input type="text" class="form-control" id="txt_cedulamad" name="txt_cedulamad" placeholder="" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,10)" pattern=".{10,10}" >
                   </label>
              </div>
           </td>
        </tr>
        
        <tr>
            <th scope="row" abbr="Madre"><h5>19) FECHA DE NACIMIENTO<h5>
               <div class="form-group">
               <label for="txt_fechamad"><input type="date" class="form-control" id="txt_fechamad" name="txt_fechamad" placeholder="" >
               </label>
               </div>
            </th>
          
            <td colspan="2"><strong><h5>20)EDAD DE LA MADRE<strong><h5>
               <div class="form-group">
               <label for="txt_edadmad"><input type="number" class="form-control" id="txt_edadmad" name="txt_edadmad" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,2)" onKeyDown="return limitar(event,this.value,2)" min="15" max="40">
               </label>
               </div>
            </td>
               
             
           <td colspan="2"><h5><strong>21)¿CUÁNTOS CONTROLES PRENATALES<br/>RECIBIÓ EN ESTE EMBARAZO?<strong></h5>
               <div class="form-group">
               <label for="txt_controles"><input type="number" class="form-control" id="txt_controles" name="txt_controles" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,2)" min="0">
               </label>
               </div>
           </td>
           
           <td colspan="2"><h5><strong>22)NÚMERO DE EMBARAZOS Y PARTOS<strong><h5>
                <div class="form-group">
                <label for="txt_numemba"><h5>22.1 Número de embarazos<input type="number" class="form-control" id="txt_numemba" name="txt_numemba" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,2)" min="0" ></h5>
                </label>
               
                <label for="txt_numpartos"> <h5>22.2 Número de partos<input type="number" class="form-control" id="txt_numpartos" name="txt_numpartos" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,2)" min="0" ></h5></label>
               </div>
           </td>
        </tr>

        <tr>
          <th scope="row" abbr="Madre"><h5>23)¿CUÁNTOS HIJOS VIVOS TIENE ACTUALMENTE?<h5>
              <div class="form-group">
              <label for="txt_hijos"><input type="number" class="form-control" id="txt_hijos" name="txt_hijos" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,2)" min="1">
              </label>
              </div>
          </th>
          
          <td colspan="3"><strong><h5>24)¿CUÁNTOS HIJOS QUE NACIERON VIVOS HAN MUERTO?<strong><h5>
              <div class="form-group">
              <label for="txt_vivmuer"><input type="number" class="form-control" id="txt_vivmuer" name="txt_vivmuer" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,2)" min="0" >
              </label>
              </div>
          </td>
          
          <td colspan="7"><h5><strong>25)¿CUÁNTOS HIJOS NACIERON MUERTOS?<strong></h5>
              <div class="form-group"><label for="txt_muertos"><input type="number" class="form-control" id="txt_muertos" name="txt_muertos" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,2)" min="0"></label>
              </div>
          </td>
          
        </tr>

        <tr>
          <th scope="row" abbr="Madre"><h5>26)IDENTIFICACIÓN ÉTNICA DE LA MADRE<h5></th>
          
           <td colspan="1"><strong><h5>27)ESTADO CIVIL<strong><h5></td>
           <td colspan="2"><h5><strong>28)ALFABETISMO E INSTRUCCIÓN<strong></h5></td>
           <td colspan="6"><h5><strong>29)RESIDENCIA HABITUAL DE LA MADRE<strong><h5></td>
        </tr>

        <tr>
             <td rowspan="2" scope="row" abbr="Etnia">  
            <h6><i>De acuerdo con la cultura y costumbres</i></h6>
                <div class="form-group">
                     
                <input type="radio" value="Indígena"  name="etnia" required>Indígena &nbsp 1<br> 
                <input type="radio" value=" Afroecuatoriana/Afrodescendiente" name="etnia">Afroecuatoriana/Afrodescendiente &nbsp 2<br>
                <input type="radio" value="Negra" name="etnia">Negra &nbsp 3<br> 
                <input type="radio" value="Mulata"  name="etnia"> Mulata &nbsp 4<br> 
                <input type="radio" value="Montubia"  name="etnia">Montubia &nbsp 5<br>
                <input type="radio" value="Mestiza"  name="etnia">Mestiza &nbsp 6<br> 
                <input type="radio" value="Blanca"  name="etnia">Blanca &nbsp 7<br> 
                <input type="radio" value="Otro"  name="etnia">Otro &nbsp 8 <br> 
               
                </div>
            </td>
            
          <td rowspan="2" colspan="1">    
                 <div class="form-group">

                <input type="radio" value="Unida"  name="estadoC" required>Unida &nbsp 1<br> 
                <input type="radio" value="Soltera"  name="estadoC" required>Soltera &nbsp 2<br> 
                <input type="radio" value=" Casada" name="estadoC">Casada &nbsp 3<br>
                <input type="radio" value="Divorciada" name="estadoC">Divorciada &nbsp 4<br> 
                <input type="radio" value="Separada"  name="estadoC"> Separada &nbsp 5<br> 
                <input type="radio" value="Viuda"  name="estadoC">Viuda &nbsp 6<br>
   
               
                </div>
      
          
          </td>
          
          <td rowspan="2 " colspan="2">
                <div><h6>¿SABE LEER Y ESCRIBIR?</h6></div>
            <div class="form-group">

              <input type="radio" value="Si"  name="alfaM" required>Si &nbsp 1<br> 
              <input type="radio" value="No"  name="alfaM" required>No &nbsp 2<br> 

            </div>
                
                <br>
                
                <div class="form-group"><h6>NIVEL DE INSTRUCCIÓN ALCANZADO</h6></div>

                <br>
                
            <div class="form-group">
                
              <input type="radio" value="Ninguno"  name="instruccion" required>Ninguno&nbsp 1<br> 
              <input type="radio" value="Centro de Alfabetización" name="instruccion" required>Centro de Alfabetización &nbsp 2<br> 
              <input type="radio" value="Primaria"  name="instruccion" required>Primaria &nbsp 3<br> 
              <input type="radio" value="Secundaria"  name="instruccion" required>Secundaria &nbsp 4<br> 
              <input type="radio" value="Educación Básica"  name="instruccion" required>Educación Básica &nbsp 5<br> 
              <input type="radio" value="Educación Media/Bachillerato"  name="instruccion" required>Educación Media/Bachillerato &nbsp 6<br> 
              <input type="radio" value="Ciclo postbachillerato"  name="instruccion" required>Ciclo postbachillerato &nbsp 7<br> 
              <input type="radio" value="Superior"  name="instruccion" required>Superior &nbsp 8<br> 
              <input type="radio" value="Posgrado"  name="instruccion" required>Posgrado &nbsp 9<br>  
             </div> 
           
            
          </td>
          
          
          
          <td colspan="4">  
                    <div class="form-group">
                       <label for="sel1"><h5>PROVINCIA: <select class="form-control" id="prov_m" name="prov_m">
                       <option value=""checked>----Seleccione Provincia----</option>
                          <?php
                          echo $combobit;
                          ?>
                        </select>
                        </h5></label>
                            
                   </div> 
                    
                    <div class="form-group">
                       <label for="sel1"><h5>CANTÓN: <select class="form-control" id="canton_m" name="canton_m">
                        <option value=""checked>----Seleccione Cantón----</option>
                           </select></h5>
                      </label>
                    </div> 
                    
                    <div class="form-group">
                        <label><h5>Parroquia:<input type="text" class="form-control" id="txt_parroquia" name="txt_parroquia" placeholder="" onkeypress="return soloLetras(event)" onblur="limpia()" id="miInput"required></label></h5>
                    </div>
                    <br>
                    <br>
             
                  <div class="form-group">
                      <label><h5>Localidad:<input type="text" class="form-control" id="txt_localidad" name="txt_localidad" placeholder="" onkeypress="return soloLetras(event)" onblur="limpia()" id="miInput"></label></h5>
                  </div>
                 
                 <br>
                 <br>
                 
                <div class="form-group">
                    <label><h5>Direccion: <input type="text" class="form-control" id="txt_dire" name="txt_dire" placeholder="" required>
                    </label></h5>
                </div>
          </td>
          
        </tr>

       
       
        <tr>
           <td colspan="3">      
              <div class="form-group">
                       <CENTER><h6>USO INEC</h6></CENTER>
                       <label for="txt_dpa"><input type="text" class="form-control" id="txt_dpa" name="txt_dpa" placeholder="" onKeyPress="return soloNumeros(event)" value="<?php echo generarCodigo(6);?>" readonly >
                       </label>   
                       
              </div>
              
              <div class="form-group">   
                       <label for="txt_loc"><input type="text" class="form-control" id="txt_loc" name="txt_loc" placeholder="" onKeyPress="return soloNumeros(event)" value="<?php echo generarCodigo(6);?>" readonly >
                       </label> 
              </div>
           </td>
        </tr>
        
      <tr>
          <th abbr="DATOS DE LA DOC" scope="col" colspan="7" >
            <div><hr4><strong>(C)INFORMACIÓN GENERAL</strong></hr4></div>
          </th>
         
      </tr>
        
      <tr>
          <th colspan="7"><h5>30)DATOS DE LA PERSONA QUE ATENDIÓ EL PARTO<h5>
            <div class="form-group">
                <div>
                <label><h5>Nombre: <input type="text" class="form-control" id="txt_nomdoc" name="txt_nomdoc" placeholder="" onkeypress="return soloLetras(event)" onblur="limpia()"required></label></h5>
                </div>
   

              <div>
                <label><h5>Apellido: <input type="text" class="form-control" id="txt_apedoc" name="txt_apedoc" placeholder="" onkeypress="return soloLetras(event)" onblur="limpia()" required></label></h5>
              </div>
                   
              <div>
                <label><h5>Teléfono: <input type="text" class="form-control" id="txt_teldoc" name="txt_teldoc" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,10)" pattern=".{10,10}" required></label></h5>
              </div>
            
              <div>
                <label><h5>Cédula: <input type="text" class="form-control" id="txt_ceddoc" name="txt_ceddoc" placeholder="" onKeyPress="return soloNumeros(event)" onKeyUp="return limitar(event,this.value,10)" onKeyDown="return limitar(event,this.value,10)" pattern=".{10,10}"required>
                </label></h5>
              </div>
            </div>
          

          
          </th>
           
        </tr>
        
        <tr>
               <th scope="row" abbr="Madre" colspan="5"><h5>OBSERVACIONES<h5>
               
                   <div class="form-group">
                       <label><input type="text" class="form-control" id="txt_obsdoc" name="txt_obsdoc" placeholder="" required>
                       </label>
               
                   </div>
          
              </th>
          
              <td colspan="4">
                <h5><strong>USO INEC<strong></h5>
                
                <div class="form-group">
                    <label><input type="text" class="form-control" id="txt_inec" name="txt_inec" placeholder="" onkeypress="return soloNumeros(event)" value="<?php echo generarCodigo(6);?>" readonly>
                    </label>
                </div>
          
              </td>
        </tr>
        
        
</table>

<center><input  class="btn btn-danger" type="submit" name="submit" value="Registrar Formulario"/></center>

</form>
           
<?php
    if(isset($_POST['submit'])){
      require("registro_formulario.php");
    }
  ?>    

  <center><a href="loginusu.php"><input  class="btn btn-danger" type="submit" name="submit" value="Regresar"/></a></center>
                           
                                                
    </body>
    
  
</htm>