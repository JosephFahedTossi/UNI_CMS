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
if(isset($_POST['submit_announcement']))
    {
$anon = htmlspecialchars($_POST['anon']);
	}
	        //error message
        $error = $_GET['message'] = '';
				if (empty($_POST['anon'])) 
		{
        header('Location: http://localhost/dashboard_sc.php?message= Please insert announcement.');
        exit();
	    }
/*
sql command
*/
else
	{
	$mm = $_SESSION['username'];	
	$sql2 = "SELECT id From sc_table WHERE username = '$mm'";
	$m= mysqli_query($con,$sql2);
	$n = mysqli_fetch_array($m);	
	$q = $n['0'];	
	$sql = "INSERT INTO announcements(anon, anon_poster) VALUES('$anon','$q')";
	mysqli_query($con,$sql);
	echo($n['0']);
	echo($sql);
header("refresh:2;url=dashboard_sc.php");
	}
	
     
	
?>