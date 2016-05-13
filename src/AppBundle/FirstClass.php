<?php

namespace AppBundle;


class FirstClass
{
    public $fcVar;

    /**
     * @return mixed
     */
    public function getFcVar()
    {
        return $this->fcVar;
    }

    /**
     * @param mixed $fcVar
     */
    public function setFcVar($fcVar)
    {
        $this->fcVar = $fcVar;
    }

    public function sayHi()
    {
        return "Hi dude! It's say hi";
    }
}