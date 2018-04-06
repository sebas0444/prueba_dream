<?php 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author Sebastian Aldas 2018-04-05
 */

class Connection 
{
	private $db;
	static private $instance;

	public function getConnection()
	{
		return $this->db;
	}

	public function closeConne()
	{
		return $this->close();
	}

	public static function getInstance() 
    {
        if (!self::$instance) 
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

	public function __construct()
	{
		$this->db = mysqli_connect("localhost", "root", "", "db_dream", "3306") or die(mysql_error());
	}
}

 ?>