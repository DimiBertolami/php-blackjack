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

if(array_key_exists('hit', $_POST)) {
    hit();
}
else if(array_key_exists('stand', $_POST)) {
    stand();
}
else if(array_key_exists('surrender', $_POST)) {
    surrender();
}
function hit(): void
{
    unserialize($_SESSION['blackjack'])->getPlayer()->hit(unserialize($_SESSION['blackjack'])->getDeck());
//    echo "Hit me!";

}
function stand(): void
{
    unserialize($_SESSION['blackjack'])->getDealer()->hit(unserialize($_SESSION['blackjack'])->getDeck());
    echo "Stand!";
}
function surrender(): void
{
    unserialize($_SESSION['blackjack'])->getPlayer()->surrender();
    echo "you lost!";
}
require 'view.php';
?>
