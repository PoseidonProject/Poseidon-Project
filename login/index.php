<?php
/*  Poseidon - Open Source Project Management
    Copyright (C) 2011  The Poseidon Project (http://www.poseidonproject.org/)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. */
?>

<?php
// Start Session
session_start();

// Include the settings file:
include('../inc/configuration.settings.php');

// Check that there isn't a user already logged in...
if(isset($_SESSION['auth']) && $_SESSION['auth'] == true)
{
	header('location: http://'.$setting_url.'/dashboard/');
}
?>

<html> 
	<head> 
		<title>Login | Poseidon</title> 
		<link type="text/css" rel="stylesheet" href="../style/general.css"> 
		<link type="text/css" rel="stylesheet" href="../style/login.css"> 
		<link href='http://fonts.googleapis.com/css?family=Nobile:regular,bold' rel='stylesheet' type='text/css'> 
	</head> 
	<body> 
<!-- Header -->
		<div id="headerbg">
			<div id="container">
				<div class="left">
					<h1>Poseidon</h1>
				</div>
				<div class="right">
                <div id="navmenu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">Account</a></li>
				</ul>
			</div>
				</div>
			</div>
		</div>
<!-- End Header -->

<!--
			
			
-->
<!-- CENTER CONTENT -->
<div id="container">

<div class="left">
	<br /><br />
	<h2>Login</h2>
	If you already have an account, please login below
<!-- LOGIN FORM -->
	<p>	
	<form method="post" action="login.php"> 
	<p>
		<strong>Username:</strong>
		<div class="textboxHolder"> 
			<input type="text" name="username" class="textInput" /> 
		</div> 
	</p>
	<br /><br />
	<p>
		<strong>Password:</strong>
		<div class="textboxHolder">
			<input type="password" name="password" class="textInput" />
		</div>
	</p>
	<br /><br />
	<p>
		<input align="right" type="image" name="submit" src="../style/images/loginbutton.png" width="90" height="30">
	</p>
	</form> 
	</p>
<!-- END LOGIN FORM -->
<br>
<br>
</div>
<div class="right">
</div>
</div>
<div id="footer"><h4>Powered By Poseidon Open Source Project Management</h4>
	&nbsp; <br>
	</body>
</html> 