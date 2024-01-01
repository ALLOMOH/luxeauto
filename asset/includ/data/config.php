<?php
// Connection à la base de données
try {
    $db = new PDO("mysql:host=localhost;dbname=luxeauto","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "DB connected successfully.";
} catch (Exception $e) {
    die("Erreur :" . $e->getMessage(). " ligne: " . $e->getLine());
}

// Récupération des informations du formulaire
if (isset($_POST["submit"])) {
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $date_de_naissance = htmlspecialchars($_POST["date_de_naissance"]);
    $email = htmlspecialchars($_POST["email"]);
    $sexe = htmlspecialchars($_POST["sexe"]);
    
    // Préparation de la requête SQL
    $sql = "INSERT INTO users (nom, prenom,date_de_naissance , email, sexe) VALUES (?, ?, ?, ?, ?)";
    $insertion = $db->prepare($sql);
    
    // Exécution de la requête
    $result = $insertion->execute([$nom, $prenom, $date_de_naissance, $email, $sexe]);
    
    // Vérification de l'insertion
    if ($result) {
        echo "Données insérées avec succès.";
    } else {
        echo "Erreur lors de l'insertion des données.";
    }
}
?>