<?php


use JetBrains\PhpStorm\NoReturn;
use JetBrains\PhpStorm\Pure;

class BalancedBrackets
{
    public SplStack $brackets;
    public string $expression;


    #[Pure] public function __construct(string $expression)
    {
        $this->brackets = new SplStack();
        $this->expression = $expression;
    }

    function checkValid(): bool
    {
        $exp = $this->expression;
        $len = strlen($this->expression);
        for ($i = 0; $i < $len; $i++) {
            switch ($exp[$i]) {
                case '(':
                    $this->brackets->unshift(0);
                    break;
                case ')':
                    if ($this->brackets->shift() !== 0)
                        return false;
                    break;
                case '[':
                    $this->brackets->unshift(1);
                    break;
                case ']':
                    if ($this->brackets->shift() !== 1)
                        return false;
                    break;
                case '{':
                    $this->brackets->unshift(2);
                    break;
                case '}':
                    if ($this->brackets->shift() !== 2)
                        return false;
                    break;
                default:
                    break;
            }
        }
        return ($this->brackets->isEmpty());
    }

}