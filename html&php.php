<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">

        <p>Saisir votre nom:</p>
        <p><input type="text" name="nom"></p>
        <p>Saisir votre prénom:</p>
        <p><input type="text" name="prenom"></p>
        <p>Saisir votre login:</p>
        <p><input type="text" name="login"></p>
        <p>Saisir votre mail:</p>
        <p><input type="email" name="mail"></p>
        <p>Saisir votre mot de passe:</p>
        <p><input type="password" name="password"></p>
        <p>Saisir votre date:</p>
        <p><input type="date" name="date"></p>
    
        <p><input type="submit" value="ajouter" name="submit"></p>
    </form>

</body>
</html>

<?php
    if(isset($_POST['submit'])){
       
        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['login']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['date'])){

            $date = new DateTime($_POST['date']);
            echo '<p>Le compte '.$_POST['login'].' a été ajouté à la date de '.$date->format('d/n/y').'</p>';
        }
 
        else{
            echo '<p>Veuillez remplir tous les champs</p>';
        }
    }

    else{
        echo '<p>Pour ajouter un utilisateur 
        cliquez sur le bouton ajouter</p>';
    }
?>