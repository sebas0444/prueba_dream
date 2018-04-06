<?php  

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParticipantesEntity
 *
 * @author Sebastian Aldas 2018-04-05
 */

include './Connection.php';
include './../Entity/Crud.php';

class ParticipantesEntity implements Crud 
{
	private $id;
	private $nombre;
	private $apellido;
	private $foto;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}

	public function getFoto()
	{
		return $this->foto;
	}

	public function setFoto($foto)
	{
		$this->foto = $foto;
	}

	private $conn;

	public function create($query)
	{

	}

	public function update($query)
	{

	}

	public function delete($query)
	{

	}

	public function read($query)
	{

	}

	public function listAll()
	{
		$query = "select * from participantes";
		$result = $this->conn->query($query);
		$datos = array();
		if($result)
		{
			while($info = mysqli_fetch_array($result))
			{
				$datos[] = array(
					"id" => $info[0],
					"nombre" => $info[1],
					"apellido" => $info[2],
					"foto" => $info[3]
				);
			}
			$result->close();
			$this->conn->next_result();
		}
		else
		{
			echo "Error de sintaxis";
		}
		return $datos;
	}

	public function listParameter($parameter)
	{
		$query = "select * from participantes where par_id = " . $parameter;
		$result = $this->conn->query($query);
		$datos = array();
		if($result)
		{
			while($info = mysqli_fetch_array($result))
			{
				$datos[] = array(
					"id" => $info[0],
					"nombre" => $info[1],
					"apellido" => $info[2],
					"foto" => $info[3]
				);
			}
			$result->close();
			$this->conn->next_result();
		}
		else
		{
			echo "Error de sintaxis";
		}
		return $datos;
	}
	
	public function __construct()
	{
		$this->conn = Connection::getInstance()->getConnection();
	}
}

?>