<?php require("include/db.php") ?>
<?php require("include/Sessions.php") ?>
<?php require("include/functions.php"); ?>


<?php 

if(isset($_GET['id'])) {
    $idfromurl = $_GET['id'];
    global $connection;
    $admin =$_SESSION["Username"];
    $query = "UPDATE comments SET status ='ON' , approveby ='$admin' WHERE id='$idfromurl'";
    $Execute = mysqli_query($connection,$query);
    if($Execute) {
        $_SESSION["SuccessMessage"] = "Comment Approved Successfully";
        Redirect("Comments.php");
    }
    else {
        $_SESSION["ErrorMessage"] = "Something Went Wrong";
        redirect("Comments.php");
    }
}

?>