<?php

declare(strict_types=1);

namespace AYSorter;

/**
 * Sorter strategy to leave the array unsorted.
 * @package AYSorter
 */
final class NullSorter implements SorterInterface
{

    /**
     * Leaves the array unsorted.
     *
     * @param array $data
     *
     * @return array
     */
    public function sort(array $data): array
    {
        return $data;
    }
}
