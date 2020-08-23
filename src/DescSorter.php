<?php

declare(strict_types=1);

namespace AYSorter;

/**
 * Class DescSorter
 * @package AYSorter
 */
class DescSorter implements SorterInterface
{

    /**
     * Main method to sort the array in descending order.
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
