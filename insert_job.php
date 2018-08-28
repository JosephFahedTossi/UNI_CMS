<?php
/*
get the connection to local db
*/
session_start();
$con = mysqli_connect('127.0.0.1','root','');
if(!$con){
	echo'Database Connection Failed!';
}
if(!mysqli_select_db($con,'lu')){
	echo'Database not selected!';
}
/*
save element field in php variables
*/
if(isset($_POST['submit_job']))
    {
$job = htmlspecialchars($_POST['job']);
	}
	        //error message
        $error = $_GET['message'] = '';
			if (empty($_POST['job'])) 
		{
        header('Location: http://localhost/dashboard_professor.php?message= Please insert job.');
        exit();
	    }
/*
sql command
*/
else
	{
	$uu = $_SESSION['username'];
	$sql2 = "SELECT id From professor_table WHERE username = '$uu'";
	$m= mysqli_query($con,$sql2);
	$n = mysqli_fetch_array($m);
	$q = $n['0'];
	$sql = "INSERT INTO jobss(job,job_poster) VALUES('$job','$q')";
	mysqli_query($con,$sql);
	echo($n['0']);
	echo($sql);
header("refresh:2;url=dashboard_professor.php");
	}
	
?>