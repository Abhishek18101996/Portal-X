<?php

$servername = "localhost";

$user_id = "root";
$pswd = "";
$dbname = "login";


$user=$_POST["user_id"];
$password=$_POST["pswd"];


$deviceid=$_POST["d_id"];



// Create connection
$conn = mysqli_connect($servername, $user_id, $pswd,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO login (user_id,password)
 VALUES ('$user','$password')";



$sql1 = "INSERT INTO device (d_id)
 VALUES ('$deviceid')";


if (mysqli_query($conn, $sql1)) {
  //  echo "<h1><b>Your data has be taken successfully<b></h1>";
} else {
    echo  mysqli_error($conn);
}


if (mysqli_query($conn, $sql)) {
   echo "registered";
} else {
    echo  mysqli_error($conn);
}




mysqli_close($conn);

?>