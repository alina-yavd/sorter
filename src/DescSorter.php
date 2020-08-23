<?php

declare(strict_types=1);

namespace AYSorter;

/**
 * Sorter strategy to sort the array in descending order.
 * @package AYSorter
 */
final class DescSorter implements SorterInterface
{

    /**
     * Sorts the array in descending order.
     *
     * @param array $data
     *
     * @return array
     */
    public function sort(array $data): array
    {
        \arsort($data);

        return $data;
    }
}
