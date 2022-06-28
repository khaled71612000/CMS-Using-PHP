<?php require("include/db.php"); ?>
<?php require("include/Sessions.php"); ?>
<?php require("include/functions.php"); ?>

<?php

$_SESSION["User_Id"]=null;
session_destroy();
Redirect("login.php");
?>