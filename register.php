<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FileShare</title>
    <link rel="stylesheet" href="./style.css">
  </head>

  <body>
    <!--Haut de page-->
    <header>
    <h1>FileShare</h1>
    <p>Partage tes fichiers plus <br> vite que la lumière </p> <br>
  </header>
      <!--Formulaire-->
      <form method="post">
      <div>
        <br>
      <p>Adresse e-mail</p>
      <input type="email" name="email" size="30"id="email"placeholder="Votre adresse e-mail"required>

      <p>Pseudo</p>
      <input type="text" name="pseudo" size="30"id="pseudo"placeholder="Votre identifiant"required>

      <p> Date de naissance</p>
      <input type="date" name="aniversaire"required>

      <p>Mot de passe</p>
      <input type="password" name="password"id="password" minlength="8" size="30"placeholder="Votre mot de passe"required>

      <p>Confirmer mot de passe</p>
      <input type="password" name="cpassword"id="cpassword" size="30"placeholder="Confirmer votre mot de passe"required>

      <p>Accepter les termes d'utilisation<p>
      <input type="checkbox" name="condition"required>
      <a href="condition.html"> Conditions d'utilisations
      </a><br><br>
      <input type="submit" value="Inscription" name="formsend" id="formsend">
      <input type="reset" value="Annuler">
    </div>
  </form>


  <?php

  if(isset($_POST['formsend'])){

    $email=$_POST["email"];
    $password=$_POST["password"];
    $pseudo=$_POST["pseudo"];

    if(!empty($password) && !empty($cpassword) && !empty($email)){

  if ($password == $cpassword);
  }

    include'database.php';
    global $db;
    $hashpass = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);

    $q=$db->prepare("INSERT INTO users(email,pseudo,password) VALUES(:email,:pseudo,:password)");
    $q->execute([
      'email' => $email,
      'pseudo' => $pseudo,
      'password'=> $hashpass,
    ]);

    {
      echo "Bienvenue ".$_POST["pseudo"];
    }
  }
   ?>

    <!--bas de la page-->
    <footer>
    <p>
      Copyright &copy; FileShare - 2020-2020 - All Right Reserved
    </P>
    </footer>
  </body>
</html>
