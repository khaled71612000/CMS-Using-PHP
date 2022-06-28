<?php require("include/db.php"); ?>
<?php require("include/Sessions.php"); ?>
<?php require("include/functions.php"); ?>
<?php  Confirm_Login() ?>

<?php 
if(isset($_POST["Submit"])) {
$Category = mysqli_real_escape_string($connection,$_POST["Category"]);
date_default_timezone_set("Africa/Cairo");
$CurrentTime = time();
$DateTime = strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
$DateTime;
$Admin = $_SESSION["Username"];

if(empty($Category)) {
    $_SESSION["ErrorMessage"]="All Fields Must be Filled out";
   redirect("categories.php");
}
elseif(strlen($Category) > 99) {
    $_SESSION["ErrorMessage"]="Too Long Name for category";
   redirect("categories.php");
}else {
    global $connection;
    $Query ="INSERT INTO category (datetime,name,creatorname) VALUES ('$DateTime','$Category','$Admin')";
    $Execute = mysqli_query($connection,$Query);
    if ($Execute) {
        $_SESSION["SuccessMessage"]="Category added";
        redirect("categories.php");
    }else { 
        $_SESSION["ErrorMessage"]="Category failed to Add";
   redirect("categories.php");
    }
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Categories</title>
</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-sm-2">
<h1>Khaled</h1>

<ul id="side_menu" class="nav flex-column nav-pills nav-fill ">
<li class=" nav-item " > <a  class = "nav-link " href="dashboard.php">DashBoard</a></li>
<li class=" nav-item">  <a class = "nav-link" href="addnewpost.php">Add new post</a></li>
<li class=" nav-item"> <a class = "nav-link active" href="categories.php">Categories</a></li>
<li class=" nav-item"> <a class = "nav-link" href="admins.php">Manage Admins</a></li>
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

</a></li><li class=" nav-item"> <a class = "nav-link" href="#">Live Blog</a></li>
<li class=" nav-item"> <a class = "nav-link" href="#">Log Out</a></li>
</ul>

<!-- ending side area -->
</div>
<div class="col-sm-10">
<div><?php echo Message(); 
echo SuccessMessage ()
?></div>
    <h4>Manage categories</h4>
    <div>
        <form action="categories.php" method="post">
        <div class="form-group">        
            <label for="categoryname">Name</label>
            <input class="form-control" type="text" name="Category" placeholder="name" id="categoryname">
        </div>
        <input class="btn btn-success btn-block" type="Submit" name="Submit" value="Add New Category">
        </form>

<div>
<table class="table table-striped table-hover">
<tr>
<th>No.</th>
<th>Date & Time</th>
<th>Category Names</th>
<th>Creator Name</th>
<th>Action</th>
</tr>

<?php

$ViewQuery= "SELECT * FROM category ORDER BY datetime desc";
$Execute = mysqli_query($connection,$ViewQuery);
while ($Rows=mysqli_fetch_assoc($Execute)){
    $Id= $Rows["id"];
    $DateTime= $Rows["datetime"];
    $CategoryName= $Rows["name"];
    $CreatorName= $Rows["creatorname"];

?>
<tr>
<td><?php echo $Id; ?></td>
<td><?php echo $DateTime; ?></td>
<td><?php echo $CategoryName; ?></td>
<td><?php echo $CreatorName; ?></td>
<td><a href="deletecategory.php?id=<?php echo $Id ?>"><span class="btn btn-danger">Delete</span>
</a></td>
</tr>

<?php } ?>
</table>
</div>

    </div>
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