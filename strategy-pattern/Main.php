<?php

namespace Strategy;

class Main
{
    private AlgorithmStrategyInterface $strategy;

    public function __construct(AlgorithmStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doSomeLogic(array $data): array
    {
        return $this->strategy->doAlgorithm($data);
    }
}