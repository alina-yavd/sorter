<?php

declare(strict_types=1);

namespace AYSorter;

/**
 * Class NullSorter
 * @package AYSorter
 */
class NullSorter implements SorterInterface
{

    /**
     * Main method to leave the array unsorted.
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
