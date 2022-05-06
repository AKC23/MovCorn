<?php
require('includes/db.php');
require('includes/function.php');

if(isset($_GET['page'])){
  $page=$_GET['page'];

}else{
  $page=1;
}
$post_per_page=5;
$result=($page-1)*$post_per_page;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>MovCornBlog</title>
</head>
<body>
<?php 
    include_once('includes/navbar.php'); 
?>   
<div>
    <div class="container m-auto mt-3 row" style="padding-left: 20%;">
      
        <div class="col-8">
          <?php
            if(isset($_GET['search'])){
              $keyword=$_GET['search'];
              $postQuery="SELECT *FROM posts WHERE title LIKE '%$keyword%' ORDER BY id DESC LIMIT $result,$post_per_page";
            }
            
            else {
              $postQuery="SELECT *FROM posts WHERE category_id=6 ORDER BY id DESC LIMIT $result,$post_per_page";
            }


             
              $runPQ=mysqli_query($db,$postQuery);
              while($post=mysqli_fetch_assoc($runPQ)){
                ?>
                     <div class="card mb-3" style="max-width: 800px;">
                     <a href ="post.php?id=<?=$post['id']?>"style="text-decoration:none;color:black">
            <div class="row g-0">
              <div class="col-md-5" >
              <?php
           


	    $post_image=getImagesByPost($db,$post['id']);
	    $c=1;
    foreach($post_image as $image){
      if($c>1){
        $sw="";
      }
      else{
        $sw="active";
      }
      ?>
        <div class="carousel-item <?=$sw?>">
        <img src="Pic/<?=$image['image']?>" class="d-block w-100" alt="">
        </div>
      <?php
      $c++;
}

          ?>

                
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <h5 class="card-title"><?=$post['Title']?></h5>
                  <p class="card-text text-truncate"><?=$post['content']?></p>
                  <p class="card-text text-truncate">Posted by : <?=$post['pname']?></p>
                  <p class="card-text"><small class="text-muted">Posted on <?=date('F jS,Y',strtotime($post['created_at']))?> </small></p>
                </div>
              </div>
            </div>
              </a>
          </div>

                <?php


              }
          ?>
        
       
          
    </div>

    
    <?php 
          include_once('includes/sidebar.php'); 
      ?>  

              

</div>
<?php
 
if(isset($_GET['search'])){
  $key=$_GET['search'];
  $q="SELECT *FROM posts WHERE title LIKE '%$key%'";
}
else{
  $q="SELECT *FROM posts WHERE category_id=6";
}

$r=mysqli_query($db,$q);
$total_posts=mysqli_num_rows($r);
$total_pages=ceil($total_posts/$post_per_page);


?>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <?php
              if($page>1){
                $sw="";
              }else{
                $sw="disabled";
              }

              if($page<$total_pages){
                $nsw="";
              }else{
                $nsw="disabled";
              }

          ?>
          <li class="page-item <?=$sw?>">
            <a class="page-link" href="?<?php if(isset($_GET['search'])){echo"search=$keyword&"; } ?>page=<?=$page-1?>" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <?php
              for($opage=1;$opage<=$total_pages;$opage++){
                ?>
                      <li class="page-item"><a class="page-link" href="?<?php if(isset($_GET['search'])){echo"search=$keyword&"; } ?>page=<?=$opage?>"><?=$opage?></a></li>
                <?php
              }
          ?>
        
         
          <li class="page-item <?=$nsw?>">
            <a class="page-link" href="?<?php if(isset($_GET['search'])){echo"search=$keyword&"; } ?>page=<?=$page+1?>">Next</a>
          </li>
        </ul>
      </nav>
      
      <?php 
          include_once('includes/footer.php'); 
      ?>  
      
        
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
</body>
</html>