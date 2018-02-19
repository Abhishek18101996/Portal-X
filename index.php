<!DOCTYPE html>
<html>
<head>
	<title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	  html { 
 background: url(login.jpg) no-repeat center fixed; 
  background-size: cover;
}
body{
color:white; 
}

a{
color:white;
}

@media only screen and (max-width: 720px) {
     html { 
  background: url(qwe.jpg) no-repeat center fixed; 
  background-size: 111%;
}
}
</style>
<script>
function validateForm() {
    var x = document.forms["myForm"]["user_id"].value;
    if (x == "") {
        alert("user_id must be filled out");
        return false;
    }
   var y = document.forms["myForm"]["pswd"].value; 
   if(y<5)
   {
   	alert("Enter password more than 5 characters");
   	return false;
   }
}
</script>
</head>
<center>
<body><br><br><br>
<h1>Secure Authentication</h1>
<a href="download.php?file=SecureLogin_install.exe" download>
  Download Client for Windows</a>

<br><br>

  <a href="download.php?file=linux.jar" download>
  Download Client for Linux</a>
</center>
</body>
</html>
