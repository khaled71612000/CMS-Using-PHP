<?php require("include/db.php") ?>
<?php require("include/Sessions.php") ?>
<?php require("include/functions.php"); ?>


<?php 

if(isset($_GET['id'])) {
    $idfromurl = $_GET['id'];
    global $connection;
    $query = "UPDATE comments SET status ='OFF' WHERE id='$idfromurl'";
    $Execute = mysqli_query($connection,$query);
    if($Execute) {
        $_SESSION["SuccessMessage"] = "Comment Disapproved Successfully";
        Redirect("Comments.php");
    }
    else {
        $_SESSION["ErrorMessage"] = "Something Went Wrong";
        redirect("Comments.php");
    }
}

?>