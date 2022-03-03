<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz-App</title>
    <link rel="stylesheet"  href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.accueil.css" ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
<div class="topnav">
  <a class="active" href="<?= WEB_ROOT ?>?controller=user&action=accueil">Accueil</a>
  <?php if(is_admin()): ?>
  <a href="<?= WEB_ROOT ?>?controller=user&action=liste.joueur">Liste des Joueurs</a>
  <?php endif ?>
  <a href="<?= WEB_ROOT ?>?controller=securite&action=deconnexion">Déconnexion</a>
  
</div>

<div style="margin-left:50px 70px">
    <table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Score</th>
        </tr>
        <?php foreach($data as $value) :?>
        <tr>
            <td><?=$value['nom']?></td>
            <td><?=$value['prenom']?></td>
            <td><?=$value['score']?></td>
            
        </tr>
        <?php endforeach ?>
    </table>
</div>
</body>
</html>


