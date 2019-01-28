<!DOCTYPE html>
<htm>
    <head>
       
	    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->

	     <title>Formulario</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet " type="text/css" href="estilos.css"/>

        <script>
     $( function() {
        $( "#fecha" ).datepicker({
      numberOfMonths: [ 1, 1],
      minDate:new Date(1940,01,01)
      });
    });
 </script>

    </head>
    
    
 <div id="logos">

        <tr>
          <td ><img src="imagenes/enc1.PNG"></td>
          <td ></td>
          <td ><img src="imagenes/enc2.PNG"><img src="imagenes/enc3.PNG"><img src="imagenes/enc4.PNG"></td>
          <td ><img src="imagenes/enc5.PNG"></td>

        </tr> 
 </div>
 
    
 <body>
 

 
<div class="titulo">
  <h1> FORMULARIO DE NACIDO VIVO</h1>
</div>


   

      <table>
        
        <tr>
          <td scope="col" colspan="7" >
            <h7><i>La información de este recuadro deberá ser llenados por funcionarios 
            de las oficinas del Registro Civil, en el momento de la inscripción</i></hr7>
          </td>
        </tr>

          <tr>
          <td scope="row" colspan="2">
        
            <div class="form-group">
                  <label for="txt_nombre"><h5>1) OFICINA DE REGISTRO CIVIL DE: <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required>
            </h5></label>
                  
            </div>
            </td>

          <td colspan="6">

          
               <div class="form-group">

                  
               
                <label for="txt_nomdoc"> <h5><strong>USO INEC </strong><input type="text" class="form-control" id="txt_nomdoc" name="txt_nomdoc" placeholder="" required></h5>
                </label>
            </div>

            <div class="form-group">
                  <label for="inputPassword6"><h5>3) FECHA DE INSCRIPCIÓN:  <input type="txt" id="inputPassw  ord6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline"><h5></label>
                 
              </div>


            </td>
         </tr>

         <tr>
          <td scope="row" colspan="2">
              <div class="form-group">

                    <label for="sel1"><h5>PROVINCIA: <select class="form-control" id="txt_ge" name="txt_ge" required>
                        <option value=""checked>Seleccione</option>
                        <option>masculino</option>
                        <option>femenino</option>
                    </select> <h5></label>
                            
               </div> 

               <div class="form-group">

                    <label for="sel1"><h5>CANTÓN: <select class="form-control" id="txt_ge" name="txt_ge" required>
                        <option value=""checked>Seleccione</option>
                        <option>masculino</option>
                        <option>femenino</option>
                    </select> <h5></label>
                            
               </div> 

              <div class="form-group">
                  <label for="inputPassword6"><h5>  PARROQUIA URBANA o RURAL: <input type="txt" id="inputPassw  ord6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
              </div><h5></label>     

          </td>

          <td colspan="7">
            <div class="form-group">
                  <label for="txt_nombre"><h5>4) ACTA DE INSCRIPCIÓN: <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder=" " required>
            </h5></label>
            </td>
         </tr>

         <tr>
          <th abbr="DATOS DEl NACIDO VIVO" scope="col" colspan="7" >
            <hr4><strong>(A) DATOS DEl NACIDO VIVO</strong></hr4> 
          </th>
         
        </tr

        <tr>
          <tr><th colspan="7">5)</th></tr>

          <td colspan="1"> 

            <div class="form-group">
                <label for="txt_nombre"><h5>NOMBRES: <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required>
                 </h5></label>
                  
            </div>
          </td>

          <td colspan="3"> 

            <div class="form-group">
                <label for="txt_nombre"><h5>APELLIDOS: <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required>
                 </h5></label>
                  
            </div>
          </td>

          <td colspan="5"> 

            <div class="form-group">
                <label for="txt_nombre"><h5>No. Cédula de ciudadania: <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required>
                 </h5></label>
                  
            </div>
          </td>      
        </tr>

        <tr>
           <td scope="row" colspan="1"><h5>6)SEXO<h5>
          <div class="form-group">
                  <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" id="txt_est" name="txt_est" required>
                  Hombre
                 </label>

           <label class="form-check-label">
                 <input type="checkbox" class="form-check-input" id="txt_est" name="txt_est" required>
                  Mujer
                  </label>
             </div> 

           </td>

           <td scope="row" colspan="2"><h5><strong>13) PRODUCTO DEL EMBARAZO<strong><h5></td>
           <td scope="row" colspan="4"><h5><strong>14) LUGAR DONDE OCURRIO EL NACIMIENTO<strong><h5></td> 
       
        </tr>

       <tr>
         <td colspan="1">7) FECHA DE NACIEMINTO <br><br>
          <div class="form-group">
                <label for="txt_nombre"><input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required>
                 </label>
                  
            </div>

            <div class="form-group">
                <label for="txt_nombre"><h5>8) TALLA <br><input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required>
                 </h5></label>
                  
            </div>

            <div class="form-group">
                <label for="txt_nombre"><h5>9) PESO <br><br><input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required>
                 </h5></label>
                  
            </div>

            <div class="form-group">
                <label for="txt_nombre"><h5>10) SEMANAS DE GESTACION <br><br><input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required>
                 </h5></label>
                  
            </div>

            <div class="form-group">
              <h5>11) TIPO DE PARTO</h5>

              <div class="form-group">
                  <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" id="txt_est" name="txt_est" required>
                  Normal
                 </label>
                 <label class="form-check-label">
                       <input type="checkbox" class="form-check-input" id="txt_est" name="txt_est" required>
                  Cesarea
                        </label>
            </div>

            <div class="form-group">
              <h5>12) APGAR</h5>

              <div class="form-group">

                <label for="txt_nombre">1 min<input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required></label><br><br>

                <label for="txt_nombre">2 min<input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required></label>
                </div>

            </div>

         </td>
         <td colspan="2">
           <div class="form-group">
                  <label class="form-check-label">
                  Simple  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                  1
                  </label>
             
                 <br>
                 <br>
               
                 <label class="form-check-label">
                  Doble &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                   2  
                  </label>
            
                 <br>
                 <br>
                   <div class="form-group">
                 <label class="form-check-label">
                  Triple  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                   3 
                  </label>
                 </div>
                 <br>
                 <br>
                   <div class="form-group">
                 <label class="form-check-label">
                  Cuádruple o<br> más &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                   4 
                  </label>
              </div>
              <br><br><br><br>
                  <div>
                    <p>En el caso de no ser <br>  simple se debe <br>considerar que para <br>cada nacido <br>vivo corresponde <br>llenar un formulario <br>de forma independiente</p>
                  </div>
                
              </div>
         </td>

         <td colspan="3">
          <div class="form-group">
                  <label class="form-check-label">
                  Establecimiento del minesterio <br> de salud 
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                  1
                  </label>
        
                 <br>
                 <br>
               
                 <label class="form-check-label">
                  Establecimiento del IESS &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                   2  
                  </label>
            
                 <br>
                 <br>
              <div class="form-group">
                 <label class="form-check-label">
                  Establecimiento de la junta 
                  <br>de beneficencia 
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                   3 
                  </label>
                 </div>
                 <br>
                 <br>
              <div class="form-group">
                 <label class="form-check-label">
                  Otro establecimiento público <br>
                  (Municipios, consejos, <br>Provinciales
                  FF.AA.,Policia,etc.)  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                   4 
                  </label>
              </div> <br><br>

              <div class="form-group">
                 <label class="form-check-label">
                  Hospital, clinica o consultorio <br> privado  
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                   5 
                  </label>
              </div><br><br>

              <div class="form-group">
                 <label class="form-check-label">
                  Casa &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  &nbsp &nbsp &nbsp &nbsp
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                  6 
                  </label>
              </div><br><br>

              <div class="form-group">
                 <label class="form-check-label">
                  Otro &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  &nbsp &nbsp &nbsp &nbsp
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                  7 
                  </label>
              </div>

              <br><br>
              <div class="form-group">
                <label for="txt_nombre"><i>Especificique <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required>
                 </i></label>  
                </div>
                
              </div>

              <div class="form-group">
                <h5> 15) Asistido por:  <strong>RESPUESTA ÚNICA</strong></h5>
              </div>

                <div class="form-group">
                <label class="form-check-label">
                  Médico &nbsp &nbsp 1
                <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                </label>

                <label class="form-check-label">
                  Obstetriz/Obstetra &nbsp &nbsp 2
                <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                </label> 

                <label class="form-check-label">
                  Enfermero/a &nbsp &nbsp 3
                <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                </label> <br><br>

                <label class="form-check-label">
                  Auxiliar de enfermería &nbsp &nbsp 4
                <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                </label>  

                <label class="form-check-label">
                  Partero/a calificada &nbsp 5
                <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                </label> <br><br>

                <label class="form-check-label">
                  Partero/a no calificada &nbsp 6
                <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                </label>

                <label class="form-check-label">
                  Otro &nbsp 7
                <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                </label> <br><br>

                <div class="form-group">
                <label for="txt_nombre"><i>Especificique <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required>
                 </i></label>  
                </div>

              </div>
           
         </td>

         <td colspan="4">

          
            <div class="form-group">

            <h5 style="text-align: center;"><strong>USO INEC</strong><br>
            <i>Codigo del establecimiento de salud</i><br><br>

            <label for="txt_nomdoc"><input type="text" class="form-control" id="txt_nomdoc" name="txt_nomdoc" placeholder="" required>
            </label></h5>
            </div>

             <div class="form-group">
                <label for="txt_nombre"><h5>14.1) Nombre del Lugar <br> (Establecimiento de Salud) <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required></h5>
                </label>  
            </div>

            <div class="form-group">

                    <label for="sel1"><h5>14.2) Provincia: <select class="form-control" id="txt_ge" name="txt_ge" required>
                        <option value=""checked>Seleccione</option>
                        <option>masculino</option>
                        <option>femenino</option>
                    </select> <h5></label>
                            
               </div> 

               <div class="form-group">

                    <label for="sel1"><h5>14.3) Cantón: <select class="form-control" id="txt_ge" name="txt_ge" required>
                        <option value=""checked>Seleccione</option>
                        <option>masculino</option>
                        <option>femenino</option>
                    </select> </h5></label>
                            
               </div> 

              <div class="form-group">
                  <label for="inputPassword6"><h5>14.4) Parroquía urbana o rural: <input type="txt" id="inputPassw  ord6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
              </div></h5></label> 

              <div class="form-group">
                  <label for="inputPassword6"><h5>14.5) Localidad: <input type="txt" id="inputPassw  ord6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
              </div></h5></label> 

              <div class="form-group">
                  <label for="inputPassword6"><h5>14.6) Dirección: <input type="txt" id="inputPassw  ord6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
              </div></h5></label> 

              <div class="form-group">
                  <label for="inputPassword6"><h5>14.7) Teléfono: <input type="txt" id="inputPassw  ord6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
              </div></h5></label> 

              <div class="form-group">

                  <h5 style="text-align: center;"><strong>USO INEC</strong><br>
              <i>DPA</i><br><br>

              <label for="txt_nomdoc"><input type="text" class="form-control" id="txt_nomdoc" name="txt_nomdoc" placeholder="" required>
              </label></h5>
              
              </div>
            

         </td>
       </tr>

        <tr>
          <th abbr="DATOS DE LA MADRE" scope="col" colspan="7" >
            <hr4><strong>(B) DATOS DE LA MADRE</strong></hr4>
            
          </th>
         
        </tr>
          
        <tr>
          <th scope="row" abbr="Madre"><h5>16)NOMBRE Y APELLIDOS<h5>
           
            <div class="form-group">
               
                <label for="txt_nombremadre"><input type="text" class="form-control" id="txt_nombremadre" name="txt_nombremadre" placeholder="" required>
                </label>
                  
            </div>
          
          </th>
          
           <td colspan="3"><h5><strong>17)NACIONALIDAD<strong><h5>
           
           
           <div class="form-group">
                  <label class="form-check-label">
                  Ecuatoriana  &nbsp
                  <input type="checkbox" class="form-check-input" id="txt_nacionalidad" name="txt_nacionalidad" required>
                  1
                  </label>
                 <br>
                 <label class="form-check-label">
                  Extrajera  &nbsp  &nbsp  &nbsp
                  <input type="checkbox" class="form-check-input" id="txt_nacionalidad" name="txt_nacionalidad" required>
                   2  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                  <label for="txt_nombremadre"><input type="text" class="form-control" id="txt_nombremadre" name="txt_nombremadre" placeholder="" required>
                </label>
                  </label>

            </div>
           
           
           </td>
           <td colspan="7"><h5><strong>18)CÉDULA DE CIUDADANÍA O PASAPORTE<strong><h5>
           
           <div class="form-group">
               
                <label for="txt_cedulamad"><input type="text" class="form-control" id="txt_cedulamad" name="txt_cedulamad" placeholder="" required>
                </label>
                  
            </div>
           
           
           </td>
        </tr>

         <tr>
          <th scope="row" abbr="Madre"><h5>19) FECHA DE NACIMIENTO<h5>
             <div class="form-group">
                <label for="txt_fechamad"><input type="text" class="form-control" id="txt_fechamad" name="txt_fechamad" placeholder="" required>
                </label>
            </div>
          </th>
          
           <td colspan="2"><strong><h5>20)EDAD DE LA MADRE<strong><h5>
               <div class="form-group">
                <label for="txt_edadmad"><input type="text" class="form-control" id="txt_edadmad" name="txt_edadmad" placeholder="" required>
                </label>
               </div>
            </td>
               
             
           <td colspan="2"><h5><strong>21)¿CUÁNTOS CONTROLES PRENATALES<br/>RECIBIÓ EN ESTE EMBARAZO?<strong></h5>
               <div class="form-group">
                <label for="txt_controles"><input type="text" class="form-control" id="txt_controles" name="txt_controles" placeholder="" required>
                </label>
               </div>
           
           
           </td>
           <td colspan="2"><h5><strong>22)NÚMERO DE EMBARAZOS Y PARTOS<strong><h5>
                <div class="form-group">
                <label for="txt_numemba"><h5>22.1 Número de embarazos<input type="text" class="form-control" id="txt_numemba" name="txt_numemba" placeholder="" required></h5>
                </label>
               
                 <label for="txt_numpartos"> <h5>22.2 Número de partos<input type="text" class="form-control" id="txt_numpartos" name="txt_numpartos" placeholder="" required>
                 </h5>
                </label>
               </div>
           </td>
        </tr>

        <tr>
          <th scope="row" abbr="Madre"><h5>23)¿CUÁNTOS HIJOS VIVOS TIENE ACTUALMENTE?<h5>
              <div class="form-group">
              <label for="txt_hijos"><input type="text" class="form-control" id="txt_hijos" name="txt_hijos" placeholder="" required>
              </label>
              </div>
          </th>
          
          <td colspan="3"><strong><h5>24)¿CUÁNTOS HIJOS VIVOS QUE NACIERON VIVOS HAN MUERTO?<strong><h5>
              <div class="form-group">
              <label for="txt_vivmuer"><input type="text" class="form-control" id="txt_vivmuer" name="txt_vivmuer" placeholder="" required>
              </label>
              </div>
          </td>
          
          <td colspan="7"><h5><strong>25)¿CUÁNTOS HIJOS NACIERON MUERTOS?<strong></h5>
          <div class="form-group">
          <label for="txt_muertos"><input type="text" class="form-control" id="txt_muertos" name="txt_muertos" placeholder="" required>
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
              <h6><i>De acuerdo con la cultura y costumbres</i></h6>
                <div class="form-group">
                  <label class="form-check-label">
                  Indígena  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp
                  <input type="checkbox" class="form-check-input" id="txt_etnia" name="txt_etnia" required>
                  1
                  </label>
              </div>
                 <br>
                 <br>
                 <div class="form-group">
                 <label class="form-check-label">
                  Afroecuatoriana <br>
                  Afrodescendiente  &nbsp  &nbsp  &nbsp &nbsp
                  <input type="checkbox" class="form-check-input" id="txt_etnia" name="txt_etnia" required>
                   2  
                  </label>
              </div>
                  
                 <br>
                 <br>
                  <div class="form-group">
                 <label class="form-check-label">
                  Negra  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_etnia" name="txt_etnia" required>
                   3 
                  </label>
              </div>
                 <br>
                 <br>
                  <div class="form-group">
                 <label class="form-check-label">
                  Mulata   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_etnia" name="txt_etnia" required>
                   4 
                  </label>
              </div>
                  
                 <br>
                 <br>
                  <div class="form-group">
                 <label class="form-check-label">
                  Montubia  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_etnia" name="txt_etnia" required>
                   5 
                  </label>
                    </div>
                 <br>
                 <br>
                  <div class="form-group">
                 <label class="form-check-label">
                  Mestiza  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  
                  <input type="checkbox" class="form-check-input" id="txt_etnia" name="txt_etnia" required>
                   6
                  </label>
                 </div>
                  <br>
                 <br>
                 <div class="form-group">
                 <label class="form-check-label">
                  Blanca  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp  
                  <input type="checkbox" class="form-check-input" id="txt_etnia" name="txt_etnia" required>
                   7
                  </label>
              </div>
                  <br>
                 <br>
                 <div class="form-group">
                 <label class="form-check-label">
                  Otro  &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp
                  <input type="checkbox" class="form-check-input" id="txt_etnia" name="txt_etnia" required>
                   8
                  </label>

            </div>
             
          </td>
          <td rowspan="2" colspan="1">    
              <div class="form-group">
                  <label class="form-check-label">
                  Unida  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                  1
                  </label>
             
                 <br>
                 <br>
               
                 <label class="form-check-label">
                  Soltera &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                   2  
                  </label>
            
                 <br>
                 <br>
                   <div class="form-group">
                 <label class="form-check-label">
                  Casada  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                   3 
                  </label>
                 </div>
                 <br>
                 <br>
                   <div class="form-group">
                 <label class="form-check-label">
                  Divorciada  &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                   4 
                  </label>
              </div>
                 <br>
                 <br>
                   <div class="form-group">
                 <label class="form-check-label">
                  Separada  &nbsp &nbsp &nbsp &nbsp
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                   5 
                  </label>
              </div>
                 <br>
                 <br>
              <div class="form-group">
                 <label class="form-check-label">
                  Viuda  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_estado" name="txt_estado" required>
                   6
                  </label>
          
          
              </div>
      
          
          </td>
          
          <td rowspan="2 " colspan="2">   
               <h6>¿SABE LEER Y ESCRIBIR?</h6>
                <div class="form-group">
                  <label class="form-check-label">SI
                  <input type="checkbox" class="form-check-input" id="txt_leer" name="txt_leer" required>
                   1
                 </label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                 <label class="form-check-label">NO
                 <input type="checkbox" class="form-check-input" id="txt_leer" name="txt_leer" required>
                  2
                  </label>
                <br>
                <h6>NIVEL DE INSTRUCCIÓN ALCANZADO</h6>
                <br>
                <label class="form-check-label">
                  Ninguno &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp
                <input type="checkbox" class="form-check-input" id="txt_nivel" name="txt_nivel" required>
                  0
                  </label>

                 <br>
                 <br>

                 <label class="form-check-label">
                  Centro de <br>Alfabetización  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                  <input type="checkbox" class="form-check-input" id="txt_nivel" name="txt_nivel" required>
                   1  
                  </label>  
                 <br>
                 <br>

                 <label class="form-check-label">
                  Primaria  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_nivel" name="txt_nivel" required>
                   2 
                  </label>
                  
                 <br>
                 <br>
                 <label class="form-check-label">
                  Secundaria   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_nivel" name="txt_nivel" required>
                   3 
                  </label>
                  
                 <br>
                 <br>

                 <label class="form-check-label">
                  Educación Básica  &nbsp &nbsp &nbsp&nbsp
                  <input type="checkbox" class="form-check-input" id="txt_nivel" name="txt_nivel" required>
                   4
                  </label>
                  
                 <br>
                 <br>
                 <label class="form-check-label">
                  Edyacación Media/<br>
                  Bachillerato  &nbsp  &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp
                  <input type="checkbox" class="form-check-input" id="txt_nivel" name="txt_nivel" required>
                   5
                  </label>
                  
                  <br>
                 <br>
                 <label class="form-check-label">
                  Ciclo <br> postbachillerato  &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_nivel" name="txt_nivel" required>
                  6
                  </label>
                  
                 <br>
                 <br>
                 <label class="form-check-label">
                  Superior  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_nivel" name="txt_nivel" required>
                   7
                  </label>
                  
                  <br>
                 <br>
                 <label class="form-check-label">
                  Posgrado  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp 
                  <input type="checkbox" class="form-check-input" id="txt_nivel" name="txt_nivel" required>
                   8
                  </label>
             </div> 
           
            
          </td>
          <td colspan="4">  
                  <div class="form-group">

                    <label for="sel1"><h5>PROVINCIA: <select class="form-control" id="txt_ge" name="txt_ge" required>
                        <option value=""checked>Seleccione</option>
                        <option>masculino</option>
                        <option>femenino</option>
                    </select> <h5></label>
                            
               </div> 

               <div class="form-group">

                    <label for="sel1"><h5>CANTÓN: <select class="form-control" id="txt_ge" name="txt_ge" required>
                        <option value=""checked>Seleccione</option>
                        <option>masculino</option>
                        <option>femenino</option>
                    </select> <h5></label>
                            
               </div> 

                
           <div class="form-group">
               
                <label for="txt_parroquia"><input type="text" class="form-control" id="txt_parroquia" name="txt_parroquia" placeholder="" required>
                </label>
                  
            </div>
              <br>
               <br>
             <div class="form-group">
               
                <label for="txt_localidad"><input type="text" class="form-control" id="txt_localidad" name="txt_localidad" placeholder="" required>
                </label>
                  
            </div>
             <br>
             <br>
                <div class="form-group">
               
                <label for="txt_dire"><input type="text" class="form-control" id="txt_dire" name="txt_dire" placeholder="" required>
                </label>
                  
            </div>
          </td>
          
        </tr>

        <tr>
          <td colspan="3">      
            <div class="form-group">
               <CENTER><h6>USO INEC</h6></CENTER>
                <label for="txt_dpa"><input type="text" class="form-control" id="txt_dpa" name="txt_dpa" placeholder="" required>
                </label>   &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  
                 <label for="txt_loc"><input type="text" class="form-control" id="txt_loc" name="txt_loc" placeholder="" required>
                </label> 
            </div>
               
                    
          </td>
        </tr>
        
      <tr>
          <th abbr="DATOS DE LA MADRE" scope="col" colspan="7" >
            <hr4><strong>(C)INFORMACIÓN GENERAL</strong></hr4>
          </th>
         
        </tr>
        
        <tr>
          <th scope="row" abbr="Madre" colspan="7"><h5>30)DATOS DE LA PERSONA QUE ATENDIÓ EL PARTO<h5>
              <div class="form-group">
               
                <label for="txt_nomdoc"><input type="text" class="form-control" id="txt_nomdoc" name="txt_nomdoc" placeholder="" required>
                </label>
                 <label for="txt_ceddoc"><input type="text" class="form-control" id="txt_ceddoc" name="txt_ceddoc" placeholder="" required>
                </label>
                 <label for="txt_teldoc"><input type="text" class="form-control" id="txt_teldoc" name="txt_teldoc" placeholder="" required>
                </label>
                 <label for="txt_firmadoc"><input type="text" class="form-control" id="txt_firmadoc" name="txt_firmadoc" placeholder="" required>
                </label>
                  
            </div>
          
          
          </th>
           
        </tr>
        
        <tr>
          <th scope="row" abbr="Madre" colspan="5"><h5>OBSERVACIONES<h5>
                <div class="form-group">
               
                <label for="txt_nomdoc"><input type="text" class="form-control" id="txt_nomdoc" name="txt_nomdoc" placeholder="" required>
                </label>
               
                  
            </div>
          
          </th>
          <td colspan="4">

            <h5><strong>USO INEC<strong></h5>
          
               <div class="form-group">
               
                <label for="txt_nomdoc"><input type="text" class="form-control" id="txt_nomdoc" name="txt_nomdoc" placeholder="" required>
                </label>
            </div>
          
          </td>
        </tr>
        
        
</table>


    </div>
    <div class="col-sm">
      
    </div>

  </div>
</div>


              
                                
                                    
                                        
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        
                                                                            
                                                                                
                                                                                    
                                                                                        
                                                                                            
                                                                                                
                                                                                                    
                                                                                                        
                                                                                                            
                                                                                                                
                                                                                                                
                                                                                                                            
        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    </body>
    
  
</htm>