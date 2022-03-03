<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz-App</title>
    <link rel="stylesheet" type="text/css" href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.register.css" ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
	<div class="tete">
    <img src="../img/logo.png" alt="">
		Le Plaisir de Jouer
	</div>
    <div class="content">
    <form action="<?= WEB_ROOT ?>" method="post">
    <div class="gauche">
    <div class="content">
    <h1>S'inscrire pour jouer</h1>
    <h5>Pour tester votre niveau de culture générale</h5>
    <p>Prénom</p>
    <input type="text" placeholder="Prenom">
    <p>Nom</p>
    <input type="text" placeholder="Nom">
    <p>Login</p>
    <input type="text" placeholder="Login">
    <p>Password</p>
    <input type="text" placeholder="Password">
    <p>Confirm Password</p>
    <input type="text" placeholder="Confirm Password">
    <div class="pied">
    <p>Avatar</p>
    <button>Choisir un Fichier</button>
    </div>
    <div class="compte">
    <button>Créer un Compte</button>
    </div>
    </div>
    </div>
    <div class="droite">
        <div class="avatar">
            <div class="photo">
                <div class="profil">
                   <img src="/img/profil.jpeg" alt="">
                </div>
            </div>
        </div>
       <div class="titre">
       Avatar du Joueur
       </div>
    </div>
    </form>
    </div>
    <script type="text/javascript" src="<?= WEB_PUBLIC."js".DIRECTORY_SEPARATOR."main.register.js" ?>"></script>
</body>
</html>


