<?php  

if(!session_id()) {
    session_start();
}

echo "<script>alert('Bienvenido ".$_SESSION["user"]."');</script>";

?>

<div class="contenedor">
	<div class="cont">
		<div class="cont_img">
			<img src="./View/images/img_1.jpg">
			<div class="menu">
				<div class="cont_menu">
					<a href="#">
						Votación
					</a>
					<a href="#">
						Bases del Concurso
					</a>
					<a href="#">
						Terminos y Condiciones
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="cont">
		<div class="cont_img">
			<img src="./View/images/img_2.jpg">
			<div class="info">
				<p class="info_1">
					Elije a tu deportista favorito y
					dale la oportunidad de poder 
					subir al Cotopaxi con dos
					expertos de la montaña.
				</p>
				<p class="info_2">
					Vota y comparte tu publicación para
					que mas amigos se sumen a tu apoyo
				</p>
				<a href="#">IR A VOTACIONES</a>
			</div>
		</div>
	</div>
	<div class="cont">
		<div class="cont_img">
			<img src="./View/images/img_3.jpg">
			<div class="calendar">
				<p>El tiempo para elegir a los ganadores termina en:</p>
				<div class="calendario">
					<div class="tiempo">
						<div class="fecha"><span class="sp_dia"></span></div>
						<div class="inf_time">DÍAS</div>
					</div>
					<div class="tiempo">
						<div class="fecha"><span class="sp_hor"></span></div>
						<div class="inf_time">HORAS</div>
					</div>
					<div class="tiempo">
						<div class="fecha"><span class="sp_min"></span></div>
						<div class="inf_time">MINUTOS</div>
					</div>
					<div class="tiempo">
						<div class="fecha"><span class="sp_seg"></span></div>
						<div class="inf_time">SEGUNDOS</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cont">
		<div class="cont_img">
			<img src="./View/images/img_4.jpg">
			<div class="votacion">
				<div class="encabezado">
					<span>Vota por tu deportista favorito</span>
				</div>
				<div class="contenido">
					<div id="div_participantes"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="./View/js/main.js"></script>