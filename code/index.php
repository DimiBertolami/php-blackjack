<?php
declare(strict_types=1);
include_once 'Blackjack.php';
include_once 'Card.php';
include_once 'Dealer.php';
include_once 'Deck.php';
include_once 'Player.php';
include_once 'Suit.php';

session_start();
$_SESSION['blackjack'] = serialize(new Blackjack());
$score = unserialize($_SESSION['blackjack'])->getPlayer()->getScore();
$unserialize = unserialize($_SESSION['blackjack']);

if (isset($_POST['start'])) {
    //Create a new Blackjack object.
    $newGame = $_SESSION['blackjack'];
    echo "you start with: " . $score;
}

if(isset($_POST['hit'])) {
    $newGame = $_SESSION['blackjack'];
    echo "Your score is: ". unserialize($newGame)->getPlayer()->hit(unserialize($_SESSION['blackjack'])->getDeck());
//    hit();
}
else if(isset($_POST['stand'])) {
    stand();
}
else if(isset($_POST['surrender'])) {
    surrender();
}
function hit(): void
{
    echo "Your score is: ". unserialize($_SESSION['blackjack'])->getPlayer()->hit(unserialize($_SESSION['blackjack'])->getDeck());
}
function stand(): void
{
//    unserialize($_SESSION['blackjack'])->getDealer()->hit(unserialize($_SESSION['blackjack'])->getDeck());
    echo "Stand!" . unserialize($_SESSION['blackjack'])->getDealer()->hit(unserialize($_SESSION['blackjack'])->getDeck());
}
function surrender(): void
{

    echo "you lost!" . unserialize($_SESSION['blackjack'])->getPlayer()->surrender();
}
require 'view.php';
?>
