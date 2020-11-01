<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le MiniChat Sympa</title>
    <link rel="stylesheet" href="css/styleform.css">
</head>

<body>
    <div class="cloud">
        <img src="img/cloud.png" alt="" class="resp">
        <div class="montexte">
            <h1>Le MiniChat Sympa</h1>
        </div>
    </div>
    <!-- Connexion a la bdd -->


    <!-- insert dans bdd -->
    <?php


    $message = $_POST['message'];
    $id_user = 7;

    $req = $bdd->prepare('INSERT INTO chat( text, id_user, date)
    VALUES (:text, :id_user, NOW())');
    $req->execute(array(
        'text' => $message,
        'id_user' => $id_user
    ));

    ?>



    <!-- faire une demande SELECT -->
    <div class="box">
        <span class="border1"></span>
        <span class="border2"></span>
        <span class="border3"></span>
        <span class="border4"></span>
        <?php
        $reponse = $bdd->query('SELECT text FROM chat ORDER BY id DESC LIMIT 0, 18');

        while ($donnees = $reponse->fetch()) {
            echo $donnees['text'] . '<br />';
        }

        // ferme le chargement de la souris
        $reponse->closeCursor();
        ?>
    </div>


</body>

</html>