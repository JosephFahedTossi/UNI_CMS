
<?php
session_start();
	if(isset($_POST['signin']))
	{
	$conn =  mysqli_connect ("localhost", "root", "", "lu");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);
	$_SESSION['username'] = $username;
	// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM professor_table";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) 
{

//var_dump($row['username']);
//var_dump($row['password']);
if($username == $row['username'] && $password == $row['Password']) 
	{
	header('location:dashboard_professor.php');
	}
}
echo('<center>You have entered the <b>wrong credentials please check again</b>, if you do not have an account please register for one or <a href = "signin.php">Go back</a><center>');
mysqli_close($conn);
	}

?>