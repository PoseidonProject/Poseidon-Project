<!-- 
	Poseidon - Open Source Project Management
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
    along with this program.  If not, see <http://www.gnu.org/licenses/>. 
-->
<html>
 <?php 
 
 // Include The Template Header
 include "../style/template/headers.php"; 
 
 ?>
   
    <body>
<div id="outer"> 

    <!-- HEADER START -->
	<div id="header"> 
    
    <div id="container">
    
    <div id="left">  
    <pagetitle>Poseidon</pagetitle> 
    </div> <!-- LEFT END -->
    
    <div id="right">
    <?php 
    
    // Include the menu:
    include "../style/template/menu.php"; 
    
    ?>
    </div> <!-- RIGHT END -->
	</div> <!-- CONTAINER END -->
    </div> <!-- HEADER END -->
    
    
    <!-- CONTENT START -->
    <div id="container">
    <div id="left">
		<br /><br />
	<h2>Login</h2>
    <br />
	<p>If you already have an account, please login below</p>
<!-- LOGIN FORM --> 
	<p>	
	<form method="post" action="login.php"> 
	<p> 
    <br /><br />
		<p><strong>Username:</strong></p>
        <br />
        <p>
		<div class="textboxHolder"> 
			<input type="text" name="username" class="textInput" /> 
		</div> 
        </p>
	</p> 
	<br /><br /> 
	<p> 
    <br /><br />
		<p><strong>Password:</strong></p>
        <br />
		<div class="textboxHolder"> 
			<input type="password" name="password" class="textInput" /> 
		</div> 
	</p> 
	<br /><br /> 
	<p> 
    <br /><br />
		<input align="right" type="image" name="submit" src="../style/images/loginbutton.png" width="90" height="30"> 
   	<br /><br />
	</p> 
	</form> 
	</p> 
<!-- END LOGIN FORM --> 
    </div>
    </div>
    
	<!-- CONTENT END --> 
    
</div> 
    
<!-- FOOTER START -->
<div id="footer"> 
<br /><br /><br /><br /><br /><br />
	<footertext>Powered By Poseidon Open Source Project Management</footertext>
</div> 
<!-- FOOTER END -->
    </body>
</html>