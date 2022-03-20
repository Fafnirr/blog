<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
} catch (\Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


if ( isset( $_POST['submit'] ) ) {
    $title = $_POST['titre'];
    $content = $_POST['article-content'];    
    
    echo 'envoie réussi';
    $req = $bdd->prepare("INSERT INTO posts(title, content) VALUES (?,?)");
    $req->execute(array(
        $title,
        $content,
    ));
}

