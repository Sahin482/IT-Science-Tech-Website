<!--
Here, we write code for login.
-->
<?php


$conn2 = mysqli_connect("localhost","root","","Registrationdb");

if(!$conn2)
{
	echo "Database connection faild...";
}

 //$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
// $sql = "SELECT * FROM admin_table WHERE email='$email' AND pass='$password'";
$sql1= "SELECT * FROM 'admin_table' WHERE 'email'='$email' AND pass='$password'";
$result = mysqli_query($conn2, $sql1);
if(mysqli_num_rows($result) > 0)
{
	// while($row = mysqli_fetch_assoc($result))
	// {
	// 	$id = $row["id"];
	// 	$email = $row["email"];
	// 	session_start();
	// 	$_SESSION['id'] = $id;
	// 	$_SESSION['email'] = $email;
	// }
	header("Location: Homes.php");
}
else
{
	 echo "Invalid email or password";
}
?>