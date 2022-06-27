<?php
declare(strict_types=1);
include_once 'Dealer.php';
class Player
{
    protected array $cards;
    protected bool $lost;

    /**
     * @param array $deck
     * @param bool $lost
     */
    public function __construct(Deck $deck, bool $lost = false)
    {
        $this->cards[] = $deck->drawCard();
        $this->cards[] = $deck->drawCard();
    }
    public function hit()
    {
        $this->cards =  $deck->drawCard();
        if(getScore()>21){
            $this->surrender();
        }
    }
    public function surrender()
    {
        $this->lost = true;
    }
    public function getScore()
    {
        //Loop over cards and add card values together
        $total =0;
        foreach($this->cards as $key => $value){
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
