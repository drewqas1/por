<?php header('location:http://testgeorge/62/index.php');
	$connect = mysqli_connect('127.0.0.1','root','','sametci');
	$result = mysqli_query($connect, "DELETE FROM wagg WHERE id = ".$_POST['george']."");

 ?>