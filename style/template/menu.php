<div id="navmenu">
    <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Projects</a></li>
    <li><a href="#">Account</a></li>
    <?php
    session_start();
    if(isset($_SESSION['permission']) && $_SESSION['permission'] == 3)
	{
    	echo('<li><a href="#">Admin</a></li>');
	}
	?>
    </ul>
    </div> <!-- NAVMENU END -->