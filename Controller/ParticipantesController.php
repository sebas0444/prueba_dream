<?php  

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParticipantesController
 *
 * @author Sebastian Aldas 2018-04-05
 */

include './../Entity/ParticipantesEntity.php';

if(isset($_POST["crud"]))
{
	$crud = $_POST["crud"];
	$participante = new ParticipantesEntity();

	switch ($crud) {
		case 'listAll':
				$result = $participante->listAll();
				$html = '';
				foreach ($result as $fila) 
				{
					$html .= '<div class="participante">
								<a href="./?page=perfil&&id='.$fila["id"].'">
									<img src="'.$fila["foto"].'">
									<div class="info_participante">
										<span>'.$fila["nombre"]." ".$fila["apellido"].'</span>
									</div>
								</a>
							</div>';
				}
				echo $html;
			break;

		case 'listParameter':
				$id = $_POST["id"];
				$result = $participante->listParameter($id);
				echo json_encode($result);
			break;
		
		default:

			break;
	}
}

?>