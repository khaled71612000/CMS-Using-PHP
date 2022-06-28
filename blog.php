<?php require("include/db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fstyle.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Blog</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
  <a class="navbar-brand" href="#">KhaledCMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav  mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Feature</a>
      </li>
    </ul>

    <form action="blog.php" class="form-inline  my-2 my-lg-0">
    <input class="form-control" type="text" name="Search" placeholder="Search">
    <button class="btn btn-outline-success m-3" name="SearchButton">Go</button>
  </form>
    
  </div>
  </div>

</nav>
<div class="container">
<div class="blog-header">
<h1>The Complete Blog</h1>
<p>By Khaled Elsayed</p>
</div>
<div class="row">
<div class="col-sm-8">
<?php 

if (isset ($_GET["SearchButton"])) {
$Search = $_GET["Search"];
// QUERY WHEN SEARCHING
$ViewQuery = "SELECT * FROM admin_panel
WHERE datetime LIKE '%$Search%'
OR title LIKE '%$Search%' OR category LIKE '%$Search%'
OR post LIKE '%$Search%'";

}elseif(isset($_GET["Category"])) {
// auery when category is set

$Category = $_GET["Category"];
$ViewQuery = "SELECT * FROM admin_panel WHERE category = '$Category'
ORDER BY datetime desc";

}

elseif (isset( $_GET["page"])){
// QUERY WHEN PAGENTON PAGE=1

$page = $_GET["page"];

if($page==0 || $page <1){
  // start at zero which is page 1
  $ShowPostForm=0;
}
else{

  // 5 posts per age
  $ShowPostForm= ($page*5)-5;
}



// DEFAULT QUERY show from show post to 5
// 0 is invalid , 1 is 0 to 5 ,2 is from 5 to 10
$ViewQuery = "SELECT * FROM admin_panel ORDER BY datetime desc LIMIT $ShowPostForm,5"; 

}
else {
// if search is not set do that query instead
// limit from zero to 5
$ViewQuery = "SELECT * FROM admin_panel ORDER BY datetime desc LIMIT 0,3"; 
}
$Execute = mysqli_query($connection,$ViewQuery);

while($row = mysqli_fetch_assoc ($Execute)) {
    $PostId=$row["id"];
    $DateTime=$row["datetime"];
    $Title=$row["title"];
    $Category=$row["category"];
    $Admin=$row["author"];
    $Image=$row["image"];
    $Post=$row["post"];

?>

<div class="blogspot img-thumbnail">
<img width=600px height=400px src="Upload/<?php echo $Image; ?> ">
<div class="caption">
<h1 id="heading"> <?php echo htmlentities($Title);  ?> </h1>
<p class="description" > Category:  <?php echo htmlentities($Category);   ?>  Published on 
<?php echo htmlentities($DateTime) ?> </p>
<p class="post"> <?php
if(strlen($Post) > 150) {
  $Post= substr($Post,0,150);
  $Post .= "...";
  echo $Post;
}

?> </p>
</div>

<a href="fullpost.php?id=<?php echo $PostId ?>"> <span class="btn btn-danger">Read More &rsaquo;</span> </a>
</div>

<?php } ?>

<nav>
<ul class="pagination pagination-lg justify-content-center">

<?php 
// if not set and no ?page = n dont set
if(isset($page))
if($page >1) {
  ?>
  <li class="page-item"><a class="page-link" href="blog.php?page=<?php echo $page-1 ?>">&laquo;</a></li>
<?php }
?>
<?php 
global $connection;
$querypagination = "SELECT COUNT(*) FROM admin_panel";
$Execute = mysqli_query($connection,$querypagination);

$row=mysqli_fetch_array($Execute);
// all posts
$total=array_shift($row);

// in case of odd ciel
$postperpage= $total /5;
$postperpage = ceil($postperpage);

for($i=1;$i<=$postperpage;$i++){
  if(isset($page))
  if ($i == $page){
?>

<li class="page-item active">
<a class="page-link" href="blog.php?page=<?php echo $i; ?>"><?php echo $i ?></a>
</li>
  <?php }else { ?>
    <li class="page-item">
<a class="page-link" href="blog.php?page=<?php echo $i; ?>"><?php echo $i ?></a>
</li>
<?php
  }
  ?>

<?php } ?>
<?php 
// if not set and no ?page = n dont set
if(isset($page))
// if next page is equal limit or less
if($page+1 <= $postperpage ) {
  ?>
  <li class="page-item"><a class="page-link" href="blog.php?page=<?php echo $page+1 ?>">&raquo;</a></li>
<?php }
?>
</ul>
</nav>


</div>
<div class="col-sm-offset-1 col-sm-3">
<h2>About Me</h2>
<img src="img/download.png"  class="img-thumbnail img-rounded">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, aliquid. Nemo quaerat ipsam expedita nisi.</p>
<div class="card">

<div class="card-header">
  <h2 class="card-title">Categories</h2>
</div>
<div class="card-body">
 <?php 
 
 global $connection;
 $ViewQuery = "SELECT * FROM category ORDER BY datetime desc";
 $Execute = mysqli_query($connection,$ViewQuery);
 while($row=mysqli_fetch_array($Execute)){
   $Id = $row["id"];
   $Category = $row["name"];
 
 ?>
 <a href="blog.php?Category=<?php echo $Category ?>">
   <span  id="heading"><?php echo $Category; ?> <br></span>
 </a>

 <?php } ?>

</div>

</div>
<div class="card-header">
  <h2 class="card-title">Recent Posts</h2>
</div>
<div class="card-body">
<?php 
 
 global $connection;
 $ViewQuery = "SELECT * FROM admin_panel ORDER BY datetime desc LIMIT 0,5";
 $Execute = mysqli_query($connection,$ViewQuery);
 while($row=mysqli_fetch_array($Execute)){
   $Id = $row["id"];
   $Title = $row["title"];
   $DateTime = $row["datetime"];
   $Image = $row["image"];
 
 ?>
 <img class="float-left" src="upload/<?php echo $Image ?>" width=100; height=70;><br>
 <a href="fullpost.php?id=<?php echo $Id  ?>">
  <p id="heading"><?php echo $Title ?></p>
</a>
 <p class="description"><?php echo $DateTime ?></p>

 <?php } ?>
</div>

</div>

</div>

</div>
</div>
<div id="footer">
    <hr><p>Theme by | khaled | &copy;2020 --- All Right Reserved</p>
</div>
<div style="height:10px;background:#27aae1;"></div>
</body>
</html>