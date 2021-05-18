<?php


namespace Dancer;


class Dancer
{
    public string $name;
    public bool $gender;

    /**
     * Dancer constructor.
     * @param string $name
     * @param bool $gender
     */
    public function __construct(string $name, bool $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

}