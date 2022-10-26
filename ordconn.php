<?php
//  PROCESS RESULT
$result = "";

//  CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN!
$dbhost = "localhost";
$dbname = "test";
$dbchar = "utf8";
$dbuser = "root";
$dbpass = "";
try {
  $pdo = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
    $dbuser, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { $result = $ex->getMessage(); }

//  SAVE ORDER TO DATABASE
if ($result=="") {
  try {
    $stmt = $pdo->prepare("INSERT INTO `orders` (`name`, `email`, `qty`) VALUES (?,?,?)");
    $stmt->execute([$_POST["name"], $_POST["email"], $_POST["qty"]]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}


?>