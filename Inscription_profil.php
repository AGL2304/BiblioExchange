<?php include_once "Back-end/inscription.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <style>
        /* Votre CSS personnalisé ici */
        body {
            background-color: #fff;
            /* Changement de la couleur de fond de la page */
            margin: 0;
            /* Supprime les marges par défaut */
            padding: 0;
            /* Supprime les marges par défaut */
        }

        .container {
            position: relative;
            /* Position relative pour le positionnement absolu du lien */
        }

        .profile-link {
            position: absolute;
            top: 70px;
            /* Ajustez la position verticale selon vos besoins */
            left: 10px;
            color: blue;
            cursor: pointer;
            display: flex;
            align-items: center;
            /* Alignement vertical */
            text-decoration: none;
            /* Supprime le soulignement du lien */
        }

        .profile-link img {
            width: 40px;
            /* Taille de la miniature */
            height: auto;
            /* Hauteur proportionnelle */
            margin-right: 10px;
            /* Marge à droite pour l'écart avec le texte */
        }

        .squircle {
            border-radius: 25px;
            overflow: hidden;
            background-color: #f8f9fa;
            padding: 20px;
            margin: auto;
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .logo img {
            width: 100px;
            height: 100px;
            border-radius: 15px;
            /* Bords arrondis du logo */
        }

        .back-link {
            color: blue;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin-bottom: 20px;
            /* Ajustez la marge selon vos besoins */
        }

        .back-link .oi {
            font-size: 3.5rem;
            /* Ajustez la taille de l'icône selon vos besoins */
            margin-right: 5px;
            /* Marge à droite pour l'écart avec le texte */
        }
    </style>
</head>

<body>

    <!-- <div class="container">
        <a class="profile-link" href="Avatar_du_profil.php">
            <img src="Assets/Avatar_du_profil.png" alt="Avatar du profil"> 
            Ajoutez un profil 
        </a>
    </div> -->

    <div class="squircle">
        <a href="Connexion_biblioEx.php" class="back-link">
            <span class="oi oi-arrow-left"></span>
            Retour
        </a>

        <div class="logo" onclick="window.location.href='index.php';">
            <img src="Assets/livre1.png" alt="logo Livre">
            <p>BiblioExchange</p>
        </div>

        <div class="container">
            <h1 class="text-center">Inscription</h1>
            <?php include_once "Back-end/display.php"; ?>
            <form id="inscriptionForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="prenoms">Prénoms :</label>
                    <input type="text" id="prenoms" name="prenoms" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="dateNaissance">Date de naissance :</label>
                    <input type="date" id="dateNaissance" name="dateNaissance" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tel">Numéro de téléphone :</label>
                    <input type="tel" id="tel" name="tel" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sexe">Sexe :</label>
                    <select id="sexe" name="sexe" class="form-control" required>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="niveauEtude">Niveau d'étude :</label>
                    <select id="niveauEtude" name="niveauEtude" class="form-control">
                        <option value="primaire">Primaire</option>
                        <option value="secondaire">Secondaire</option>
                        <option value="universitaire">Universitaire</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="motDePasse">Mot de passe :</label>
                    <input type="password" id="motDePasse" name="motDePasse" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="confirmerMotDePasse">Confirmer mot de passe :</label>
                    <input type="password" id="confirmerMotDePasse" name="confirmerMotDePasse" class="form-control"
                        required>
                </div>
                <div class="form-group">
                    <label for="bio">Biographie :</label>
                    <textarea id="bio" name="bio" class="form-control" rows="5"
                        placeholder="Écrivez votre biographie littéraire ici..."></textarea>
                </div>
                <div class="form-group">
                    <label for="genresPref">Genre préféré :</label>
                    <div class="form-group">
                        <div>
                            <input type="checkbox" id="fiction" name="genresPref[]" value="fiction">
                            <label for="fiction">Fiction</label>
                        </div>
                        <div>
                            <input type="checkbox" id="scienceFiction" name="genresPref[]" value="scienceFiction">
                            <label for="scienceFiction">Science-fiction</label>
                        </div>
                        <div>
                            <input type="checkbox" id="fantastique" name="genresPref[]" value="fantastique">
                            <label for="fantastique">Fantastique</label>
                        </div>
                        <div>
                            <input type="checkbox" id="romanHistorique" name="genresPref[]" value="romanHistorique">
                            <label for="romanHistorique">Roman historique</label>
                        </div>
                        <div>
                            <input type="checkbox" id="poesie" name="genresPref[]" value="poesie">
                            <label for="poesie">Poésie</label>
                        </div>
                        <div>
                            <input type="checkbox" id="thriller" name="genresPref[]" value="thriller">
                            <label for="thriller">Thriller</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>