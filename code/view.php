<?php ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="author" content="Dimi Bertolami">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Blackjack</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <h1>Blackjack</h1>
</header>
<!--Use buttons or links to send to the index.php page what the player's action is. (i.e. hit/stand/surrender)-->
<form  method="post">
    <button type="submit"  value="play"      name="start"     class="btn btn-primary" autofocus><span style="cursor: pointer">PLAY</span></button>
    <button type="submit"  value="hit"       name="hit"       class="btn btn-info" autofocus><span style="cursor: pointer">HIT ME</span></button>
    <button type="submit"  value="stand"     name="stand"     class="btn btn-success" autofocus><span style="cursor: pointer">I STAND</span></button>
    <button type="submit"  value="surrender" name="surrender" class="btn btn-danger" autofocus><span style="cursor: pointer">I SURRENDER</span></button>
</form>