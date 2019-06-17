<?php

namespace Model;

trait SettableJediFactorTrait
{
    private $jediFactor;

    /**
     * @return integer
     */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    public function setJediFactor($jedifactor)
    {
        $this->jediFactor = $jedifactor;
    }
}