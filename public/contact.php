<?php include '../header.php' ?>
<?php
$path = __DIR__ . '/../database/database.sqlite';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //se connecter a la BDD
    $pdo  = new PDO("sqlite:$path");
    //gerer les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare('INSERT INTO posts(title,body) VALUES (?,?)');
    $query->execute([$_POST['email'], $_POST['myContentEmail']]);
}
?>
<div class="presentation">
    <h2>
        Abdelaziz SEKOUTI
        <hr>
    </h2>
    <div class="info">

        <p>Derb Bouaalame n°185 S.Y.B.A. 40050 Marrakech</p>
        <p>Tel : <span class="aqua"> 0660361784</span></p>
        <p>Courriel :<span class="aqua"> abdelaziz-sekouti@hotmail.com</span> </p>
        <p>Né le 24/09/1967 à Marrakech</p>
        <p>Célibataire / Nationalité : marocain</p>

    </div>
</div>
<form action="#" method="post">
    <fieldset>
        <legend>Email Post : </legend>
        <p> <input type="email" name="email" placeholder="your email here . . ."></p>
        <p> <textarea rows="10" cols="40" name="myContentEmail">Your Content Email Here . . .</textarea></p>
        <p><input type="submit" name="submit" value="Send Email"></p>
    </fieldset>
</form>
<?php include '../footer.php' ?>