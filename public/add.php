<?php
$path = __DIR__ . '/../database/database.sqlite';
var_dump($path);

$pdo  = new PDO("sqlite:$path");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $pdo->prepare(
    'INSERT INTO posts(id,title ,body) VALUES(,?,?)'
);

$query->execute([$_POST['email'], $_POST['myContentEmail']]);