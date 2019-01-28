<?php
	echo "------------ CONEXIÓN A LA BDD --------------";
	echo "<br/>";

	require("connect_db.php");
	$mysqli->set_charset("utf8");



	$numero_form = $_POST['numero_form'];

	/* datos registro civil */
	$oficina = $_POST['nom_oficina'];
	$fechaRegis = $_POST['fecha_ins'];
	$provincia = $_POST['prov_regis'];
	$canton = $_POST['canton_regis'];
	$parroquia = $_POST['parroquia_regis'];
	$acta = $_POST['acta_regis'];
    $inec_oficina= $_POST['inec_oficina'];


    
	/* datos establacimiento */

	$tipoE = $_POST['respuestas'];

if(empty($_POST['lugar_esp'])){
    $espe_estab='no hay especificación';
}else{
    $espe_estab=$_POST['lugar_esp'];
}

	$nombreE = $_POST['nom_lugar'];
	$provinciaE = $_POST['prov_lugar'];
	$cantonE = $_POST['canton_lugar']; 
	$parroquiaE = $_POST['parro_lugar']; 
	$localidadE = $_POST['localidad_lugar']; 
	$direccionE = $_POST['dir_lugar']; 
	$telefonoE = $_POST['tel_lugar']; 

	/* datos doctor */


	$tipoD = $_POST['respuesta']; 
if(empty($_POST['lugar_esp'])){
    $Espe_doc='no hay especificación';
}else{
    $Espe_doc=$_POST['asistido_esp'];
}

	/*$descripD = $_POST['respuesta']; */
	$nombreD = $_POST['txt_nomdoc']; 
	$apellidoD = $_POST['txt_apedoc']; 
	$telefonoD = $_POST['txt_teldoc']; 
	$cedulaD = $_POST['txt_ceddoc'];
	$observacionD = $_POST['txt_obsdoc']; 
    $codigoinecD = $_POST['txt_inec']; 


	/* datos madre */
	$nombreM = $_POST['txt_nombremadre']; 
	$apellidoM = $_POST['txt_apemadre']; 
	$cedulaM = $_POST['txt_cedulamad']; 
	$fechaM = $_POST['txt_fechamad']; 
	$edadM = $_POST['txt_edadmad']; 
	$controlesM = $_POST['txt_controles']; 
	$hijosActM = $_POST['txt_hijos']; 
	$hijosVM = $_POST['txt_vivmuer']; 
	$hijosMM = $_POST['txt_muertos']; 
	$nacionalidaM = $_POST['nacionalidad'];
if(empty($_POST['lugar_esp'])){
    $PaisM='no hay especificación';
}else{
    $PaisM = $_POST['txt_extranjera'];
}
   
	$NumEmbM = $_POST['txt_numemba']; 
	$NumparM = $_POST['txt_numpartos']; 
	$etniaM = $_POST['etnia']; 
	$estadoCM = $_POST['estadoC']; 
	$alfaM = $_POST['alfaM']; 
	$instruccionM = $_POST['instruccion']; 
	$provinciaM = $_POST['prov_m']; 
	$cantonM = $_POST['canton_m']; 
	$parroquiaM = $_POST['txt_parroquia']; 
	$localidadM = $_POST['txt_localidad']; 
	$direccionM = $_POST['txt_dire']; 
    $inecM = $_POST['txt_dpa']; 
    $dpaM = $_POST['txt_loc']; 

	/* Datos Nacido Vivo */

	$nombreNV = $_POST['nombre_nv']; 
	$apellidoN = $_POST['apellido_nv']; 
	$sexoN = $_POST['sexo']; 
	$fechaN = $_POST['fecha_nac_nv']; 
	$tallaN = $_POST['talla_nv']; 
	$cedulaN = $_POST['ced_nv']; 
	$pesoN = $_POST['peso_nv']; 
	$semanasGN = $_POST['gestacion_nv']; 
	$tipoPN = $_POST['tipoP']; 
	$apgarN = $_POST['apgar_1']; 
	$apgarN5 = $_POST['apgar_2']; 
	$produceN = $_POST['prodEmb']; 
    $inecN = $_POST['inec_nv']; 
    $dpaN = $_POST['txt_loc1'];


	$checkform=mysqli_query($mysqli,"SELECT * FROM formulario WHERE NUM_FORM ='$numero_form'");
	
	$check_formulario=mysqli_num_rows($checkform);

	if($check_formulario>0){
		echo ' <script language="javascript">alert("Atencion, Ya existe un formulario con ese numero");</script> ';
	
	}else{

	mysqli_query($mysqli,"INSERT INTO `formulario`(`ID_FORM`, `NUM_FORM`) VALUES ('','$numero_form')");
	echo ' <script language="javascript">alert("Formulario registrado con éxito");</script> ';	


    
    $sql="SELECT id_form FROM formulario where NUM_FORM='$numero_form'";
	$result=mysqli_query($mysqli,$sql);

    while($mostrar=mysqli_fetch_array($result)) { $id_formu=$mostrar[0];  } /* id del formulario */


    /* como mostrar el nombre de la provincia y en canton en la base */

    $consulta = "SELECT `ID_PROV`,`NOMBRE_PROV` FROM `provincia` WHERE ID_PROV = '$provincia'";
    $resultado = mysqli_query($mysqli, $consulta);

    while($mostrar=mysqli_fetch_array($resultado)) { $nombre_prov=$mostrar[1];  }

    $consulta1 = "SELECT `id_canton`,`nombre_canton` FROM `canton` WHERE id_canton = '$canton'";
    $resultado1 = mysqli_query($mysqli, $consulta1);

    while($mostrar=mysqli_fetch_array($resultado1)) { $nombre_canton=$mostrar[1]; }

    /* ********************************************************************* /

	/******** INSERT TABLA REGISTRO CIVIL *****************/ 
	mysqli_query($mysqli,"INSERT INTO `registro_civil`(`ID_REGIS`, `ID_FORM`, `OFICINA_REGIS`,`provincia_regis`,`canton_regis`,`PARROQUIA_REGIS`,`FECHAINS_REGIS`, `ACTA_REGIS`,`Cod_Inec_R`) VALUES ('','$id_formu','$oficina','$nombre_prov','$nombre_canton','$parroquia','$fechaRegis','$acta','$inec_oficina')");

	/*********** INSERT ESTABLECIMIENTO *********************/


	/* como mostrar el nombre de la provincia y en canton del establecimiento */

    $consulta2 = "SELECT `ID_PROV`,`NOMBRE_PROV` FROM `provincia` WHERE ID_PROV = '$provinciaE'";
    $resultado2 = mysqli_query($mysqli, $consulta2);

    while($mostrar=mysqli_fetch_array($resultado2)) { $nombre_provE=$mostrar[1]; }

    $consulta3 = "SELECT `id_canton`,`nombre_canton` FROM `canton` WHERE id_canton = '$cantonE'";
    $resultado3 = mysqli_query($mysqli, $consulta3);

    while($mostrar=mysqli_fetch_array($resultado3)) { $nombre_cantonE=$mostrar[1];  }

	mysqli_query($mysqli,"INSERT INTO `establecimiento_de_salud`(`ID_ESTABL`, `ID_FORM`, `TIPO_ESTABL`, `Espe_Establ`,`NOMBRE_ESTABL`, `provincia_establ`,`canton_establ`, `PARROQUIA_ESTABL`, `LOCALIDAD_ESTABL`, `DIRECCION_ESTABL`, `TELEFONO_ESTABL`) VALUES ('','$id_formu','$tipoE', '$espe_estab','$nombreE','$nombre_provE','$nombre_cantonE','$parroquiaE', '$localidadE' , '$direccionE', '$telefonoE')");


	$sql1="SELECT ID_ESTABL FROM establecimiento_de_salud where ID_FORM='$id_formu'";
	$result1=mysqli_query($mysqli,$sql1);

    while($mostrar=mysqli_fetch_array($result1)) { $id_E=$mostrar[0];} /* id del establecimiento */



	/********** INSERT DOCTOR ******************************/

	mysqli_query($mysqli,"INSERT INTO `doctor`(`ID_DOC`, `ID_ESTABL`, `TIPO_DOC`,  `Espe_Doc`,`NOMBRE_DOC`, `APEL_DOC`, `TELEF_DOC`, `CEDUL_DOC`, `OBSERVACION_DOC`, `Cod_Inec_D`) VALUES ('','$id_E','$tipoD','$Espe_doc','$nombreD', '$apellidoD', '$telefonoD', '$cedulaD', '$observacionD', '$codigoinecD')");

	$sql2="SELECT ID_DOC FROM doctor where ID_ESTABL = '$id_E'";
	$result2=mysqli_query($mysqli,$sql2);

    while($mostrar=mysqli_fetch_array($result2)) { $id_D=$mostrar[0];} /* id del establecimiento */

	/********** INSERT MADRE ******************************/



	/* como mostrar el nombre de la provincia y en canton del establecimiento */

    $consulta4 = "SELECT `ID_PROV`,`NOMBRE_PROV` FROM `provincia` WHERE ID_PROV = '$provinciaM'";
    $resultado4 = mysqli_query($mysqli, $consulta4);

    while($mostrar=mysqli_fetch_array($resultado4)) { $nombre_provM=$mostrar[1];  }

    $consulta5 = "SELECT `id_canton`,`nombre_canton` FROM `canton` WHERE id_canton = '$cantonM'";
    $resultado5 = mysqli_query($mysqli, $consulta5);

    while($mostrar=mysqli_fetch_array($resultado5)) { $nombre_cantonM=$mostrar[1]; }


    /* *********************************************************************/

	mysqli_query($mysqli,"INSERT INTO `madre`(`ID_MADRE`, `ID_FORM`, `ID_DOC`, `NOMBRE_MADRE`, `APEL_MADRE`, `CEDUL_MADRE`, `FECHNACH_MADRE`, `EDAD_MADRE`, `CONTROLES_MADRE`, `HIJOSACTUAL_MADRE`, `HIJOSVIVMUER_MADRE`, `HIJOSMUER_MADRE`, `NACIONALIDAD_MADRE`,`PAISE_MADRE`, `NUMEMBARAZ_MADRE`, `NUMPARTOS_MADRE`, `ETNIA_MADRE`, `ESTADOCIVIL_MADRE`, `ALFABETISMO_MADRE`, `INSTRUCCION_MADRE`, `PROV_MADRE`,`CANTON_MADRE`,`PARROQUIA_MADRE`, `LOCALIDAD_MADRE`, `DIRECCIONDOM_MADRE`, `Cod_InecM`, `Dpa_InecM`) VALUES ('','$id_formu','$id_D', '$nombreM', '$apellidoM', '$cedulaM', '$fechaM', '$edadM', '$controlesM', '$hijosActM', '$hijosVM', '$hijosMM','$nacionalidaM','$PaisM', '$NumEmbM', '$NumparM', '$etniaM', '$estadoCM', '$alfaM', '$instruccionM','$nombre_provM','$nombre_cantonM','$parroquiaM', '$localidadM','$direccionM', '$inecM','$dpaM')");

	$sql3="SELECT ID_MADRE FROM madre where ID_FORM = '$id_formu'";
	$result3=mysqli_query($mysqli,$sql3);

    while($mostrar=mysqli_fetch_array($result3)) { $id_M=$mostrar[0];} /* id del establecimiento */




	/********** INSERT NACIDO VIVO ******************************/

	mysqli_query($mysqli,"INSERT INTO `nacido_vivo`(`ID_NV`, `ID_MADRE`, `NOMBRE_NV`, `APEL_NV`, `SEXO_NV`, `FECH_NV`, `TALLA_NV`, `CEDULA_NV`, `PESO_NV`, `SEMANASG_NV`, `TIPOPARTO_NV`, `APGAR_NV`, `APGAR_NV5`, `PRODUCEMBAR_NV`, `Cod_InecNV`, `Dpa_InecNV`) VALUES ('', '$id_M','$nombreNV', '$apellidoN', '$sexoN', '$fechaN','$tallaN', '$cedulaN', '$pesoN', '$semanasGN', '$tipoPN', '$apgarN', '$apgarN5','$produceN','$inecN','$dpaN')");	


	}


?>