<?php

class BattleResult
{
    private $winningShip;

    private $usedJediPowers;

    private $losingShip;

    /**
     * @return Ship
     */
    public function getWinningShip(): Ship
    {
        return $this->winningShip;
    }

    /**
     * @return boolean
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    /**
     * @return Ship
     */
    public function getLosingShip(): Ship
    {
        return $this->losingShip;
    }

    /**
     * @param Ship $winningShip
     * @param Ship $losingShip
     * @param boolean $usedJediPowers
     */
    public function __construct($usedJediPowers, Ship $losingShip, Ship $winningShip)
    {
        $this->losingShip = $losingShip;
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
    }

}