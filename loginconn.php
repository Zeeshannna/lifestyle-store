<?php

$host ="localhost";
$username="root";
$password="";
$dbname="store";

$conn= mysqli_connect($host,$username,$password,$dbname);
if ($conn) {
    echo "connection successfully";
}

else{
    echo " connection error";
}
$email = $_POST['email'];
$pass = $_POST['pass'];





$db ="SELECT * from userdata where email='$email' " ;   //and pass='$pass';

$result=mysqli_query($conn,$db);
$num=mysqli_num_rows($result);
if ($num==1){
    while($row=mysqli_fetch_assoc($result)){
        if (password_verify($pass,$row['pass'])){
           session_start();
           $_SESSION['za']= $email;
           header("location:home.php");

        
        }
        else{
            
            echo '<script>alert("Wrong password"); document.location="index.php"</script>';
        }
        
    }

}
else{
echo '<script>alert("Invalid Username, please valid username"); document.location="index.php"</script>';
   
}
?>
