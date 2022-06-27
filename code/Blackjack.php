<?php

declare(strict_types=1);

require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Player.php';
$game = new Blackjack('Dimi', 'Dealer');
class Blackjack
{
    private object $player;
    private object $dealer;
    private array $deck;
        public function __construct(string $player, string $dealer, array $deck)
        {
            $this->player = new Player($deck[]);
            $this->dealer = new Player($deck[]);
            $deck = new Deck();
            $deck->shuffle();
        }

    /**
     * @return string
     */
    public function getPlayer(): object
    {
        return $this->player;
    }

    /**
     * @return string
     */
    public function getDealer(): object
    {
        return $this->dealer;
    }

    /**
     * @return array
     */
    public function getDeck(): array
    {
        return $this->deck;
    }

}