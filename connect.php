<?php
$servername = "localhost";
$username = "root";
$password = "ras347";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $root, $ras347);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
