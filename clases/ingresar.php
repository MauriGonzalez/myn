<?php

#AGREGANDO PHPmailer clase 11 , min 53:00

require 'conexion.php';
 
if ( !empty($_POST) ) 
{

    $password   =	!empty($_POST['password'])  ? $_POST['password'] : false ;
    $email 	=	!empty($_POST['email'])  ? $_POST['email'] : false ;

    $pdo = conexion::conectar();


	$sql = 'SELECT COUNT(email) as existe , pass
			FROM usuarios 
			WHERE email=:email and activacion = 1';

	$stmt = $pdo -> prepare($sql);
	$stmt -> bindParam(':email', $_POST['email']);

	if ($stmt -> execute()) {

		echo 'consulta realizada con exito <br>';
		foreach ($stmt as $respuesta){
		
		if ( $respuesta['existe'] == 1) {

            echo "el mail existe <br>";
              
			if( password_verify($_POST['pass'], $respuesta['pass'] )){
				echo "iniciar sesion";

				session_start();
				#variable de session, estas son compartidas durante todas las paginas donde tenga el session start. si en la pagina queremos usar la variable que se encuenrta acá $_SESSION['email'] podremos usarla
				$_SESSION['email'] = $_POST['email'];

				header('Location: ../07-clase/listado.php'); #reedirige a la pag Listado .. vuelve al dir anterior

			}else{
				echo "contraseña invalida";
			}
			
		}elseif($respuesta['existe']==0){
			echo "el mail no a sido activado";
		}
		
		}
	

    }



}