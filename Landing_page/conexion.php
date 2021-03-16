<?php
  $host_name = 'db607152182.db.1and1.com';
  $database = 'db607152182';
  $user_name = 'dbo607152182';
  $password = 'GePyxis#101';
  $conn = mysqli_connect($host_name, $user_name, $password, $database);

  // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>