<?php
  $conn = new mysqli("localhost", "root", "root123", "ide");

  if ($conn->connect_errno) {
    echo "Failed connect to database.";
  }
?>