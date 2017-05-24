<?php
$chiffre1 = 0;
$chiffre2 = 0;
$addition = '';
$soustraction = '';
$division = '';
$multiplication = '';
$result = 0;
$initialisation = '';
if (isset($_POST['initialisation'])) {
    $initialisation = $_POST['initialisation'];
}
if (isset($_POST['chiffre1'])) {
    $chiffre1 = $_POST['chiffre1'];
}
if (isset($_POST['chiffre2'])) {
    $chiffre2 = $_POST['chiffre2'];
}
if (isset($_POST['addition'])) {
    $addition = $_POST['addition'];
    if ($addition) {
        $result = $chiffre1 + $chiffre2;
    }
}
if (isset($_POST['soustraction'])) {
    $soustraction = $_POST['soustraction'];
    if ($soustraction) {
        $result = $chiffre1 - $chiffre2;
    }
}
if (isset($_POST['division'])) {
    $division = $_POST['division'];
    if ($chiffre2 == 0) {
        $result = 'Ce n\'est imposible de diviser par 0';
    } else {
        $result = $chiffre1 / $chiffre2;
    }
}
if (isset($_POST['multiplication'])) {
    $multiplication = $_POST['multiplication'];
    if ($multiplication) {
        $result = $chiffre1 * $chiffre2;
    }
}
if ($initialisation) {
    $chiffre1 = 0;
    $chiffre2 = 0;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculatrice</title>
    </head>
    <body>
        <h1>Une calculatrice en PHP</h1>
        <form action="index.php" method="post">
            <input type="text"  name="chiffre1" value="<?= $chiffre1 ?>"/>
            <input type="text"  name="chiffre2" value="<?= $chiffre2 ?>"/>
            <input type="submit"  name="addition" value="+"/>
            <input type="submit"  name="soustraction" value="-"/>
            <input type="submit"  name="multiplication" value="*"/>
            <input type="submit"  name="division" value="/"/>
            <input type="submit"  name="initialisation" value="Remise a zéro"/>
        </form>
        <p>Résultat : <?= $result ?></p>
    </body>
</html>