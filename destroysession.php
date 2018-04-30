<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
session_unset();
session_destroy();
?>
<meta http-equiv="refresh" content="2,URL='./index.php'">

</head>
</html>