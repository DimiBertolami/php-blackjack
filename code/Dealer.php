<?php
declare(strict_types=1);


class Dealer extends Player
{
    function __construct(Deck $deck){
        parent::__construct($deck);
    }
    function hit($deck){
        parent::hit($deck);
        //Dealer has to draw until score is larger than 14
        if(parent::getScore()<=15){
            $this->hit($deck);
        }
    }
}