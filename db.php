<?php
 /*$connection_1 = mysqli_connect('localhost','root', '') or die(mysql_error());
 mysql_select_db('octunete_snapper') or die(mysql_error());
 
$connection_2 = mysqli_connect('localhost','root', '') or die(mysql_error());
 mysql_select_db('cotunete_snappercrm') or die(mysql_error()); */

	$connection_1=mysqli_connect('localhost','root','','octunete_snapper') or die(mysql_error());
	$connection_2=mysqli_connect('localhost','root','','cotunete_snappercrm') or die(mysql_error());
?>