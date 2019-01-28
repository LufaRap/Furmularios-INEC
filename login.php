<?php
require('connect_db.php');
sleep(2);
$usu=$_POST['usuariolg'];
$pass=$_POST['passlg'];
$usuarios=$mysqli->query("SELECT id_user,tipo_user
                        FROM usuarios WHERE usuario_user='".$usu."'
                      AND password_user='".$pass."'");
if ($usuarios->num_rows==1):
  $datos= $usuarios->fetch_assoc();
    echo json_encode(array('error'=>false,'tipo_user'=>$datos['tipo_user']));
else:
    echo json_encode(array('error'=>true));
endif;
$mysqli->close();
 ?>
