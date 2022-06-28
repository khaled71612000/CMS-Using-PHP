<?php require("include/db.php"); ?>
<?php require("include/Sessions.php"); ?>
<?php require("include/functions.php"); ?>
<!-- comment section -->

<?php 
if(isset($_POST["Submit"])) {
$Name = mysqli_real_escape_string($connection,$_POST["Name"]);
$Email = mysqli_real_escape_string($connection,$_POST["Email"]);
$Comment = mysqli_real_escape_string($connection,$_POST["Comment"]);
date_default_timezone_set("Africa/Cairo");
$CurrentTime = time();
$DateTime = strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
$DateTime;
$PostId = $_GET['id'];

if(empty($Name)|| empty ($Comment)) {
    $_SESSION["ErrorMessage"]="All Fields are Required";
}
elseif(strlen($Comment) > 500) {
    $_SESSION["ErrorMessage"]="Too Long";
}else {
    global $connection;
    $PostIDFromUrl = $_GET['id'];
    // off status first 
    // pass adminpanelid as index and pass id  of post and when u click 
    // id in admin panel it goes ot post
    $Query = "INSERT INTO comments (datetime,name,email,comment,approveby,status,admin_panel_id)
    VALUES ('$DateTime','$Name','$Email','$Comment','Pending','OFF','$PostIDFromUrl')";
   $Execute = mysqli_query($connection,$Query);


if ($Execute) {
        $_SESSION["SuccessMessage"]="Comment added";
        redirect("fullpost.php?id= $PostId ");
    }else { 
        $_SESSION["ErrorMessage"]="Something went wrong";
        redirect("fullpost.php?id= $PostId ");
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
    <link rel="stylesheet" href="css/fstyle.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Full Blog Post</title>
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
<?php echo Message(); 
echo SuccessMessage ()
?>
<?php 

if (isset ($_GET["SearchButton"])) {
$Search = $_GET["Search"];
$ViewQuery = "SELECT * FROM admin_panel
WHERE datetime LIKE '%$Search%'
OR title LIKE '%$Search%' OR category LIKE '%$Search%'
OR post LIKE '%$Search%'";
}else {
    $PostIDFromUrl= $_GET["id"];

// if search is not set do that query instead
$ViewQuery = "SELECT * FROM admin_panel WHERE id='$PostIDFromUrl' ORDER BY datetime desc"; 
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
<img src="Upload/<?php echo $Image; ?> ">
</div>
<div class="caption">
<h1 id="heading"> <?php echo htmlentities($Title);  ?> </h1>
<p class="description" > Category:  <?php echo htmlentities($Category);   ?>  Published on 
<?php echo htmlentities($DateTime) ?> </p>
<p class="post"> <?php
// to print format opipiste of html enteies which shows h1 instead of captail
    echo nl2br ($Post);
 ?> </p>
</div>


<?php } ?>
<h2>Comments</h2>
<?php

$connection;
$postidforcomments=$_GET['id'];
// where id is right
$extractingcommentsquery="  SELECT * FROM comments 
WHERE admin_panel_id = '$postidforcomments' AND status = 'ON' ";
$Execute = mysqli_query($connection,$extractingcommentsquery);
while($row = mysqli_fetch_assoc($Execute)) {
  $commentdate= $row["datetime"];
  $commentname= $row["name"];
  $commentusers= $row["comment"];

?>

<!-- review comment -->
<div class="CommentBlock">
<img class="float-left" src="img/download.png" width=70px height=70px>
<p class="commentinfo"><?php echo $commentname ?></p>
<p class="description"><?php echo $commentdate ?></p>
<p class="comment"><?php echo $commentusers ?></p>

</div>
<?php }?>
<!-- comment section -->
<form action="fullpost.php?id= <?php echo $PostId ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">        
            <label for="Name">Name:</label>
            <input class="form-control" type="text" name="Name" placeholder="Name" id="Name">
        </div>
        <div class="form-group">        
            <label for="Email">Email:</label>
            <input class="form-control" type="Email" name="Email" placeholder="Email" id="Email">
        </div>
        


         <label for="Commentarea">Comment :</label>
<textarea name="Comment" id="Commentarea" class="form-control"></textarea>    
    <input class="btn btn-primary" type="Submit" name="Submit" value="Submit">
        </form>

</div>
<div class="col-sm-offset-1 col-sm-3">
</div>

</div>
</div>
<div id="footer">
    <hr><p>Theme by | khaled | &copy;2020 --- All Right Reserved</p>
</div>
<div style="height:10px;background:#27aae1;"></div>
</body>
</html>