<?php require("include/db.php"); ?>

<?php 

function Redirect ($New_Location) {
    header ("Location:".$New_Location);
    exit;
}


function login_attempt ($username,$password) {
global $connection ;
$query = "SELECT * FROM registeration 
WHERE username= '$username' AND password= '$password' ";
$Execute = mysqli_query($connection,$query);
if($admin= mysqli_fetch_assoc($Execute)){
    return $admin;
}else {
    return null;
}
}

function login (){
    if(isset($_SESSION["User_Id"])){
        return true;
    }
}
function Confirm_Login(){
    if(!login()){
        redirect("login.php");
    }
}

?>
