<?php

require_once 'crud.php';

class Usuario extends Crud{

	protected $table = 'usuarios';
	private $nomeUser;
	private $senha;
	private $cpf;



    public function getNome()
    {
        return $this->nomeUser;
    }

    public function setNome($nomeUser)
    {
        $this->nomeUser = $nomeUser;

        return $this;
    }



    public function getCpf()
    {
        return $this->cpf;
    }


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }


    public function setSenha($senha)
    {
        $this->senha= $senha;

        return $this;
    }
 



    public function insert(){
    	$sql = "INSERT INTO $this->table (nomeUser, senha, cpf) VALUES (:nomeUser, :senha, :cpf)";
    	$stmt = DB::prepare($sql);
    	$stmt->bindParam(':nomeUser', $this->nomeUser);
    	$stmt->bindParam(':senha', $this->senha);
    	$stmt->bindParam(':cpf', $this->cpf);

    	return $stmt->execute();

    }

    
  

   
}