<?php
include_once "BalancedBrackets.php";

$exp=new BalancedBrackets("((])");
var_dump($exp->checkValid());