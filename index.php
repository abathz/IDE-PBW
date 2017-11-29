<?php
  include("phpScript/connection.php");
  include('phpScript/login.php');
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
    <link rel="stylesheet" href="lib/bootstrap.min.css">
	</head>
	<body class="background">
    <div class="container-fluid">
      <div class="float-right">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
        </ul>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-12">
          <div class="banner">
            <h1>IDE</h1>
            <h4>Interactive Digital Learning Environment</h4>
            <p>-Faculty of Informatics Technology and Science-</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <button id="openModal" class="button">Login</button>
        </div>
      </div>
    </div>
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Login</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="phpScript/login.php">
              <div class="form-group">
                <label>Email address</label>
                <input type="text" class="form-control" name="username" placeholder="Enter email" value="<?php if (isset($_COOKIE['username'])) { echo $_COOKIE['username']; } ?>">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <button id="submit" type="submit" class="btn btn-primary">Submit</button>
              <small id="notif" class="text-danger"></small>
            </form>
            <div style="margin-top:20px;">
              <a href="">Forgot Password</a>
              or
              <a href="">Forgot Username</a>?
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="lib/jquery.min.js"></script>
    <script src="lib/popper.min.js"></script>
    <script src="lib/bootstrap.min.js"></script>
    <script>
      $('#openModal').click(function () {
        $('#myModal').modal();
      });
    </script>
	</body>
</html>
