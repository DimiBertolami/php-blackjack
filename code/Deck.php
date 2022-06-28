<?php
declare(strict_types=1);

include_once 'Suit.php';
include_once 'Card.php';
class Deck
{
    private const CARDS_PER_SUIT = 14;//including the knight card.
    private const KNIGHT_CARD = 12;//In italian & spanish decks there is a knight card, but we don't need it

    /** @var Card[]  */
    private array $cards = [];

    public function __construct() {
        $suits = [
            Suit::SPADE(),
            Suit::HEART(),
            Suit::CLUB(),
            Suit::DIAMOND(),
        ];

        foreach ($suits AS $suit) {
            foreach(range(1, self::CARDS_PER_SUIT) AS $i) {
                if($i === self::KNIGHT_CARD) continue;

                $this->cards[] = new Card($suit, $i);
            }
        }
    }

    public function shuffle() : void {
        shuffle($this->cards);
    }

    /** @return Card[] */
    public function getCards() : array
    {
        return $this->cards;
    }

    public function drawCard() :? Card
    {
        $myCard = array_shift($this->cards);
//        echo 'Var_dump my card: <br>';
//        var_dump($myCard);
//        echo 'print_r my card: <br>';
//        print_r($myCard);
        echo $myCard->getUnicodeCharacter(true).'<br>';
//        echo 'trying to get the Get Unicode Character thingy to work: '.$myCard->getUnicodeCharacter(true).'<br>';
//        return $myCard;
        return $myCard;
    }
}