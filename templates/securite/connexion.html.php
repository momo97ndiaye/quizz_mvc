<?php 
  require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
  if (isset($_SESSION[KEY_ERRORS])) {
    $errors=$_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
  }
  
 ?>
	<div class="tete">
		le plaisir de jouer
	</div>
			<!-- <form action="<?= WEB_ROOT ?>" method="POST">
      <input type="hidden" name="controller" value="securite">
      <input type="hidden" name="action" value="connexion">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
              <?php 
              if (isset($errors['connexion'])): 
              ?>
              <p style="color:red"><?=$errors['connexion'];?> </p>
              <?php endif ?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5> 
           		   		<input type="text" class="input" name="login">
                      <?php 
              if (isset($errors['login'])): 
              ?>
              <p style="color:red"><?=$errors['login'];?></p>
              <?php endif ?>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
                     <?php 
              if (isset($errors['password'])): 
              ?>
              <p style="color:red"><?=$errors['password']; ?></p>
              <?php endif ?>
            	   </div>
            	</div>
            	<a href="#">Sign UP</a>
            	<input type="submit" class="btn" value="LOGIN">
            </form> -->
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
            <input type="text" placeholder="Login" name="login">
			<?php 
              if (isset($errors['login'])): 
              ?>
              <p style="color:red"><?=$errors['login'];?></p>
              <?php endif ?>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password">
			<?php 
              if (isset($errors['password'])): 
              ?>
              <p style="color:red"><?=$errors['password']; ?></p>
              <?php endif ?>
          </div>
          <div class="row button" id="row">
		  <p><a href="<?= WEB_ROOT ?>?controller=securite&action=register">S'incrire pour jouer</a></p>
            <input type="submit" value="Login">
          </div>
        </form>
      </div>
    </div>

        </div>
    </div>
    <?php 
  require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
 ?>