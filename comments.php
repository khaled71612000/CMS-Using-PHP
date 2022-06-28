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
<li class=" nav-item " > <a  class = "nav-link  " href="dashboard.php">DashBoard</a></li>
<li class=" nav-item">  <a class = "nav-link" href="addnewpost.php">Add new post</a></li>
<li class=" nav-item"> <a class = "nav-link " href="categories.php">Categories</a></li>
<li class=" nav-item"> <a class = "nav-link" href="admins.php">Manage Admins</a></li>
<li class=" nav-item"> <a class = "nav-link active" href="comments.php">Comments</a></li>
<li class=" nav-item"> <a class = "nav-link" href="#">Live Blog</a></li>
<li class=" nav-item"> <a class = "nav-link" href="#">Log Out</a></li>
</ul>

<!-- ending side area -->
</div>
<div class="col-sm-10">
<div><?php echo Message(); 
echo SuccessMessage ()
?></div>
<h4>Un-Approved Comments</h4>

<table class="table table-striped table-hover">
<tr>
<th>No.</th>
<th>Name.</th>
<th>Date.</th>
<th>Comment.</th>
<th>Approve.</th>
<th>Delete Comment.</th>
<th>Details.</th>
</tr>

<?php

global $connection;
$query = "SELECT * FROM comments WHERE status = 'OFF' ORDER BY datetime desc";

$Execute = mysqli_query($connection,$query);
while($row =mysqli_fetch_assoc ($Execute)) {
$commentId= $row['id'];
$datetimeofcomment= $row['datetime'];
$personname= $row['name'];
$personecomment= $row['comment'];
$commentpostid= $row['admin_panel_id'];


if(strlen($personecomment) > 18) {$personecomment = substr($personecomment,0,18).'...';}


?>
<tr>

<td><?php echo $commentId;  ?> </td>
<td><?php echo $personname;  ?> </td>
<td><?php echo $datetimeofcomment;  ?> </td>
<td><?php echo $personecomment;  ?> </td>
<td><a class="btn btn-success" href="approvedcomments.php?id=<?php echo $commentId ?>">Approve</a></td>
<td><a class="btn btn-danger" href="Deletecomments.php?id=<?php echo $commentId ?>">Delete</a></td>
<td><a class="btn btn-primary" href="Fullpost.php?id=<?php echo $commentpostid ?>">Live Preview</a></td>
</tr>

<?php } ?>
</table>
<h4>Approved Comments</h4>

<table class="table table-striped table-hover">
<tr>
<th>No.</th>
<th>Name.</th>
<th>Date.</th>
<th>Comment.</th>
<th>Approved By</th>
<th>Revert Approve.</th>
<th>Details.</th>
</tr>

<?php

global $connection;
$query = "SELECT * FROM comments WHERE status = 'ON' ORDER BY datetime desc";

$Execute = mysqli_query($connection,$query);
while($row =mysqli_fetch_assoc ($Execute)) {
$commentId= $row['id'];
$datetimeofcomment= $row['datetime'];
$personname= $row['name'];
$personecomment= $row['comment'];
$ApprovedBy= $row['approveby'];
$commentpostid= $row['admin_panel_id'];
?>
<tr>

<td><?php echo $commentId;  ?> </td>
<td><?php echo $personname;  ?> </td>
<td><?php echo $datetimeofcomment;  ?> </td>
<td><?php echo $personecomment;  ?> </td>
<td><?php echo $ApprovedBy;  ?> </td>
<td><a class="btn btn-warning" href="disapprovecomments.php?id=<?php echo $commentpostid ?>">Dis-Approve</a></td>
<td><a class="btn btn-danger" href="Deletecomments.php?id=<?php echo $commentId ?>">Delete</a></td>
<td><a class="btn btn-primary" href="Fullpost.php?id=<?php echo $commentpostid ?>">Live Preview</a></td>
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