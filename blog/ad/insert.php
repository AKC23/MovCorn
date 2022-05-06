<?php
	require('includes/navbar.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Database </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-sm" style="font-weight: bold;">
 
 <?php
	$servername = "localhost"; 
	$username = "root"; 
	$password = "";
	$dbname = "myblog"; 
	
	// Create connection 
	$conn = mysqli_connect($servername, $username, $password, $dbname); 
	// Check connection 
	if(!$conn) 
	{ 
		die("Connection failed: " . mysqli_connect_error()); 
	} 

	
	$tit=mysqli_real_escape_string($conn,$_POST['ti']);
	$cont=mysqli_real_escape_string($conn,$_POST['con']);
	


	$sql = "INSERT INTO posts (Title,content,category_id,pname) VALUES ('$tit','$cont','$_POST[cat]','$_POST[bn]')"; 
	if (mysqli_query($conn, $sql)) 
	{ 
		
		echo "New Blog Posted successfully"."<br>"; 
		$img=$_POST['pot'].".jpg";
		

		$sql2 = "INSERT INTO images (post_id,image) VALUES ('$_POST[pot]','$img')"; 
		if (mysqli_query($conn, $sql2)) 
		{ 
			echo "Images Inserted  successfully "."<br>"; 
			
		
		} 
		else 
		{ 
			echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
		} 
		


	} 
	else 
	{ 
		echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
	} 
	mysqli_close($conn); 

 ?>
 </div>
</body>
</html>