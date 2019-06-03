
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
$connect=mysqli_connect('127.0.0.1','root','','sametci');
 $result=mysqli_query($connect, "SELECT * FROM wagg  ");
 $UPDATE = mysqli_query($connect,"UPDATE wagg SET text='hello' WHERE id='".$_GET['id']."'  ");
 
    ?>
<form method="post" action="insert.php" enctype="multipart/form-data">
	<div class="container">
 	<?php echo '<input type="" name="text">'  ?>
   	<?php echo '<input type="DATE" name="date">'  ?>
    <?php echo '<input type="file" name="img">'  ?>
	<button>добавить</button>
 </div>
 <?php
 for($i=0; $i<$result->num_rows;$i++){
    $res=$result->fetch_assoc();
    ?>
</form>
 	<?php  echo '<h6>' .$res['date'].'</h6>';?>
	<?php  echo '<p>'.$res["text"].'</p>';?>
	<?php echo '<img src="' . $res["img"] . '"class="w-10">'; ?>
<form method="post" action="delet.php">

	<button>удалить</button>
</form>
<form method="post" action="update0.php">

	<button>изминить</button>
</form>
<?php
 }
?>
