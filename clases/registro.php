<?php

require 'validar.php';

session_start();

if ( !empty($_POST) ) 
{
	
	$password   =	!empty($_POST['password'])  ? $_POST['password'] : false ;
	$repassword =	!empty($_POST['repassword'])  ? $_POST['repassword'] : false ;
	$email    	=	!empty($_POST['email'])  ? $_POST['email'] : false ;
	$usuario 	=	!empty($_POST['usuario'])  ? $_POST['usuario'] : false ;

	$errores = array();

	if (  validar( $password , $repassword , $email , $usuario ) == true  )
	{
		
		$guardar_usuario = false; #cuando este sea true. el usuario abra sido guardado

		if( count($errores) == 0 ) #si hay 0 errores ciframos 
		{

		$password_cifrada = password_hash($password, PASSWORD_BCRYPT,['cost' => 4 ]);#cifrar 4 veces
		$password_comparacion = password_verify($password, $password_cifrada);
				
			if( $password_comparacion == true ) # si coincide con el hash insertamos query
			{

			
				$pdo = new PDO("mysql:host=localhost;dbname=myndb","root","");
				$sql = "INSERT INTO usuarios (usuID,clave,usuario,email,activado,productos,fecha) VALUES(null,:clave,:usuario,:email,null,null,null)";

				$stmt = $pdo->prepare($sql);

				$stmt->bindParam(":clave",$password_cifrada);
				$stmt->bindParam(":usuario",$usuario);
				$stmt->bindParam(":email",$email);
			
				if($stmt->execute())
				{

				var_dump($stmt);

				$guardar_usuario = true;

				echo "usuario guardado";	
				
				}else{
					echo "no se guardo el usuario";
				}
				

				
				#header("refresh: 3; index.php");
			}
			else{

				$_SESSION['errores']['general'] = 'la contraseña es incorrecta';
				echo "la contraseña es incorrecta";
			}		
		}else{
			echo "fuera del count";
		}

	}else{
		echo 'fuera del validado';
	}

}else{
		//guardamos en la session todos los errrores
		$_SESSION['errores'] = $errores;
		header("refresh: 3; index.php");

	}








