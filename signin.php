
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
.singin{
	background-color:#000C87;
	padding: 13px;
	margin-left: 60px;
	align:center;
	border-radius: 14px;
}

footer {
	background: #ffffff;
	opacity: 0.9;
	padding: 6px 15px;
	color: black;
	border-radius: 6px;
}

input {
	padding: 5px;
	background-color: #aaaddd;
	margin: 15px;
	font-size: 1.1em;
	border-radius: 6px;
	color: white;
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
	<a style="text-decoration:none;"href="lu.php">Go back to main menu</a>
	</header>
	<br>
	<br>
		
<section class="columns">
		<div class="column">
		<center><h3>Sign in as student</h3></center>
		<form action = "signin_process.php" method="post" name="form">
		<label>Username: </label><br>
		<input type="text" name="username" placeholder="ex: joe"><br>
		<label>Password: </label><br>
		<input type="password" name="password" placeholder="****"><br><br>
		<input type="submit" name="signin" class="singin" value="Sign in">
		</form>
		</div>
		<div class="column">
		<center><h3>Sign in as professor</h3></center>
		<form action = "signin_prof.php" method="post" name="form1">
		<label>Username: </label><br>
		<input type="text" name="username" placeholder="ex: joe"><br>
		<label>Password: </label><br>
		<input type="password" name="password" placeholder="****"><br><br>
		<input type="submit" name="signin" class="singin" value="Sign in">
		</form>
		</div>
		<div class="column">
		<center><h3>Sign in as committee member</h3></center>
		<form action = "signin_sc.php" method="post" name="form2">
		<label>Username: </label><br>
		<input type="text" name="username" placeholder="ex: joe"><br>
		<label>Password: </label><br>
		<input type="password" name="password" placeholder="****"><br><br>
		<input type="submit" name="signin" class="singin" value="Sign in">
		</form>
		</div>
		
		
</div>
</section>	
</body>
</html>