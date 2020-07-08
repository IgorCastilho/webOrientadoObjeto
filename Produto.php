<?php

require_once 'crud.php';

class Produto extends Crud{

	protected $table = 'produtos';
	private $titulo;
	private $valor;
	private $quantidade;



    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }



    public function getValor()
    {
        return $this->valor;
    }


    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }


    public function setQuantidade($quantidade)
    {
        $this->quantidade= $quantidade;

        return $this;
    }
 



    public function insert(){
    	$sql = "INSERT INTO $this->table (titulo, valor, quantidade) VALUES (:titulo, :valor, :quantidade)";
    	$stmt = DB::prepare($sql);
    	$stmt->bindParam(':titulo', $this->titulo);
    	$stmt->bindParam(':valor', $this->valor);
    	$stmt->bindParam(':quantidade', $this->quantidade);

    	return $stmt->execute();

    }

    
  

   
}