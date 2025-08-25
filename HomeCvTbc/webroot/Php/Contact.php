<?php
    include'./Connexion.php';
    
    // Vérifier si le formulaire est soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les champs du formulaire
        $nom = htmlspecialchars($_POST['nom']);
        $mail = htmlspecialchars($_POST['mail']);
        $sujet = htmlspecialchars($_POST['sujet']);
        $message = htmlspecialchars($_POST['message']);


        $sql = "INSERT INTO messagecv (nom, AdresseMail, sujet, message) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nom, $mail, $sujet, $message]);

        // Sauvegarde aussi dans un fichier texte (optionnel)
        $contenu = "Nom: $nom\nEmail: $mail\nSujet: $sujet\nMessage: $message\n----------------------\n";
        file_put_contents("contact.txt", $contenu, FILE_APPEND);

        echo "✅ Merci $nom, votre message a bien été enregistré.";
    } else {
        echo "❌ Erreur : formulaire non soumis correctement.";
    }


?>
