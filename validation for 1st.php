<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') //if every thing is fine then it will send a variable with value 1 
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
        $_SESSION['variable2'] = $a;
        $_SESSION['variable3'] = $a;
        //$_SESSION['start']=time();
        //$_SESSION['update']=$_SESSION['start'] + (600);
      }
header("location:./index.php");
   ?>

</head>
</html>