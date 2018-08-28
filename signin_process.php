
<?php
	if(isset($_POST['signin']))
	{
	$conn =  mysqli_connect ("localhost", "root", "", "lu");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = $password;
	// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM student_table";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) 
{

//var_dump($row['username']);
//var_dump($row['password']);
if($username == $row['username'] && $password == $row['password']) 
	{
	header('location:dashboard_student.php');
	}
}
echo('<center>You have entered the <b>wrong</b> credentials please check again, if you do not have an account please register for one or <a href = "signin.php">Go back</a><center>');
mysqli_close($conn);
	}


?>