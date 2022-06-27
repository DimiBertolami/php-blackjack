<?php
declare(strict_types=1);

require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Player.php';
require 'Blackjack.php';

$deck = new Deck();
$deck->shuffle();
foreach($deck->getCards() AS $card) {
//    for ($i = 0; $i < 2; $i++) {
//        echo $i;
        echo $card->getUnicodeCharacter(true);
        echo '<br>';
//    }
}