<?php


if (isset($_POST) && !empty($_POST)) {
  $name = $_POST['user'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  echo $name;
  echo "<br />";
  echo $email;
  echo "<br />";
  echo $message;

  $emailbody = "Ovo su podaci: $name, $email, $message";
  mail("dusanivanovic@mail.com", "Poruka sa sajta", $emailbody);
}

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forma</title>
  </head>
  <body>
    <div>
      <h1>Kontakt forma</h1>
      <form action="" method="post">
        <p>
          <label>Ime i iprezime</label>
          <input type="text" name="user" value="">
        </p>
        <p>
          <label>Email</label>
          <input type="email" name="email" value="">
        </p>
        <p>
          <label>Poruka</label>
          <textarea name="message"></textarea>
        </p>
        <p>
          <input type="submit" name="" value="Send">
        </p>
      </form>
    </div>
  </body>
</html>
