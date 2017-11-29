<?php
  include('startSession.php');
  // session_start();
  include('connection.php');
  $username = $_POST['username'];
  $password = $_POST['password'];
  setcookie('username', $username, time() + (86400 * 30), "/");

  if (isset($username) && $username != "" && isset($password) && $password != "") {
    $query = "SELECT * FROM users WHERE username=$username";
    $result = $conn->query($query);
    $row = $result->fetch_array();
    if ($username != $row['username']) {
      echo "WRONG USERNAME!<br>";
      echo "<a href='../index.php'><button>Back</button></a>";
    } else {
      if ($password != $row['pass']) {
      echo "WRONG PASSWORD!<br>";
      echo "<a href='../index.php'><button>Back</button></a>";
      } else {
        $query = "SELECT users.name as name, usergroups.name as role, users.userID as idUser, users.ID_U as id
                  FROM users JOIN usergroups
                  ON users.ID_UG = usergroups.ID_UG
                  WHERE users.username = $username";
        $result = $conn->query($query);
        $row = $result->fetch_array();
        $_SESSION['id'] = $row['id'];
        $_SESSION['idUser'] = $row['idUser'];
        $_SESSION['nama'] = $row['name'];
        $_SESSION['role'] = $row['role'];
        if ($row['role'] == "lecturer") {
          header("Location: ../pages/lecturer/lct.php");
        } else {
          header("Location: ../pages/student/std.php");
        }
      }
    }
  }
?>