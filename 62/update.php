<?php
	$connect=mysqli_connect('127.0.0.1','root','','sametci');
	$sql = mysqli_query($connect , "UPDATE wagg WHERE id='".$_GET['id']."' ");
?>