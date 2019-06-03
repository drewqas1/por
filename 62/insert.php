<?php 	header('location:http://testgeorge/62/index.php');
$connect=mysqli_connect('127.0.0.1','root','','sametci');
 $insert=mysqli_query($connect,"INSERT INTO wagg (text,date,img) VALUES ('".$_POST['text']."','".$_POST['date']."','" . $_FILES['img']['name'] . "')");
   move_uploaded_file($_FILES['img']['tmp_name'],$_FILES['img']['name']);
 ?>
