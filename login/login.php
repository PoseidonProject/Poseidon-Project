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
// Include SQL Config
include('../inc/database.settings.php');

// Get POST Values
$username = mysql_real_escape_string($_POST['username'],$SqlConnection);
$password = mysql_real_escape_string($_POST['password'],$SqlConnection);

// [DEBUG]:
 if($username == ""&& $password == "")
{
// Get values from the URL for debugging purposes [DEBUG]
$username = mysql_real_escape_string($_GET['user'],$SqlConnection);
$password = mysql_real_escape_string($_GET['pass'],$SqlConnection);
}

// Get the user's unique salt:
$SaltQuery = "SELECT salt FROM users WHERE username='".$username."';";
echo("<b>Query: </b>".$SaltQuery."<br />"); // [DEBUG]

// Execute Query
$SaltResult = mysql_query($SaltQuery,$SqlConnection);

while($row = mysql_fetch_array($SaltResult))
{
	$salt = $row['salt'];
	echo("<br /><b>Salt: </b>".$salt); // [DEBUG]
}

// Encrypt Password To Compare
$SaltedPassword = $salt.$password;
$EncryptedPassword = hash('sha512',$SaltedPassword,false);
$password = $EncryptedPassword;

echo('<br>'); // [DEBUG]
echo('<br>'); // [DEBUG]

// Test Login
$LoginQuery = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."';";
echo('<br><b>Login Query: </b>'. $LoginQuery); // [DEBUG]

echo('<br>'); // [DEBUG]
echo('<br>'); // [DEBUG]

$ExecuteLogin = mysql_query($LoginQuery,$SqlConnection);

if(mysql_num_rows($ExecuteLogin) == 1)
{
	echo('<b>Login Success!</b><br />'); // [DEBUG]
	
	while($rows = mysql_fetch_array($ExecuteLogin))
	{
		$DbUser = $rows['username'];
		echo('Username: '.$DbUser. "<br />"); // [DEBUG]
		
		$DbDisplayName = $rows['displayname'];
		echo('Display Name: '.$DbDisplayName. "<br />"); // [DEBUG]
		
		$DbCompanyID = $rows['company_id'];
		echo('Company ID: '.$DbCompanyID."<br />"); // [DEBUG]
		
		$DbUserID = $rows['id'];
		echo('User ID: '.$DbUserID."<br />"); // [DEBUG]
		
		$dbUserEmail = $rows['email'];
		echo('User Email Address: '.$dbUserEmail."<br />"); // [DEBUG]
	}
}
else
{
	echo('<b>Login Failed. Please check your credentials.</b>');			
}

?>
