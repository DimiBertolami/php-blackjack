<?php

class Player
{
    private object $deck;
    private bool $lost;

    /**
     * @param object $deck
     * @param bool $lost
     */
    public function __construct(object $deck, bool $lost = false)
    {
        $this->deck = $deck;
        $this->lost = $lost;
        return $deck->getDeck();
    }
    public function hit()
    {
        return $deck->drawCard();
    }
    public function surrender()
    {

    }
    public function getScore()
    {

    }
    public function hasLost()
    {

    }

}
