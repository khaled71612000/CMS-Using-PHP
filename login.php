<?php require("include/db.php"); ?>
<?php require("include/Sessions.php"); ?>
<?php require("include/functions.php"); ?>

<?php 
if(isset($_POST["Submit"])) {
$Username = mysqli_real_escape_string($connection,$_POST["Username"]);
$Password = mysqli_real_escape_string($connection,$_POST["Password"]);

if(empty($Username)||empty($Password)) {
    $_SESSION["ErrorMessage"]="All Fields Must be Filled out";
   redirect("login.php");
}
else {

$found_account = login_attempt($Username,$Password);
$_SESSION["User_Id"] = $found_account["id"];
$_SESSION["Username"] = $found_account["username"];

if($found_account) {
    $_SESSION["SuccessMessage"]="Logged In {$_SESSION["Username"]}";
    redirect("dashboard.php");

}
else {
    $_SESSION["ErrorMessage"]="Invalid username or password";
    redirect("login.php");

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

<style>

body{
    background-color: white;
}
</style>

    <title>Admins</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
  <a class="navbar-brand" href="#">KhaledCMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    
  </div>
  </div>

</nav>
<div class="container d-flex justify-content-center ">
<div class="row ">

</div>
<div class="col-offset-sm-10 col-sm-4">
<div>
<?php echo Message(); 
echo SuccessMessage ()
?>
</div>
    <h1 class="d-flex justify-content-center">Welcome!</h1>
    <div>
        <form action="login.php" method="post">
        <div class="form-group">                
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">UserName</span>
  </div>
            <input class="form-control" type="text" name="Username" placeholder="Username" id="UserName">
        </div>
        <div class="form-group">        
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">password</span>
  </div>           
   <input class="form-control" type="password" name="Password" placeholder="Password" id="Password">
        </div>
        <div class="form-group">  
        <div class="input-group mb-3">

        <input class="btn btn-info btn-block" type="Submit" name="Submit" value=" Login">
        </form>


    </div>

</body>
</html>