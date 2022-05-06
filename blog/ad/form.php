<?php
require('includes/navbar.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="style.css">

  <title>Blog Admin Panel</title>
</head>

<body>

  <h6 class="display-4" style="text-align: center;font-size: 60px;">MovCorn Blog</h6>
  <br>
  <form action="insert.php" method="post">
    <div class="container" style="padding-left: 24%;padding-right:24%">
      <div class="row mb-3">

        <label for="bn" class="form-label">Blogger Name</label>
        <input type="text" class="form-control" name="bn" aria-describedby="emailHelp" required>

      </div>

      <div class="row mb-3">

        <label for="ti" class="form-label">Title</label>
        <input type="text" class="form-control" name="ti" aria-describedby="emailHelp" required>

      </div>
      <div class="row mb-3">
        <label for="con" class="form-label">Content</label>
        <input type="text" class="form-control" name="con" required>
      </div>

      <div class="col" style="padding-top: 5%;">
        <div class="form-outline">
          <label for="pot" class="form-label">Category</label>
          <select class="form-select" aria-label="Default select example " name="cat" required
            style="border-radius: 25px;height:45px">
            <option value="Category" disabled selected>Select the Category</option>
            <option value="1">Fantasy</option>
            <option value="2">Science Fiction</option>
            <option value="3">Horror</option>
            <option value="4">Drama</option>
            <option value="5">Comedy</option>
            <option value="6">Thriller</option>
            <option value="7">Action</option>
            <option value="8">Crime</option>
            <option value="9">Adventure</option>

          </select>
        </div>
        <div class="" style="padding-top: 5%;">
          <label for="pot" class="form-label">Post ID</label>
          <input type="number" class="form-control2" name="pot" required>
        </div>
      </div>



      <br>
      <div class="row" style="padding-left: 8%;">
        <div class="col">
          <button type="submit" class="btn btn-outline-primary" name="sub">Submit</button>

          <button type="reset" class="btn btn-outline-primary" name="clr">Clear</button>
          <!-- <button type="button" style="align-content: center;" class="btn btn-outline-secondary" data-toggle="modal"
            data-target="#exampleModalLong" name="scat">Show Category</button> -->
          <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalLong2"
            name="spost">Show Post </button> 

        </div>

      </div>
    </div>


  </form>
  <br>










  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container" style="padding-left: 30%;">
            <?php
            $servername = "localhost"; 
            $username = "root"; 
            $password = "";
            $dbname = "myblog"; 
            // Create connection 
            $conn = mysqli_connect($servername, $username, $password, $dbname); 
            // Check connection 
            if (!$conn) 
            { 
              die("Connection failed: " . mysqli_connect_error()); 
            } 


            
		$sql = "SELECT * FROM category"; 
		$result = mysqli_query($conn, $sql); 

    
		echo "<table border='3'>"; 
		echo "<tr>"; 
		echo "<th>Category ID</th><th>Category</th> "; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				
				 echo "<td>" . $row['id'] . "</td>";  
				
				 echo "<td>" . $row['name'] . "</td>"; 
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>




  <!-- post -->

  <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container" style="padding-left: 5%;">
            <?php
            $servername = "localhost"; 
            $username = "root"; 
            $password = "";
            $dbname = "myblog"; 
            // Create connection 
            $conn = mysqli_connect($servername, $username, $password, $dbname); 
            // Check connection 
            if (!$conn) 
            { 
              die("Connection failed: " . mysqli_connect_error()); 
            } 


            
		$sql = "SELECT id,Title,category_id FROM posts"; 
		$result = mysqli_query($conn, $sql); 

    
		echo "<table border='3'>"; 
		echo "<tr>"; 
		echo "<th>Post ID</th><th>Title</th><th>Category ID</th> "; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				
				 echo "<td>" . $row['id'] . "</td>";  
				
				 echo "<td>" . $row['Title'] . "</td>"; 
         echo "<td>" . $row['category_id'] . "</td>"; 
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>







</body>

</html>