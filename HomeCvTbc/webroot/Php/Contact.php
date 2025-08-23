<?php
$User = 'roodt';
$Password = '';
try{
    $mysqlclient = new PDO('mysql:host=localhost:8080;Dbname=thibautportfolio',$User,$Password );
}catch(PDOException $e){
    print 'Erreur : '.$e->getMessage().'<br>';
    die;
}
$mysqlclient = 'SELECT * FROM thibautportfolio';



//    $Nom = $_POST["nom"];
//    $Email = $_POST["mail"];
//    $Sujet = $_POST["sujet"];
//    $Message = $_POST["message"];
?>