<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Verified</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="style.css">


</head>
<body>
<h6 style="text-align: center;font-size: 60px;">Ticket Booking List</h6>
    <div class="container" style="overflow-x: auto;padding: 5%" >
	<?php

        $servername = "localhost"; 
        $username = "root"; 
        $password = "";
        $dbname = "movie"; 
        
        // Create connection 
        $conn = mysqli_connect($servername, $username, $password, $dbname); 
        // Check connection 
        if(!$conn) 
        { 
            die("Connection failed: " . mysqli_connect_error()); 
        } 
        $sql2="SELECT * FROM ticket ";
        $res=mysqli_query($conn,$sql2);

        echo "<table border='3'>"; 
        echo "<tr>"; 
        echo "<th>Serial No</th><th>Name</th><th>Mobile</th><th>Email</th><th>Hall</th><th>Category</th><th>Show Time</th><th>Movie</th><th>Seat</th> <th>Date</th><th>Price</th>"; 
        echo "</tr>"; 

    if (mysqli_num_rows($res) > 0) 
    { 
         // output data of each row 
         while($row = mysqli_fetch_assoc($res)) 
         { 
             echo "<tr>"; 
             echo "<td>" . $row['customer_id'] . "</td>"; 
             echo "<td>" . $row['customer_name'] . "</td>"; 
             echo "<td>" . $row['mobile'] . "</td>"; 
             echo "<td>" . $row['email'] . "</td>"; 
             echo "<td>" . $row['hall'] . "</td>"; 
             echo "<td>" . $row['category'] . "</td>"; 
             echo "<td>" . $row['show_time'] . "</td>"; 
            

             echo "<td>" . $row['movie'] . "</td>"; 
             echo "<td>" . $row['seat'] . "</td>"; 
             echo "<td>" . $row['p_date'] . "</td>"; 
             echo "<td>" . $row['price'] . "</td>";  
             echo "</tr>"; 
            
             
         } 
    } 
    else 
    { 
        echo "0 results"; 
    } 
    echo "</table>"; 
    

     
    
    mysqli_close($conn); 


  ?>
	</div>
</body>
</html>