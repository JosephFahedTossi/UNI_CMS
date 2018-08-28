<?php
session_start();
/*
get the connection to local db
*/
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
if(isset($_POST['Submit']))
    {
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$specialty = $_POST['specialty'];
$email = $_POST['email'];
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$username = $_POST['username'];
$username = stripcslashes($username);
$password = md5($_POST['password']);
$password1 = md5($_POST['password1']);
$_SESSION['username'] = $username;
	}
	        //error message
        $error = $_GET['message'] = '';
		
		if (empty($_POST['username']) || empty($_POST['name']) ||  empty($_POST['email']) || empty($_POST['password'])) 
		{
        header('Location: http://localhost/regProf.php?message= Please insert username, name, email and password');
        exit();
		}

/*
sql command
*/
// conditioning if the connection is established and records are added successfully ...
    elseif($password === $password1) 
	{
$sql = "INSERT INTO professor_table(name,last_name,specialty,email,username,password) VALUES('$name','$last_name','$specialty','$email','$username','$password') ";
mysqli_query($con,$sql);
header("refresh:2;url=dashboard_professor.php");
	}
		        // in case of error
        else
        {
            // a message indicating the error in the connection of the database and the given query
            header('Location: http://localhost/regProf.php?message= Passwords do not match, please try again.');
        }
?>