<?php
session_start();

if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
  $user = $_SESSION['user'];
}else{
  Header("Location: login.php");
  exit();
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Moj profil</title>
  </head>
  <body>
    <div>
      <h1>Moj profil</h1>
      <p>Korisnik: <?php echo $user['name'] ?></p>
      <p>Email: <?php echo $user['email']; ?></p>
      <p><a href="logout.php">Izloguj se</a></p>
    </div>
  </body>
</html>
