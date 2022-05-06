<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	
</head>
<body>
	<?php 
		$hall=0;
		if($_POST["chall"]==1){
			$hall=450;
		}
	   else if($_POST["chall"]==2){
			$hall=500;
		}
		else if($_POST["chall"]==3){
			$hall=550;
		}
		else if($_POST["chall"]==4){
			$hall=350;
		}


		$seat=0;
		if($_POST["cseat"]==1){
			$seat=1;
		}
	   else if($_POST["cseat"]==2){
			$seat=2;
		}
		else if($_POST["cseat"]==3){
			$seat=3;
		}
		else if($_POST["cseat"]==4){
			$seat=4;
		}


		
		$price=$hall*$seat;

		


		echo "Name: " . $_GET["cname"] . "<br>";
		echo " email: " . $_GET["cmail"] . "<br>"; 
		echo "Mobile " . $_GET["cmob"] . "<br>"; 
		echo "Hall " . $_GET["chall"]. "<br>" ; 
		echo "show time " . $_GET["ctime"]. "<br>" ; 
		echo "Category " . $_GET["ccat"] . "<br>"; 
		echo "Movie " . $_GET["cmov"] . "<br>"; 
		echo "Seat " . $_GET["cseat"] . "<br>"; 
        echo "Date " . $_GET["cdate"] ; 
		echo "Total Price ".$price;


	?>
</body>
</html>