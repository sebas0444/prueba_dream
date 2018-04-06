<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./View/css/style.css">
	<link rel="stylesheet" type="text/css" href="./View/css/styleIcon.css">

	<script type="text/javascript" src="./View/js/jquery-3.2.1.js"></script>
</head>
<body>
	<div class="main">
		<?php 
			if(isset($_GET["page"]))
			{
				include "./View/".$_GET["page"].".php";
			}
			else
			{
				include "./View/login.php";
			}
		?>
	</div>
</body>
</html>