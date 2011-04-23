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

/* Encrypts some sample data using a salt and data provided by get variables in the URL.
 * Variables included by the Poseidon Project:
 * 
 * salt
 * data
 * 
 * example usage:
 * http://path-to-your-poseidon-install.tld/debug/test-encryption.php?salt=1234abcd&data=example
 * 
 */
 
	if($_GET['salt'] != "" &&  $_GET['data'] != "")
	{
		$salt = $_GET['salt'];
		$data = $_GET['data'];
		
		$salteddata = $salt.$data;
		
		$output = hash('sha512',$salteddata,false);
		echo($output);
	}
?>
