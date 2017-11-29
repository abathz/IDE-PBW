<?php
  include('../../phpScript/startSession.php'); // session_start()
  // session_start();
  $id = $_SESSION['idUser'];
  $name = $_SESSION['nama'];
  $link = $_SESSION['role'] == 'lecturer' ? 'lct.php' : 'std.php';
?>
<div class="float-left">
  <div class="sidebar">
    <p class="small">You are logged in as</p>
    <?php
      echo "<h5><strong>" . $id . "</strong></h5>";
      echo "<h5>" . $name . "</h5>";
    ?>
    <div style="border-bottom: 3px solid #aaa; margin-top: 10px;"></div>
    <div class="border-img">
      <img class="img-fluid" src="../../img/profile.png" alt="">
    </div>
    <table>
      <tr>
        <td><i class="fa fa-home"></i></td>
        <td><a href="<?php echo $link; ?>">HOME</a></td>
      </tr>
      <tr>
        <td><i class="fa fa-list"></i></td>
        <td><a href="">MY COURSE</a></td>
      </tr>
      <tr>
        <td><i class="fa fa-user"></i></td>
        <td><a href="">MY PROFILE</a></td>
      </tr>
      <tr>
        <td><i class="fa fa-power-off"></i></td>
        <td><a href="../../phpScript/logout.php">LOG OUT</a></td>
      </tr>
    </table>
  </div>
</div>