<?php

namespace Strategy;

require __DIR__ . '/../vendor/autoload.php';

$data = [5,1,2,8,7,19];
$sort = new Main(new StrategyA());
echo "<pre>";
var_dump($sort->doSomeLogic($data));

$sort = new Main(new StrategyB());
echo "<pre>";
var_dump($sort->doSomeLogic($data));