<?php  

class usuarios
{

	private $clave;
	private $usuario;
	private $email;
	

	private function crearUsuario()
	{

	}
	private function iniciarSesion()
	{
		$pdo = Conexion::conectar();
		$sql = 'SELECT clave,usuario FROM usuarios WHERE clave = :clave AND usuario = :usuario';
		$stmt = $pdo->prepare($sql);
		$stmt -> bindParam(':clave',$clave);
		$stmt -> bindParam(':usuario',$usuario);
		$stmt -> execute();
		return $stmt;
	}

    /**
     * @return mixed
     */
    public function getUsuID()
    {
        return $this->usuID;
    }

    /**
     * @param mixed $usuID
     *
     * @return self
     */
    public function setUsuID($usuID)
    {
        $this->usuID = $usuID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * @param mixed $clave
     *
     * @return self
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     *
     * @return self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivado()
    {
        return $this->activado;
    }

    /**
     * @param mixed $activado
     *
     * @return self
     */
    public function setActivado($activado)
    {
        $this->activado = $activado;

        return $this;
    }
}