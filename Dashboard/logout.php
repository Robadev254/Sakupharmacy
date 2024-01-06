<?php
if(isset($_POST['logout'])){
    session_start();
    session_unset();
    header("Location:../doc.php");
    // echo ("Logged out");
  }

?>