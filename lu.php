<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

* { box-sizing: border-box; }

body { 
  font-family: 'Open Sans', sans-serif;
  color: #666;
  /* The image used */
    background-image: url("bg3.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    
    background-repeat: no-repeat;
    background-size: cover;
}
h1 {
	text-align: center;
}

/* STRUCTURE */

.wrapper {
	padding: 5px;
	max-width: 960px;
	width: 95%;
	margin: 20px auto;
}
header {
	padding: 0 15px;
	background-color: #ffffff;
	opacity: 0.92;
	border-radius: 20px;
	padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
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

.links {
color: black;
background-color: white;
text-decoration: none;
}
.links:hover {
color: red;
background-color: white;
text-decoration: none;
}

footer {
	background: #ffffff;
	opacity: 0.9;
	padding: 6px 15px;
	color: black;
	border-radius: 6px;
}


@media screen and (max-width: 980px) {
  .columns .column {
		margin-bottom: 5px;
    flex-basis: 40%;
		&:nth-last-child(2) {
			margin-right: 0;
		}
		&:last-child {
			flex-basis: 100%;
			margin: 0;
		}
	}
}

@media screen and (max-width: 680px) {
	.columns .column {
		flex-basis: 100%;
		margin: 0 0 5px 0;
	}
}
</style>
</head>
<body>
<div class="wrapper">

	<header><h1><img src="lu-site.jpg" width="25px" height="25px"/>&nbsp&nbspLebanese University - Support System</h1>
	</header>
	<br>
	<br>
		
<section class="columns">
	<div class="column">
		<a class="links" href="regStu.php">
		<center><h2>STUDENT REGISTRATION</h2></center>
		</a>
		<p>Students are able to :<br>1.&nbsp View all university professors.<br>2.&nbsp Communicate with professors.<br>3.&nbsp View job posted by university professors.<br>4.&nbsp View announcements posted by student's commity. </p>
	</div>
	
	<div class="column">
	    <a class="links" href="regProf.php">
		<center><h2>PROFESSOR REGISTRATION</h2></center>
		</a>
		<p>Professors are able to :<br>1.&nbsp Post new jobs for students.<br>2.&nbsp Add new materials concerning the course the teach.<br></p>
	</div>
  
  <div class="column">
		<a class="links" href="regStuCom.php">
		<center><h2>STUDENT COMMITY REGISTRATION</h2></center>
		</a>
		<p>Student commity personnels are able to :<br>1.&nbsp Post new announcements for students.<br>2.&nbsp View all students information.<br></p>
	</div>
	
</section>	
	<br>
	<footer>
		<h3></h3>
		<p>This system is designed for students, university professors and student commity personnel attending the Lebanese University - Faculty of Business Administration only. If you already have an account please <a href="signin.php" style="text-decoration:none;"><b>Sign in</b></a></p>
	</footer>

</div>
</body>
</html>