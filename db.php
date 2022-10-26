<?php
$host ="localhost";
$username="root";
$password="";
$dbname="store";

$conn= mysqli_connect($host,$username,$password,$dbname);
if ($conn) {
    
}

else{
    echo " connection error";
}
?>
