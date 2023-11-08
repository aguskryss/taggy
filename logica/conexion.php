<?php
$servername = "185.211.7.52";
$username = "u969145192_taggy";
$password = "Taggy2023";

try {
  $conn = new PDO("mysql:host=$servername;dbname=u969145192_taggy", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>