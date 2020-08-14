<?php 
/*
session_start();
unset($_SESSION['newSession']);
header("Location: ../riyadh-season.php");


exit();
*/
 /*
session_start(); //to ensure you are using same session
unset($_SESSION['newSession']);
session_destroy(); //destroy the session
header("Location: ../login_page.php"); //to redirect back to "index.php" after logging out
exit();
*/

 session_start();
 session_destroy();
 header("Location: ../riyadh-season.php");

?>