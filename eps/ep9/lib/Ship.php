<?php

class Ship
{
    private $name;

    private $weaponPower = 0;

    private $jediFactor = 0;

    private $strength = 0;

    /**
     * @return int
     */
    public function getWeaponPower(): int
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower(int $weaponPower): void
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @return int
     */
    public function getJediFactor(): int
    {
        return $this->jediFactor;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor(int $jediFactor): void
    {
        $this->jediFactor = $jediFactor;
    }

    public function sayHello()
    {
        echo "Hello";
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setStrength($strength)
    {
        if (!is_numeric($strength)) {
            throw new Exception('Invalid strength passed ');
        }
        $this->strength = $strength;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getNameAndSpecs($useShortFormat = false)
    {
        if ($useShortFormat){
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    public function doesGivenShipHaveMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }
}