<?php

declare(strict_types=1);

namespace AYSorter;

/**
 * Sorter class that sorts the array using the selected strategy.
 * @package AYSorter
 */
final class Sorter
{

    /**
     * @var SorterInterface
     */
    private SorterInterface $sorter;

    /**
     * Constructor.
     *
     * @param SorterInterface $sorter
     */
    public function __construct(SorterInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    /**
     * Sets a sorter instance on the object.
     *
     * @param SorterInterface $sorter
     */
    public function setSorter(SorterInterface $sorter): void
    {
        $this->sorter = $sorter;
    }

    /**
     * Sorts the array using the selected strategy.
     *
     * @param array $data
     *
     * @return array
     */
    public function sort(array $data): array
    {
        return $this->sorter->sort($data);
    }
}
