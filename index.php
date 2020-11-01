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

    <!-- deja inscris = identification -->
    <div>
        <div class="champ">
            <h2>Déja Inscrit</h2>
            <form method="post" action="formulaire.php">
                mail : <input type="text" name="email"> <br>
                PSEUDO : <input type="text" name="pseudo">
                <br><br>
                <input type="submit" value="Envoyez">
            </form>
        </div>

        <div>
            <!-- nouveau = inscritpion -->
            <h2>Inscritpion</h2>

            <form method="post" action="formulaire.php">
                <p>
                    Nom : <input type="text" name="name"><br>
                    Prenom : <input type="text" name="prenom"><br>
                    PSEUDO : <input type="text" name="pseudo"><br>
                    Date de naissance : <input type="date" name="date" min='1500-01-01' max='2005-12-31'>

                    <br>
                    adress : <input type="text" name="adress"><br>
                    ville : <input type="text" name="city">
                    <br>
                    mail : <input type="text" name="email">

                    <br><br>
                    <input type="submit" value="Envoyez" ></p>

            </form>
        </div>
    </div>
</body>

</html>