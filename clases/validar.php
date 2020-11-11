<?php

function validar( $password , $repassword , $email , $usuario ) 
{



	#validar datos (https://www.youtube.com/watch?v=kCH6xh6oVSs)


	$passwordValidado = false; 
	$emailValidado = false;
	$usuarioValidado = false;


	
	#password
	if (!empty($password) && !empty($repassword) )  {

			if ($password == $repassword) {

				$passwordValidado = true; 
				
			}else{

				$errores['password'] = 'las contraseñas no coinciden';
				$passwordValidado = false; 
			}

	}else{

		$errores['password'] = 'error en validacion del password';
		$passwordValidado = false;
	}



	if (!empty($usuario ) &&
	    !is_numeric($usuario ) &&
	    !is_numeric($usuario [0]) )  {

		$usuarioValidado = true;
	
		}else{

			$errores['usuario'] = 'error en validacion del usuario';
			$usuarioValidado = false;
		}


	#email
	if (!empty($email) &&
		filter_var($email,FILTER_VALIDATE_EMAIL)  )  {

		$emailValidado = true;

		}else{

			$errores['email'] = 'error en validacion del email';
			$emailValidado = false;
		}

	
	
	if ( 

		($passwordValidado == true) &&  
		($emailValidado == true) &&
		($usuarioValidado == true)
	) {
		echo "esta todo correcto";
		return true;
		
	}else{
		echo "algo salio mal xd";
		var_dump($errores);
		return false;

	}
}	


					