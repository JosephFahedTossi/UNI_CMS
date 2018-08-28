<?php
session_start();
    //connection establishment between database users on localhost server
$connection1 =  mysqli_connect ("localhost", "root", "", "lu");
// get information of students from students table
$query1 = "SELECT * FROM student_table ";
//query the sql with the connection
$results1 = mysqli_query($connection1, $query1);
// assign student to an empty array
$students = array();
// looping through an associatuve array (elt of database)
$num = mysqli_num_rows($results1);
?>
<html>
    <head>
        <title> Student Commity Interface </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- css -->
        <style>
		html{
                background: url(bg-sc.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover; 
                background-size: 100% 100%;

            }
			
		.division1
		{
			display: block;
			background-color: #ffffff;
			opacity: 0.92;
			border-radius: 10px;
			box-shadow: 5px 7px black;
			width: 80%;
			margin-top: 75px;
		}
		h2
		{
			color: #426AAA;
			text-align: center;
			font-family: verdana;
		}
		h4
		{
			padding-top: 15px;
			font-family: verdana;
		}
		
		textarea 
		{
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
        width: 80%;
        }
		.sub
		{
			color:white;
			background-color: black;
			border-top-left-radius: 15px;
			border-top-right-radius: 15px;
			margin-bottom: 12px;	
		}
		.log
		{
			color: white;
			background-color:#145aaa;
			padding: 10px;
			border-radius: 20px;
			font-family: verdana;
			opacity: 0.89;
			text-decoration: none;
		}
		td{
			padding: 8px;
		}
		.table1{
			padding-right: 17px;
			color: #aaa123;
		}
		.table1 th{
			padding: 12px;
		}
		</style>
	</head>
	<body>
	<h2>Student Commity Interface</h2>
	<a style="float:right; margin:12px;" href="logout_all.php" class="log">Logout</a>
	<center>
	<div class="division1">
	<center><h4>Lebanese University Students</h4></center>
	<hr>
	<center>
	<table class="table1">
	<th>Student's Name</th>
	<th>Major</th>
	<th>Year</th>
	</table>
	</center>
	<?php
    foreach ($results1 as $result)
	{
		print_r('<table><tr></tr><td><center>'.$result['name']
        .'</center></td><td><center>'.$result['last_name'].' </center></td><td><center> 
        '.$result['major'].'</center></td><td><center>'.$result['year']
        .'</center></td></tr></table>' );
        echo "<hr>";
	}
	?>
	</div>
	<div class="division1">
	<center><h4>Post an announcement </h4></center>
	<form method="POST" action = "insert_announcment.php" name="anounce" enctype="multipart/form-data">
				<textarea  rows="4" cols="50" placeholder="Please describe the announcement posted here ..." name="anon"></textarea>
				<br>
				<br>
				<input type="submit" value="Send Announcement" name="submit_announcement" class="sub"/>
	</form>
	</div>
	<br>
	</center>
	</body>
	</html>
