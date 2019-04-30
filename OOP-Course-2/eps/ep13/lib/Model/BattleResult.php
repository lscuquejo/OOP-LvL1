<?php

class BattleResult
{
    private $winningShip;

    private $usedJediPowers;

    private $losingShip;

    /**
     * @param Ship $winningShip
     * @param Ship $losingShip
     * @param boolean $usedJediPowers
     */
    public function __construct($usedJediPowers, Ship $winningShip = null, Ship $losingShip = null )
    {
        $this->losingShip = $losingShip;
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip(): Ship
    {
        return $this->winningShip;
    }

    /**
     * @return boolean|
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip(): Ship
    {
        return $this->losingShip;
    }

    public function isThereAWinner()
    {
        return $this->getWinningShip() !== null;
    }

}