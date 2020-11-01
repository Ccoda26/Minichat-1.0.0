<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le MiniChat Sympa</title>
    <link rel="stylesheet" href="css/styleform.css">
</head>

<body>

    <?php
    $pseudo = $_POST['pseudo'];
    ?>
    <!-- mon image de nuage -->
    <div class="cloud">
        <img src="img/cloud.png" alt="" class="resp">
        <div class="montexte">
            <h1>Le MiniChat Sympa</h1>
        </div>
    </div>


    <?php

    //declaration de variable
    $prenom = $_POST['prenom'];
    $name = $_POST['name'];

    $birth_date = $_POST['date'];
    $adress = $_POST['adress'];
    $city = $_POST['city'];
    $mail = $_POST['email'];
    $profile = 2;

  
    // si des champs son vide alors pas insertion dans BDD
if(empty($prenom)){
    echo 'Ta oublié ton prenom <br>';
}if(empty($nom)){
    echo 'Ta oublié ton nom <br>';
}if(empty($birth_date)){
    echo 'Ta oublié ton date de naissance <br>';
}if(empty($adress)){
    echo 'Ta oublié ton adress <br>';
}if(empty($city)){
    echo 'Ta oublié ton ville <br>';
}if(empty($mail)){
    echo 'Ta oublié ton mail <br>';
}elseif(empty($prenom) AND empty($nom) AND empty($birth_date) AND empty($adress) AND empty($city) AND empty($mail)){
    echo 'comment tu veux rejoindre le Chat sans rentrer tes information ???? <br>';
}else{
    ?>
    <h2>Voici ton espace <?php echo $pseudo ?></h2>

    <form method="post" action="traitement.php">


        <p>
            <textarea name="message" cols="50" rows="10" placeholder="Laisse nous un message ..."></textarea><br>
            <input type="submit" value="Envoyer">
        </p>
    </form>

<?php
//ajouter les donnees en INSERT
    $req = $bdd->prepare('INSERT INTO user(name, last_name, pseudo, birth_date, adress, city, mail, id_profile)
VALUES (:name, :last_name, :pseudo, :birth_date, :adress, :city, :mail, :id_profile)');
    $req->execute(array(
        'name' => $prenom,
        'last_name' => $name,
        'pseudo' => $pseudo,
        'birth_date' => $birth_date,
        'adress' => $adress,
        'city' => $city,
        'mail' => $mail,
        'id_profile' => $profile

    ));
}



    ?>

</body>

</html>