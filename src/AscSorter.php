<?php

declare(strict_types=1);

namespace AYSorter;

/**
 * Sorter strategy to sort the array in ascending order.
 * @package AYSorter
 */
final class AscSorter implements SorterInterface
{

    /**
     * Sorts the array in ascending order.
     *
     * @param array $data
     *
     * @return array
     */
    public function sort(array $data): array
    {
        \asort($data);

        return $data;
    }
}
