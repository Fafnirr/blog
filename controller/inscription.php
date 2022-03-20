<?php 

try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
} catch (\Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


if ( isset( $_POST['submit'] ) ) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];    
    $pseudo = $_POST['pseudo'];    
    $email = $_POST['email']; 
    $password = $_POST['password'];

    echo 'envoie réussi';
    $req = $bdd->prepare("INSERT INTO users(nom, prenom, pseudo, email, password) VALUES (?,?,?,?,?)");
    $req->execute(array(
        $nom,
        $prenom,
        $pseudo,
        $email,
        $password
    ));
}