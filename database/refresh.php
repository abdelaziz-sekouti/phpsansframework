<?php
//detruire la BDD
$path = __DIR__ . '\database.sqlite';
if (file_exists($path)) {
    unlink($path);
}
var_dump($path);
//se connecter a la BDD
$pdo  = new PDO("sqlite:$path");
//gerer les erreurs
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $pdo->prepare('CREATE TABLE posts(

    id INTEGER PRIMARY KEY,
    title VARCHAR(250) NOT NULL,
    body TEXT NOT NULL
)
');

$query->execute();