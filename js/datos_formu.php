<?php
	$id_f=$_POST['id_formulario'];
	$conexion = mysqli_connect('localhost','root','','formulario');
  $conexion->set_charset("utf8");
?>

<html>
 
<head>

	<meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
         <title>Formulario</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
    <link rel="stylesheet " type="text/css" href="estilos.css"/>

    <style type="text/css">
      h5{
        font-size: 15px;
        font-family: times;
      }

    </style>
</head>

<body background="imagenes/fondo2.png">

    <div style="padding-left: 100px">

        <tr>
          <td><img src="imagenes/enc2.png" width="300" height="200" style="margin-left: 70px">
          <img src="imagenes/enc3.png"  width="250" height="200" style="margin-left: 70px">
          <img src="imagenes/enc4.png"  width="300" height="200" style="margin-left: 30px"></td>
        
        </tr> 
 </div>
 
 
    <div class="titulo">
      <h1 style="font-family: serif"> FORMULARIO DE NACIDO VIVO</h1>
    </div>

    	<div>
        <br>
	 <?php
        $sql="SELECT `NUM_FORM`FROM `formulario` WHERE `ID_FORM`=$id_f";
        $resultado=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($resultado)){
    ?>
    <center><h2 style="font-family: serif; color: darkred"  ><?php echo "Formulario Nº ".$mostrar['NUM_FORM']?> </h2></center>
        <?php
            }
         ?>
     </div>

<center>

    <div><table>

        <tr>
          <td scope="col" colspan="7" >
            <h7 ><i>La información de este recuadro deberá ser llenados por funcionarios 
            de las oficinas del Registro Civil, en el momento de la inscripción</i></h7>
          </td>
        </tr>

        <?php
        $sql="SELECT `id_regis`, registro_civil.`id_form`, `oficina_regis`,`provincia_regis`,`canton_regis`,`parroquia_regis`, `fechains_regis`,`acta_regis`, formulario.`id_form` from registro_civil, formulario where registro_civil.`id_form`=formulario.`id_form` and formulario.`id_form`=$id_f";

        $resultado=mysqli_query($conexion,$sql);
        
	      while($mostrar=mysqli_fetch_array($resultado)){
        ?>

        <tr>
          <td scope="row" colspan="2">
            <div class="form-group">

            <label>
            <h5>1) OFICINA DE REGISTRO CIVIL: 
            <?php echo $mostrar['oficina_regis']?></h5>
            </label>

            </div>
            </td>

            <td colspan="6">

          
            <div class="form-group">
                <label> <h5><strong>USO INEC </strong></h5></label>
            </div>

            <div class="form-group">

                <label><h5>3) FECHA DE INSCRIPCIÓN:
                    <?php echo $mostrar['fechains_regis']?></label></h5>
                 
            </div>
          </td>
         </tr>


         <tr>
          <td scope="row" colspan="2">
              <div class="form-group">
            <label><h5>PROVINCIA:
                <?php echo $mostrar['provincia_regis']?></label></h5>
                            
               </div> 

              <div class="form-group">
                <label for="sel2"><h5>CANTÓN:<?php echo $mostrar['canton_regis']?></h5></label>
                            
               </div> 
               
              <div class="form-group">
                  <label for="txt_parroquia"><h5>  PARROQUIA URBANA o RURAL:  
                <?php echo $mostrar['parroquia_regis']?></label></h5>     
              </div>

          </td>


          <td colspan="7">
            <div class="form-group">
            <label for="txt_nombre"><h5>4) ACTA DE INSCRIPCIÓN:  
            <?php echo $mostrar['parroquia_regis']?></h5></label>
            </div>
            </td>
         </tr>
    
        <?php
            }
        ?>

        <?php

        $sql3="SELECT ID_MADRE FROM madre where ID_FORM = '$id_f'";
        $result3=mysqli_query($conexion,$sql3);

        while($mostrar=mysqli_fetch_array($result3)) { $id_M=$mostrar[0];} /* id del establecimiento */


        $sql1="SELECT `ID_NV`, `ID_MADRE`, `NOMBRE_NV`, `APEL_NV`, `SEXO_NV`, `FECH_NV`, `TALLA_NV`, `CEDULA_NV`, `PESO_NV`, `SEMANASG_NV`, `TIPOPARTO_NV`, `APGAR_NV`, `APGAR_NV5`, `PRODUCEMBAR_NV` FROM `nacido_vivo` WHERE ID_NV = '$id_M'";

        $resultado1=mysqli_query($conexion,$sql1);
        
        while($mostrar=mysqli_fetch_array($resultado1)){

        ?>

         
         <tr>
          <th style="background: #9C837D" abbr="DATOS DEl NACIDO VIVO" scope="col" colspan="7" >
            <hr4><strong>(A) DATOS DEl NACIDO VIVO</strong></hr4> 
          </th>
        </tr>

        <tr>
          <tr><th colspan="7">5)</th></tr>

          <td colspan="1"> 

            <div class="form-group">
                <label for="txt_nombre"><h5>NOMBRES: 
                <?php echo $mostrar['NOMBRE_NV']?></label></h5>  
            </div>

          </td>
      
          <td colspan="3"> 

            <div class="form-group">
                <label for="txt_nombre"><h5>APELLIDOS: <?php echo $mostrar['APEL_NV']?></h5></label>
                  
            </div>
          </td>

          <td colspan="5"> 

            <div class="form-group">
                <label><h5>No. Cédula de ciudadania: 
                <?php echo $mostrar['CEDULA_NV']?>
                </label></h5>
                  
            </div>
          </td>      
        </tr>

         <tr>
           <td scope="row" colspan="1">
             <label><h5>6)SEXO: 
           <?php echo $mostrar['SEXO_NV']?></label></h5>
           </td>

           <td scope="row" colspan="2"><h5><strong>13) PRODUCTO DEL EMBARAZO<strong><h5></td>
           <td scope="row" colspan="4"><h5><strong>14) LUGAR DONDE OCURRIO EL NACIMIENTO<strong><h5></td> 
       
        </tr>
        <!-- Quinta Fila --> 
        <tr>
         <td colspan="1">
            <div class="form-group">
              <label><h5>7) Fecha de Nacimiento: 
              <?php echo $mostrar['FECH_NV']?></label></h5>
            </div>

            <div class="form-group">
              <label><h5>8) TALLA : 
              <?php echo $mostrar['TALLA_NV']?></label> cm</h5>
                  
            </div>

            <div class="form-group">
              <label><h5>9) PESO:  
              <?php echo $mostrar['PESO_NV']?></label> gramos</h5>
          
            </div>

            <div class="form-group">
              <label><h5>10) SEMANAS DE GESTACION: 
              <?php echo $mostrar['SEMANASG_NV']?></label>semanas</h5>
                  
            </div>
            <div class="form-group">
              <label><h5>11) TIPO DE PARTO: 
              <?php echo $mostrar['TIPOPARTO_NV']?></label></h5>
            </div>
            <div class="form-group">
              <h5>12) APGAR: </h5>
              <label>1 min:  <?php echo $mostrar['APGAR_NV']?></label>

              <label>2 min:  <?php echo $mostrar['APGAR_NV5']?></label>
            </div>
        </td>

        <td colspan="2">

          <div class="form-group" style="text-align: center;">

            <label><?php echo $mostrar['PRODUCEMBAR_NV']?></label>                
          </div>
         </td>

        <?php
            }
        ?>


        <?php

        $sql1="SELECT `ID_ESTABL`, establecimiento_de_salud.`ID_FORM`, `TIPO_ESTABL`, `NOMBRE_ESTABL`, `provincia_establ`, `canton_establ`, `PARROQUIA_ESTABL`, `LOCALIDAD_ESTABL`, `DIRECCION_ESTABL`, `TELEFONO_ESTABL`, formulario.`id_form` FROM `establecimiento_de_salud`, `formulario` WHERE 
          formulario.`id_form` = establecimiento_de_salud.`id_form` and formulario.`id_form` = $id_f";

        $resultado1=mysqli_query($conexion,$sql1);
        
        while($mostrar=mysqli_fetch_array($resultado1)){

        ?>


         <td colspan="3" style="padding-left: 5px;">

          <div class="form-group" style="text-align: center;">
            <label><?php echo $mostrar['TIPO_ESTABL']?></label>      
          </div>

           
        </td>

        <td colspan="4">
          <div class="form-group">
            <h5 style="text-align: center;"><strong>USO INEC</strong><br>
            <i>Codigo del establecimiento de salud</i><br><br></h5>
          </div>

          <div class="form-group">
            <label><h5>14.1) Nombre del Lugar <br> (Establecimiento de Salud) 
            <?php echo $mostrar['NOMBRE_ESTABL']?>
            </label></h5>
          </div>

          <div class="form-group">
            <label><h5>14.2) Provincia:
            <?php echo $mostrar['provincia_establ']?>
            </label></h5>              
          </div> 

          <div class="form-group">

            <label><h5>14.3) Cantón:
            <?php echo $mostrar['canton_establ']?>
            </label></h5>
                            
          </div> 

          <div class="form-group">
            <label><h5>14.4) Parroquía urbana o rural:
            <?php echo $mostrar['PARROQUIA_ESTABL']?>
            </label></h5>
          </div>

          <div class="form-group">
            <label><h5>14.5) Localidad:
            <?php echo $mostrar['LOCALIDAD_ESTABL']?>
            </label> 

          <div class="form-group">
            <label><h5>14.6) Dirección: 
            <?php echo $mostrar['DIRECCION_ESTABL']?>
            </label> 

          <div class="form-group">
            <label><h5>14.7) Teléfono: 
            <?php echo $mostrar['TELEFONO_ESTABL']?>
            </label> </h5>

          <div class="form-group">

          <h5 style="text-align: center;"><strong>USO INEC</strong><br>
          <i>DPA</i><br><br>
          <label>
          </label></h5>
              
          </div>
            
         </td>
       </tr>


       <?php
            }
        ?>


        <?php

        $sql="SELECT `ID_MADRE`, madre.`ID_FORM`, `ID_DOC`, `NOMBRE_MADRE`, `APEL_MADRE`, `CEDUL_MADRE`, `FECHNACH_MADRE`, `EDAD_MADRE`, `CONTROLES_MADRE`, `HIJOSACTUAL_MADRE`, `HIJOSVIVMUER_MADRE`, `HIJOSMUER_MADRE`, `NACIONALIDAD_MADRE`, `PAISE_MADRE`, `NUMEMBARAZ_MADRE`, `NUMPARTOS_MADRE`, `ETNIA_MADRE`, `ESTADOCIVIL_MADRE`, `ALFABETISMO_MADRE`, `INSTRUCCION_MADRE`, `PROV_MADRE`, `CANTON_MADRE`, `PARROQUIA_MADRE`, `LOCALIDAD_MADRE`, `DIRECCIONDOM_MADRE`, formulario.`id_form` FROM `madre`, `formulario` WHERE formulario.`id_form` = madre.`id_form` and formulario.`id_form` = $id_f";

        $resultado=mysqli_query($conexion,$sql);
        
        while($mostrar=mysqli_fetch_array($resultado)){

        ?>
 
         <tr>
           <th style="background: #9C837D" abbr="DATOS DE LA MADRE" scope="col" colspan="7" >
           <hr4><strong>(B) DATOS DE LA MADRE</strong></hr4>
           </th>
        </tr>
         
         <tr>
          <th scope="row" abbr="Madre"><h5>16)NOMBRE<h5>
              <div class="form-group">
              <label><?php echo $mostrar['NOMBRE_MADRE']?></label>
              </div>

              <div class="form-group">
                <label><h5>APELLIDO
                <?php echo $mostrar['APEL_MADRE']?>
                </label></h5>
              </div>
          </th>
          
          <td colspan="3"><h5><strong>17)NACIONALIDAD<strong><h5>
              <div class="form-group">
              
              <label><?php echo $mostrar['NACIONALIDAD_MADRE']?></label>
              </div>
           </td>
           
           <td colspan="7"><h5><strong>18)CÉDULA DE CIUDADANÍA O PASAPORTE<strong><h5>
              <div class="form-group">
                   <label><?php echo $mostrar['CEDUL_MADRE']?></label>
              </div>
           </td>
        </tr>
        
        <tr>
            <th scope="row" abbr="Madre"><h5>19) FECHA DE NACIMIENTO<h5>
               <div class="form-group">
               <label><?php echo $mostrar['FECHNACH_MADRE']?></label>
               </div>
            </th>
          
            <td colspan="2"><strong><h5>20)EDAD DE LA MADRE<strong><h5>
               <div class="form-group">
               <label><?php echo $mostrar['EDAD_MADRE']?></label>
               </div>
            </td>
           <td colspan="2"><h5><strong>21)¿CUÁNTOS CONTROLES PRENATALES<br/>RECIBIÓ EN ESTE EMBARAZO?<strong></h5>
               <div class="form-group">
               <label><?php echo $mostrar['CONTROLES_MADRE']?></label>
               </div>
           </td>
           
           <td colspan="2"><h5><strong>22)NÚMERO DE EMBARAZOS Y PARTOS<strong><h5>
                <div class="form-group">
                <label for="txt_numemba"><h5>22.1 Número de embarazos
                <?php echo $mostrar['NUMEMBARAZ_MADRE']?>
                </label></h5>
               
                <label for="txt_numpartos"> <h5>22.2 Número de partos
                <?php echo $mostrar['NUMPARTOS_MADRE']?>
                </label></h5>
               </div>
           </td>
        </tr>

        <tr>
          <th scope="row" abbr="Madre"><h5>23)¿CUÁNTOS HIJOS VIVOS TIENE ACTUALMENTE?<h5>
              <div class="form-group">
              <label>
                <?php echo $mostrar['HIJOSACTUAL_MADRE']?>
              </label>
              </div>
          </th>
          
          <td colspan="3"><strong><h5>24)¿CUÁNTOS HIJOS VIVOS QUE NACIERON VIVOS HAN MUERTO?<strong><h5>
              <div class="form-group">
              <label>
              <?php echo $mostrar['HIJOSVIVMUER_MADRE']?>
              </label>
              </div>
          </td>
          
          <td colspan="7"><h5><strong>25)¿CUÁNTOS HIJOS NACIERON MUERTOS?<strong></h5>
              <div class="form-group">
              <label for="txt_muertos">
              <?php echo $mostrar['HIJOSMUER_MADRE']?>
              </label>
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
              <div class="form-group">
              <label><?php echo $mostrar['ETNIA_MADRE']?></label>
              </div>
            </td>
          <td rowspan="2" colspan="1">    
                 <div class="form-group">
                <label><?php echo $mostrar['ESTADOCIVIL_MADRE']?></label>
                </div>
      
          </td>
          
          <td rowspan="2 " colspan="2">
            <div><h6>¿SABE LEER Y ESCRIBIR?</h6></div>
            <div class="form-group">
              <label><?php echo $mostrar['ALFABETISMO_MADRE']?></label>

            </div>
                
            <br>
                
            <div class="form-group"><h6>NIVEL DE INSTRUCCIÓN ALCANZADO</h6></div><br>
                
            <div class="form-group">
            <label><?php echo $mostrar['INSTRUCCION_MADRE']?></label> 
             </div>  
          </td>

          <td colspan="4">  
            <div class="form-group">
              <label><h5>PROVINCIA:
              <?php echo $mostrar['PROV_MADRE']?>
              </label></h5>
                            
            </div> 
                    
            <div class="form-group">
              <label for="sel1"><h5>CANTÓN:
              <?php echo $mostrar['CANTON_MADRE']?>
              </label>
            </div> 
                    
            <div class="form-group">
              <label><h5>Parroquia:
              <?php echo $mostrar['PARROQUIA_MADRE']?>  
              </label></h5>
            </div><br><br>
             
            <div class="form-group">
              <label><h5>Localidad:
              <?php echo $mostrar['LOCALIDAD_MADRE']?>
              </label></h5>
            </div><br><br>
                 
            <div class="form-group">
              <label><h5>Direccion:
              <?php echo $mostrar['DIRECCIONDOM_MADRE']?>
              </label></h5>
            </div>
          </td>
          
        </tr>
        <tr>
           <td colspan="3">      
            <div class="form-group">
              <CENTER><h6>USO INEC</h6></CENTER>
              <label>
              </label>   
                       
            </div>
              
            <div class="form-group">   
              <label for="txt_loc"><input type="text" class="form-control" id="txt_loc" name="txt_loc" placeholder="" >
              </label> 
            </div>
           </td>
        </tr>
        
      <tr>
          <th abbr="DATOS DE LA DOC" scope="col" colspan="7" >
            <div><hr4><strong>(C)INFORMACIÓN GENERAL</strong></hr4></div>
          </th>
         
      </tr> 
        <?php
            }
        ?>

        <?php

        $sql2="SELECT ID_ESTABL FROM establecimiento_de_salud where ID_FORM = '$id_f'";
        $result2=mysqli_query($conexion,$sql2);

        while($mostrar=mysqli_fetch_array($result2)) { $id_E=$mostrar[0];} /* id del establecimiento */

        $sql="SELECT `ID_DOC`, `ID_ESTABL`, `TIPO_DOC`, `DESCRIP_DOC`, `NOMBRE_DOC`, `APEL_DOC`, `TELEF_DOC`, `CEDUL_DOC`, `OBSERVACION_DOC` FROM `doctor` WHERE ID_DOC = '$id_E'";

        $resultado=mysqli_query($conexion,$sql);
        
        while($mostrar=mysqli_fetch_array($resultado)){

        ?>


      <tr>
          <th colspan="7"><h5>30)DATOS DE LA PERSONA QUE ATENDIÓ EL PARTO<h5>

          <div class="form-group">
            <label><h5>Asistido por:
            <?php echo $mostrar['TIPO_DOC']?></label></h5>
          </div>
          

            <div class="form-group">
            <label><h5>Nombre:
            <?php echo $mostrar['NOMBRE_DOC']?> 
            </label></h5>
            </div>

            <div>
            <label><h5>Apellido: 
            <?php echo $mostrar['APEL_DOC']?>
            </label></h5>
            </div>
                   
            <div>
            <label><h5>Teléfono:
            <?php echo $mostrar['TELEF_DOC']?>
            </label></h5>
            </div>
            
            <div>
            <label><h5>Cédula:
            <?php echo $mostrar['CEDUL_DOC']?>
            </label></h5>
              </div>
        
          </th>
           
        </tr>
        
        <tr>
            <th scope="row" abbr="Madre" colspan="5"><h5>OBSERVACIONES<h5>
               
              <div class="form-group">
              <label>
              <?php echo $mostrar['OBSERVACION_DOC']?>
              </label>
               
              </div>
          
              </th>
          
              <td colspan="4">
              <h5><strong>USO INEC<strong></h5>
                
              <div class="form-group">
                    <label><input type="text" class="form-control" id="txt_inec" name="txt_inec" placeholder="" >
                    </label>
              </div>
          
              </td>
        </tr>


        <?php
            }
        ?>
        
</table>

  </div>

  <center><a href="formulariorescivil.php"><input  class="btn btn-danger" type="submit" name="submit" value="Regresar"/></a></center>


	
</body>
</html>