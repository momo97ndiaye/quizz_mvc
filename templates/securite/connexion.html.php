<?php 
  if (isset($_SESSION[KEY_ERRORS])) {
    $errors=$_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
  }
  
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz-App</title>
    <link rel="stylesheet" type="text/css" href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.connexion.css" ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
	<div class="tete">
		le plaisir de jouer
	</div>
			<div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="<?= WEB_ROOT ?>" method="POST">
		<input type="hidden" name="controller" value="securite">
      <input type="hidden" name="action" value="connexion">
	  <?php 
              if (isset($errors['connexion'])): 
              ?>
              <p style="color:red"><?=$errors['connexion'];?> </p>
              <?php endif ?>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Login" name="login" id="login">
			<?php 
              if (isset($errors['login'])): 
              ?>
              <p style="color:red"><?=$errors['login'];?></p>
              <?php endif ?>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" id="password">
			<?php 
              if (isset($errors['password'])): 
              ?>
              <p style="color:red"><?=$errors['password']; ?></p>
              <?php endif ?>
          </div>
          <div class="row button" id="row">
		  <p><a href="<?= WEB_ROOT ?>?controller=securite&action=register">S'incrire pour jouer</a></p>
            <input type="submit" value="LOGIN">
          </div>
        </form>
      </div>
    </div>

        </div>
    </div>
    <?php 
  require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
 ?>