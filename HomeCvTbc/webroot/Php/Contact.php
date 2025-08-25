<?php
$User = 'root';
$Password = '';

try {
    $mysqlclient = new PDO(
        'mysql:host=localhost;port=3307;dbname=thibautportfolio;charset=utf8',
        $User,
        $Password
    );
    $mysqlclient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base MySQL !";
} catch (PDOException $e) {
    echo 'Erreur : '.$e->getMessage().'<br>';
    die;
}
?>
