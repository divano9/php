<?php
session_start();

$_SESSION['user'] = null;
unset($_SESSION['user']);

echo "Uspesno ste se izlogovali";

 ?>

<br>
 <a href="login.php">Vratite se na login stranicu</a>
