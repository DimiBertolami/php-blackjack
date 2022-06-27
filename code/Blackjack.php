<?php

declare(strict_types=1);
require_once 'Deck.php';
require_once 'Player.php';

class Blackjack
{
    private object $player;
    private object $dealer;
    private array $deck;
        public function __construct(string $player, string $dealer, array $deck)
        {
            $this->player = new Player($this->deck);
            $this->dealer = new Player($this->deck);
            $this->deck = new Deck();
            $this->deck->shuffle();
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