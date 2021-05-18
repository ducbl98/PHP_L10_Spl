<?php

use Dancer\DancerQueue;

include_once "vendor/autoload.php";

$dancer_queue= new DancerQueue();
$dancer_queue->push(new \Dancer\Dancer("A",true));
$dancer_queue->push(new \Dancer\Dancer("B",false));
$dancer_queue->push(new \Dancer\Dancer("C",true));
$dancer_queue->push(new \Dancer\Dancer("D",false));
$dancer_queue->push(new \Dancer\Dancer("E",true));
echo $dancer_queue->pop();
echo $dancer_queue->pop();
echo $dancer_queue->pop();
echo $dancer_queue->pop();