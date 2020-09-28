<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "Character.php";

// Création des personnages
$batman = new Character("batman", Character::MEDIUM);
$superman = new Character("Superman", Character::NOVICE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $batman->getName() ?> vs. <?= $superman->getName() ?></title>
</head>
<body>
    
    <h1><?= $batman->getName() ?> vs. <?= $superman->getName() ?></h1>

    <h2>Présentation</h2>

    <fieldset>
        <legend>Personnage 1</legend>
        <div>Nom : <?= $batman->getName() ?></div>
        <div>Points de vie : <?= $batman->getHp() ?></div>
        <div>Experience : <?= $batman->getXp() ?></div>
    </fieldset>

    <fieldset>
        <legend>Personnage 2</legend>
        <div>Nom : <?= $superman->getName() ?></div>
        <div>Points de vie : <?= $superman->getHp() ?></div>
        <div>Experience : <?= $superman->getXp() ?></div>
    </fieldset>
</body>
</html>