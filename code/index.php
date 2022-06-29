<?php
declare(strict_types=1);
include_once 'Blackjack.php';
include_once 'Card.php';
include_once 'Dealer.php';
include_once 'Deck.php';
include_once 'Player.php';
include_once 'Suit.php';

session_start();
if (isset($_SESSION['blackjack'])){
    $game = unserialize($_SESSION['blackjack']);
    $score = $game->getPlayer()->getScore();
} else {
    $game = new Blackjack();
    $score = 0;
//    $_SESSION['blackjack'] = serialize($game);

}
//$_SESSION['blackjack'] = serialize(new Blackjack());

if (isset($_POST['start'])) {
    //Create a new Blackjack object.
//    $newGame = $_SESSION['blackjack'];
    echo "<br>";
    echo "you start with: " . $score . "<br>";
}

if(isset($_POST['hit'])) {
//    $newGame = $game;
    echo "<br>";
    echo "Your score is: ". $game->getPlayer()->hit($game->getDeck());
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
    $game = unserialize($_SESSION['blackjack']);
    echo "<br>Your score is: ". $game->getPlayer()->hit($game->getDeck());
//    $_SESSION['blackjack'] = serialize($game);
}
function stand(): void
{
//    unserialize($_SESSION['blackjack'])->getDealer()->hit(unserialize($_SESSION['blackjack'])->getDeck());
    $game = unserialize($_SESSION['blackjack']);
    echo "Stand!" . $game->getDealer()->hit($game->getDeck());
//    $_SESSION['blackjack'] = serialize($game);
}
function surrender(): void
{
    $game = unserialize($_SESSION['blackjack']);
    echo "you lost!" . $game->getPlayer()->lose();
//    $_SESSION['blackjack'] = serialize($game);
}
$_SESSION['blackjack'] = serialize($game);

require 'view.php';
?>
