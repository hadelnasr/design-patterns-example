<?php

namespace Strategy;

class Main
{
    private AlgorithmStrategyInterface $strategy;

    /**
     * Main constructor.
     * @param AlgorithmStrategyInterface $strategy
     */
    public function __construct(AlgorithmStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doSomeLogic(array $data): array
    {
        return $this->strategy->doAlgorithm($data);
    }
}