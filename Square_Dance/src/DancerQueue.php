<?php


namespace Dancer;

include_once "../vendor/autoload.php";
use JetBrains\PhpStorm\Pure;
use SplQueue;

class DancerQueue
{
    public SplQueue $man_queue;
    public SplQueue $woman_queue;

    #[Pure] public function __construct()
    {
        $this->man_queue = new SplQueue;
        $this->woman_queue = new SplQueue;
    }

    public function push($dancer)
    {
        if ($dancer->gender) {
            $this->man_queue->unshift($dancer);
        } else {
            $this->woman_queue->unshift($dancer);
        }
    }

    public function pop(): string
    {
        if ($this->man_queue->isEmpty() || $this->woman_queue->isEmpty()) {
            return "One of queues is empty.<br>";
        }
        $man = $this->man_queue->pop();
        $woman = $this->woman_queue->pop();
        return "Couple : ".$man->name." - ".$woman->name."<br>";
    }
}