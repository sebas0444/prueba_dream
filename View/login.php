<?php 

include "./View/fb-init.php";

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://localhost/ejemplo_dream/?page=fb-callback', $permissions);

?>

<div class="contenedor">
	<div class="img"><img src="./View/images/login.jpg"></div>
	<div class="log">
		<p>entrar con</p>
		<?php 
			echo '<a href="' . htmlspecialchars($loginUrl) . '"><div><span>facebook</span></div></a>';
		?>
	</div>
</div>