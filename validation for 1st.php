<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>

<?php
  if (true) //if every thing is fine then it will send a variable with value 1 
    {
      $a=1;
        $_SESSION['variable1'] = $a;
      //  $_SESSION['start']=time();
        //$_SESSION['update']=$_SESSION['start'] + (600);
    } 
    else 
      { 
        $a=0;
        $_SESSION['variable1'] = $a;
        //$_SESSION['start']=time();
        //$_SESSION['update']=$_SESSION['start'] + (600);
      }

   ?>
<meta http-equiv="refresh" content="2; URL='./index.php'"/> 
</head>
</html>