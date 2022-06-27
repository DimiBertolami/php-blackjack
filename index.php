<?php
declare(strict_types=1);
//SESSION START goes here!
if(!isset($_SESSION)){
    session_start();
}
include_once 'code/Blackjack.php';

if(array_key_exists('hit', $_POST)) {
    hit();
}
else if(array_key_exists('stand', $_POST)) {
    stand();
}
else if(array_key_exists('surrender', $_POST)) {
    surrender();
}
function hit() {
    echo "Hit me!";
}
function stand() {
    echo "in the words of Roberto Durán: NO MAS!";
}
function surrender() {
    echo "you lost!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OOP-BlackJack in PHP">
    <title>BlackJack in PHP</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Main Styles CSS File-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <header class="mb-3">
        <h1 class="text-center mt-3">OOP-BlackJack</h1>
    </header>

<form method="post">
    <input type="submit" name="hit"
           class="btn-primary" value="hit" />

    <input type="submit" name="stand"
           class="btn-secondary" value="stand" />

    <input type="submit" name="surrender"
           class="btn-danger" value="surrender" />
</form>
    <!-- Close Bootstrap container-->
</div>
<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
