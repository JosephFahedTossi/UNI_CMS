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
	background-color: #C1A6ff;
	opacity: 0.97;
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

table {
    width: 100%;
	padding-bottom: 35px;
}

select{
	padding: 3px;
	margin-bottom: 15px;
	background-color: #ffcfef;
	border-radius: 4px;
}



th {
    height: 50px;
	color: #4654AA;
	 font-family:"Comic Sans MS", cursive, sans-serif;
}
.button_submit{
	padding: 18px;
	border-radius: 35px;
	text-align: center;
	position: center;
	color: white;
	background-color: #82001C;
}

.normal-sec{
	padding-left: 15px;
	margin-bottom: 18px;
	color: 000047;
	background-color: #fffeee;
	width: 210px;
	height: 25px;
	border-radius: 12px;
	
}

            .message {
                text-align: center;
                background-color: #6554A2;
                opcaity: 0.8;
                border-radius: 5px;
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
	.form{
		width: 100%;
	}
}
</style>
</head>

<div class="wrapper">

	<header><h1>REGISTER AS STUDENT</h1>
	</header>
	<br>
	<br>
		
<section class="columns">
	
	<div class="column">
	    <span>
            <div class="message">
                <?php
                // an error message that appears to the user in case he uses wrong credentials.
                $error = '';
                // if the error is set and exist print it if not print a form.
                $error = isset($_GET['message']) ? $_GET['message'] : '';
                echo $error;
                ?>
            </div>
        </span>
            <!-- the form -->
		<form action="register_student.php" method="POST">
		
		<a href = "lu.php" style="float:right;color:red;font-family:arial;font-size:1.2em;">Go back</a>
		<center>Registering at&nbsp
		<?php
            echo date('d - m - y' );
            ?>
			</center>
						
	<table>
		<th><h4>Please Complete all the fields below</h4></th>

		<tr>	
			<td><input class="normal-sec" type="text" name="name" placeholder="Name"></td>
		</tr>
			
		<tr>	
			<td><input class="normal-sec" type="text" name="last_name" placeholder="Family name"></td>
		</tr>
			
		<tr>	
			<td>
		<label for="major">Major:</label>
		<select name="major" id="major" value="choose">
		   <option value="MIS">MIS</option>
		   <option value="Audit">Audit</option>
		   <option value="Finance">Finance</option>
		   <option value="Marketing">Marketing</option>
		   <option value="Management">Management</option>
		   <option value="Economics">Economics</option>
		</select>
		</td>
		</tr>
		
		<tr>	
			<td>
		<label for="year">Year:</label>
		<select name="year" id="year" value="choose">
		   <option value="1">1st year</option>
		   <option value="2">2nd year</option>
		   <option value="3">3d year</option>
		</select>
		</td>
		</tr>
			
		<tr>
		
			<td><input class="normal-sec" type="text" name="username" placeholder="Username"></td>
		</tr>
		
		<tr>	
			<td><input class="normal-sec" type="password" placeholder="Password" name="password"></td>
		</tr>
		<tr>
		<td><input type="password" name="password1" class="normal-sec" placeholder="Please confirm your password"/></td>
		</tr>
		<br>
		<tr><td><center><input type="submit" value="Register" class="button_submit" name="Submit"></center></td>
		
	</table>
		</form>
	</div>

	
</section>	
</div>
</body>
</html>