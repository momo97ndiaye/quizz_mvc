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
    <img src="../img/logo.png" alt="">
		Le Plaisir de Jouer
	</div>
			<div class="container">
      <div class="wrapper" >
        <div class="title"><span>Login Form</span></div>
        <form action="<?= WEB_ROOT ?>" method="POST" id="form">
        <?php if (isset($errors['connexion'])): ?>
              <p style="color:red"><?=$errors['connexion'];?> </p>
              <?php endif ?>
		<input type="hidden" name="controller" value="securite">
      <input type="hidden" name="action" value="connexion">
	       
          <div class="row" >
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Login" name="login" id="login">
            <small id="small" style="color:red"></small>
		        	<?php  if (isset($errors['login'])): ?>
              <p style="color:red"><?=$errors['login'];?></p>
              <?php endif ?>
          </div>
          <div class="row" ">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" id="password">
            <small id="small" style="color:red"></small>
			<?php if (isset($errors['password'])): ?>
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
    <script type="text/javascript" src="<?= WEB_PUBLIC."js".DIRECTORY_SEPARATOR."main.connexion.js" ?>"></script>
</body>
</html> 