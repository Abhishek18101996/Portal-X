<?php



$servername = "localhost";

$user_id = "root";
$pswd = "";
$dbname = "login";


//if(isset($_POST["submit"])){
$user=$_POST["user_id"];
$password=$_POST["pswd"];
$deviceid=$_POST["d_id"];
//}

// Create connection
$conn = mysqli_connect($servername, $user_id, $pswd,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "SELECT * FROM device WHERE d_id='$deviceid'";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1)==0) {
   
	echo "device not registered";
	exit();
} 




$sql = "SELECT * FROM login WHERE user_id='$user' AND password='$password' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
	$_SESSION["logged_in"]=$user;

	$ip=$_SERVER["REMOTE_ADDR"];

	shell_exec("sudo /sbin/iptables -A FORWARD -s ".$ip." -j ACCEPT");
	shell_exec("sudo /sbin/iptables -A FORWARD -d ".$ip." -j ACCEPT");

	echo "connected";

} 



mysqli_close($conn);

?>
