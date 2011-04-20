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

    // start with a blank password
    $salt = "";

    // define possible characters - any character in this string can be
    // picked for use in the password, so if you want to put vowels back in
    // or add special characters such as exclamation marks, this is where
    // you should do it
    $chars = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!£$%^&()@";

    // we refer to the length of $possible a few times, so let's grab it now
    $maxlength = strlen($chars);
	$length = 56;
  
    // check for length overflow and truncate if necessary
    if ($length > $maxlength) {
      $length = $maxlength;
    }
	
    // set up a counter for how many characters are in the password so far
    $i = 0; 
    
    // add random characters to $password until $length is reached
    while ($i < $length) { 

      // pick a random character from the possible ones
      $char = substr($chars, mt_rand(0, $maxlength-1), 1);
      
      // add it onto the end of whatever we've already got...
        $salt .= $char;
        // ... and increase the counter by one
        $i++;
      }
	
	echo(hash('sha512',$salt,false));
?>
