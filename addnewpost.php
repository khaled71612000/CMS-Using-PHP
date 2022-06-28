<?php require("include/db.php"); ?>
<?php require("include/Sessions.php"); ?>
<?php require("include/functions.php"); ?>
<?php  Confirm_Login() ?>

<?php 
if(isset($_POST["Submit"])) {
$Title = mysqli_real_escape_string($connection,$_POST["Title"]);
$Category = mysqli_real_escape_string($connection,$_POST["Category"]);
$Post = mysqli_real_escape_string($connection,$_POST["Post"]);
date_default_timezone_set("Africa/Cairo");
$CurrentTime = time();
$DateTime = strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
$DateTime;
$Admin = $_SESSION["Username"];
// take name from inupt image to upload
$Image = $_FILES["Image"]["name"];
// to download
$Target = "Upload/".basename($_FILES["Image"]["name"]);
if(empty($Title)) {
    $_SESSION["ErrorMessage"]="Title cant be empty";
   redirect("addnewpost.php");
}
elseif(strlen($Title) < 2) {
    $_SESSION["ErrorMessage"]="Title should be atleast 2 characters";
   redirect("addnewpost.php");
}else {
    global $connection;
    $Query ="INSERT INTO  admin_panel (datetime,title,category,author,image,post) VALUES ('$DateTime','$Title','$Category','$Admin','$Image','$Post')";
    $Execute = mysqli_query($connection,$Query);
    // move image tmp to target
    move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
    if ($Execute) {
        $_SESSION["SuccessMessage"]="Post added";
        redirect("addnewpost.php");
    }else { 
        $_SESSION["ErrorMessage"]="Something went wrong";
   redirect("addnewpost.php");
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
    <title>Add New Post</title>
</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-sm-2">
<h1>Khaled</h1>

<ul id="side_menu" class="nav flex-column nav-pills nav-fill ">
<li class=" nav-item " > <a  class = "nav-link " href="dashboard.php">DashBoard</a></li>
<li class=" nav-item">  <a class = "nav-link active" href="addnewpost.php">Add new post</a></li>
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

</a></li><li class=" nav-item"> <a class = "nav-link" href="#">Live Blog</a></li>
<li class=" nav-item"> <a class = "nav-link" href="#">Log Out</a></li>
</ul>

<!-- ending side area -->
</div>
<div class="col-sm-10">
<div><?php echo Message(); 
echo SuccessMessage ()
?></div>
    <h4>Add New Post</h4>
    <div>
        <form action="addnewpost.php" method="post" enctype="multipart/form-data">
        <div class="form-group">        
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="Title" placeholder="Title" id="title">
        </div>
        <div class="form-group">        
            <label for="categoryselect">Category:</label>
            
            <select name="Category" id="categoryselect" class="form-control">
            <?php

$ViewQuery= "SELECT * FROM category ORDER BY datetime desc";
$Execute = mysqli_query($connection,$ViewQuery);
while ($Rows=mysqli_fetch_assoc($Execute)){
    $Id= $Rows["id"];
    $CategoryName= $Rows["name"];
?>

<option>  <?php echo $CategoryName; ?> </option>

<?php } ?>  
            </select>
                    </div>

                    <div class="form-group">        
            <label for="imageselect">Select Image:</label>
<input type="file" class="form-control" name="Image" id="imageselect">
            <label for="postarea">Post :</label>
<textarea name="Post" id="postarea" class="form-control"></textarea>    
    <input class="btn btn-success btn-block" type="Submit" name="Submit" value="Add New Post">
        </form>






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