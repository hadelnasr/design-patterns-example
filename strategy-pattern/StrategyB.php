<?php

namespace Strategy;

class StrategyB implements AlgorithmStrategyInterface
{
    public function doAlgorithm(array $data): ?array
    {
        rsort($data);
        return $data;
    }
}