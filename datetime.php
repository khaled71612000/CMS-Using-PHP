<?php 
date_default_timezone_set("Africa/Cairo");
$CurrentTime = time();
$DateTime = strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
echo $DateTime;
?>