<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: /gkvhms/official/studentlogin.php");
   }
?>