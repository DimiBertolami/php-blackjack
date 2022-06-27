<?php

declare(strict_types=1);
require_once 'Deck.php';
require_once 'Player.php';

class Blackjack
{
    private Player $player;
    private Dealer $dealer;
    private Deck $deck;
        public function __construct(object $player, object $dealer, array $deck)
        {
            $this->deck = new Deck();
            $this->deck->shuffle();
            $this->player = new Player($this->deck);
            $this->dealer = new Dealer($this->deck);
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