<?php require("include/db.php") ?>
<?php require("include/Sessions.php") ?>
<?php require("include/functions.php"); ?>
<?php  Confirm_Login() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>DashBoard</title>
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
      <!-- to open in new tab , use target -->
        <a class="nav-link active" target="_blank" href="blog.php">Blog</a>
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
<div class="container-fluid">
<div class="row">
<div class="col-sm-2">

<ul id="side_menu" class="nav flex-column nav-pills nav-fill ">
<li class=" nav-item " > <a  class = "nav-link active " href="dashboard.php">DashBoard</a></li>
<li class=" nav-item">  <a class = "nav-link" href="addnewpost.php">Add new post</a></li>
<li class=" nav-item"> <a class = "nav-link " href="categories.php">Categories</a></li>
<li class=" nav-item"> <a class = "nav-link" href="#">Manage Admins</a></li>
<li class=" nav-item"> <a class = "nav-link" href="Comments.php">Comments

<?php
 $queryall = "SELECT COUNT(*) FROM comments WHERE status ='OFF' ";
$Executeall = mysqli_query($connection,$queryall);
$row = mysqli_fetch_array($Executeall);
$total=array_shift($row);
?>

 <span class="float-right badge badge-warning">
<?php 
 echo $total;
 ?>

</a></li>
<li class=" nav-item"> <a class = "nav-link" href="#">Live Blog</a></li>
<li class=" nav-item"> <a class = "nav-link" href="logout.php">Log Out</a></li>
</ul>

<!-- ending side area -->
</div>
<div class="col-sm-10">
<div><?php echo Message(); 
echo SuccessMessage ()
?></div>
<h4>Admin Dashboard</h4>

<div>

<table class="table table-stripped table-hover">
<tr>
<th>No</th>
<th>Post Title</th>
<th>Date &Time</th>
<th>Author</th>
<th>Category</th>
<th>Banner</th>
<th>Comments</th>
<th>Action</th>
<th>Details</th>

</tr>

<?php

global $connection;
$ViewQuery= "SELECT * FROM admin_panel ORDER BY datetime desc";
$Execute = mysqli_query ($connection,$ViewQuery);
while ($row = mysqli_fetch_assoc($Execute)) {
    $Id = $row["id"];
    $DateTime = $row["datetime"];
    $Title = $row["title"];
    $Category = $row["category"];
    $Admin = $row["author"];
    $Image = $row["image"];
    $Post = $row["post"];
?>

<tr>




<td><?php echo $Id ?></td>

<?php 
if(strlen($Title)>20) {
$Title = substr($Title,0,20);
$Title .= "...";
}

?>

<td><?php echo $Title ?></td>
<td><?php echo $DateTime ?></td>
<td><?php echo $Admin ?></td>
<td><?php echo $Category ?></td>
<td> <img src="Upload/<?php echo $Image ?>" width="170px" height="240px"> </td>
<td>

<?php 

global $connection;
// count all inside
$queryapprove = "SELECT COUNT(*) FROM comments WHERE admin_panel_id = '$Id' AND status ='ON' ";
$Executeapproved = mysqli_query($connection,$queryapprove);
$row = mysqli_fetch_array($Executeapproved);
$total=array_shift($row);
?>

 <span class="float-left badge badge-success">
<?php 
 echo $total;
 ?>
 </span>
 <?php
 $queryunapproved = "SELECT COUNT(*) FROM comments WHERE admin_panel_id = '$Id' AND status ='OFF' ";
$Executeunapproved = mysqli_query($connection,$queryunapproved);
$row = mysqli_fetch_array($Executeunapproved);
$total=array_shift($row);
?>

 <span class="float-right badge badge-danger">
<?php 
 echo $total;
 ?>


</td>
<td> <a href="EditPost.php?Edit=<?php echo $Id ?> "> <span class="btn btn-warning">Edit</span>  </a> &
<a href="DeletePost.php?Delete=<?php echo $Id ?> "> <span class="btn btn-danger">Delete</span> </a>
 </td>
<td><a  target="_blank" href="FullPost.php?id=<?php echo $Id ?> "> <span class="btn btn-primary">Live Preview</span></td>

</tr>

<?php } ?>

</table>
</div>

<!-- ending of main area -->
</div>
<!-- ending of row -->
</div>
<!-- ending of containter fluid -->
<div id="footer">
    <hr><p>Theme by | khaled | &copy;2020 --- All Right Reserved</p>
</div>
<div style="height:10px;background:#27aae1;"></div>
</body>
</html>