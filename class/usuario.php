<?php 

class Usuario {

	private $idUsuario;
	private $loginUsuario;
	private $senhaUsuario;
	private $dataUsuario;

	public function loadById($id) {
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID", array(
			":ID"=>$id
		));

		if ( isset($results) && !empty($results) ) {
			$row = $results[0];

			$this->setIdUsuario($row['id_usuario']);
			$this->setLoginUsuario($row['login_usuario']);
			$this->setSenhaUsuario($row['senha_usuario']);
			$this->setDataUsuario($row['data_usuario']);
		}
	}

	public function __toString(){
		return json_encode(array(
			"idusuario"=>$this->getIdUsuario(),
			"loginUsuario"=>$this->getLoginUsuario(),
			"senhaUsuario"=>$this->getSenhaUsuario(),
			"dataUsuario"=>$this->getDataUsuario()
		));
	}



    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $idUsuario
     *
     * @return self
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLoginUsuario()
    {
        return $this->loginUsuario;
    }

    /**
     * @param mixed $loginUsuario
     *
     * @return self
     */
    public function setLoginUsuario($loginUsuario)
    {
        $this->loginUsuario = $loginUsuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenhaUsuario()
    {
        return $this->senhaUsuario;
    }

    /**
     * @param mixed $senhaUsuario
     *
     * @return self
     */
    public function setSenhaUsuario($senhaUsuario)
    {
        $this->senhaUsuario = $senhaUsuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataUsuario()
    {
        return $this->dataUsuario;
    }

    /**
     * @param mixed $dataUsuario
     *
     * @return self
     */
    public function setDataUsuario($dataUsuario)
    {
        $this->dataUsuario = $dataUsuario;

        return $this;
    }
} 

?>