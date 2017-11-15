<?php 
	include("phpScript/connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>IDE</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		
	</head>
	<body>
		<div id="upperbut">
			<button type="button" id="but" onclick= " "> About </button>
			<button type="button" id="but" onclick= " "> Contact Us </button>
			<button type="button" id="but" onclick= " "> Help </button>
		</div>
		<div id="content">
			<div id="Big">IDE</div>
			<br>
			<div id ="med">Interacvtive Digital Learning Environment</div>
			<br>
			<br>
			<div id ="small">Faculty of Information Technology and Science</div>
			<br>
			<button id="myBtn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> Login</button>
		</div>
		<div id="about">&copy Developed by Adli Fariz Bonaputra, Muhammad Taufik Adianto</div>
		
		<div id="id01" class="modal">
			<form class= "modal-content animate" action="/action_page.php">
			<div class = "imgcontainer">
				<label><b>Login</b></label>
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
			<div class= "container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>
				
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
				
				<button type="submit">Login</button>
				<span class="psw"><a href="#">Forgot Password?</a> or <a href="#">Forgot Username?</a> </span>
				</div>
			</form>
		</div>
		<script>
		var modal = document.getElementById('id01');
		window.onclick=function(event){
			if(event.target == modal){
				modal.style.display= "none";
				
			}
			
		}
		</script>
	</body>
</html>
