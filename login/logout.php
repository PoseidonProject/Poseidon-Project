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

// Include Settings
include('../inc/configuration.settings.php');

// Declare user logged in as false:
$_SESSION['auth'] = 'false';

// Destroy the session:
session_destroy();

// Redirect to login:
header('location: http://'.$setting_url.'/login');
?>
