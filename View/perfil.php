<?php  ?>

<div class="contenedor">
	<input type="hidden" name="txt_id" id="txt_id" value="<?php echo $_GET['id']; ?>">
	<div class="inf_part">
		<img src="" id="img_foto" class="foto">
		<img src="./View/images/footer.png" class="footer">
	</div>
	<div class="fondo">
		<img src="./View/images/img_5.png">
	</div>
	<div class="votar">
		<p><label id="lbl_nombre"></label></p>
		<a href="./?page=success&&id=<?php echo $_GET['id'];  ?>">VOTAR</a>
		<div class="cont_votos">
			<div class="like"><span class="icon-checkmark"></span></div>
			<div class="votos"><span>75</span></div>
		</div>
		<div class="redes_sociales">
			<p>compartir</p>
			<div class="redes_soc">
				<a href="#"><span class="icon-facebook"></span></a>
			</div>
			<div class="redes_soc">
				<a href="#"><span class="icon-twitter"></span></a>
			</div>
			<div class="redes_soc">
				<a href="#"><span class="icon-instagram"></span></a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="./View/js/main.js"></script>