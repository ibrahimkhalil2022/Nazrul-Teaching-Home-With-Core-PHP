<?php
session_start();
 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
unset($_SESSION['user']);
session_destroy();

header("Location: index.php");
exit;
?>