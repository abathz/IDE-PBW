<?php 
	include("phpScript/connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>IDE</title>		
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="lib/w3.css">
			<link rel="stylesheet" href="lib/w3-theme-dark-grey.css">
			<link rel="stylesheet" href="style/style.css">
			<link rel="stylesheet" href="lib/font-awesome.min.css">
			<link rel="stylesheet" href="lib/font-awesome.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
				
	</head>
	<body>
		<div class="bgIdx">
			<div class="btnIdx">
			 <a href="index.php" class="w3-bar-item w3-button"> About us </a>
			 <a href="index.php" class="w3-bar-item w3-button"> Contact us </a>
			 <a href="index.php" class="w3-bar-item w3-button"> Home </a>
		</div>
<!--<div class="backgroudIndex"><img src="img/bgImg.jpg" alt="Background halaman "/></div>-->
	<!--<div class="w3-bar">-->	
		<?php
			include("phpScript/login.php");
		?>
		<div class="tlsIdx">
		<h1 id="ide"> IDE </h1><br>
		<p> Interactive Digital Learning Environment </p>
		<sup> -Faculty of Information Technology and Science- </sup><br><br>
		<button type="button" class="btn-style btn-opac" data-toggle="modal" data-target="#login">Login</button>
		</div>
				
		<div class="bwhIdx">
	<sub>&copy; Developed by Maria Veronica Claudia</sub>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
