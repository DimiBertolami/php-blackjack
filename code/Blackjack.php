<?php

declare(strict_types=1);
require_once 'Deck.php';
require_once 'Player.php';

class Blackjack
{
    protected Player $player;
    protected Dealer $dealer;
    protected Deck $deck;
        public function __construct()
        {
            $this->deck = new Deck();
            $this->deck->shuffle();
            $this->player = new Player($this->deck);
            $this->dealer = new Dealer($this->deck);
        }

    /**
     * @return object
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
     * @return Deck
     */
    public function getDeck(): Deck
    {
        return $this->deck;
    }

}