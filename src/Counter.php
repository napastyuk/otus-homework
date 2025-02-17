<?php

namespace src;

class Counter
{
    private int $counterValue;

    public function __construct(int $initValue = 0)
    {   
        $this->counterValue = $initValue;
    }

    public function increment():void
    {
        $this->counterValue++;
    }

    public function getCounterValue()
    {
        return $this->counterValue;
    }

}