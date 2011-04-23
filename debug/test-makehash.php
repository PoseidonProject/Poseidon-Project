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

    // start with a blank salt
    $salt = "";
	
	// These are the characters available for our salt:
    $chars = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!£$%^&()@";

    // This is the length of all our possible characters:
    $maxlength = strlen($chars);
	$length = 56; // This is what the final length will be
  
    // Decrease length if necessary
    if ($length > $maxlength) {
      $length = $maxlength;
    }
	
    // set up a counter for how many characters are in the salt so far
    $i = 0; 
    
    // add random characters to salt until the maximum length is reached
    while ($i < $length) { 

      // pick a random character:
      $char = substr($chars, mt_rand(0, $maxlength-1), 1);
      
      // add it onto the end of our salt:
        $salt .= $char;
        // ... Increase the counter by one:
        $i++;
      }
	
	// Echo the statement onto the page.
	echo(hash('sha512',$salt,false));
?>
