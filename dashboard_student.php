
<?php
// establishing connection to db and querying the data from corresponding tables
session_start();
//connection establishment between database users on localhost server
$connection =  mysqli_connect ("localhost", "root", "", "lu");
$query1 = "SELECT * FROM professor_table ";
$query2 = "SELECT * FROM sc_table ";
$query3 = "SELECT * FROM jobss ";
$query4 = "SELECT * FROM announcements ";
//query the 4 sqls with the connection
$results1 = mysqli_query($connection, $query1);
$results2 = mysqli_query($connection, $query2);
$results3 = mysqli_query($connection, $query3);
$results4 = mysqli_query($connection, $query4);
?>

<html>
    <head>
	<title> Student Interface </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- css -->
        <style>
		html{
                background: url(bg_s.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover; 
                background-size: 100% 100%;
				width: 100%;
            }
			.wrapper {
			padding: 5px;
			max-width: 960px;
			width: 95%;
			margin: 20px auto;
			}
			.columns {
			display: flex;
			flex-flow: row wrap;
			justify-content: center;
			margin: 5px 0;
			}

			.column {
				flex: 1;
				background-color: #ffffff;
				opacity: 0.87;
				border: 1px solid gray;
				margin: 8px;
				padding: 15px;
				border-radius: 6px;
				&:first-child { margin-left: 0; }
				&:last-child { margin-right: 0; }
			}
			header
			{
				color:#55AAAA;
				font-family: calibri;
				font-size: 1.6em;
			}
			h3
			{
				color:#578544;
				font-family: verdana;
				font-size: 1.2em;
			}
			.log
			{
				color: white;
				background-color:#145aaa;
				padding: 5px;
				border-radius: 20px;
				font-family: verdana;
				opacity: 0.89;
				text-decoration: none;
			}
			td{
				padding: 8px;
			}
			.table1{
				color: #aaa123;
			}
			.table1 th{
				padding: 12px;
			}
		</style>
	</head>
<body>
<center><header>Student Interface</header></center>
<a style="float:right; margin:12px;" href="logout_all.php" class="log">Logout</a>
<div class="wrapper">
<section class="columns">
	<div class="column">
	<center>
	<h3>List of University Professors</h3>
	<hr>
	</center>
	<center>
	<table class="table1">
	<th>Name</th>
	<th>Speciality</th>
	<th>E-mail</th>
	</table>
	</center>
	<?php
    foreach ($results1 as $result){
		$eemail = $result['email'];
        print_r('<table><tr></tr><td><center>'.$result['name'].'&nbsp'.$result['last_name']
        .'</center></td><td><center>'.$result['specialty'].' </center></td><td><center>
        '.$result['email']
        .'</center></td></tr></table>' );
        echo "<hr>";
    }
    ?>
	
	</div>
	<div class="column">
	<center>
	<h3>List of Student Commity Personell</h3>
	<hr>
	</center>
	<center>
	<table class="table1">
	<th>Name</th>
	<th>Role</th>
	</table>
	</center>
	<?php
    foreach ($results2 as $result){
        print_r('<table><tr></tr><td><center>'.$result['name'].'&nbsp'.$result['last_name']
        .'</center></td><td><center> '.$result['role'].'</center></td></tr></table>' );
        echo "<hr>";
    }
    ?>
	
	</div>
</section>
<section class="columns">
	<div class="column">
	<center>
	<h3>Jobs Posted by Professors</h3>
	<hr>
	</center>
	
	<?php
    foreach ($results3 as $result){
        print_r('<table><tr></tr><td><center>'.$result['job'].'<br>&nbsp'.'</center></td></tr></table>' );
        echo "<hr>";
    }
    ?>
	
	</div>
	<div class="column">
	<center>
	<h3>Student Comity Announcements</h3>
	<hr>
	</center>
	
	<?php
    foreach ($results4 as $result){
        print_r('<table><tr></tr><td><center>'.$result['anon'].'<br>&nbsp'.'</center></td></tr></table>' );
        echo "<hr>";
    }
    ?>
	
	</div>
</section>
</div>
</body>
</html>
