<?php
declare(strict_types=1);
include_once 'Dealer.php';
include_once 'Deck.php';
class Player
{
    protected array $cards;
    protected bool $lost;

    /**
     * @param array $deck
     * @param bool $lost
     */
    public function __construct(Deck $deck)
    {
        $this->cards[] = $deck->drawCard();
        $this->cards[] = $deck->drawCard();
        $lost = false;
    }
    public function hit(Deck $deck)
    {
        $this->cards[] = $deck->drawCard();
        if($this->getScore()>21){
            $this->surrender();
        }
        if($this->lost=true){
            echo $this->getScore();
        }

    }
    public function surrender()
    {
        $this->lost = true;
    }
    public function getScore($total=0):int
    {
        //Loop over cards and add card values together
//        $total =0;
        foreach($this->cards as $key => $value){
//            var_dump($value);
            $total=$total + $value->getValue();
        }
        return $total;
    }
    public function hasLost()
    {
        return $this->lost;
    }
    function getCards(){
        return $this->cards;
    }
}
