<?php

include ("navigointi.php");


if (isset($_SESSION['loggedIn'])) {
    echo 'you are logged in';
}  
   
 include ("footer.php");
 
?>