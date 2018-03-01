
<?php

session_start();

if(isset($_POST) && !empty($_POST)){
  //Prihvatanje parametra iz forme
  $username = $_POST['username'];
  $password = $_POST['password'];
  //Provera da li je korisnik ulogovan
  if($username == 'admin' && $password == 'admin'){
    //Ovde u sesiju smestamo ulogovanog korisnika
    $_SESSION['user'] = array("name" => "Dusan Ivanovic", "email" => "dusanivanovic@mail.com");

    //Redirekcija na stranu myprofile.php
    Header("Location: myprofile.php");
  }else{
    echo "Korisnicki podaci nisu ispravni";
  }
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login forma</title>
  </head>
  <body>
    <div class="">
      <h1>Prijava</h1>
      <form class="" action="login.php" method="post">
        <label>Username</label>
        <input type="text" name="username" value="">
        <br>
        <label>Password</label>
        <input type="password" name="password" value="">
        <br>
        <input type="submit" name="" value="LOGIN">
      </form>
    </div>
  </body>
</html>
