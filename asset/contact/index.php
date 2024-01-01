<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_contact.css">
    <link rel="icon" href="../img/logo/logo__luxeauto.png">
    <link rel="stylesheet" href="../forntawesome/css/all.css">
    <title>LUXEAUTO/Contact</title>
</head>
<body>
   <?php
        include("../includ/includ_element/header.php");
   ?>
    <div class="background__video">
        <video  muted="" autoplay="autoplay" loop="infinite">
            <source src="../video/Publicité_de_Mercedes-Benz_ Mercedes-Benz_Canada.mp4" type="">
        </video>
    </div>
    <main id="contact">
        <div class="title__page__contact">
            <h1 class="title__contact__page">Contact</h1>
        </div>
        <div class="contact__contener">
            <figure><img src="../img/doco_mobile/contact_solde.jpeg" alt="" srcset=""></figure>
            <form action="../includ/data/config.php" method="post">
                <div class="title__contact">
                    <h2 id="contact__h2">Contactez-nous</h2>
                    <p id="contact__consigne">Nous aimerions entendre de votre part. Si vous avez des questions ou des commentaires, n'hésitez pas à nous contacter par le biais du formulaire ci-dessous.</p>
                </div>
                <fieldset class="contact__form__fieldset">
                        <legend>Information Personnel</legend>
                        <div class="form__group__contact">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" required>
                        </div>
                        <div class="form__group__contact">
                            <label for="prenom">Prenom</label>
                            <input type="text" id="prenom" name="prenom" required>
                        </div>
                        <div class="form__group__contact">
                            <label for="date_de_naissance">Date de naissance</label>
                            <input type="date" id="date_de_naissance" name="date_de_naissance" required>
                        </div>
                        <div class="form__group__contact">
                            <label for="email">Adresse e-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form__group__contact">
                            <label for="sexe" require>Sexe</label>
                            <select  name="sexe" aria-placeholder="Sexe" id="sexe" require_once aria-required="true" required>
                                <option value="#" selected disabled>Homme ou Femme</option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        </div>
                        <button type="submit" name="submit">Envoyer</button>
                </fieldset>
            </form>
        </div>
    </main>$
    <?php
        include("../includ/includ_element/footer.php");
    ?>
</body>
</html>