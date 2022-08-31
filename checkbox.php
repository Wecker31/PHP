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

        <p>Saisir le Prix HT de l'article:</p>
        <p><input type="number" name="Prix HT"></p>
        <p>Saisir le nombre d'article:</p>
        <p><input type="number" name="Quantité"></p>
        <p>Saisir le taux de TVA de l'article:</p>
        <p><input type="number" name="taux"></p>
    
        <p><input type="submit" value="calculer" name="submit"></p>
    </form>

</body>
</html>

<?php
    if(isset($_POST['submit'])){
       
        if(!empty($_POST['Prix HT']) AND !empty($_POST['Quantité']) AND !empty($_POST['taux'])){

            echo '<p>Le prix TTC est de'.$_POST['].'</p>';
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