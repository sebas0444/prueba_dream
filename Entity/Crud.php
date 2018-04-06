<?php 

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

/**
* Description of ICrud
*
* @author Sebastian Aldas 208-04-05
*/

interface Crud
{
	public function create($query);
	public function read($query);
	public function update($query);
	public function delete($query);
	public function listALL();
	public function listParameter($parameter);
}

?>