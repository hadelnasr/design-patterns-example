<?php

namespace Strategy;

interface AlgorithmStrategyInterface
{
    public function doAlgorithm(array $data):?array;
}