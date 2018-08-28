<?php
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
$major = $_POST['major'];
$year = $_POST['year'];
$username = $_POST['username'];
$username = stripcslashes($username);
$password = $_POST['password'];
$password1 = $_POST['password1'];
	}
	        //error message
        $error = $_GET['message'] = '';
				if (empty($_POST['username']) || empty($_POST['name']) || empty($_POST['password'])) 
		{
        header('Location: http://localhost/regStu.php?message= Please insert username, name, and password');
        exit();
		}
/*
sql command
*/
elseif($password === $password1) 
	{
$sql = "INSERT INTO student_table(name,last_name,major,year,username,password) VALUES('$name','$last_name','$major','$year','$username','$password')";
mysqli_query($con,$sql);
header("refresh:2;url=dashboard_student.php");
	}
			        // in case of error
        else
        {
            // a message indicating the error in the connection of the database and the given query
            header('Location: http://localhost/regStu.php?message= Passwords do not match, please try again.');
        }
	
?>