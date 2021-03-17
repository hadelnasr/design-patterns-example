<?php

namespace Strategy;

class StrategyA implements AlgorithmStrategyInterface
{
    public function doAlgorithm(array $data): ?array
    {
        sort($data);
        return $data;
    }
}