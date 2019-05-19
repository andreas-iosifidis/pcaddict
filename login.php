<?php 
define('host', "localhost");
define('dbusername', "id9570019_pcaddict1");
define('dbpassword', "12345678");
define('dbname', "id9570019_pcaddict");

	if(isset($_POST['login'])){ $username= $_POST['username'];
$password= $_POST['password'];
	if((!empty($username)) AND (!empty($password))){


$conn = mysqli_connect(host, dbusername, dbpassword) or die(mysql_error());
$db = mysqli_select_db($conn,dbname) or die(mysqli_error()) or die(mysqli_error());
$NAME="SELECT username from login where username='$username'";//a
$PASS="SELECT password from login where password='$password'";//b
$a=mysqli_query($conn,($NAME));
$b=mysqli_query($conn,($PASS));

if (($a->num_rows>0) AND ($b->num_rows>0)){
    while(($rowA=$a->fetch_assoc()) AND $rowB=$b->fetch_assoc()){
        
    $signed=true;
			header("location: afterLogin.html",  true,  301 );  exit;  }}
		else{?> <script type="text/javascript">
alert("Wrong Username or Password");
window.location='login.php';
</script> <?php
		
		
	}}
			
		
			


 }
 
 else{ ?> <script type='text/javascript>' window.location='login.php';</script> <?php }

?>
