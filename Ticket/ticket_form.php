<?php
require('includes/navbar.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Ticket Booking </title>

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="style.css">

</head>
<body>
<h6 style="text-align: center;font-size: 60px;">MovCorn Cineplex</h6>

<div class="container" >
    <form action="ticket_purchase.php" method="post">
      <div class="row">
        <div class="col">
       <div class="form-outline mb-4 ">
         <label for="cname" class="form-label">Name </label>
         <input type="Text" class="form-control" name="cname" aria-describedby="emailHelp" required>
    
      </div>
      

  <div class="mb-3">
    <label for="cmail" class="form-label">Email </label>
    <input type="email" class="form-control" name="cmail" aria-describedby="emailHelp" required> 

  </div>

  <div class="mb-3">
    <label for="cmob" class="form-label">Mobile </label>
    <input type="tel" class="form-control" name="cmob" aria-describedby="emailHelp" required>

  </div>
  <div class="mb-3">
    <label for="cdate" class="form-label">Show Date </label>
    <input type="date" class="form-control" name="cdate" aria-describedby="emailHelp" required>

  </div>
  </div>
<div class="col">
  <div class="row mb-4">
    <div class="col" style="padding-top: 5%;">
     
      <div class="form-outline">
        <select class="form-select" aria-label="Default select example " name="chall" required style="border-radius: 25px;height:35px">
             <option value="" disabled selected>Select Hall</option>
             <option value="1">Multiplex</option>
             <option value="2">Premium</option>
             <option value="3">Vip</option>
             <option value="4">Delux</option>

        </select>
      </div>
    </div>

    <div class="col" style="padding-top: 5%;">
      <div class="form-outline">
        <select class="form-select" aria-label="Default select example" name="ccat" required style="border-radius: 25px;height:35px"> 
          <option value="" disabled selected> Select Category</option>
          <option value="IMAX">IMAX</option>
          <option value="3D">3D</option>
          <option value="2D">2D</option>
         </select>
        
      </div>
    </div>
    <div class="col"style="padding-top: 5%;">
      <div class="form-outline">
        <select class="form-select" aria-label="Default select example" name="ctime" required style="border-radius: 25px;height:35px">
          <option value="" disabled selected>Select Show Time</option>
          <option value="12.00 PM">12.00 PM</option>
          <option value="3.00 PM">3.00 PM</option>
          <option value="7.00 PM">7.00 PM</option>
          <option value="9.00 PM">9.00 PM</option>
        </select>

    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col"style="padding-top: 5%;">
      <div class="form-outline">
        <select class="form-select" aria-label="Default select example" name="cmov" required style="border-radius: 25px;height:35px">
        <option value="" disabled selected>Select Movie </option>
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

        $sql = mysqli_query($conn, "SELECT title FROM movielist");
        while ($row = $sql->fetch_assoc()){
        echo "<option value='$row[title]'>" . $row['title'] . "</option>";
        }
        ?>
        </select>

    </div>
  </div>

  <div class="col"style="padding-top: 5%;">
      <div class="form-outline">
        <select class="form-select" aria-label="Default select example" name="cseat" required style="border-radius: 25px;height:35px">
        <option value="" disabled selected>Select Seat</option>
        <option value="1">1</option>
        <option value="2"> 2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>

    </div>
  </div>

  </div>

  </div>
  
  
  <div class="container" style="padding-left: 50%;">
      <div class="row">
       <div class="col">
        <button type="submit" class="btn btn-outline-primary">Submit</button>
      </div>
      

      

    </div>
  </div>

  </div>
</form>
          
    </div>
   
    
</body>
</html>